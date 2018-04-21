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
* Enum class IdmNodeType.
* @enum {}
* @readonly
*/
export default class IdmNodeType {
    
        /**
         * value: "UNKNOWN"
         * @const
         */
        UNKNOWN = "UNKNOWN";

    
        /**
         * value: "USER"
         * @const
         */
        USER = "USER";

    
        /**
         * value: "GROUP"
         * @const
         */
        GROUP = "GROUP";

    

    /**
    * Returns a <code>IdmNodeType</code> enum value from a Javascript object name.
    * @param {Object} data The plain JavaScript object containing the name of the enum value.
    * @return {module:model/IdmNodeType} The enum <code>IdmNodeType</code> value.
    */
    static constructFromObject(object) {
        return object;
    }
}


