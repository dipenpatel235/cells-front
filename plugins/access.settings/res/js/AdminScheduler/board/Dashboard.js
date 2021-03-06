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
import {IconMenu, Divider, IconButton, MenuItem, FlatButton, Paper} from 'material-ui'
import Pydio from 'pydio'
const {JobsStore, moment} = Pydio.requireLib("boot");
const {MaterialTable} = Pydio.requireLib('components');
import JobBoard from './JobBoard'
import debounce from 'lodash.debounce'

const Dashboard = React.createClass({

    mixins:[AdminComponents.MessagesConsumerMixin],

    eventsNames: {
        '0':'Create Node',
        '1':'Read Node',
        '2':'Update Path',
        '3':'Update Content',
        '4':'Update Metadata',
        '5':'Delete Node',
    },


    getInitialState(){
        return {
            Owner: null,
            Filter: null,
        }
    },

    load(hideLoading = false){
        const {Owner, Filter} = this.state;
        if (!hideLoading) {
            this.setState({loading: true});
        }
        JobsStore.getInstance().getAdminJobs(Owner, Filter).then(jobs => {
            this.setState({result: jobs, loading: false});
        }).catch(reason => {
            this.setState({error: reason.message, loading: false});
        })
    },

    componentDidMount: function(){
        this.load();
        this._loadDebounced = debounce(()=>{this.load(true)}, 500);
        JobsStore.getInstance().observe("tasks_updated", this._loadDebounced);
    },

    componentWillUnmount: function(){
        JobsStore.getInstance().stopObserving("tasks_updated");
    },

    selectRows: function(rows){
        if(rows.length){
            this.setState({selectJob: rows[0].ID});
        }
    },

    showTaskCreator: function(){

    },

    extractRowsInfo: function(jobs){
        let system = [];
        let other = [];
        if (jobs === undefined) {
            return {system, other};
        }
        jobs.map(job => {

            let data = {...job};
            if (job.Tasks !== undefined) {
                // Sort task by StartTime
                job.Tasks.sort((a,b) => {
                    if(!a.StartTime || !b.StartTime || a.StartTime === b.StartTime) {
                        return a.ID > b.ID ? 1 : -1;
                    }
                    return a.StartTime > b.StartTime ? -1 : 1;
                });
                const t = job.Tasks[0];
                data.TaskStartTime = moment(new Date(parseInt(t.StartTime) * 1000)).fromNow();
                if(t.EndTime){
                    data.TaskEndTime = moment(new Date(parseInt(t.EndTime) * 1000)).fromNow();
                } else {
                    data.TaskEndTime = '-';
                }
                if(t.Status === 'Finished') {
                    data.TaskStatus = t.Status;
                } else if (t.Status === 'Running') {
                    // There might be many tasks running
                    const count = job.Tasks.filter(ft => ft.Status === 'Running').length;
                    data.TaskStatus = <span style={{fontWeight: 500, color: '#388e3c'}}>{count} tasks running</span>;
                } else if(t.Status === 'Error') {
                    data.TaskStatus = <span style={{fontWeight: 500, color: '#E53935'}}>{t.StatusMessage}</span>;
                } else if(t.Status === 'Queued') {
                    data.TaskStatus = <span style={{fontWeight: 500, color: '#fb8c00'}}>{t.StatusMessage}</span>;
                } else {
                    data.TaskStatus = <span>{t.Status} ({t.StatusMessage})</span>;
                }
            } else {
                data.TaskStatus = "-";
                data.TaskEndTime = "-";
                data.TaskStartTime = "-";
            }

            if(job.Schedule) {
                data.Trigger = 'Periodic Schedule';//job.Schedule.Iso8601Schedule;
                data.TriggerValue = 1;
            } else if(job.EventNames) {
                data.TriggerValue = 2;
                data.Trigger = 'Events: ' + job.EventNames.map(e => {
                    if(e.indexOf('NODE_CHANGE:') === 0){
                        return this.eventsNames[e.replace('NODE_CHANGE:', '')];
                    }else {
                        return e;
                    }
                }).join(', ');
            } else if(job.AutoStart) {
                data.Trigger = 'Manual Trigger';
                data.TriggerValue = 0;
            } else {
                data.Trigger = '-';
                data.TriggerValue = 3;
            }
            if (job.Inactive) {
                data.Label = <span style={{color: 'rgba(0,0,0,0.43)'}}>[disabled] {data.Label}</span>;
            }

            if (job.Owner === 'pydio.system.user') {
                system.push(data);
            } else {
                other.push(data);
            }

        });

        return {system, other};
    },

    dotsButton: function(job){
        return (
            <IconMenu
                iconButtonElement={<IconButton iconClassName="mdi mdi-dots-vertical"/>}
                anchorOrigin={{horizontal: 'right', vertical: 'top'}}
                targetOrigin={{horizontal: 'right', vertical: 'top'}}
            >
                <MenuItem primaryText={"Runs History"}/>
                {(job.Schedule || job.AutoStart) &&  <MenuItem primaryText={"Run Now"}/>}
                <Divider/>
                <MenuItem primaryText={"Edit Job"}/>
            </IconMenu>
        );
    },

    render: function(){

        const keys = [
            {
                name:'Label',
                label:this.context.getMessage('12', 'action.scheduler'),
                style:{width:'35%', fontSize: 15},
                headerStyle:{width:'35%'},
            },
            {
                name:'Owner',
                label:"Owner",
                style:{width:'15%'},
                headerStyle:{width:'15%'},
            },
            {
                name:'Trigger',
                label:"Trigger",
                style:{width:'15%'},
                headerStyle:{width:'15%'},
            },
            {
                name:'TaskEndTime',
                label:this.context.getMessage('14', 'action.scheduler'),
                style:{width:'15%'},
                headerStyle:{width:'15%'},
            },
            {
                name:'TaskStatus',
                label:this.context.getMessage('13', 'action.scheduler'),
            },
            {
                name:'More',
                label:'',
                style:{width: 100}, headerStyle:{width: 100},
                renderCell:(row) => {return <IconButton iconClassName="mdi mdi-chevron-right" onTouchTap={()=>{this.setState({selectJob:row.ID})}}/>},
            },
        ];

        const {result, loading, selectJob} = this.state;
        if(selectJob && result && result.Jobs){
            const found = result.Jobs.filter((j) => j.ID === selectJob);
            if(found.length){
                return <JobBoard job={found[0]} onRequestClose={()=>this.setState({selectJob: null})}/>;
            }
        }
        let {system, other} = this.extractRowsInfo(result ? result.Jobs : []);
        system.sort((a,b) => {
            return a.TriggerValue == b.TriggerValue ? 0 : (a.TriggerValue > b.TriggerValue ? 1 : -1 );
        });

        const headerButtons = [];

        return (
            <div style={{height: '100%', display:'flex', flexDirection:'column', position:'relative'}}>
                <AdminComponents.Header
                    title={this.context.getMessage('18', 'action.scheduler')}
                    icon="mdi mdi-timetable"
                    actions={headerButtons}
                    reloadAction={this.load.bind(this)}
                    loading={loading}
                />
                <div style={{flex:1, overflowY: 'auto'}}>
                    <AdminComponents.SubHeader
                        title={"System Jobs"}
                        legend={"These jobs are registered by default inside the application. They are generally in charge of extracting information from node in background, or doing some cleaning operations."}
                    />
                    <Paper style={{margin: 20}}>
                        <MaterialTable
                            data={system}
                            columns={keys}
                            onSelectRows={(rows)=>{this.selectRows(rows)}}
                            showCheckboxes={false}
                            emptyStateString={loading ? 'Loading jobs...' : 'No jobs found'}
                        />
                    </Paper>
                    <AdminComponents.SubHeader
                        title={"Users Jobs"}
                        legend={"These jobs are dynamically created and trigged by user actions"}
                    />
                    <Paper style={{margin: 20}}>
                        <MaterialTable
                            data={other}
                            columns={keys}
                            onSelectRows={(rows)=>{this.selectRows(rows)}}
                            showCheckboxes={false}
                            emptyStateString="No Users Jobs"
                        />
                    </Paper>
                </div>
            </div>
        );

    }

});

export {Dashboard as default};