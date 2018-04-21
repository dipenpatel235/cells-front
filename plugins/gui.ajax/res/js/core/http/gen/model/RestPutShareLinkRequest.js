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
import RestShareLink from './RestShareLink';





/**
* The RestPutShareLinkRequest model module.
* @module model/RestPutShareLinkRequest
* @version 1.0
*/
export default class RestPutShareLinkRequest {
    /**
    * Constructs a new <code>RestPutShareLinkRequest</code>.
    * @alias module:model/RestPutShareLinkRequest
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestPutShareLinkRequest</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestPutShareLinkRequest} obj Optional instance to populate.
    * @return {module:model/RestPutShareLinkRequest} The populated <code>RestPutShareLinkRequest</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestPutShareLinkRequest();

            
            
            

            if (data.hasOwnProperty('ShareLink')) {
                obj['ShareLink'] = RestShareLink.constructFromObject(data['ShareLink']);
            }
            if (data.hasOwnProperty('PasswordEnabled')) {
                obj['PasswordEnabled'] = ApiClient.convertToType(data['PasswordEnabled'], 'Boolean');
            }
            if (data.hasOwnProperty('CreatePassword')) {
                obj['CreatePassword'] = ApiClient.convertToType(data['CreatePassword'], 'String');
            }
            if (data.hasOwnProperty('UpdatePassword')) {
                obj['UpdatePassword'] = ApiClient.convertToType(data['UpdatePassword'], 'String');
            }
            if (data.hasOwnProperty('UpdateCustomHash')) {
                obj['UpdateCustomHash'] = ApiClient.convertToType(data['UpdateCustomHash'], 'String');
            }
        }
        return obj;
    }

    /**
    * @member {module:model/RestShareLink} ShareLink
    */
    ShareLink = undefined;
    /**
    * @member {Boolean} PasswordEnabled
    */
    PasswordEnabled = undefined;
    /**
    * @member {String} CreatePassword
    */
    CreatePassword = undefined;
    /**
    * @member {String} UpdatePassword
    */
    UpdatePassword = undefined;
    /**
    * @member {String} UpdateCustomHash
    */
    UpdateCustomHash = undefined;








}


