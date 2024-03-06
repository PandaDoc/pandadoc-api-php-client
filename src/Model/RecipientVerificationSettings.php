<?php
/**
 * RecipientVerificationSettings
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PandaDoc Public API
 *
 * PandaDoc Public API documentation
 *
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PandaDoc\Client\Model;

use \ArrayAccess;
use \PandaDoc\Client\ObjectSerializer;

/**
 * RecipientVerificationSettings Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RecipientVerificationSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecipientVerificationSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'verificationPlace' => 'string',
        'passcodeVerification' => '\PandaDoc\Client\Model\RecipientVerificationSettingsPasscodeVerification',
        'phoneVerification' => '\PandaDoc\Client\Model\RecipientVerificationSettingsPhoneVerification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'verificationPlace' => null,
        'passcodeVerification' => null,
        'phoneVerification' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'verificationPlace' => 'verification_place',
        'passcodeVerification' => 'passcode_verification',
        'phoneVerification' => 'phone_verification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verificationPlace' => 'setVerificationPlace',
        'passcodeVerification' => 'setPasscodeVerification',
        'phoneVerification' => 'setPhoneVerification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verificationPlace' => 'getVerificationPlace',
        'passcodeVerification' => 'getPasscodeVerification',
        'phoneVerification' => 'getPhoneVerification'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const VERIFICATION_PLACE_OPEN = 'before_open';
    const VERIFICATION_PLACE_SIGN = 'before_sign';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    #[\ReturnTypeWillChange]
    public function getVerificationPlaceAllowableValues()
    {
        return [
            self::VERIFICATION_PLACE_OPEN,
            self::VERIFICATION_PLACE_SIGN,
        ];
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
        $this->container['verificationPlace'] = $data['verificationPlace'] ?? null;
        $this->container['passcodeVerification'] = $data['passcodeVerification'] ?? null;
        $this->container['phoneVerification'] = $data['phoneVerification'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    #[\ReturnTypeWillChange]
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVerificationPlaceAllowableValues();
        if (!is_null($this->container['verificationPlace']) && !in_array($this->container['verificationPlace'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'verificationPlace', must be one of '%s'",
                $this->container['verificationPlace'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    #[\ReturnTypeWillChange]
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets verificationPlace
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getVerificationPlace()
    {
        return $this->container['verificationPlace'];
    }

    /**
     * Sets verificationPlace
     *
     * @param string|null $verificationPlace Verification place
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setVerificationPlace($verificationPlace)
    {
        $allowedValues = $this->getVerificationPlaceAllowableValues();
        if (!is_null($verificationPlace) && !in_array($verificationPlace, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'verificationPlace', must be one of '%s'",
                    $verificationPlace,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verificationPlace'] = $verificationPlace;

        return $this;
    }

    /**
     * Gets passcodeVerification
     *
     * @return \PandaDoc\Client\Model\RecipientVerificationSettingsPasscodeVerification|null
     */
    #[\ReturnTypeWillChange]
    public function getPasscodeVerification()
    {
        return $this->container['passcodeVerification'];
    }

    /**
     * Sets passcodeVerification
     *
     * @param \PandaDoc\Client\Model\RecipientVerificationSettingsPasscodeVerification|null $passcodeVerification passcodeVerification
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setPasscodeVerification($passcodeVerification)
    {
        $this->container['passcodeVerification'] = $passcodeVerification;

        return $this;
    }

    /**
     * Gets phoneVerification
     *
     * @return \PandaDoc\Client\Model\RecipientVerificationSettingsPhoneVerification|null
     */
    #[\ReturnTypeWillChange]
    public function getPhoneVerification()
    {
        return $this->container['phoneVerification'];
    }

    /**
     * Sets phoneVerification
     *
     * @param \PandaDoc\Client\Model\RecipientVerificationSettingsPhoneVerification|null $phoneVerification phoneVerification
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setPhoneVerification($phoneVerification)
    {
        $this->container['phoneVerification'] = $phoneVerification;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


