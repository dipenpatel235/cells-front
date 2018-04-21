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
import JobsCommand from './JobsCommand';





/**
* The JobsCtrlCommand model module.
* @module model/JobsCtrlCommand
* @version 1.0
*/
export default class JobsCtrlCommand {
    /**
    * Constructs a new <code>JobsCtrlCommand</code>.
    * @alias module:model/JobsCtrlCommand
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>JobsCtrlCommand</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/JobsCtrlCommand} obj Optional instance to populate.
    * @return {module:model/JobsCtrlCommand} The populated <code>JobsCtrlCommand</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new JobsCtrlCommand();

            
            
            

            if (data.hasOwnProperty('Cmd')) {
                obj['Cmd'] = JobsCommand.constructFromObject(data['Cmd']);
            }
            if (data.hasOwnProperty('JobId')) {
                obj['JobId'] = ApiClient.convertToType(data['JobId'], 'String');
            }
            if (data.hasOwnProperty('TaskId')) {
                obj['TaskId'] = ApiClient.convertToType(data['TaskId'], 'String');
            }
            if (data.hasOwnProperty('OwnerId')) {
                obj['OwnerId'] = ApiClient.convertToType(data['OwnerId'], 'String');
            }
        }
        return obj;
    }

    /**
    * @member {module:model/JobsCommand} Cmd
    */
    Cmd = undefined;
    /**
    * @member {String} JobId
    */
    JobId = undefined;
    /**
    * @member {String} TaskId
    */
    TaskId = undefined;
    /**
    * @member {String} OwnerId
    */
    OwnerId = undefined;








}


