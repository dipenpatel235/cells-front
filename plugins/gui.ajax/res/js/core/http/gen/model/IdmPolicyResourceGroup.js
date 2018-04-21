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
* Enum class IdmPolicyResourceGroup.
* @enum {}
* @readonly
*/
export default class IdmPolicyResourceGroup {
    
        /**
         * value: "rest"
         * @const
         */
        rest = "rest";

    
        /**
         * value: "acl"
         * @const
         */
        acl = "acl";

    
        /**
         * value: "oidc"
         * @const
         */
        oidc = "oidc";

    

    /**
    * Returns a <code>IdmPolicyResourceGroup</code> enum value from a Javascript object name.
    * @param {Object} data The plain JavaScript object containing the name of the enum value.
    * @return {module:model/IdmPolicyResourceGroup} The enum <code>IdmPolicyResourceGroup</code> value.
    */
    static constructFromObject(object) {
        return object;
    }
}


