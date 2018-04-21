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
import TreeNode from './TreeNode';





/**
* The RestBulkMetaResponse model module.
* @module model/RestBulkMetaResponse
* @version 1.0
*/
export default class RestBulkMetaResponse {
    /**
    * Constructs a new <code>RestBulkMetaResponse</code>.
    * @alias module:model/RestBulkMetaResponse
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestBulkMetaResponse</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestBulkMetaResponse} obj Optional instance to populate.
    * @return {module:model/RestBulkMetaResponse} The populated <code>RestBulkMetaResponse</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestBulkMetaResponse();

            
            
            

            if (data.hasOwnProperty('Nodes')) {
                obj['Nodes'] = ApiClient.convertToType(data['Nodes'], [TreeNode]);
            }
        }
        return obj;
    }

    /**
    * @member {Array.<module:model/TreeNode>} Nodes
    */
    Nodes = undefined;








}


