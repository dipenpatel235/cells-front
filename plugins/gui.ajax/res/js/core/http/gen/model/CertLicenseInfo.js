/**
 * Pydio Cells Rest API
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
* The CertLicenseInfo model module.
* @module model/CertLicenseInfo
* @version 1.0
*/
export default class CertLicenseInfo {
    /**
    * Constructs a new <code>CertLicenseInfo</code>.
    * @alias module:model/CertLicenseInfo
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>CertLicenseInfo</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/CertLicenseInfo} obj Optional instance to populate.
    * @return {module:model/CertLicenseInfo} The populated <code>CertLicenseInfo</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new CertLicenseInfo();

            
            
            

            if (data.hasOwnProperty('Id')) {
                obj['Id'] = ApiClient.convertToType(data['Id'], 'String');
            }
            if (data.hasOwnProperty('AccountName')) {
                obj['AccountName'] = ApiClient.convertToType(data['AccountName'], 'String');
            }
            if (data.hasOwnProperty('ServerDomain')) {
                obj['ServerDomain'] = ApiClient.convertToType(data['ServerDomain'], 'String');
            }
            if (data.hasOwnProperty('IssueTime')) {
                obj['IssueTime'] = ApiClient.convertToType(data['IssueTime'], 'Number');
            }
            if (data.hasOwnProperty('ExpireTime')) {
                obj['ExpireTime'] = ApiClient.convertToType(data['ExpireTime'], 'Number');
            }
            if (data.hasOwnProperty('MaxUsers')) {
                obj['MaxUsers'] = ApiClient.convertToType(data['MaxUsers'], 'String');
            }
            if (data.hasOwnProperty('MaxPeers')) {
                obj['MaxPeers'] = ApiClient.convertToType(data['MaxPeers'], 'String');
            }
            if (data.hasOwnProperty('Features')) {
                obj['Features'] = ApiClient.convertToType(data['Features'], {'String': 'String'});
            }
        }
        return obj;
    }

    /**
    * @member {String} Id
    */
    Id = undefined;
    /**
    * @member {String} AccountName
    */
    AccountName = undefined;
    /**
    * @member {String} ServerDomain
    */
    ServerDomain = undefined;
    /**
    * @member {Number} IssueTime
    */
    IssueTime = undefined;
    /**
    * @member {Number} ExpireTime
    */
    ExpireTime = undefined;
    /**
    * @member {String} MaxUsers
    */
    MaxUsers = undefined;
    /**
    * @member {String} MaxPeers
    */
    MaxPeers = undefined;
    /**
    * @member {Object.<String, String>} Features
    */
    Features = undefined;








}


