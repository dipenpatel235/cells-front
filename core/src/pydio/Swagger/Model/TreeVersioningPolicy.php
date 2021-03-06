<?php
/**
 * TreeVersioningPolicy
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
 * TreeVersioningPolicy Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TreeVersioningPolicy implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'treeVersioningPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
        'name' => 'string',
        'description' => 'string',
        'versions_data_source_name' => 'string',
        'versions_data_source_bucket' => 'string',
        'max_total_size' => 'string',
        'max_size_per_file' => 'string',
        'ignore_files_greater_than' => 'string',
        'keep_periods' => '\Swagger\Client\Model\TreeVersioningKeepPeriod[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => null,
        'name' => null,
        'description' => null,
        'versions_data_source_name' => null,
        'versions_data_source_bucket' => null,
        'max_total_size' => 'int64',
        'max_size_per_file' => 'int64',
        'ignore_files_greater_than' => 'int64',
        'keep_periods' => null
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
        'uuid' => 'Uuid',
        'name' => 'Name',
        'description' => 'Description',
        'versions_data_source_name' => 'VersionsDataSourceName',
        'versions_data_source_bucket' => 'VersionsDataSourceBucket',
        'max_total_size' => 'MaxTotalSize',
        'max_size_per_file' => 'MaxSizePerFile',
        'ignore_files_greater_than' => 'IgnoreFilesGreaterThan',
        'keep_periods' => 'KeepPeriods'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'name' => 'setName',
        'description' => 'setDescription',
        'versions_data_source_name' => 'setVersionsDataSourceName',
        'versions_data_source_bucket' => 'setVersionsDataSourceBucket',
        'max_total_size' => 'setMaxTotalSize',
        'max_size_per_file' => 'setMaxSizePerFile',
        'ignore_files_greater_than' => 'setIgnoreFilesGreaterThan',
        'keep_periods' => 'setKeepPeriods'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'name' => 'getName',
        'description' => 'getDescription',
        'versions_data_source_name' => 'getVersionsDataSourceName',
        'versions_data_source_bucket' => 'getVersionsDataSourceBucket',
        'max_total_size' => 'getMaxTotalSize',
        'max_size_per_file' => 'getMaxSizePerFile',
        'ignore_files_greater_than' => 'getIgnoreFilesGreaterThan',
        'keep_periods' => 'getKeepPeriods'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versions_data_source_name'] = isset($data['versions_data_source_name']) ? $data['versions_data_source_name'] : null;
        $this->container['versions_data_source_bucket'] = isset($data['versions_data_source_bucket']) ? $data['versions_data_source_bucket'] : null;
        $this->container['max_total_size'] = isset($data['max_total_size']) ? $data['max_total_size'] : null;
        $this->container['max_size_per_file'] = isset($data['max_size_per_file']) ? $data['max_size_per_file'] : null;
        $this->container['ignore_files_greater_than'] = isset($data['ignore_files_greater_than']) ? $data['ignore_files_greater_than'] : null;
        $this->container['keep_periods'] = isset($data['keep_periods']) ? $data['keep_periods'] : null;
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
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets versions_data_source_name
     * @return string
     */
    public function getVersionsDataSourceName()
    {
        return $this->container['versions_data_source_name'];
    }

    /**
     * Sets versions_data_source_name
     * @param string $versions_data_source_name
     * @return $this
     */
    public function setVersionsDataSourceName($versions_data_source_name)
    {
        $this->container['versions_data_source_name'] = $versions_data_source_name;

        return $this;
    }

    /**
     * Gets versions_data_source_bucket
     * @return string
     */
    public function getVersionsDataSourceBucket()
    {
        return $this->container['versions_data_source_bucket'];
    }

    /**
     * Sets versions_data_source_bucket
     * @param string $versions_data_source_bucket
     * @return $this
     */
    public function setVersionsDataSourceBucket($versions_data_source_bucket)
    {
        $this->container['versions_data_source_bucket'] = $versions_data_source_bucket;

        return $this;
    }

    /**
     * Gets max_total_size
     * @return string
     */
    public function getMaxTotalSize()
    {
        return $this->container['max_total_size'];
    }

    /**
     * Sets max_total_size
     * @param string $max_total_size
     * @return $this
     */
    public function setMaxTotalSize($max_total_size)
    {
        $this->container['max_total_size'] = $max_total_size;

        return $this;
    }

    /**
     * Gets max_size_per_file
     * @return string
     */
    public function getMaxSizePerFile()
    {
        return $this->container['max_size_per_file'];
    }

    /**
     * Sets max_size_per_file
     * @param string $max_size_per_file
     * @return $this
     */
    public function setMaxSizePerFile($max_size_per_file)
    {
        $this->container['max_size_per_file'] = $max_size_per_file;

        return $this;
    }

    /**
     * Gets ignore_files_greater_than
     * @return string
     */
    public function getIgnoreFilesGreaterThan()
    {
        return $this->container['ignore_files_greater_than'];
    }

    /**
     * Sets ignore_files_greater_than
     * @param string $ignore_files_greater_than
     * @return $this
     */
    public function setIgnoreFilesGreaterThan($ignore_files_greater_than)
    {
        $this->container['ignore_files_greater_than'] = $ignore_files_greater_than;

        return $this;
    }

    /**
     * Gets keep_periods
     * @return \Swagger\Client\Model\TreeVersioningKeepPeriod[]
     */
    public function getKeepPeriods()
    {
        return $this->container['keep_periods'];
    }

    /**
     * Sets keep_periods
     * @param \Swagger\Client\Model\TreeVersioningKeepPeriod[] $keep_periods
     * @return $this
     */
    public function setKeepPeriods($keep_periods)
    {
        $this->container['keep_periods'] = $keep_periods;

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


