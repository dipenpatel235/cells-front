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
* Enum class CtlServiceCommand.
* @enum {}
* @readonly
*/
export default class CtlServiceCommand {
    
        /**
         * value: "START"
         * @const
         */
        START = "START";

    
        /**
         * value: "STOP"
         * @const
         */
        STOP = "STOP";

    

    /**
    * Returns a <code>CtlServiceCommand</code> enum value from a Javascript object name.
    * @param {Object} data The plain JavaScript object containing the name of the enum value.
    * @return {module:model/CtlServiceCommand} The enum <code>CtlServiceCommand</code> value.
    */
    static constructFromObject(object) {
        return object;
    }
}


