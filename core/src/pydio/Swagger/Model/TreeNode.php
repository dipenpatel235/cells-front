<?php
/**
 * TreeNode
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
 * TreeNode Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TreeNode implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'treeNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
        'path' => 'string',
        'type' => '\Swagger\Client\Model\TreeNodeType',
        'size' => 'string',
        'm_time' => 'string',
        'mode' => 'int',
        'etag' => 'string',
        'commits' => '\Swagger\Client\Model\TreeChangeLog[]',
        'meta_store' => 'map[string,string]',
        'appears_in' => '\Swagger\Client\Model\TreeWorkspaceRelativePath[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => null,
        'path' => null,
        'type' => null,
        'size' => 'int64',
        'm_time' => 'int64',
        'mode' => 'int32',
        'etag' => null,
        'commits' => null,
        'meta_store' => null,
        'appears_in' => null
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
        'path' => 'Path',
        'type' => 'Type',
        'size' => 'Size',
        'm_time' => 'MTime',
        'mode' => 'Mode',
        'etag' => 'Etag',
        'commits' => 'Commits',
        'meta_store' => 'MetaStore',
        'appears_in' => 'AppearsIn'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'path' => 'setPath',
        'type' => 'setType',
        'size' => 'setSize',
        'm_time' => 'setMTime',
        'mode' => 'setMode',
        'etag' => 'setEtag',
        'commits' => 'setCommits',
        'meta_store' => 'setMetaStore',
        'appears_in' => 'setAppearsIn'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'path' => 'getPath',
        'type' => 'getType',
        'size' => 'getSize',
        'm_time' => 'getMTime',
        'mode' => 'getMode',
        'etag' => 'getEtag',
        'commits' => 'getCommits',
        'meta_store' => 'getMetaStore',
        'appears_in' => 'getAppearsIn'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['m_time'] = isset($data['m_time']) ? $data['m_time'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
        $this->container['commits'] = isset($data['commits']) ? $data['commits'] : null;
        $this->container['meta_store'] = isset($data['meta_store']) ? $data['meta_store'] : null;
        $this->container['appears_in'] = isset($data['appears_in']) ? $data['appears_in'] : null;
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
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

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
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param string $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets m_time
     * @return string
     */
    public function getMTime()
    {
        return $this->container['m_time'];
    }

    /**
     * Sets m_time
     * @param string $m_time
     * @return $this
     */
    public function setMTime($m_time)
    {
        $this->container['m_time'] = $m_time;

        return $this;
    }

    /**
     * Gets mode
     * @return int
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param int $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets etag
     * @return string
     */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
     * Sets etag
     * @param string $etag
     * @return $this
     */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;

        return $this;
    }

    /**
     * Gets commits
     * @return \Swagger\Client\Model\TreeChangeLog[]
     */
    public function getCommits()
    {
        return $this->container['commits'];
    }

    /**
     * Sets commits
     * @param \Swagger\Client\Model\TreeChangeLog[] $commits
     * @return $this
     */
    public function setCommits($commits)
    {
        $this->container['commits'] = $commits;

        return $this;
    }

    /**
     * Gets meta_store
     * @return map[string,string]
     */
    public function getMetaStore()
    {
        return $this->container['meta_store'];
    }

    /**
     * Sets meta_store
     * @param map[string,string] $meta_store
     * @return $this
     */
    public function setMetaStore($meta_store)
    {
        $this->container['meta_store'] = $meta_store;

        return $this;
    }

    /**
     * Gets appears_in
     * @return \Swagger\Client\Model\TreeWorkspaceRelativePath[]
     */
    public function getAppearsIn()
    {
        return $this->container['appears_in'];
    }

    /**
     * Sets appears_in
     * @param \Swagger\Client\Model\TreeWorkspaceRelativePath[] $appears_in
     * @return $this
     */
    public function setAppearsIn($appears_in)
    {
        $this->container['appears_in'] = $appears_in;

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


