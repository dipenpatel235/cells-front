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
* The EncryptionAdminExportKeyRequest model module.
* @module model/EncryptionAdminExportKeyRequest
* @version 1.0
*/
export default class EncryptionAdminExportKeyRequest {
    /**
    * Constructs a new <code>EncryptionAdminExportKeyRequest</code>.
    * @alias module:model/EncryptionAdminExportKeyRequest
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>EncryptionAdminExportKeyRequest</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/EncryptionAdminExportKeyRequest} obj Optional instance to populate.
    * @return {module:model/EncryptionAdminExportKeyRequest} The populated <code>EncryptionAdminExportKeyRequest</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new EncryptionAdminExportKeyRequest();

            
            
            

            if (data.hasOwnProperty('KeyID')) {
                obj['KeyID'] = ApiClient.convertToType(data['KeyID'], 'String');
            }
            if (data.hasOwnProperty('StrPassword')) {
                obj['StrPassword'] = ApiClient.convertToType(data['StrPassword'], 'String');
            }
        }
        return obj;
    }

    /**
    * @member {String} KeyID
    */
    KeyID = undefined;
    /**
    * @member {String} StrPassword
    */
    StrPassword = undefined;








}


