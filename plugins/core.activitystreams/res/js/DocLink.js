/*
 * Copyright 2007-2017 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
 * This file is part of Pydio.
 *
 * Pydio is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pydio is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <https://pydio.com>.
 */

import React from 'react'
const {Popover, Paper, IconButton, FlatButton, Divider} = require('material-ui');
const Pydio = require('pydio');
const debounce = require('lodash.debounce');
const RemoteNodeProvider = require('pydio/model/remote-node-provider');
const {PydioContextConsumer} = Pydio.requireLib('boot');
const {FilePreview} = Pydio.requireLib('workspaces');

function nodesFromObject(object){
    let nodes = [];
    if (!object.partOf || !object.partOf.items || !object.partOf.items.length){
        return nodes;
    }
    for(let i = 0; i < object.partOf.items.length; i++ ){
        let ws = object.partOf.items[i];
        // Remove slug part
        let paths = ws.rel.split('/');
        paths.shift();
        let relPath = paths.join('/');
        const node = new AjxpNode(relPath, (object.type === 'Document'));
        node.getMetadata().set('repository_id', ws.id);
        node.getMetadata().set('repository_label', ws.name);
        nodes.push(node);
    }
    return nodes;
}

class DocPreview extends React.Component {

    constructor(props){
        super(props);
        const nodes = nodesFromObject(this.props.activity.object);
        if (nodes.length && !nodes[0].isLeaf()) {
            this.state = {
                previewLoaded: true,
                previewFailed: false,
                nodes: nodes,
            };
        } else {
            this.state = {
                previewLoaded: false,
                previewFailed: false,
                nodes: nodes,
            };
        }
    }

    render(){
        const {pydio} = this.props;
        const {previewLoaded, nodes, previewFailed} = this.state;
        const previewNode = nodes.length ? nodes[0] : null;
        let fPreview;
        let fPreviewLoading;
        const fPreviewStyle = {
            height: 200, display: 'flex', alignItems: 'center', justifyContent: 'center', fontSize: 70
        };
        if (previewNode) {
            if (previewLoaded && !previewFailed) {
                fPreview = (
                    <FilePreview style={fPreviewStyle}
                                 node={previewNode} pydio={pydio} loadThumbnail={true}
                                 richPreview={true} processing={!previewLoaded}/>
                );
            } else if (previewLoaded && previewFailed) {

                fPreview = (
                    <div style={{...fPreviewStyle, flexDirection:'column'}} className="mimefont-container">
                        <div className="mimefont mdi mdi-delete"/>
                        <span style={{fontSize: 13}}>File deleted</span>
                    </div>
                );


            } else {
                const nodeRepoId = previewNode.getMetadata().get('repository_id');
                const nodeRepoLabel = previewNode.getMetadata().get('repository_label');
                const provider = new RemoteNodeProvider();
                previewNode.observeOnce('error', () => {
                    this.setState({previewLoaded:true, previewFailed: true});
                });
                provider.loadLeafNodeSync(previewNode, (loadedNode) => {
                    loadedNode.getMetadata().set('repository_id', nodeRepoId);
                    loadedNode.getMetadata().set('repository_label', nodeRepoLabel);
                    nodes[0] = loadedNode;
                    this.setState({previewLoaded: true, nodes: nodes});
                }, true, {tmp_repository_id: nodeRepoId});

                fPreviewLoading = (<FilePreview style={fPreviewStyle}
                                                node={previewNode} pydio={pydio} loadThumbnail={false}
                                                richPreview={false} processing={true}/>
                )
            }
        }

        let buttons = [];
        let currentRepoButton;
        const currentRepository = pydio.user.getActiveRepository();
        for (let i= 0; i<nodes.length; i++) {
            const node = nodes[i];
            const button = (
                <div style={{display:'flex', alignItems:'center', paddingLeft: 10}}>
                    <div style={{flex:1, fontSize: 13, fontWeight: 500, color: 'rgba(0,0,0,0.33)', fontStyle:'italic'}}>In '{node.getMetadata().get('repository_label')}'</div>
                    <IconButton iconClassName={"mdi mdi-open-in-new"} tooltip="Open" tooltipPosition={"top-center"} onClick={()=>{pydio.goTo(node)}}/>
                </div>
            );
            if(node.getMetadata().get('repository_id') == currentRepository) {
                currentRepoButton = (
                    <div style={{display:'flex', alignItems:'center'}}>
                        <span style={{flex:1}}></span> <FlatButton label={"Open"} iconClassName={"mdi mdi-open-in-new"} tooltip="Open" tooltipPosition={"top-right"} onClick={()=>{pydio.goTo(node)}}/>
                    </div>
                );
                break;
            }
            buttons.push(button);
            if (i < nodes.length - 1 ) {
                buttons.push(<Divider/>);
            }
        }
        if (currentRepoButton){
            buttons = [currentRepoButton];
        }

        return (
            <div>
                {fPreviewLoading}
                {fPreview}
                {!previewFailed && <div style={{padding: 6}}>{buttons}</div>}
            </div>
        );
    }

}

class DocLink extends React.Component{

    constructor(props){
        super(props);
        this.state = {
            showPopover: false,
            popoverAnchor: null,
        };
    }

    render(){

        const {pydio, activity, children} = this.props;

        let pathParts = activity.object.name.replace('doc://', '').split('/');
        pathParts.shift();
        const path = '/' + pathParts.join('/');
        const onClick = () => {pydio.goTo(path)};
        const title = "Open " + path;


        const onMouseOut = debounce(() => {
            this.setState({showPopover: false});
        }, 350);
        const onMouseOver = (e) => {
            this.setState({showPopover: true, popoverAnchor: e.currentTarget});
            onMouseOut.cancel();
        };
        const onMouseOverInner = (e) =>{
            this.setState({showPopover: true});
            onMouseOut.cancel();
        };

        const popover = (
            <Popover
                open={this.state.showPopover}
                anchorEl={this.state.popoverAnchor}
                onRequestClose={(reason) => {
                    if(reason !== 'clickAway'){
                        this.setState({showPopover: false})
                    }
                }}
                anchorOrigin={{horizontal:"left",vertical:"bottom"}}
                targetOrigin={{horizontal:"left",vertical:"top"}}
                useLayerForClickAway={false}
            >
                <Paper zDepth={2} style={{width: 200, height: 'auto', overflowY: 'auto'}} onMouseOver={onMouseOverInner}  onMouseOut={onMouseOut}>
                    <DocPreview pydio={pydio} activity={activity}/>
                </Paper>
            </Popover>
        );



        return (
            <span>
                <a title={title} style={{cursor: 'pointer', color: 'rgb(66, 140, 179)'}}
                   onMouseOver={onMouseOver}
                   onMouseOut={onMouseOut}
                   onClick={onClick}>{children}</a>
                {popover}
            </span>
        );

    }

}

DocLink.PropTypes = {
    activity: React.PropTypes.object,
    pydio: React.PropTypes.instanceOf(Pydio),
};

DocLink = PydioContextConsumer(DocLink);
export {DocLink as default};

