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
* The RestShareLinkTargetUser model module.
* @module model/RestShareLinkTargetUser
* @version 1.0
*/
export default class RestShareLinkTargetUser {
    /**
    * Constructs a new <code>RestShareLinkTargetUser</code>.
    * @alias module:model/RestShareLinkTargetUser
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestShareLinkTargetUser</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestShareLinkTargetUser} obj Optional instance to populate.
    * @return {module:model/RestShareLinkTargetUser} The populated <code>RestShareLinkTargetUser</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestShareLinkTargetUser();

            
            
            

            if (data.hasOwnProperty('Display')) {
                obj['Display'] = ApiClient.convertToType(data['Display'], 'String');
            }
            if (data.hasOwnProperty('DownloadCount')) {
                obj['DownloadCount'] = ApiClient.convertToType(data['DownloadCount'], 'Number');
            }
        }
        return obj;
    }

    /**
    * @member {String} Display
    */
    Display = undefined;
    /**
    * @member {Number} DownloadCount
    */
    DownloadCount = undefined;








}


