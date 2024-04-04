<?php
/**
 * DocumentSendResponseRecipients
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
 * DocumentSendResponseRecipients Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DocumentSendResponseRecipients implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentSendResponse_recipients';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'recipientType' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'deliveryMethods' => '\PandaDoc\Client\Model\RicipientDeliveryMethods',
        'signingOrder' => 'mixed',
        'sharedLink' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'firstName' => null,
        'lastName' => null,
        'recipientType' => null,
        'email' => null,
        'phone' => null,
        'deliveryMethods' => null,
        'signingOrder' => null,
        'sharedLink' => null
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
        'id' => 'id',
        'firstName' => 'first_name',
        'lastName' => 'last_name',
        'recipientType' => 'recipient_type',
        'email' => 'email',
        'phone' => 'phone',
        'deliveryMethods' => 'delivery_methods',
        'signingOrder' => 'signing_order',
        'sharedLink' => 'shared_link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'recipientType' => 'setRecipientType',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'deliveryMethods' => 'setDeliveryMethods',
        'signingOrder' => 'setSigningOrder',
        'sharedLink' => 'setSharedLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'recipientType' => 'getRecipientType',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'deliveryMethods' => 'getDeliveryMethods',
        'signingOrder' => 'getSigningOrder',
        'sharedLink' => 'getSharedLink'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['lastName'] = $data['lastName'] ?? null;
        $this->container['recipientType'] = $data['recipientType'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['deliveryMethods'] = $data['deliveryMethods'] ?? null;
        $this->container['signingOrder'] = $data['signingOrder'] ?? null;
        $this->container['sharedLink'] = $data['sharedLink'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName firstName
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName lastName
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets recipientType
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getRecipientType()
    {
        return $this->container['recipientType'];
    }

    /**
     * Sets recipientType
     *
     * @param string|null $recipientType recipientType
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setRecipientType($recipientType)
    {
        $this->container['recipientType'] = $recipientType;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets deliveryMethods
     *
     * @return \PandaDoc\Client\Model\RicipientDeliveryMethods|null
     */
    #[\ReturnTypeWillChange]
    public function getDeliveryMethods()
    {
        return $this->container['deliveryMethods'];
    }

    /**
     * Sets deliveryMethods
     *
     * @param \PandaDoc\Client\Model\RicipientDeliveryMethods|null $deliveryMethods deliveryMethods
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setDeliveryMethods($deliveryMethods)
    {
        $this->container['deliveryMethods'] = $deliveryMethods;

        return $this;
    }

    /**
     * Gets signingOrder
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function getSigningOrder()
    {
        return $this->container['signingOrder'];
    }

    /**
     * Sets signingOrder
     *
     * @param mixed|null $signingOrder signingOrder
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setSigningOrder($signingOrder)
    {
        $this->container['signingOrder'] = $signingOrder;

        return $this;
    }

    /**
     * Gets sharedLink
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getSharedLink()
    {
        return $this->container['sharedLink'];
    }

    /**
     * Sets sharedLink
     *
     * @param string|null $sharedLink sharedLink
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setSharedLink($sharedLink)
    {
        $this->container['sharedLink'] = $sharedLink;

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


