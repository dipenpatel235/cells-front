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
import DocstoreDocument from './DocstoreDocument';





/**
* The DocstorePutDocumentResponse model module.
* @module model/DocstorePutDocumentResponse
* @version 1.0
*/
export default class DocstorePutDocumentResponse {
    /**
    * Constructs a new <code>DocstorePutDocumentResponse</code>.
    * @alias module:model/DocstorePutDocumentResponse
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>DocstorePutDocumentResponse</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/DocstorePutDocumentResponse} obj Optional instance to populate.
    * @return {module:model/DocstorePutDocumentResponse} The populated <code>DocstorePutDocumentResponse</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new DocstorePutDocumentResponse();

            
            
            

            if (data.hasOwnProperty('Document')) {
                obj['Document'] = DocstoreDocument.constructFromObject(data['Document']);
            }
        }
        return obj;
    }

    /**
    * @member {module:model/DocstoreDocument} Document
    */
    Document = undefined;








}


