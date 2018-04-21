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
* The DocstoreDocumentQuery model module.
* @module model/DocstoreDocumentQuery
* @version 1.0
*/
export default class DocstoreDocumentQuery {
    /**
    * Constructs a new <code>DocstoreDocumentQuery</code>.
    * @alias module:model/DocstoreDocumentQuery
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>DocstoreDocumentQuery</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/DocstoreDocumentQuery} obj Optional instance to populate.
    * @return {module:model/DocstoreDocumentQuery} The populated <code>DocstoreDocumentQuery</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new DocstoreDocumentQuery();

            
            
            

            if (data.hasOwnProperty('ID')) {
                obj['ID'] = ApiClient.convertToType(data['ID'], 'String');
            }
            if (data.hasOwnProperty('Owner')) {
                obj['Owner'] = ApiClient.convertToType(data['Owner'], 'String');
            }
            if (data.hasOwnProperty('MetaQuery')) {
                obj['MetaQuery'] = ApiClient.convertToType(data['MetaQuery'], 'String');
            }
        }
        return obj;
    }

    /**
    * @member {String} ID
    */
    ID = undefined;
    /**
    * @member {String} Owner
    */
    Owner = undefined;
    /**
    * @member {String} MetaQuery
    */
    MetaQuery = undefined;








}


