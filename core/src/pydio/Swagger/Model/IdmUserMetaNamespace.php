<?php
/**
 * IdmUserMetaNamespace
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
 * IdmUserMetaNamespace Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IdmUserMetaNamespace implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'idmUserMetaNamespace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'namespace' => 'string',
        'label' => 'string',
        'order' => 'int',
        'indexable' => 'bool',
        'json_definition' => 'string',
        'policies' => '\Swagger\Client\Model\ServiceResourcePolicy[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'namespace' => null,
        'label' => null,
        'order' => 'int32',
        'indexable' => 'boolean',
        'json_definition' => null,
        'policies' => null
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
        'namespace' => 'Namespace',
        'label' => 'Label',
        'order' => 'Order',
        'indexable' => 'Indexable',
        'json_definition' => 'JsonDefinition',
        'policies' => 'Policies'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'namespace' => 'setNamespace',
        'label' => 'setLabel',
        'order' => 'setOrder',
        'indexable' => 'setIndexable',
        'json_definition' => 'setJsonDefinition',
        'policies' => 'setPolicies'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'namespace' => 'getNamespace',
        'label' => 'getLabel',
        'order' => 'getOrder',
        'indexable' => 'getIndexable',
        'json_definition' => 'getJsonDefinition',
        'policies' => 'getPolicies'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['indexable'] = isset($data['indexable']) ? $data['indexable'] : null;
        $this->container['json_definition'] = isset($data['json_definition']) ? $data['json_definition'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
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
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     * @param string $namespace
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets indexable
     * @return bool
     */
    public function getIndexable()
    {
        return $this->container['indexable'];
    }

    /**
     * Sets indexable
     * @param bool $indexable
     * @return $this
     */
    public function setIndexable($indexable)
    {
        $this->container['indexable'] = $indexable;

        return $this;
    }

    /**
     * Gets json_definition
     * @return string
     */
    public function getJsonDefinition()
    {
        return $this->container['json_definition'];
    }

    /**
     * Sets json_definition
     * @param string $json_definition
     * @return $this
     */
    public function setJsonDefinition($json_definition)
    {
        $this->container['json_definition'] = $json_definition;

        return $this;
    }

    /**
     * Gets policies
     * @return \Swagger\Client\Model\ServiceResourcePolicy[]
     */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
     * Sets policies
     * @param \Swagger\Client\Model\ServiceResourcePolicy[] $policies
     * @return $this
     */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;

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


