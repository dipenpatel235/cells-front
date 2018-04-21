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


import ApiClient from "../ApiClient";
import RestDeleteVersioningPolicyResponse from '../model/RestDeleteVersioningPolicyResponse';
import RestExternalDirectoryCollection from '../model/RestExternalDirectoryCollection';
import RestExternalDirectoryConfig from '../model/RestExternalDirectoryConfig';
import RestExternalDirectoryResponse from '../model/RestExternalDirectoryResponse';
import TreeVersioningPolicy from '../model/TreeVersioningPolicy';

/**
* EnterpriseConfigService service.
* @module api/EnterpriseConfigServiceApi
* @version 1.0
*/
export default class EnterpriseConfigServiceApi {

    /**
    * Constructs a new EnterpriseConfigServiceApi. 
    * @alias module:api/EnterpriseConfigServiceApi
    * @class
    * @param {module:ApiClient} apiClient Optional API client implementation to use,
    * default to {@link module:ApiClient#instance} if unspecified.
    */
    constructor(apiClient) {
        this.apiClient = apiClient || ApiClient.instance;
    }



    /**
     * [Enterprise Only] Delete external directory
     * @param {String} configId 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link module:model/RestExternalDirectoryResponse} and HTTP response
     */
    deleteExternalDirectoryWithHttpInfo(configId) {
      let postBody = null;

      // verify the required parameter 'configId' is set
      if (configId === undefined || configId === null) {
        throw new Error("Missing the required parameter 'configId' when calling deleteExternalDirectory");
      }


      let pathParams = {
        'ConfigId': configId
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = [];
      let contentTypes = ['application/json'];
      let accepts = ['application/json'];
      let returnType = RestExternalDirectoryResponse;

      return this.apiClient.callApi(
        '/config/directories/{ConfigId}', 'DELETE',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType
      );
    }

    /**
     * [Enterprise Only] Delete external directory
     * @param {String} configId 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link module:model/RestExternalDirectoryResponse}
     */
    deleteExternalDirectory(configId) {
      return this.deleteExternalDirectoryWithHttpInfo(configId)
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


    /**
     * [Enterprise Only] Delete a versioning policy
     * @param {String} uuid 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link module:model/RestDeleteVersioningPolicyResponse} and HTTP response
     */
    deleteVersioningPolicyWithHttpInfo(uuid) {
      let postBody = null;

      // verify the required parameter 'uuid' is set
      if (uuid === undefined || uuid === null) {
        throw new Error("Missing the required parameter 'uuid' when calling deleteVersioningPolicy");
      }


      let pathParams = {
        'Uuid': uuid
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = [];
      let contentTypes = ['application/json'];
      let accepts = ['application/json'];
      let returnType = RestDeleteVersioningPolicyResponse;

      return this.apiClient.callApi(
        '/config/versioning/{Uuid}', 'DELETE',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType
      );
    }

    /**
     * [Enterprise Only] Delete a versioning policy
     * @param {String} uuid 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link module:model/RestDeleteVersioningPolicyResponse}
     */
    deleteVersioningPolicy(uuid) {
      return this.deleteVersioningPolicyWithHttpInfo(uuid)
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


    /**
     * [Enterprise Only] List additional user directories
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link module:model/RestExternalDirectoryCollection} and HTTP response
     */
    listExternalDirectoriesWithHttpInfo() {
      let postBody = null;


      let pathParams = {
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = [];
      let contentTypes = ['application/json'];
      let accepts = ['application/json'];
      let returnType = RestExternalDirectoryCollection;

      return this.apiClient.callApi(
        '/config/directories', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType
      );
    }

    /**
     * [Enterprise Only] List additional user directories
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link module:model/RestExternalDirectoryCollection}
     */
    listExternalDirectories() {
      return this.listExternalDirectoriesWithHttpInfo()
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


    /**
     * [Enterprise Only] Add/Create an external directory
     * @param {String} configId 
     * @param {module:model/RestExternalDirectoryConfig} body 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link module:model/RestExternalDirectoryResponse} and HTTP response
     */
    putExternalDirectoryWithHttpInfo(configId, body) {
      let postBody = body;

      // verify the required parameter 'configId' is set
      if (configId === undefined || configId === null) {
        throw new Error("Missing the required parameter 'configId' when calling putExternalDirectory");
      }

      // verify the required parameter 'body' is set
      if (body === undefined || body === null) {
        throw new Error("Missing the required parameter 'body' when calling putExternalDirectory");
      }


      let pathParams = {
        'ConfigId': configId
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = [];
      let contentTypes = ['application/json'];
      let accepts = ['application/json'];
      let returnType = RestExternalDirectoryResponse;

      return this.apiClient.callApi(
        '/config/directories/{ConfigId}', 'PUT',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType
      );
    }

    /**
     * [Enterprise Only] Add/Create an external directory
     * @param {String} configId 
     * @param {module:model/RestExternalDirectoryConfig} body 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link module:model/RestExternalDirectoryResponse}
     */
    putExternalDirectory(configId, body) {
      return this.putExternalDirectoryWithHttpInfo(configId, body)
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


    /**
     * [Enterprise Only] Create or update a versioning policy
     * @param {String} uuid 
     * @param {module:model/TreeVersioningPolicy} body 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link module:model/TreeVersioningPolicy} and HTTP response
     */
    putVersioningPolicyWithHttpInfo(uuid, body) {
      let postBody = body;

      // verify the required parameter 'uuid' is set
      if (uuid === undefined || uuid === null) {
        throw new Error("Missing the required parameter 'uuid' when calling putVersioningPolicy");
      }

      // verify the required parameter 'body' is set
      if (body === undefined || body === null) {
        throw new Error("Missing the required parameter 'body' when calling putVersioningPolicy");
      }


      let pathParams = {
        'Uuid': uuid
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = [];
      let contentTypes = ['application/json'];
      let accepts = ['application/json'];
      let returnType = TreeVersioningPolicy;

      return this.apiClient.callApi(
        '/config/versioning/{Uuid}', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType
      );
    }

    /**
     * [Enterprise Only] Create or update a versioning policy
     * @param {String} uuid 
     * @param {module:model/TreeVersioningPolicy} body 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link module:model/TreeVersioningPolicy}
     */
    putVersioningPolicy(uuid, body) {
      return this.putVersioningPolicyWithHttpInfo(uuid, body)
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


}
