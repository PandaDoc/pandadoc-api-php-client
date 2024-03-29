<?php
/**
 * DocumentUpdateRequest
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
 * DocumentUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DocumentUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'recipients' => '\PandaDoc\Client\Model\DocumentUpdateRequestRecipients[]',
        'fields' => 'object',
        'tokens' => '\PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens[]',
        'metadata' => 'object',
        'pricingTables' => '\PandaDoc\Client\Model\PricingTableRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'recipients' => null,
        'fields' => null,
        'tokens' => null,
        'metadata' => null,
        'pricingTables' => null
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
        'name' => 'name',
        'recipients' => 'recipients',
        'fields' => 'fields',
        'tokens' => 'tokens',
        'metadata' => 'metadata',
        'pricingTables' => 'pricing_tables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'recipients' => 'setRecipients',
        'fields' => 'setFields',
        'tokens' => 'setTokens',
        'metadata' => 'setMetadata',
        'pricingTables' => 'setPricingTables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'recipients' => 'getRecipients',
        'fields' => 'getFields',
        'tokens' => 'getTokens',
        'metadata' => 'getMetadata',
        'pricingTables' => 'getPricingTables'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['tokens'] = $data['tokens'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['pricingTables'] = $data['pricingTables'] ?? null;
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
     * Gets name
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the document.
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \PandaDoc\Client\Model\DocumentUpdateRequestRecipients[]|null
     */
    #[\ReturnTypeWillChange]
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \PandaDoc\Client\Model\DocumentUpdateRequestRecipients[]|null $recipients The list of recipients you're sending the document to. The ID or email are required. If the ID is passed, an existing recipient will be updated. If the email is passed, a new recipient will be added to CC.
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return object|null
     */
    #[\ReturnTypeWillChange]
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param object|null $fields You may pass a list of fields/values which exist in a document. Please use `Merge Field` property of the fields like the key.
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens[]|null
     */
    #[\ReturnTypeWillChange]
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens[]|null $tokens You can pass a list of tokens/values. If a token name exists in a document then the value will be updated. Otherwise, a new token will be added to the document.
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    #[\ReturnTypeWillChange]
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata You can pass arbitrary data in the key-value format to associate custom information with a document. This information is returned in any API requests for the document details by id. If metadata exists in a document then the value will be updated. Otherwise, metadata will be added to the document.
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets pricingTables
     *
     * @return \PandaDoc\Client\Model\PricingTableRequest[]|null
     */
    #[\ReturnTypeWillChange]
    public function getPricingTables()
    {
        return $this->container['pricingTables'];
    }

    /**
     * Sets pricingTables
     *
     * @param \PandaDoc\Client\Model\PricingTableRequest[]|null $pricingTables pricingTables
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setPricingTables($pricingTables)
    {
        $this->container['pricingTables'] = $pricingTables;

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


