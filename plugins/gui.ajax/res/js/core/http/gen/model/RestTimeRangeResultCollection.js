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
import LogTimeRangeCursor from './LogTimeRangeCursor';
import LogTimeRangeResult from './LogTimeRangeResult';





/**
* The RestTimeRangeResultCollection model module.
* @module model/RestTimeRangeResultCollection
* @version 1.0
*/
export default class RestTimeRangeResultCollection {
    /**
    * Constructs a new <code>RestTimeRangeResultCollection</code>.
    * @alias module:model/RestTimeRangeResultCollection
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestTimeRangeResultCollection</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestTimeRangeResultCollection} obj Optional instance to populate.
    * @return {module:model/RestTimeRangeResultCollection} The populated <code>RestTimeRangeResultCollection</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestTimeRangeResultCollection();

            
            
            

            if (data.hasOwnProperty('Results')) {
                obj['Results'] = ApiClient.convertToType(data['Results'], [LogTimeRangeResult]);
            }
            if (data.hasOwnProperty('Links')) {
                obj['Links'] = ApiClient.convertToType(data['Links'], [LogTimeRangeCursor]);
            }
        }
        return obj;
    }

    /**
    * @member {Array.<module:model/LogTimeRangeResult>} Results
    */
    Results = undefined;
    /**
    * @member {Array.<module:model/LogTimeRangeCursor>} Links
    */
    Links = undefined;








}


