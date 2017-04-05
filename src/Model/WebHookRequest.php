<?php
/**
 * WebHookRequest.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swaagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Modulr API.
 *
 * Modulo API
 *
 * OpenAPI spec version: 1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CrowdProperty\ModulrHmacPhpClient\Model;

use ArrayAccess;

/**
 * WebHookRequest Class Doc Comment.
 *
 * @category    Class
 *
 * @author      Swagger Codegen team
 *
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WebHookRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'WebHookRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'event_name' => 'string',
        'retry'      => 'bool',
        'secret'     => 'string',
        'url'        => 'string',
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'event_name' => 'eventName',
        'retry'      => 'retry',
        'secret'     => 'secret',
        'url'        => 'url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'event_name' => 'setEventName',
        'retry'      => 'setRetry',
        'secret'     => 'setSecret',
        'url'        => 'setUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'event_name' => 'getEventName',
        'retry'      => 'getRetry',
        'secret'     => 'getSecret',
        'url'        => 'getUrl',
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

    const EVENT_NAME_PAYIN = 'PAYIN';
    const EVENT_NAME_PAYOUT = 'PAYOUT';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getEventNameAllowableValues()
    {
        return [
            self::EVENT_NAME_PAYIN,
            self::EVENT_NAME_PAYOUT,
        ];
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['event_name'] === null) {
            $invalid_properties[] = "'event_name' can't be null";
        }
        $allowed_values = ['PAYIN', 'PAYOUT'];
        if (!in_array($this->container['event_name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'event_name', must be one of 'PAYIN', 'PAYOUT'.";
        }

        if ($this->container['secret'] === null) {
            $invalid_properties[] = "'secret' can't be null";
        }
        if ((strlen($this->container['secret']) > 32)) {
            $invalid_properties[] = "invalid value for 'secret', the character length must be smaller than or equal to 32.";
        }

        if ((strlen($this->container['secret']) < 32)) {
            $invalid_properties[] = "invalid value for 'secret', the character length must be bigger than or equal to 32.";
        }

        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ((strlen($this->container['url']) > 250)) {
            $invalid_properties[] = "invalid value for 'url', the character length must be smaller than or equal to 250.";
        }

        if ((strlen($this->container['url']) < 12)) {
            $invalid_properties[] = "invalid value for 'url', the character length must be bigger than or equal to 12.";
        }

        if (!preg_match('!^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$!', $this->container['url'])) {
            $invalid_properties[] = "invalid value for 'url', must be conform to the pattern !^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$!.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if ($this->container['event_name'] === null) {
            return false;
        }
        $allowed_values = ['PAYIN', 'PAYOUT'];
        if (!in_array($this->container['event_name'], $allowed_values)) {
            return false;
        }
        if ($this->container['secret'] === null) {
            return false;
        }
        if (strlen($this->container['secret']) > 32) {
            return false;
        }
        if (strlen($this->container['secret']) < 32) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if (strlen($this->container['url']) > 250) {
            return false;
        }
        if (strlen($this->container['url']) < 12) {
            return false;
        }
        if (!preg_match('!^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$!', $this->container['url'])) {
            return false;
        }

        return true;
    }

    /**
     * Gets event_name.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name.
     *
     * @param string $event_name Event which would trigger the webhook. Can be one of
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $allowed_values = ['PAYIN', 'PAYOUT'];
        if ((!in_array($event_name, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'event_name', must be one of 'PAYIN', 'PAYOUT'");
        }
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets retry.
     *
     * @return bool
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry.
     *
     * @param bool $retry
     *
     * @return $this
     */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;

        return $this;
    }

    /**
     * Gets secret.
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret.
     *
     * @param string $secret Secret that is used in HMAC calculation
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        if ((strlen($secret) > 32)) {
            throw new \InvalidArgumentException('invalid length for $secret when calling WebHookRequest., must be smaller than or equal to 32.');
        }
        if ((strlen($secret) < 32)) {
            throw new \InvalidArgumentException('invalid length for $secret when calling WebHookRequest., must be bigger than or equal to 32.');
        }

        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param string $url Endpoint URL for receiving webhook data. Has to be an https and capable of accepting JSON.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        if ((strlen($url) > 250)) {
            throw new \InvalidArgumentException('invalid length for $url when calling WebHookRequest., must be smaller than or equal to 250.');
        }
        if ((strlen($url) < 12)) {
            throw new \InvalidArgumentException('invalid length for $url when calling WebHookRequest., must be bigger than or equal to 12.');
        }
        if ((!preg_match('!^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$!', $url))) {
            throw new \InvalidArgumentException("invalid value for $url when calling WebHookRequest., must conform to the pattern ^!(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$!");
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CrowdProperty\ModulrHmacPhpClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CrowdProperty\ModulrHmacPhpClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}
