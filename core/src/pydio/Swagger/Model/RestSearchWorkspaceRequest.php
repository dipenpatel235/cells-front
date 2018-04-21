<?php
/**
 * RestSearchWorkspaceRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pydio Cell Rest API
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * RestSearchWorkspaceRequest Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RestSearchWorkspaceRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'restSearchWorkspaceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'queries' => '\Swagger\Client\Model\IdmWorkspaceSingleQuery[]',
        'resource_policy_query' => '\Swagger\Client\Model\RestResourcePolicyQuery',
        'offset' => 'string',
        'limit' => 'string',
        'group_by' => 'int',
        'count_only' => 'bool',
        'operation' => '\Swagger\Client\Model\ServiceOperationType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'queries' => null,
        'resource_policy_query' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'group_by' => 'int32',
        'count_only' => 'boolean',
        'operation' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'queries' => 'Queries',
        'resource_policy_query' => 'ResourcePolicyQuery',
        'offset' => 'Offset',
        'limit' => 'Limit',
        'group_by' => 'GroupBy',
        'count_only' => 'CountOnly',
        'operation' => 'Operation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'queries' => 'setQueries',
        'resource_policy_query' => 'setResourcePolicyQuery',
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'group_by' => 'setGroupBy',
        'count_only' => 'setCountOnly',
        'operation' => 'setOperation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'queries' => 'getQueries',
        'resource_policy_query' => 'getResourcePolicyQuery',
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'group_by' => 'getGroupBy',
        'count_only' => 'getCountOnly',
        'operation' => 'getOperation'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['queries'] = isset($data['queries']) ? $data['queries'] : null;
        $this->container['resource_policy_query'] = isset($data['resource_policy_query']) ? $data['resource_policy_query'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['group_by'] = isset($data['group_by']) ? $data['group_by'] : null;
        $this->container['count_only'] = isset($data['count_only']) ? $data['count_only'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets queries
     * @return \Swagger\Client\Model\IdmWorkspaceSingleQuery[]
     */
    public function getQueries()
    {
        return $this->container['queries'];
    }

    /**
     * Sets queries
     * @param \Swagger\Client\Model\IdmWorkspaceSingleQuery[] $queries
     * @return $this
     */
    public function setQueries($queries)
    {
        $this->container['queries'] = $queries;

        return $this;
    }

    /**
     * Gets resource_policy_query
     * @return \Swagger\Client\Model\RestResourcePolicyQuery
     */
    public function getResourcePolicyQuery()
    {
        return $this->container['resource_policy_query'];
    }

    /**
     * Sets resource_policy_query
     * @param \Swagger\Client\Model\RestResourcePolicyQuery $resource_policy_query
     * @return $this
     */
    public function setResourcePolicyQuery($resource_policy_query)
    {
        $this->container['resource_policy_query'] = $resource_policy_query;

        return $this;
    }

    /**
     * Gets offset
     * @return string
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     * @param string $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets limit
     * @return string
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param string $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets group_by
     * @return int
     */
    public function getGroupBy()
    {
        return $this->container['group_by'];
    }

    /**
     * Sets group_by
     * @param int $group_by
     * @return $this
     */
    public function setGroupBy($group_by)
    {
        $this->container['group_by'] = $group_by;

        return $this;
    }

    /**
     * Gets count_only
     * @return bool
     */
    public function getCountOnly()
    {
        return $this->container['count_only'];
    }

    /**
     * Sets count_only
     * @param bool $count_only
     * @return $this
     */
    public function setCountOnly($count_only)
    {
        $this->container['count_only'] = $count_only;

        return $this;
    }

    /**
     * Gets operation
     * @return \Swagger\Client\Model\ServiceOperationType
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     * @param \Swagger\Client\Model\ServiceOperationType $operation
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


