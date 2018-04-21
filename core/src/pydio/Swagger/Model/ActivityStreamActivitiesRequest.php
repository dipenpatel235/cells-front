<?php
/**
 * ActivityStreamActivitiesRequest
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
 * ActivityStreamActivitiesRequest Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityStreamActivitiesRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'activityStreamActivitiesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => '\Swagger\Client\Model\ActivityStreamContext',
        'context_data' => 'string',
        'stream_filter' => 'string',
        'box_name' => 'string',
        'unread_count_only' => 'bool',
        'offset' => 'string',
        'limit' => 'string',
        'as_digest' => 'bool',
        'point_of_view' => '\Swagger\Client\Model\ActivitySummaryPointOfView',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
        'context_data' => null,
        'stream_filter' => null,
        'box_name' => null,
        'unread_count_only' => 'boolean',
        'offset' => 'int64',
        'limit' => 'int64',
        'as_digest' => 'boolean',
        'point_of_view' => null,
        'language' => null
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
        'context' => 'Context',
        'context_data' => 'ContextData',
        'stream_filter' => 'StreamFilter',
        'box_name' => 'BoxName',
        'unread_count_only' => 'UnreadCountOnly',
        'offset' => 'Offset',
        'limit' => 'Limit',
        'as_digest' => 'AsDigest',
        'point_of_view' => 'PointOfView',
        'language' => 'Language'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'context_data' => 'setContextData',
        'stream_filter' => 'setStreamFilter',
        'box_name' => 'setBoxName',
        'unread_count_only' => 'setUnreadCountOnly',
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'as_digest' => 'setAsDigest',
        'point_of_view' => 'setPointOfView',
        'language' => 'setLanguage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'context_data' => 'getContextData',
        'stream_filter' => 'getStreamFilter',
        'box_name' => 'getBoxName',
        'unread_count_only' => 'getUnreadCountOnly',
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'as_digest' => 'getAsDigest',
        'point_of_view' => 'getPointOfView',
        'language' => 'getLanguage'
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['context_data'] = isset($data['context_data']) ? $data['context_data'] : null;
        $this->container['stream_filter'] = isset($data['stream_filter']) ? $data['stream_filter'] : null;
        $this->container['box_name'] = isset($data['box_name']) ? $data['box_name'] : null;
        $this->container['unread_count_only'] = isset($data['unread_count_only']) ? $data['unread_count_only'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['as_digest'] = isset($data['as_digest']) ? $data['as_digest'] : null;
        $this->container['point_of_view'] = isset($data['point_of_view']) ? $data['point_of_view'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
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
     * Gets context
     * @return \Swagger\Client\Model\ActivityStreamContext
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     * @param \Swagger\Client\Model\ActivityStreamContext $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets context_data
     * @return string
     */
    public function getContextData()
    {
        return $this->container['context_data'];
    }

    /**
     * Sets context_data
     * @param string $context_data
     * @return $this
     */
    public function setContextData($context_data)
    {
        $this->container['context_data'] = $context_data;

        return $this;
    }

    /**
     * Gets stream_filter
     * @return string
     */
    public function getStreamFilter()
    {
        return $this->container['stream_filter'];
    }

    /**
     * Sets stream_filter
     * @param string $stream_filter
     * @return $this
     */
    public function setStreamFilter($stream_filter)
    {
        $this->container['stream_filter'] = $stream_filter;

        return $this;
    }

    /**
     * Gets box_name
     * @return string
     */
    public function getBoxName()
    {
        return $this->container['box_name'];
    }

    /**
     * Sets box_name
     * @param string $box_name
     * @return $this
     */
    public function setBoxName($box_name)
    {
        $this->container['box_name'] = $box_name;

        return $this;
    }

    /**
     * Gets unread_count_only
     * @return bool
     */
    public function getUnreadCountOnly()
    {
        return $this->container['unread_count_only'];
    }

    /**
     * Sets unread_count_only
     * @param bool $unread_count_only
     * @return $this
     */
    public function setUnreadCountOnly($unread_count_only)
    {
        $this->container['unread_count_only'] = $unread_count_only;

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
     * Gets as_digest
     * @return bool
     */
    public function getAsDigest()
    {
        return $this->container['as_digest'];
    }

    /**
     * Sets as_digest
     * @param bool $as_digest
     * @return $this
     */
    public function setAsDigest($as_digest)
    {
        $this->container['as_digest'] = $as_digest;

        return $this;
    }

    /**
     * Gets point_of_view
     * @return \Swagger\Client\Model\ActivitySummaryPointOfView
     */
    public function getPointOfView()
    {
        return $this->container['point_of_view'];
    }

    /**
     * Sets point_of_view
     * @param \Swagger\Client\Model\ActivitySummaryPointOfView $point_of_view
     * @return $this
     */
    public function setPointOfView($point_of_view)
    {
        $this->container['point_of_view'] = $point_of_view;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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


