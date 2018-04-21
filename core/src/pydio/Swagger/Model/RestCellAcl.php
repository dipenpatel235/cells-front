<?php
/**
 * RestCellAcl
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
 * RestCellAcl Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RestCellAcl implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'restCellAcl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'role_id' => 'string',
        'actions' => '\Swagger\Client\Model\IdmACLAction[]',
        'is_user_role' => 'bool',
        'user' => '\Swagger\Client\Model\IdmUser',
        'group' => '\Swagger\Client\Model\IdmUser',
        'role' => '\Swagger\Client\Model\IdmRole'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'role_id' => null,
        'actions' => null,
        'is_user_role' => 'boolean',
        'user' => null,
        'group' => null,
        'role' => null
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
        'role_id' => 'RoleId',
        'actions' => 'Actions',
        'is_user_role' => 'IsUserRole',
        'user' => 'User',
        'group' => 'Group',
        'role' => 'Role'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'role_id' => 'setRoleId',
        'actions' => 'setActions',
        'is_user_role' => 'setIsUserRole',
        'user' => 'setUser',
        'group' => 'setGroup',
        'role' => 'setRole'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'role_id' => 'getRoleId',
        'actions' => 'getActions',
        'is_user_role' => 'getIsUserRole',
        'user' => 'getUser',
        'group' => 'getGroup',
        'role' => 'getRole'
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
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['is_user_role'] = isset($data['is_user_role']) ? $data['is_user_role'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
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
     * Gets role_id
     * @return string
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     * @param string $role_id
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets actions
     * @return \Swagger\Client\Model\IdmACLAction[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     * @param \Swagger\Client\Model\IdmACLAction[] $actions
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets is_user_role
     * @return bool
     */
    public function getIsUserRole()
    {
        return $this->container['is_user_role'];
    }

    /**
     * Sets is_user_role
     * @param bool $is_user_role
     * @return $this
     */
    public function setIsUserRole($is_user_role)
    {
        $this->container['is_user_role'] = $is_user_role;

        return $this;
    }

    /**
     * Gets user
     * @return \Swagger\Client\Model\IdmUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \Swagger\Client\Model\IdmUser $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets group
     * @return \Swagger\Client\Model\IdmUser
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     * @param \Swagger\Client\Model\IdmUser $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets role
     * @return \Swagger\Client\Model\IdmRole
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param \Swagger\Client\Model\IdmRole $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

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


