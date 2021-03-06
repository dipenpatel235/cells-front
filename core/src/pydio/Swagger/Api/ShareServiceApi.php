<?php
/**
 * ShareServiceApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pydio Cells Rest API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * ShareServiceApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShareServiceApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ShareServiceApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteCell
     *
     * Delete a share room
     *
     * @param string $uuid  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\RestDeleteCellResponse
     */
    public function deleteCell($uuid)
    {
        list($response) = $this->deleteCellWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation deleteCellWithHttpInfo
     *
     * Delete a share room
     *
     * @param string $uuid  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\RestDeleteCellResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCellWithHttpInfo($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling deleteCell');
        }
        // parse inputs
        $resourcePath = "/share/cell/{Uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "Uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\RestDeleteCellResponse',
                '/share/cell/{Uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\RestDeleteCellResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\RestDeleteCellResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteShareLink
     *
     * Delete Share Link
     *
     * @param string $uuid  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\RestDeleteShareLinkResponse
     */
    public function deleteShareLink($uuid)
    {
        list($response) = $this->deleteShareLinkWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation deleteShareLinkWithHttpInfo
     *
     * Delete Share Link
     *
     * @param string $uuid  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\RestDeleteShareLinkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteShareLinkWithHttpInfo($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling deleteShareLink');
        }
        // parse inputs
        $resourcePath = "/share/link/{Uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "Uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\RestDeleteShareLinkResponse',
                '/share/link/{Uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\RestDeleteShareLinkResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\RestDeleteShareLinkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCell
     *
     * Load a share room
     *
     * @param string $uuid  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\RestCell
     */
    public function getCell($uuid)
    {
        list($response) = $this->getCellWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation getCellWithHttpInfo
     *
     * Load a share room
     *
     * @param string $uuid  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\RestCell, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCellWithHttpInfo($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling getCell');
        }
        // parse inputs
        $resourcePath = "/share/cell/{Uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "Uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\RestCell',
                '/share/cell/{Uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\RestCell', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\RestCell', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getShareLink
     *
     * Load a share link with all infos
     *
     * @param string $uuid  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\RestShareLink
     */
    public function getShareLink($uuid)
    {
        list($response) = $this->getShareLinkWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation getShareLinkWithHttpInfo
     *
     * Load a share link with all infos
     *
     * @param string $uuid  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\RestShareLink, HTTP status code, HTTP response headers (array of strings)
     */
    public function getShareLinkWithHttpInfo($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling getShareLink');
        }
        // parse inputs
        $resourcePath = "/share/link/{Uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "Uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\RestShareLink',
                '/share/link/{Uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\RestShareLink', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\RestShareLink', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listSharedResources
     *
     * List Shared Resources for current user or all users
     *
     * @param \Swagger\Client\Model\RestListSharedResourcesRequest $body  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\RestListSharedResourcesResponse
     */
    public function listSharedResources($body)
    {
        list($response) = $this->listSharedResourcesWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation listSharedResourcesWithHttpInfo
     *
     * List Shared Resources for current user or all users
     *
     * @param \Swagger\Client\Model\RestListSharedResourcesRequest $body  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\RestListSharedResourcesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listSharedResourcesWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling listSharedResources');
        }
        // parse inputs
        $resourcePath = "/share/resources";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\RestListSharedResourcesResponse',
                '/share/resources'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\RestListSharedResourcesResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\RestListSharedResourcesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putCell
     *
     * Put or Create a share room
     *
     * @param \Swagger\Client\Model\RestPutCellRequest $body  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\RestCell
     */
    public function putCell($body)
    {
        list($response) = $this->putCellWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation putCellWithHttpInfo
     *
     * Put or Create a share room
     *
     * @param \Swagger\Client\Model\RestPutCellRequest $body  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\RestCell, HTTP status code, HTTP response headers (array of strings)
     */
    public function putCellWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling putCell');
        }
        // parse inputs
        $resourcePath = "/share/cell";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\RestCell',
                '/share/cell'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\RestCell', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\RestCell', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putShareLink
     *
     * Put or Create a share room
     *
     * @param \Swagger\Client\Model\RestPutShareLinkRequest $body  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\RestShareLink
     */
    public function putShareLink($body)
    {
        list($response) = $this->putShareLinkWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation putShareLinkWithHttpInfo
     *
     * Put or Create a share room
     *
     * @param \Swagger\Client\Model\RestPutShareLinkRequest $body  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\RestShareLink, HTTP status code, HTTP response headers (array of strings)
     */
    public function putShareLinkWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling putShareLink');
        }
        // parse inputs
        $resourcePath = "/share/link";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\RestShareLink',
                '/share/link'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\RestShareLink', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\RestShareLink', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
