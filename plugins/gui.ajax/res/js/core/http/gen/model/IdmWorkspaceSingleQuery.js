/**
 * Pydio Cell Rest API
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 */


import ApiClient from '../ApiClient';
import IdmWorkspaceScope from './IdmWorkspaceScope';





/**
* The IdmWorkspaceSingleQuery model module.
* @module model/IdmWorkspaceSingleQuery
* @version 1.0
*/
export default class IdmWorkspaceSingleQuery {
    /**
    * Constructs a new <code>IdmWorkspaceSingleQuery</code>.
    * @alias module:model/IdmWorkspaceSingleQuery
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>IdmWorkspaceSingleQuery</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/IdmWorkspaceSingleQuery} obj Optional instance to populate.
    * @return {module:model/IdmWorkspaceSingleQuery} The populated <code>IdmWorkspaceSingleQuery</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new IdmWorkspaceSingleQuery();

            
            
            

            if (data.hasOwnProperty('uuid')) {
                obj['uuid'] = ApiClient.convertToType(data['uuid'], 'String');
            }
            if (data.hasOwnProperty('label')) {
                obj['label'] = ApiClient.convertToType(data['label'], 'String');
            }
            if (data.hasOwnProperty('description')) {
                obj['description'] = ApiClient.convertToType(data['description'], 'String');
            }
            if (data.hasOwnProperty('slug')) {
                obj['slug'] = ApiClient.convertToType(data['slug'], 'String');
            }
            if (data.hasOwnProperty('scope')) {
                obj['scope'] = IdmWorkspaceScope.constructFromObject(data['scope']);
            }
            if (data.hasOwnProperty('not')) {
                obj['not'] = ApiClient.convertToType(data['not'], 'Boolean');
            }
        }
        return obj;
    }

    /**
    * @member {String} uuid
    */
    uuid = undefined;
    /**
    * @member {String} label
    */
    label = undefined;
    /**
    * @member {String} description
    */
    description = undefined;
    /**
    * @member {String} slug
    */
    slug = undefined;
    /**
    * @member {module:model/IdmWorkspaceScope} scope
    */
    scope = undefined;
    /**
    * @member {Boolean} not
    */
    not = undefined;








}


