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
import TreeNode from './TreeNode';





/**
* The RestSearchResults model module.
* @module model/RestSearchResults
* @version 1.0
*/
export default class RestSearchResults {
    /**
    * Constructs a new <code>RestSearchResults</code>.
    * @alias module:model/RestSearchResults
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>RestSearchResults</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/RestSearchResults} obj Optional instance to populate.
    * @return {module:model/RestSearchResults} The populated <code>RestSearchResults</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new RestSearchResults();

            
            
            

            if (data.hasOwnProperty('Results')) {
                obj['Results'] = ApiClient.convertToType(data['Results'], [TreeNode]);
            }
            if (data.hasOwnProperty('Total')) {
                obj['Total'] = ApiClient.convertToType(data['Total'], 'Number');
            }
        }
        return obj;
    }

    /**
    * @member {Array.<module:model/TreeNode>} Results
    */
    Results = undefined;
    /**
    * @member {Number} Total
    */
    Total = undefined;








}


