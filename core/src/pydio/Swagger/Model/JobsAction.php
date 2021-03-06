<?php
/**
 * JobsAction
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
 * JobsAction Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobsAction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'jobsAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'nodes_selector' => '\Swagger\Client\Model\JobsNodesSelector',
        'users_selector' => '\Swagger\Client\Model\JobsUsersSelector',
        'nodes_filter' => '\Swagger\Client\Model\JobsNodesSelector',
        'users_filter' => '\Swagger\Client\Model\JobsUsersSelector',
        'source_filter' => '\Swagger\Client\Model\JobsSourceFilter',
        'parameters' => 'map[string,string]',
        'chained_actions' => '\Swagger\Client\Model\JobsAction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'nodes_selector' => null,
        'users_selector' => null,
        'nodes_filter' => null,
        'users_filter' => null,
        'source_filter' => null,
        'parameters' => null,
        'chained_actions' => null
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
        'id' => 'ID',
        'nodes_selector' => 'NodesSelector',
        'users_selector' => 'UsersSelector',
        'nodes_filter' => 'NodesFilter',
        'users_filter' => 'UsersFilter',
        'source_filter' => 'SourceFilter',
        'parameters' => 'Parameters',
        'chained_actions' => 'ChainedActions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nodes_selector' => 'setNodesSelector',
        'users_selector' => 'setUsersSelector',
        'nodes_filter' => 'setNodesFilter',
        'users_filter' => 'setUsersFilter',
        'source_filter' => 'setSourceFilter',
        'parameters' => 'setParameters',
        'chained_actions' => 'setChainedActions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nodes_selector' => 'getNodesSelector',
        'users_selector' => 'getUsersSelector',
        'nodes_filter' => 'getNodesFilter',
        'users_filter' => 'getUsersFilter',
        'source_filter' => 'getSourceFilter',
        'parameters' => 'getParameters',
        'chained_actions' => 'getChainedActions'
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
        $this->container['nodes_selector'] = isset($data['nodes_selector']) ? $data['nodes_selector'] : null;
        $this->container['users_selector'] = isset($data['users_selector']) ? $data['users_selector'] : null;
        $this->container['nodes_filter'] = isset($data['nodes_filter']) ? $data['nodes_filter'] : null;
        $this->container['users_filter'] = isset($data['users_filter']) ? $data['users_filter'] : null;
        $this->container['source_filter'] = isset($data['source_filter']) ? $data['source_filter'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['chained_actions'] = isset($data['chained_actions']) ? $data['chained_actions'] : null;
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
     * Gets nodes_selector
     * @return \Swagger\Client\Model\JobsNodesSelector
     */
    public function getNodesSelector()
    {
        return $this->container['nodes_selector'];
    }

    /**
     * Sets nodes_selector
     * @param \Swagger\Client\Model\JobsNodesSelector $nodes_selector
     * @return $this
     */
    public function setNodesSelector($nodes_selector)
    {
        $this->container['nodes_selector'] = $nodes_selector;

        return $this;
    }

    /**
     * Gets users_selector
     * @return \Swagger\Client\Model\JobsUsersSelector
     */
    public function getUsersSelector()
    {
        return $this->container['users_selector'];
    }

    /**
     * Sets users_selector
     * @param \Swagger\Client\Model\JobsUsersSelector $users_selector
     * @return $this
     */
    public function setUsersSelector($users_selector)
    {
        $this->container['users_selector'] = $users_selector;

        return $this;
    }

    /**
     * Gets nodes_filter
     * @return \Swagger\Client\Model\JobsNodesSelector
     */
    public function getNodesFilter()
    {
        return $this->container['nodes_filter'];
    }

    /**
     * Sets nodes_filter
     * @param \Swagger\Client\Model\JobsNodesSelector $nodes_filter
     * @return $this
     */
    public function setNodesFilter($nodes_filter)
    {
        $this->container['nodes_filter'] = $nodes_filter;

        return $this;
    }

    /**
     * Gets users_filter
     * @return \Swagger\Client\Model\JobsUsersSelector
     */
    public function getUsersFilter()
    {
        return $this->container['users_filter'];
    }

    /**
     * Sets users_filter
     * @param \Swagger\Client\Model\JobsUsersSelector $users_filter
     * @return $this
     */
    public function setUsersFilter($users_filter)
    {
        $this->container['users_filter'] = $users_filter;

        return $this;
    }

    /**
     * Gets source_filter
     * @return \Swagger\Client\Model\JobsSourceFilter
     */
    public function getSourceFilter()
    {
        return $this->container['source_filter'];
    }

    /**
     * Sets source_filter
     * @param \Swagger\Client\Model\JobsSourceFilter $source_filter
     * @return $this
     */
    public function setSourceFilter($source_filter)
    {
        $this->container['source_filter'] = $source_filter;

        return $this;
    }

    /**
     * Gets parameters
     * @return map[string,string]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     * @param map[string,string] $parameters
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets chained_actions
     * @return \Swagger\Client\Model\JobsAction[]
     */
    public function getChainedActions()
    {
        return $this->container['chained_actions'];
    }

    /**
     * Sets chained_actions
     * @param \Swagger\Client\Model\JobsAction[] $chained_actions
     * @return $this
     */
    public function setChainedActions($chained_actions)
    {
        $this->container['chained_actions'] = $chained_actions;

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


