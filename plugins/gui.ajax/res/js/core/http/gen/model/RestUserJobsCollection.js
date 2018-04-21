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
import JobsJob from './JobsJob';





/**
* The RestUserJobsCollection model module.
* @module model/RestUserJobsCollection
* @version 1.0
*/
export default class RestUserJobsCollection {
    /**
    * Constructs a new <code>RestUserJobsCollection</code>.
    * @alias module:model/RestUserJobsCollection
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestUserJobsCollection</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestUserJobsCollection} obj Optional instance to populate.
    * @return {module:model/RestUserJobsCollection} The populated <code>RestUserJobsCollection</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestUserJobsCollection();

            
            
            

            if (data.hasOwnProperty('Jobs')) {
                obj['Jobs'] = ApiClient.convertToType(data['Jobs'], [JobsJob]);
            }
        }
        return obj;
    }

    /**
    * @member {Array.<module:model/JobsJob>} Jobs
    */
    Jobs = undefined;








}


