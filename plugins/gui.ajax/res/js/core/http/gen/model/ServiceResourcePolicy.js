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
import ServiceResourcePolicyAction from './ServiceResourcePolicyAction';
import ServiceResourcePolicyPolicyEffect from './ServiceResourcePolicyPolicyEffect';





/**
* The ServiceResourcePolicy model module.
* @module model/ServiceResourcePolicy
* @version 1.0
*/
export default class ServiceResourcePolicy {
    /**
    * Constructs a new <code>ServiceResourcePolicy</code>.
    * @alias module:model/ServiceResourcePolicy
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>ServiceResourcePolicy</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/ServiceResourcePolicy} obj Optional instance to populate.
    * @return {module:model/ServiceResourcePolicy} The populated <code>ServiceResourcePolicy</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new ServiceResourcePolicy();

            
            
            

            if (data.hasOwnProperty('id')) {
                obj['id'] = ApiClient.convertToType(data['id'], 'String');
            }
            if (data.hasOwnProperty('Resource')) {
                obj['Resource'] = ApiClient.convertToType(data['Resource'], 'String');
            }
            if (data.hasOwnProperty('Action')) {
                obj['Action'] = ServiceResourcePolicyAction.constructFromObject(data['Action']);
            }
            if (data.hasOwnProperty('Subject')) {
                obj['Subject'] = ApiClient.convertToType(data['Subject'], 'String');
            }
            if (data.hasOwnProperty('Effect')) {
                obj['Effect'] = ServiceResourcePolicyPolicyEffect.constructFromObject(data['Effect']);
            }
            if (data.hasOwnProperty('JsonConditions')) {
                obj['JsonConditions'] = ApiClient.convertToType(data['JsonConditions'], 'String');
            }
        }
        return obj;
    }

    /**
    * @member {String} id
    */
    id = undefined;
    /**
    * @member {String} Resource
    */
    Resource = undefined;
    /**
    * @member {module:model/ServiceResourcePolicyAction} Action
    */
    Action = undefined;
    /**
    * @member {String} Subject
    */
    Subject = undefined;
    /**
    * @member {module:model/ServiceResourcePolicyPolicyEffect} Effect
    */
    Effect = undefined;
    /**
    * @member {String} JsonConditions
    */
    JsonConditions = undefined;








}


