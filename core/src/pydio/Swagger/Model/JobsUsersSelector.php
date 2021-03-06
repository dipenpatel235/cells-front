<?php
/**
 * JobsUsersSelector
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * JobsUsersSelector Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobsUsersSelector implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'jobsUsersSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'all' => 'bool',
        'users' => '\Swagger\Client\Model\IdmUser[]',
        'query' => '\Swagger\Client\Model\ServiceQuery',
        'collect' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'all' => 'boolean',
        'users' => null,
        'query' => null,
        'collect' => 'boolean'
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
        'all' => 'All',
        'users' => 'Users',
        'query' => 'Query',
        'collect' => 'Collect'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'all' => 'setAll',
        'users' => 'setUsers',
        'query' => 'setQuery',
        'collect' => 'setCollect'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'all' => 'getAll',
        'users' => 'getUsers',
        'query' => 'getQuery',
        'collect' => 'getCollect'
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
        $this->container['all'] = isset($data['all']) ? $data['all'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['collect'] = isset($data['collect']) ? $data['collect'] : null;
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
     * Gets all
     * @return bool
     */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
     * Sets all
     * @param bool $all
     * @return $this
     */
    public function setAll($all)
    {
        $this->container['all'] = $all;

        return $this;
    }

    /**
     * Gets users
     * @return \Swagger\Client\Model\IdmUser[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     * @param \Swagger\Client\Model\IdmUser[] $users
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets query
     * @return \Swagger\Client\Model\ServiceQuery
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     * @param \Swagger\Client\Model\ServiceQuery $query
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets collect
     * @return bool
     */
    public function getCollect()
    {
        return $this->container['collect'];
    }

    /**
     * Sets collect
     * @param bool $collect
     * @return $this
     */
    public function setCollect($collect)
    {
        $this->container['collect'] = $collect;

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


