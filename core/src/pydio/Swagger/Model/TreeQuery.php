<?php
/**
 * TreeQuery
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
 * TreeQuery Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TreeQuery implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'treeQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'path_prefix' => 'string[]',
        'min_size' => 'string',
        'max_size' => 'string',
        'min_date' => 'string',
        'max_date' => 'string',
        'type' => '\Swagger\Client\Model\TreeNodeType',
        'file_name' => 'string',
        'content' => 'string',
        'free_string' => 'string',
        'extension' => 'string',
        'geo_query' => '\Swagger\Client\Model\TreeGeoQuery'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'path_prefix' => null,
        'min_size' => 'int64',
        'max_size' => 'int64',
        'min_date' => 'int64',
        'max_date' => 'int64',
        'type' => null,
        'file_name' => null,
        'content' => null,
        'free_string' => null,
        'extension' => null,
        'geo_query' => null
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
        'path_prefix' => 'PathPrefix',
        'min_size' => 'MinSize',
        'max_size' => 'MaxSize',
        'min_date' => 'MinDate',
        'max_date' => 'MaxDate',
        'type' => 'Type',
        'file_name' => 'FileName',
        'content' => 'Content',
        'free_string' => 'FreeString',
        'extension' => 'Extension',
        'geo_query' => 'GeoQuery'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'path_prefix' => 'setPathPrefix',
        'min_size' => 'setMinSize',
        'max_size' => 'setMaxSize',
        'min_date' => 'setMinDate',
        'max_date' => 'setMaxDate',
        'type' => 'setType',
        'file_name' => 'setFileName',
        'content' => 'setContent',
        'free_string' => 'setFreeString',
        'extension' => 'setExtension',
        'geo_query' => 'setGeoQuery'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'path_prefix' => 'getPathPrefix',
        'min_size' => 'getMinSize',
        'max_size' => 'getMaxSize',
        'min_date' => 'getMinDate',
        'max_date' => 'getMaxDate',
        'type' => 'getType',
        'file_name' => 'getFileName',
        'content' => 'getContent',
        'free_string' => 'getFreeString',
        'extension' => 'getExtension',
        'geo_query' => 'getGeoQuery'
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
        $this->container['path_prefix'] = isset($data['path_prefix']) ? $data['path_prefix'] : null;
        $this->container['min_size'] = isset($data['min_size']) ? $data['min_size'] : null;
        $this->container['max_size'] = isset($data['max_size']) ? $data['max_size'] : null;
        $this->container['min_date'] = isset($data['min_date']) ? $data['min_date'] : null;
        $this->container['max_date'] = isset($data['max_date']) ? $data['max_date'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['free_string'] = isset($data['free_string']) ? $data['free_string'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['geo_query'] = isset($data['geo_query']) ? $data['geo_query'] : null;
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
     * Gets path_prefix
     * @return string[]
     */
    public function getPathPrefix()
    {
        return $this->container['path_prefix'];
    }

    /**
     * Sets path_prefix
     * @param string[] $path_prefix
     * @return $this
     */
    public function setPathPrefix($path_prefix)
    {
        $this->container['path_prefix'] = $path_prefix;

        return $this;
    }

    /**
     * Gets min_size
     * @return string
     */
    public function getMinSize()
    {
        return $this->container['min_size'];
    }

    /**
     * Sets min_size
     * @param string $min_size
     * @return $this
     */
    public function setMinSize($min_size)
    {
        $this->container['min_size'] = $min_size;

        return $this;
    }

    /**
     * Gets max_size
     * @return string
     */
    public function getMaxSize()
    {
        return $this->container['max_size'];
    }

    /**
     * Sets max_size
     * @param string $max_size
     * @return $this
     */
    public function setMaxSize($max_size)
    {
        $this->container['max_size'] = $max_size;

        return $this;
    }

    /**
     * Gets min_date
     * @return string
     */
    public function getMinDate()
    {
        return $this->container['min_date'];
    }

    /**
     * Sets min_date
     * @param string $min_date
     * @return $this
     */
    public function setMinDate($min_date)
    {
        $this->container['min_date'] = $min_date;

        return $this;
    }

    /**
     * Gets max_date
     * @return string
     */
    public function getMaxDate()
    {
        return $this->container['max_date'];
    }

    /**
     * Sets max_date
     * @param string $max_date
     * @return $this
     */
    public function setMaxDate($max_date)
    {
        $this->container['max_date'] = $max_date;

        return $this;
    }

    /**
     * Gets type
     * @return \Swagger\Client\Model\TreeNodeType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param \Swagger\Client\Model\TreeNodeType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets file_name
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     * @param string $file_name
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets free_string
     * @return string
     */
    public function getFreeString()
    {
        return $this->container['free_string'];
    }

    /**
     * Sets free_string
     * @param string $free_string
     * @return $this
     */
    public function setFreeString($free_string)
    {
        $this->container['free_string'] = $free_string;

        return $this;
    }

    /**
     * Gets extension
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets geo_query
     * @return \Swagger\Client\Model\TreeGeoQuery
     */
    public function getGeoQuery()
    {
        return $this->container['geo_query'];
    }

    /**
     * Sets geo_query
     * @param \Swagger\Client\Model\TreeGeoQuery $geo_query
     * @return $this
     */
    public function setGeoQuery($geo_query)
    {
        $this->container['geo_query'] = $geo_query;

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


