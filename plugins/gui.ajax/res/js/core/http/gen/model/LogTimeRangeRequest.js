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
* The LogTimeRangeRequest model module.
* @module model/LogTimeRangeRequest
* @version 1.0
*/
export default class LogTimeRangeRequest {
    /**
    * Constructs a new <code>LogTimeRangeRequest</code>.
    * TimeRangeRequest contains the parameter to configure the query to  retrieve the number of audit events of this type for a given time range defined by last timestamp and a range type.
    * @alias module:model/LogTimeRangeRequest
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>LogTimeRangeRequest</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/LogTimeRangeRequest} obj Optional instance to populate.
    * @return {module:model/LogTimeRangeRequest} The populated <code>LogTimeRangeRequest</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new LogTimeRangeRequest();

            
            
            

            if (data.hasOwnProperty('MsgId')) {
                obj['MsgId'] = ApiClient.convertToType(data['MsgId'], 'String');
            }
            if (data.hasOwnProperty('TimeRangeType')) {
                obj['TimeRangeType'] = ApiClient.convertToType(data['TimeRangeType'], 'String');
            }
            if (data.hasOwnProperty('RefTime')) {
                obj['RefTime'] = ApiClient.convertToType(data['RefTime'], 'Number');
            }
        }
        return obj;
    }

    /**
    * @member {String} MsgId
    */
    MsgId = undefined;
    /**
    * @member {String} TimeRangeType
    */
    TimeRangeType = undefined;
    /**
    * @member {Number} RefTime
    */
    RefTime = undefined;








}


