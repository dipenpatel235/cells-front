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
* The DocstoreDeleteDocumentsResponse model module.
* @module model/DocstoreDeleteDocumentsResponse
* @version 1.0
*/
export default class DocstoreDeleteDocumentsResponse {
    /**
    * Constructs a new <code>DocstoreDeleteDocumentsResponse</code>.
    * @alias module:model/DocstoreDeleteDocumentsResponse
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>DocstoreDeleteDocumentsResponse</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/DocstoreDeleteDocumentsResponse} obj Optional instance to populate.
    * @return {module:model/DocstoreDeleteDocumentsResponse} The populated <code>DocstoreDeleteDocumentsResponse</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new DocstoreDeleteDocumentsResponse();

            
            
            

            if (data.hasOwnProperty('Success')) {
                obj['Success'] = ApiClient.convertToType(data['Success'], 'Boolean');
            }
            if (data.hasOwnProperty('DeletionCount')) {
                obj['DeletionCount'] = ApiClient.convertToType(data['DeletionCount'], 'Number');
            }
        }
        return obj;
    }

    /**
    * @member {Boolean} Success
    */
    Success = undefined;
    /**
    * @member {Number} DeletionCount
    */
    DeletionCount = undefined;








}


