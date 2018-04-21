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
import RestSettingsEntryMeta from './RestSettingsEntryMeta';
import RestSettingsSection from './RestSettingsSection';





/**
* The RestSettingsMenuResponse model module.
* @module model/RestSettingsMenuResponse
* @version 1.0
*/
export default class RestSettingsMenuResponse {
    /**
    * Constructs a new <code>RestSettingsMenuResponse</code>.
    * @alias module:model/RestSettingsMenuResponse
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestSettingsMenuResponse</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestSettingsMenuResponse} obj Optional instance to populate.
    * @return {module:model/RestSettingsMenuResponse} The populated <code>RestSettingsMenuResponse</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestSettingsMenuResponse();

            
            
            

            if (data.hasOwnProperty('RootMetadata')) {
                obj['RootMetadata'] = RestSettingsEntryMeta.constructFromObject(data['RootMetadata']);
            }
            if (data.hasOwnProperty('Sections')) {
                obj['Sections'] = ApiClient.convertToType(data['Sections'], [RestSettingsSection]);
            }
        }
        return obj;
    }

    /**
    * @member {module:model/RestSettingsEntryMeta} RootMetadata
    */
    RootMetadata = undefined;
    /**
    * @member {Array.<module:model/RestSettingsSection>} Sections
    */
    Sections = undefined;








}


