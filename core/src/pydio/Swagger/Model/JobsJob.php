<?php
/**
 * JobsJob
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
 * JobsJob Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobsJob implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'jobsJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'label' => 'string',
        'owner' => 'string',
        'inactive' => 'bool',
        'languages' => 'string[]',
        'event_names' => 'string[]',
        'schedule' => '\Swagger\Client\Model\JobsSchedule',
        'auto_start' => 'bool',
        'auto_clean' => 'bool',
        'actions' => '\Swagger\Client\Model\JobsAction[]',
        'max_concurrency' => 'int',
        'tasks' => '\Swagger\Client\Model\JobsTask[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'label' => null,
        'owner' => null,
        'inactive' => 'boolean',
        'languages' => null,
        'event_names' => null,
        'schedule' => null,
        'auto_start' => 'boolean',
        'auto_clean' => 'boolean',
        'actions' => null,
        'max_concurrency' => 'int32',
        'tasks' => null
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
        'label' => 'Label',
        'owner' => 'Owner',
        'inactive' => 'Inactive',
        'languages' => 'Languages',
        'event_names' => 'EventNames',
        'schedule' => 'Schedule',
        'auto_start' => 'AutoStart',
        'auto_clean' => 'AutoClean',
        'actions' => 'Actions',
        'max_concurrency' => 'MaxConcurrency',
        'tasks' => 'Tasks'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'label' => 'setLabel',
        'owner' => 'setOwner',
        'inactive' => 'setInactive',
        'languages' => 'setLanguages',
        'event_names' => 'setEventNames',
        'schedule' => 'setSchedule',
        'auto_start' => 'setAutoStart',
        'auto_clean' => 'setAutoClean',
        'actions' => 'setActions',
        'max_concurrency' => 'setMaxConcurrency',
        'tasks' => 'setTasks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'label' => 'getLabel',
        'owner' => 'getOwner',
        'inactive' => 'getInactive',
        'languages' => 'getLanguages',
        'event_names' => 'getEventNames',
        'schedule' => 'getSchedule',
        'auto_start' => 'getAutoStart',
        'auto_clean' => 'getAutoClean',
        'actions' => 'getActions',
        'max_concurrency' => 'getMaxConcurrency',
        'tasks' => 'getTasks'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['inactive'] = isset($data['inactive']) ? $data['inactive'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['event_names'] = isset($data['event_names']) ? $data['event_names'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['auto_start'] = isset($data['auto_start']) ? $data['auto_start'] : null;
        $this->container['auto_clean'] = isset($data['auto_clean']) ? $data['auto_clean'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['max_concurrency'] = isset($data['max_concurrency']) ? $data['max_concurrency'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
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
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param string $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets inactive
     * @return bool
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     * @param bool $inactive
     * @return $this
     */
    public function setInactive($inactive)
    {
        $this->container['inactive'] = $inactive;

        return $this;
    }

    /**
     * Gets languages
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     * @param string[] $languages
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets event_names
     * @return string[]
     */
    public function getEventNames()
    {
        return $this->container['event_names'];
    }

    /**
     * Sets event_names
     * @param string[] $event_names
     * @return $this
     */
    public function setEventNames($event_names)
    {
        $this->container['event_names'] = $event_names;

        return $this;
    }

    /**
     * Gets schedule
     * @return \Swagger\Client\Model\JobsSchedule
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     * @param \Swagger\Client\Model\JobsSchedule $schedule
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets auto_start
     * @return bool
     */
    public function getAutoStart()
    {
        return $this->container['auto_start'];
    }

    /**
     * Sets auto_start
     * @param bool $auto_start
     * @return $this
     */
    public function setAutoStart($auto_start)
    {
        $this->container['auto_start'] = $auto_start;

        return $this;
    }

    /**
     * Gets auto_clean
     * @return bool
     */
    public function getAutoClean()
    {
        return $this->container['auto_clean'];
    }

    /**
     * Sets auto_clean
     * @param bool $auto_clean
     * @return $this
     */
    public function setAutoClean($auto_clean)
    {
        $this->container['auto_clean'] = $auto_clean;

        return $this;
    }

    /**
     * Gets actions
     * @return \Swagger\Client\Model\JobsAction[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     * @param \Swagger\Client\Model\JobsAction[] $actions
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets max_concurrency
     * @return int
     */
    public function getMaxConcurrency()
    {
        return $this->container['max_concurrency'];
    }

    /**
     * Sets max_concurrency
     * @param int $max_concurrency
     * @return $this
     */
    public function setMaxConcurrency($max_concurrency)
    {
        $this->container['max_concurrency'] = $max_concurrency;

        return $this;
    }

    /**
     * Gets tasks
     * @return \Swagger\Client\Model\JobsTask[]
     */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
     * Sets tasks
     * @param \Swagger\Client\Model\JobsTask[] $tasks
     * @return $this
     */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;

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


