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
* Enum class ListSharedResourcesRequestListShareType.
* @enum {}
* @readonly
*/
export default class ListSharedResourcesRequestListShareType {
    
        /**
         * value: "ANY"
         * @const
         */
        ANY = "ANY";

    
        /**
         * value: "LINKS"
         * @const
         */
        LINKS = "LINKS";

    
        /**
         * value: "CELLS"
         * @const
         */
        CELLS = "CELLS";

    

    /**
    * Returns a <code>ListSharedResourcesRequestListShareType</code> enum value from a Javascript object name.
    * @param {Object} data The plain JavaScript object containing the name of the enum value.
    * @return {module:model/ListSharedResourcesRequestListShareType} The enum <code>ListSharedResourcesRequestListShareType</code> value.
    */
    static constructFromObject(object) {
        return object;
    }
}


