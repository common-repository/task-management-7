<?php
/**
 * Body15
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
 * Body15 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body15 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_15';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_name' => 'string',
        'client_url' => 'string',
        'logo_url' => 'string',
        'policy_url' => 'string',
        'redirect_uris' => 'string',
        'tos_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_name' => null,
        'client_url' => null,
        'logo_url' => null,
        'policy_url' => null,
        'redirect_uris' => null,
        'tos_url' => null
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
        'client_name' => 'client_name',
        'client_url' => 'client_url',
        'logo_url' => 'logo_url',
        'policy_url' => 'policy_url',
        'redirect_uris' => 'redirect_uris',
        'tos_url' => 'tos_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_name' => 'setClientName',
        'client_url' => 'setClientUrl',
        'logo_url' => 'setLogoUrl',
        'policy_url' => 'setPolicyUrl',
        'redirect_uris' => 'setRedirectUris',
        'tos_url' => 'setTosUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_name' => 'getClientName',
        'client_url' => 'getClientUrl',
        'logo_url' => 'getLogoUrl',
        'policy_url' => 'getPolicyUrl',
        'redirect_uris' => 'getRedirectUris',
        'tos_url' => 'getTosUrl'
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
        $this->container['client_name'] = isset($data['client_name']) ? $data['client_name'] : null;
        $this->container['client_url'] = isset($data['client_url']) ? $data['client_url'] : null;
        $this->container['logo_url'] = isset($data['logo_url']) ? $data['logo_url'] : null;
        $this->container['policy_url'] = isset($data['policy_url']) ? $data['policy_url'] : null;
        $this->container['redirect_uris'] = isset($data['redirect_uris']) ? $data['redirect_uris'] : null;
        $this->container['tos_url'] = isset($data['tos_url']) ? $data['tos_url'] : null;
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
     * Gets client_name
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->container['client_name'];
    }

    /**
     * Sets client_name
     *
     * @param string $client_name client_name
     *
     * @return $this
     */
    public function setClientName($client_name)
    {
        $this->container['client_name'] = $client_name;

        return $this;
    }

    /**
     * Gets client_url
     *
     * @return string
     */
    public function getClientUrl()
    {
        return $this->container['client_url'];
    }

    /**
     * Sets client_url
     *
     * @param string $client_url client_url
     *
     * @return $this
     */
    public function setClientUrl($client_url)
    {
        $this->container['client_url'] = $client_url;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string $logo_url logo_url
     *
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets policy_url
     *
     * @return string
     */
    public function getPolicyUrl()
    {
        return $this->container['policy_url'];
    }

    /**
     * Sets policy_url
     *
     * @param string $policy_url policy_url
     *
     * @return $this
     */
    public function setPolicyUrl($policy_url)
    {
        $this->container['policy_url'] = $policy_url;

        return $this;
    }

    /**
     * Gets redirect_uris
     *
     * @return string
     */
    public function getRedirectUris()
    {
        return $this->container['redirect_uris'];
    }

    /**
     * Sets redirect_uris
     *
     * @param string $redirect_uris redirect_uris
     *
     * @return $this
     */
    public function setRedirectUris($redirect_uris)
    {
        $this->container['redirect_uris'] = $redirect_uris;

        return $this;
    }

    /**
     * Gets tos_url
     *
     * @return string
     */
    public function getTosUrl()
    {
        return $this->container['tos_url'];
    }

    /**
     * Sets tos_url
     *
     * @param string $tos_url tos_url
     *
     * @return $this
     */
    public function setTosUrl($tos_url)
    {
        $this->container['tos_url'] = $tos_url;

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

