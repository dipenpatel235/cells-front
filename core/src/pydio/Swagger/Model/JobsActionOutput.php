<?php
/**
 * JobsActionOutput
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
 * JobsActionOutput Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobsActionOutput implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'jobsActionOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'success' => 'bool',
        'raw_body' => 'string',
        'string_body' => 'string',
        'json_body' => 'string',
        'error_string' => 'string',
        'ignored' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'success' => 'boolean',
        'raw_body' => 'byte',
        'string_body' => null,
        'json_body' => 'byte',
        'error_string' => null,
        'ignored' => 'boolean'
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
        'success' => 'Success',
        'raw_body' => 'RawBody',
        'string_body' => 'StringBody',
        'json_body' => 'JsonBody',
        'error_string' => 'ErrorString',
        'ignored' => 'Ignored'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'success' => 'setSuccess',
        'raw_body' => 'setRawBody',
        'string_body' => 'setStringBody',
        'json_body' => 'setJsonBody',
        'error_string' => 'setErrorString',
        'ignored' => 'setIgnored'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'success' => 'getSuccess',
        'raw_body' => 'getRawBody',
        'string_body' => 'getStringBody',
        'json_body' => 'getJsonBody',
        'error_string' => 'getErrorString',
        'ignored' => 'getIgnored'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['raw_body'] = isset($data['raw_body']) ? $data['raw_body'] : null;
        $this->container['string_body'] = isset($data['string_body']) ? $data['string_body'] : null;
        $this->container['json_body'] = isset($data['json_body']) ? $data['json_body'] : null;
        $this->container['error_string'] = isset($data['error_string']) ? $data['error_string'] : null;
        $this->container['ignored'] = isset($data['ignored']) ? $data['ignored'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['raw_body']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['raw_body'])) {
            $invalid_properties[] = "invalid value for 'raw_body', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['json_body']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['json_body'])) {
            $invalid_properties[] = "invalid value for 'json_body', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

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

        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['raw_body'])) {
            return false;
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['json_body'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param bool $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets raw_body
     * @return string
     */
    public function getRawBody()
    {
        return $this->container['raw_body'];
    }

    /**
     * Sets raw_body
     * @param string $raw_body
     * @return $this
     */
    public function setRawBody($raw_body)
    {

        if (!is_null($raw_body) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $raw_body))) {
            throw new \InvalidArgumentException("invalid value for $raw_body when calling JobsActionOutput., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['raw_body'] = $raw_body;

        return $this;
    }

    /**
     * Gets string_body
     * @return string
     */
    public function getStringBody()
    {
        return $this->container['string_body'];
    }

    /**
     * Sets string_body
     * @param string $string_body
     * @return $this
     */
    public function setStringBody($string_body)
    {
        $this->container['string_body'] = $string_body;

        return $this;
    }

    /**
     * Gets json_body
     * @return string
     */
    public function getJsonBody()
    {
        return $this->container['json_body'];
    }

    /**
     * Sets json_body
     * @param string $json_body
     * @return $this
     */
    public function setJsonBody($json_body)
    {

        if (!is_null($json_body) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $json_body))) {
            throw new \InvalidArgumentException("invalid value for $json_body when calling JobsActionOutput., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['json_body'] = $json_body;

        return $this;
    }

    /**
     * Gets error_string
     * @return string
     */
    public function getErrorString()
    {
        return $this->container['error_string'];
    }

    /**
     * Sets error_string
     * @param string $error_string
     * @return $this
     */
    public function setErrorString($error_string)
    {
        $this->container['error_string'] = $error_string;

        return $this;
    }

    /**
     * Gets ignored
     * @return bool
     */
    public function getIgnored()
    {
        return $this->container['ignored'];
    }

    /**
     * Sets ignored
     * @param bool $ignored
     * @return $this
     */
    public function setIgnored($ignored)
    {
        $this->container['ignored'] = $ignored;

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


