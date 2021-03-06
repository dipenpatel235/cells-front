<?php
/**
 * CertLicenseStatsResponse
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
 * CertLicenseStatsResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CertLicenseStatsResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'certLicenseStatsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'license' => '\Swagger\Client\Model\CertLicenseInfo',
        'active_users' => 'string',
        'active_peers' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'license' => null,
        'active_users' => 'int64',
        'active_peers' => 'int64'
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
        'license' => 'License',
        'active_users' => 'ActiveUsers',
        'active_peers' => 'ActivePeers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'license' => 'setLicense',
        'active_users' => 'setActiveUsers',
        'active_peers' => 'setActivePeers'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'license' => 'getLicense',
        'active_users' => 'getActiveUsers',
        'active_peers' => 'getActivePeers'
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
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
        $this->container['active_users'] = isset($data['active_users']) ? $data['active_users'] : null;
        $this->container['active_peers'] = isset($data['active_peers']) ? $data['active_peers'] : null;
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
     * Gets license
     * @return \Swagger\Client\Model\CertLicenseInfo
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     * @param \Swagger\Client\Model\CertLicenseInfo $license
     * @return $this
     */
    public function setLicense($license)
    {
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets active_users
     * @return string
     */
    public function getActiveUsers()
    {
        return $this->container['active_users'];
    }

    /**
     * Sets active_users
     * @param string $active_users
     * @return $this
     */
    public function setActiveUsers($active_users)
    {
        $this->container['active_users'] = $active_users;

        return $this;
    }

    /**
     * Gets active_peers
     * @return string
     */
    public function getActivePeers()
    {
        return $this->container['active_peers'];
    }

    /**
     * Sets active_peers
     * @param string $active_peers
     * @return $this
     */
    public function setActivePeers($active_peers)
    {
        $this->container['active_peers'] = $active_peers;

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


