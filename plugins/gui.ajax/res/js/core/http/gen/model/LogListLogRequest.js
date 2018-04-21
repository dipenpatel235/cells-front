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
import ListLogRequestLogFormat from './ListLogRequestLogFormat';





/**
* The LogListLogRequest model module.
* @module model/LogListLogRequest
* @version 1.0
*/
export default class LogListLogRequest {
    /**
    * Constructs a new <code>LogListLogRequest</code>.
    * @alias module:model/LogListLogRequest
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>LogListLogRequest</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/LogListLogRequest} obj Optional instance to populate.
    * @return {module:model/LogListLogRequest} The populated <code>LogListLogRequest</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new LogListLogRequest();

            
            
            

            if (data.hasOwnProperty('Query')) {
                obj['Query'] = ApiClient.convertToType(data['Query'], 'String');
            }
            if (data.hasOwnProperty('Page')) {
                obj['Page'] = ApiClient.convertToType(data['Page'], 'Number');
            }
            if (data.hasOwnProperty('Size')) {
                obj['Size'] = ApiClient.convertToType(data['Size'], 'Number');
            }
            if (data.hasOwnProperty('Format')) {
                obj['Format'] = ListLogRequestLogFormat.constructFromObject(data['Format']);
            }
        }
        return obj;
    }

    /**
    * @member {String} Query
    */
    Query = undefined;
    /**
    * @member {Number} Page
    */
    Page = undefined;
    /**
    * @member {Number} Size
    */
    Size = undefined;
    /**
    * @member {module:model/ListLogRequestLogFormat} Format
    */
    Format = undefined;








}


