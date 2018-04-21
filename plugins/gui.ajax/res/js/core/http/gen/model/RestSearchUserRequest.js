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
import IdmUserSingleQuery from './IdmUserSingleQuery';
import RestResourcePolicyQuery from './RestResourcePolicyQuery';
import ServiceOperationType from './ServiceOperationType';





/**
* The RestSearchUserRequest model module.
* @module model/RestSearchUserRequest
* @version 1.0
*/
export default class RestSearchUserRequest {
    /**
    * Constructs a new <code>RestSearchUserRequest</code>.
    * @alias module:model/RestSearchUserRequest
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestSearchUserRequest</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestSearchUserRequest} obj Optional instance to populate.
    * @return {module:model/RestSearchUserRequest} The populated <code>RestSearchUserRequest</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestSearchUserRequest();

            
            
            

            if (data.hasOwnProperty('Queries')) {
                obj['Queries'] = ApiClient.convertToType(data['Queries'], [IdmUserSingleQuery]);
            }
            if (data.hasOwnProperty('ResourcePolicyQuery')) {
                obj['ResourcePolicyQuery'] = RestResourcePolicyQuery.constructFromObject(data['ResourcePolicyQuery']);
            }
            if (data.hasOwnProperty('Offset')) {
                obj['Offset'] = ApiClient.convertToType(data['Offset'], 'String');
            }
            if (data.hasOwnProperty('Limit')) {
                obj['Limit'] = ApiClient.convertToType(data['Limit'], 'String');
            }
            if (data.hasOwnProperty('GroupBy')) {
                obj['GroupBy'] = ApiClient.convertToType(data['GroupBy'], 'Number');
            }
            if (data.hasOwnProperty('CountOnly')) {
                obj['CountOnly'] = ApiClient.convertToType(data['CountOnly'], 'Boolean');
            }
            if (data.hasOwnProperty('Operation')) {
                obj['Operation'] = ServiceOperationType.constructFromObject(data['Operation']);
            }
        }
        return obj;
    }

    /**
    * @member {Array.<module:model/IdmUserSingleQuery>} Queries
    */
    Queries = undefined;
    /**
    * @member {module:model/RestResourcePolicyQuery} ResourcePolicyQuery
    */
    ResourcePolicyQuery = undefined;
    /**
    * @member {String} Offset
    */
    Offset = undefined;
    /**
    * @member {String} Limit
    */
    Limit = undefined;
    /**
    * @member {Number} GroupBy
    */
    GroupBy = undefined;
    /**
    * @member {Boolean} CountOnly
    */
    CountOnly = undefined;
    /**
    * @member {module:model/ServiceOperationType} Operation
    */
    Operation = undefined;








}


