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
import ActivityOwnerType from './ActivityOwnerType';





/**
* The ActivitySearchSubscriptionsRequest model module.
* @module model/ActivitySearchSubscriptionsRequest
* @version 1.0
*/
export default class ActivitySearchSubscriptionsRequest {
    /**
    * Constructs a new <code>ActivitySearchSubscriptionsRequest</code>.
    * @alias module:model/ActivitySearchSubscriptionsRequest
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>ActivitySearchSubscriptionsRequest</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/ActivitySearchSubscriptionsRequest} obj Optional instance to populate.
    * @return {module:model/ActivitySearchSubscriptionsRequest} The populated <code>ActivitySearchSubscriptionsRequest</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new ActivitySearchSubscriptionsRequest();

            
            
            

            if (data.hasOwnProperty('UserIds')) {
                obj['UserIds'] = ApiClient.convertToType(data['UserIds'], ['String']);
            }
            if (data.hasOwnProperty('ObjectTypes')) {
                obj['ObjectTypes'] = ApiClient.convertToType(data['ObjectTypes'], [ActivityOwnerType]);
            }
            if (data.hasOwnProperty('ObjectIds')) {
                obj['ObjectIds'] = ApiClient.convertToType(data['ObjectIds'], ['String']);
            }
        }
        return obj;
    }

    /**
    * @member {Array.<String>} UserIds
    */
    UserIds = undefined;
    /**
    * @member {Array.<module:model/ActivityOwnerType>} ObjectTypes
    */
    ObjectTypes = undefined;
    /**
    * @member {Array.<String>} ObjectIds
    */
    ObjectIds = undefined;








}


