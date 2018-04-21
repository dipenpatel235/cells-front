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
* The RestExternalDirectoryResponse model module.
* @module model/RestExternalDirectoryResponse
* @version 1.0
*/
export default class RestExternalDirectoryResponse {
    /**
    * Constructs a new <code>RestExternalDirectoryResponse</code>.
    * @alias module:model/RestExternalDirectoryResponse
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestExternalDirectoryResponse</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestExternalDirectoryResponse} obj Optional instance to populate.
    * @return {module:model/RestExternalDirectoryResponse} The populated <code>RestExternalDirectoryResponse</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestExternalDirectoryResponse();

            
            
            

            if (data.hasOwnProperty('Success')) {
                obj['Success'] = ApiClient.convertToType(data['Success'], 'Boolean');
            }
        }
        return obj;
    }

    /**
    * @member {Boolean} Success
    */
    Success = undefined;








}


