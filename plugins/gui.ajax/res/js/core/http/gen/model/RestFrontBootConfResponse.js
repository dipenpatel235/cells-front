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





/**
* The RestFrontBootConfResponse model module.
* @module model/RestFrontBootConfResponse
* @version 1.0
*/
export default class RestFrontBootConfResponse {
    /**
    * Constructs a new <code>RestFrontBootConfResponse</code>.
    * @alias module:model/RestFrontBootConfResponse
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestFrontBootConfResponse</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestFrontBootConfResponse} obj Optional instance to populate.
    * @return {module:model/RestFrontBootConfResponse} The populated <code>RestFrontBootConfResponse</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestFrontBootConfResponse();

            
            
            

            if (data.hasOwnProperty('JsonData')) {
                obj['JsonData'] = ApiClient.convertToType(data['JsonData'], {'String': 'String'});
            }
        }
        return obj;
    }

    /**
    * @member {Object.<String, String>} JsonData
    */
    JsonData = undefined;








}


