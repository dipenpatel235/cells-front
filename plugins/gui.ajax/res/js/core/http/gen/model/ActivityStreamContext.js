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
* Enum class ActivityStreamContext.
* @enum {}
* @readonly
*/
export default class ActivityStreamContext {
    
        /**
         * value: "MYFEED"
         * @const
         */
        MYFEED = "MYFEED";

    
        /**
         * value: "USER_ID"
         * @const
         */
        USER_ID = "USER_ID";

    
        /**
         * value: "NODE_ID"
         * @const
         */
        NODE_ID = "NODE_ID";

    

    /**
    * Returns a <code>ActivityStreamContext</code> enum value from a Javascript object name.
    * @param {Object} data The plain JavaScript object containing the name of the enum value.
    * @return {module:model/ActivityStreamContext} The enum <code>ActivityStreamContext</code> value.
    */
    static constructFromObject(object) {
        return object;
    }
}


