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
* The MailerUser model module.
* @module model/MailerUser
* @version 1.0
*/
export default class MailerUser {
    /**
    * Constructs a new <code>MailerUser</code>.
    * @alias module:model/MailerUser
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>MailerUser</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/MailerUser} obj Optional instance to populate.
    * @return {module:model/MailerUser} The populated <code>MailerUser</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new MailerUser();

            
            
            

            if (data.hasOwnProperty('Uuid')) {
                obj['Uuid'] = ApiClient.convertToType(data['Uuid'], 'String');
            }
            if (data.hasOwnProperty('Address')) {
                obj['Address'] = ApiClient.convertToType(data['Address'], 'String');
            }
            if (data.hasOwnProperty('Name')) {
                obj['Name'] = ApiClient.convertToType(data['Name'], 'String');
            }
            if (data.hasOwnProperty('Language')) {
                obj['Language'] = ApiClient.convertToType(data['Language'], 'String');
            }
        }
        return obj;
    }

    /**
    * @member {String} Uuid
    */
    Uuid = undefined;
    /**
    * @member {String} Address
    */
    Address = undefined;
    /**
    * @member {String} Name
    */
    Name = undefined;
    /**
    * @member {String} Language
    */
    Language = undefined;








}


