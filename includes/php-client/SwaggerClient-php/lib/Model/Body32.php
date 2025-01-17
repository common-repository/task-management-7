<?php
/**
 * Body32
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RestyaBoard
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Body32 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body32 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_32';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'copied_card_id' => 'int',
        'keep_activities' => 'bool',
        'keep_attachments' => 'bool',
        'keep_checklists' => 'bool',
        'keep_labels' => 'bool',
        'keep_users' => 'bool',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'copied_card_id' => null,
        'keep_activities' => null,
        'keep_attachments' => null,
        'keep_checklists' => null,
        'keep_labels' => null,
        'keep_users' => null,
        'name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'copied_card_id' => 'copied_card_id',
        'keep_activities' => 'keep_activities',
        'keep_attachments' => 'keep_attachments',
        'keep_checklists' => 'keep_checklists',
        'keep_labels' => 'keep_labels',
        'keep_users' => 'keep_users',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'copied_card_id' => 'setCopiedCardId',
        'keep_activities' => 'setKeepActivities',
        'keep_attachments' => 'setKeepAttachments',
        'keep_checklists' => 'setKeepChecklists',
        'keep_labels' => 'setKeepLabels',
        'keep_users' => 'setKeepUsers',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'copied_card_id' => 'getCopiedCardId',
        'keep_activities' => 'getKeepActivities',
        'keep_attachments' => 'getKeepAttachments',
        'keep_checklists' => 'getKeepChecklists',
        'keep_labels' => 'getKeepLabels',
        'keep_users' => 'getKeepUsers',
        'name' => 'getName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['copied_card_id'] = isset($data['copied_card_id']) ? $data['copied_card_id'] : null;
        $this->container['keep_activities'] = isset($data['keep_activities']) ? $data['keep_activities'] : true;
        $this->container['keep_attachments'] = isset($data['keep_attachments']) ? $data['keep_attachments'] : true;
        $this->container['keep_checklists'] = isset($data['keep_checklists']) ? $data['keep_checklists'] : true;
        $this->container['keep_labels'] = isset($data['keep_labels']) ? $data['keep_labels'] : true;
        $this->container['keep_users'] = isset($data['keep_users']) ? $data['keep_users'] : true;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets copied_card_id
     *
     * @return int
     */
    public function getCopiedCardId()
    {
        return $this->container['copied_card_id'];
    }

    /**
     * Sets copied_card_id
     *
     * @param int $copied_card_id copied_card_id
     *
     * @return $this
     */
    public function setCopiedCardId($copied_card_id)
    {
        $this->container['copied_card_id'] = $copied_card_id;

        return $this;
    }

    /**
     * Gets keep_activities
     *
     * @return bool
     */
    public function getKeepActivities()
    {
        return $this->container['keep_activities'];
    }

    /**
     * Sets keep_activities
     *
     * @param bool $keep_activities keep_activities
     *
     * @return $this
     */
    public function setKeepActivities($keep_activities)
    {
        $this->container['keep_activities'] = $keep_activities;

        return $this;
    }

    /**
     * Gets keep_attachments
     *
     * @return bool
     */
    public function getKeepAttachments()
    {
        return $this->container['keep_attachments'];
    }

    /**
     * Sets keep_attachments
     *
     * @param bool $keep_attachments keep_attachments
     *
     * @return $this
     */
    public function setKeepAttachments($keep_attachments)
    {
        $this->container['keep_attachments'] = $keep_attachments;

        return $this;
    }

    /**
     * Gets keep_checklists
     *
     * @return bool
     */
    public function getKeepChecklists()
    {
        return $this->container['keep_checklists'];
    }

    /**
     * Sets keep_checklists
     *
     * @param bool $keep_checklists keep_checklists
     *
     * @return $this
     */
    public function setKeepChecklists($keep_checklists)
    {
        $this->container['keep_checklists'] = $keep_checklists;

        return $this;
    }

    /**
     * Gets keep_labels
     *
     * @return bool
     */
    public function getKeepLabels()
    {
        return $this->container['keep_labels'];
    }

    /**
     * Sets keep_labels
     *
     * @param bool $keep_labels keep_labels
     *
     * @return $this
     */
    public function setKeepLabels($keep_labels)
    {
        $this->container['keep_labels'] = $keep_labels;

        return $this;
    }

    /**
     * Gets keep_users
     *
     * @return bool
     */
    public function getKeepUsers()
    {
        return $this->container['keep_users'];
    }

    /**
     * Sets keep_users
     *
     * @param bool $keep_users keep_users
     *
     * @return $this
     */
    public function setKeepUsers($keep_users)
    {
        $this->container['keep_users'] = $keep_users;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


