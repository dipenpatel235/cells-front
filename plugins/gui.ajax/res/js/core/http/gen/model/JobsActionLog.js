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
import JobsAction from './JobsAction';
import JobsActionMessage from './JobsActionMessage';





/**
* The JobsActionLog model module.
* @module model/JobsActionLog
* @version 1.0
*/
export default class JobsActionLog {
    /**
    * Constructs a new <code>JobsActionLog</code>.
    * @alias module:model/JobsActionLog
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>JobsActionLog</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/JobsActionLog} obj Optional instance to populate.
    * @return {module:model/JobsActionLog} The populated <code>JobsActionLog</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new JobsActionLog();

            
            
            

            if (data.hasOwnProperty('Action')) {
                obj['Action'] = JobsAction.constructFromObject(data['Action']);
            }
            if (data.hasOwnProperty('InputMessage')) {
                obj['InputMessage'] = JobsActionMessage.constructFromObject(data['InputMessage']);
            }
            if (data.hasOwnProperty('OutputMessage')) {
                obj['OutputMessage'] = JobsActionMessage.constructFromObject(data['OutputMessage']);
            }
        }
        return obj;
    }

    /**
    * @member {module:model/JobsAction} Action
    */
    Action = undefined;
    /**
    * @member {module:model/JobsActionMessage} InputMessage
    */
    InputMessage = undefined;
    /**
    * @member {module:model/JobsActionMessage} OutputMessage
    */
    OutputMessage = undefined;








}


