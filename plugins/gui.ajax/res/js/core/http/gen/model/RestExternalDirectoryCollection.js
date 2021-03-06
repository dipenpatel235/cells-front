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
import AuthLdapServerConfig from './AuthLdapServerConfig';





/**
* The RestExternalDirectoryCollection model module.
* @module model/RestExternalDirectoryCollection
* @version 1.0
*/
export default class RestExternalDirectoryCollection {
    /**
    * Constructs a new <code>RestExternalDirectoryCollection</code>.
    * @alias module:model/RestExternalDirectoryCollection
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestExternalDirectoryCollection</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestExternalDirectoryCollection} obj Optional instance to populate.
    * @return {module:model/RestExternalDirectoryCollection} The populated <code>RestExternalDirectoryCollection</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestExternalDirectoryCollection();

            
            
            

            if (data.hasOwnProperty('Directories')) {
                obj['Directories'] = ApiClient.convertToType(data['Directories'], [AuthLdapServerConfig]);
            }
        }
        return obj;
    }

    /**
    * @member {Array.<module:model/AuthLdapServerConfig>} Directories
    */
    Directories = undefined;








}


