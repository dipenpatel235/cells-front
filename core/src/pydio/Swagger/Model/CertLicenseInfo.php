<?php
/**
 * CertLicenseInfo
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
 * CertLicenseInfo Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CertLicenseInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'certLicenseInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'account_name' => 'string',
        'server_domain' => 'string',
        'issue_time' => 'int',
        'expire_time' => 'int',
        'max_users' => 'string',
        'max_peers' => 'string',
        'features' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'account_name' => null,
        'server_domain' => null,
        'issue_time' => 'int32',
        'expire_time' => 'int32',
        'max_users' => 'int64',
        'max_peers' => 'int64',
        'features' => null
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
        'id' => 'Id',
        'account_name' => 'AccountName',
        'server_domain' => 'ServerDomain',
        'issue_time' => 'IssueTime',
        'expire_time' => 'ExpireTime',
        'max_users' => 'MaxUsers',
        'max_peers' => 'MaxPeers',
        'features' => 'Features'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_name' => 'setAccountName',
        'server_domain' => 'setServerDomain',
        'issue_time' => 'setIssueTime',
        'expire_time' => 'setExpireTime',
        'max_users' => 'setMaxUsers',
        'max_peers' => 'setMaxPeers',
        'features' => 'setFeatures'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account_name' => 'getAccountName',
        'server_domain' => 'getServerDomain',
        'issue_time' => 'getIssueTime',
        'expire_time' => 'getExpireTime',
        'max_users' => 'getMaxUsers',
        'max_peers' => 'getMaxPeers',
        'features' => 'getFeatures'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['server_domain'] = isset($data['server_domain']) ? $data['server_domain'] : null;
        $this->container['issue_time'] = isset($data['issue_time']) ? $data['issue_time'] : null;
        $this->container['expire_time'] = isset($data['expire_time']) ? $data['expire_time'] : null;
        $this->container['max_users'] = isset($data['max_users']) ? $data['max_users'] : null;
        $this->container['max_peers'] = isset($data['max_peers']) ? $data['max_peers'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets account_name
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     * @param string $account_name
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets server_domain
     * @return string
     */
    public function getServerDomain()
    {
        return $this->container['server_domain'];
    }

    /**
     * Sets server_domain
     * @param string $server_domain
     * @return $this
     */
    public function setServerDomain($server_domain)
    {
        $this->container['server_domain'] = $server_domain;

        return $this;
    }

    /**
     * Gets issue_time
     * @return int
     */
    public function getIssueTime()
    {
        return $this->container['issue_time'];
    }

    /**
     * Sets issue_time
     * @param int $issue_time
     * @return $this
     */
    public function setIssueTime($issue_time)
    {
        $this->container['issue_time'] = $issue_time;

        return $this;
    }

    /**
     * Gets expire_time
     * @return int
     */
    public function getExpireTime()
    {
        return $this->container['expire_time'];
    }

    /**
     * Sets expire_time
     * @param int $expire_time
     * @return $this
     */
    public function setExpireTime($expire_time)
    {
        $this->container['expire_time'] = $expire_time;

        return $this;
    }

    /**
     * Gets max_users
     * @return string
     */
    public function getMaxUsers()
    {
        return $this->container['max_users'];
    }

    /**
     * Sets max_users
     * @param string $max_users
     * @return $this
     */
    public function setMaxUsers($max_users)
    {
        $this->container['max_users'] = $max_users;

        return $this;
    }

    /**
     * Gets max_peers
     * @return string
     */
    public function getMaxPeers()
    {
        return $this->container['max_peers'];
    }

    /**
     * Sets max_peers
     * @param string $max_peers
     * @return $this
     */
    public function setMaxPeers($max_peers)
    {
        $this->container['max_peers'] = $max_peers;

        return $this;
    }

    /**
     * Gets features
     * @return map[string,string]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     * @param map[string,string] $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

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


