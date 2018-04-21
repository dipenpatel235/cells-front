<?php
/**
 * LogLogMessage
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
 * LogLogMessage Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LogLogMessage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'logLogMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ts' => 'int',
        'level' => 'string',
        'logger' => 'string',
        'msg' => 'string',
        'msg_id' => 'string',
        'user_name' => 'string',
        'user_uuid' => 'string',
        'group_path' => 'string',
        'profile' => 'string',
        'role_uuids' => 'string[]',
        'remote_address' => 'string',
        'user_agent' => 'string',
        'http_protocol' => 'string',
        'node_uuid' => 'string',
        'node_path' => 'string',
        'ws_uuid' => 'string',
        'ws_scope' => 'string',
        'span_uuid' => 'string',
        'span_parent_uuid' => 'string',
        'span_root_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ts' => 'int32',
        'level' => null,
        'logger' => null,
        'msg' => null,
        'msg_id' => null,
        'user_name' => null,
        'user_uuid' => null,
        'group_path' => null,
        'profile' => null,
        'role_uuids' => null,
        'remote_address' => null,
        'user_agent' => null,
        'http_protocol' => null,
        'node_uuid' => null,
        'node_path' => null,
        'ws_uuid' => null,
        'ws_scope' => null,
        'span_uuid' => null,
        'span_parent_uuid' => null,
        'span_root_uuid' => null
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
        'ts' => 'Ts',
        'level' => 'Level',
        'logger' => 'Logger',
        'msg' => 'Msg',
        'msg_id' => 'MsgId',
        'user_name' => 'UserName',
        'user_uuid' => 'UserUuid',
        'group_path' => 'GroupPath',
        'profile' => 'Profile',
        'role_uuids' => 'RoleUuids',
        'remote_address' => 'RemoteAddress',
        'user_agent' => 'UserAgent',
        'http_protocol' => 'HttpProtocol',
        'node_uuid' => 'NodeUuid',
        'node_path' => 'NodePath',
        'ws_uuid' => 'WsUuid',
        'ws_scope' => 'WsScope',
        'span_uuid' => 'SpanUuid',
        'span_parent_uuid' => 'SpanParentUuid',
        'span_root_uuid' => 'SpanRootUuid'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ts' => 'setTs',
        'level' => 'setLevel',
        'logger' => 'setLogger',
        'msg' => 'setMsg',
        'msg_id' => 'setMsgId',
        'user_name' => 'setUserName',
        'user_uuid' => 'setUserUuid',
        'group_path' => 'setGroupPath',
        'profile' => 'setProfile',
        'role_uuids' => 'setRoleUuids',
        'remote_address' => 'setRemoteAddress',
        'user_agent' => 'setUserAgent',
        'http_protocol' => 'setHttpProtocol',
        'node_uuid' => 'setNodeUuid',
        'node_path' => 'setNodePath',
        'ws_uuid' => 'setWsUuid',
        'ws_scope' => 'setWsScope',
        'span_uuid' => 'setSpanUuid',
        'span_parent_uuid' => 'setSpanParentUuid',
        'span_root_uuid' => 'setSpanRootUuid'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ts' => 'getTs',
        'level' => 'getLevel',
        'logger' => 'getLogger',
        'msg' => 'getMsg',
        'msg_id' => 'getMsgId',
        'user_name' => 'getUserName',
        'user_uuid' => 'getUserUuid',
        'group_path' => 'getGroupPath',
        'profile' => 'getProfile',
        'role_uuids' => 'getRoleUuids',
        'remote_address' => 'getRemoteAddress',
        'user_agent' => 'getUserAgent',
        'http_protocol' => 'getHttpProtocol',
        'node_uuid' => 'getNodeUuid',
        'node_path' => 'getNodePath',
        'ws_uuid' => 'getWsUuid',
        'ws_scope' => 'getWsScope',
        'span_uuid' => 'getSpanUuid',
        'span_parent_uuid' => 'getSpanParentUuid',
        'span_root_uuid' => 'getSpanRootUuid'
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
        $this->container['ts'] = isset($data['ts']) ? $data['ts'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['logger'] = isset($data['logger']) ? $data['logger'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['msg_id'] = isset($data['msg_id']) ? $data['msg_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['user_uuid'] = isset($data['user_uuid']) ? $data['user_uuid'] : null;
        $this->container['group_path'] = isset($data['group_path']) ? $data['group_path'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['role_uuids'] = isset($data['role_uuids']) ? $data['role_uuids'] : null;
        $this->container['remote_address'] = isset($data['remote_address']) ? $data['remote_address'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
        $this->container['http_protocol'] = isset($data['http_protocol']) ? $data['http_protocol'] : null;
        $this->container['node_uuid'] = isset($data['node_uuid']) ? $data['node_uuid'] : null;
        $this->container['node_path'] = isset($data['node_path']) ? $data['node_path'] : null;
        $this->container['ws_uuid'] = isset($data['ws_uuid']) ? $data['ws_uuid'] : null;
        $this->container['ws_scope'] = isset($data['ws_scope']) ? $data['ws_scope'] : null;
        $this->container['span_uuid'] = isset($data['span_uuid']) ? $data['span_uuid'] : null;
        $this->container['span_parent_uuid'] = isset($data['span_parent_uuid']) ? $data['span_parent_uuid'] : null;
        $this->container['span_root_uuid'] = isset($data['span_root_uuid']) ? $data['span_root_uuid'] : null;
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
     * Gets ts
     * @return int
     */
    public function getTs()
    {
        return $this->container['ts'];
    }

    /**
     * Sets ts
     * @param int $ts
     * @return $this
     */
    public function setTs($ts)
    {
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets level
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param string $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets logger
     * @return string
     */
    public function getLogger()
    {
        return $this->container['logger'];
    }

    /**
     * Sets logger
     * @param string $logger
     * @return $this
     */
    public function setLogger($logger)
    {
        $this->container['logger'] = $logger;

        return $this;
    }

    /**
     * Gets msg
     * @return string
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     * @param string $msg
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets msg_id
     * @return string
     */
    public function getMsgId()
    {
        return $this->container['msg_id'];
    }

    /**
     * Sets msg_id
     * @param string $msg_id
     * @return $this
     */
    public function setMsgId($msg_id)
    {
        $this->container['msg_id'] = $msg_id;

        return $this;
    }

    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     * @param string $user_name
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets user_uuid
     * @return string
     */
    public function getUserUuid()
    {
        return $this->container['user_uuid'];
    }

    /**
     * Sets user_uuid
     * @param string $user_uuid
     * @return $this
     */
    public function setUserUuid($user_uuid)
    {
        $this->container['user_uuid'] = $user_uuid;

        return $this;
    }

    /**
     * Gets group_path
     * @return string
     */
    public function getGroupPath()
    {
        return $this->container['group_path'];
    }

    /**
     * Sets group_path
     * @param string $group_path
     * @return $this
     */
    public function setGroupPath($group_path)
    {
        $this->container['group_path'] = $group_path;

        return $this;
    }

    /**
     * Gets profile
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     * @param string $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets role_uuids
     * @return string[]
     */
    public function getRoleUuids()
    {
        return $this->container['role_uuids'];
    }

    /**
     * Sets role_uuids
     * @param string[] $role_uuids
     * @return $this
     */
    public function setRoleUuids($role_uuids)
    {
        $this->container['role_uuids'] = $role_uuids;

        return $this;
    }

    /**
     * Gets remote_address
     * @return string
     */
    public function getRemoteAddress()
    {
        return $this->container['remote_address'];
    }

    /**
     * Sets remote_address
     * @param string $remote_address
     * @return $this
     */
    public function setRemoteAddress($remote_address)
    {
        $this->container['remote_address'] = $remote_address;

        return $this;
    }

    /**
     * Gets user_agent
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     * @param string $user_agent
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets http_protocol
     * @return string
     */
    public function getHttpProtocol()
    {
        return $this->container['http_protocol'];
    }

    /**
     * Sets http_protocol
     * @param string $http_protocol
     * @return $this
     */
    public function setHttpProtocol($http_protocol)
    {
        $this->container['http_protocol'] = $http_protocol;

        return $this;
    }

    /**
     * Gets node_uuid
     * @return string
     */
    public function getNodeUuid()
    {
        return $this->container['node_uuid'];
    }

    /**
     * Sets node_uuid
     * @param string $node_uuid
     * @return $this
     */
    public function setNodeUuid($node_uuid)
    {
        $this->container['node_uuid'] = $node_uuid;

        return $this;
    }

    /**
     * Gets node_path
     * @return string
     */
    public function getNodePath()
    {
        return $this->container['node_path'];
    }

    /**
     * Sets node_path
     * @param string $node_path
     * @return $this
     */
    public function setNodePath($node_path)
    {
        $this->container['node_path'] = $node_path;

        return $this;
    }

    /**
     * Gets ws_uuid
     * @return string
     */
    public function getWsUuid()
    {
        return $this->container['ws_uuid'];
    }

    /**
     * Sets ws_uuid
     * @param string $ws_uuid
     * @return $this
     */
    public function setWsUuid($ws_uuid)
    {
        $this->container['ws_uuid'] = $ws_uuid;

        return $this;
    }

    /**
     * Gets ws_scope
     * @return string
     */
    public function getWsScope()
    {
        return $this->container['ws_scope'];
    }

    /**
     * Sets ws_scope
     * @param string $ws_scope
     * @return $this
     */
    public function setWsScope($ws_scope)
    {
        $this->container['ws_scope'] = $ws_scope;

        return $this;
    }

    /**
     * Gets span_uuid
     * @return string
     */
    public function getSpanUuid()
    {
        return $this->container['span_uuid'];
    }

    /**
     * Sets span_uuid
     * @param string $span_uuid
     * @return $this
     */
    public function setSpanUuid($span_uuid)
    {
        $this->container['span_uuid'] = $span_uuid;

        return $this;
    }

    /**
     * Gets span_parent_uuid
     * @return string
     */
    public function getSpanParentUuid()
    {
        return $this->container['span_parent_uuid'];
    }

    /**
     * Sets span_parent_uuid
     * @param string $span_parent_uuid
     * @return $this
     */
    public function setSpanParentUuid($span_parent_uuid)
    {
        $this->container['span_parent_uuid'] = $span_parent_uuid;

        return $this;
    }

    /**
     * Gets span_root_uuid
     * @return string
     */
    public function getSpanRootUuid()
    {
        return $this->container['span_root_uuid'];
    }

    /**
     * Sets span_root_uuid
     * @param string $span_root_uuid
     * @return $this
     */
    public function setSpanRootUuid($span_root_uuid)
    {
        $this->container['span_root_uuid'] = $span_root_uuid;

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


