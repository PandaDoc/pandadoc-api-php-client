<?php
/**
 * QuoteResponseSectionSummary
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
 * QuoteResponseSectionSummary Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class QuoteResponseSectionSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QuoteResponseSectionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total' => 'string',
        'subtotal' => 'string',
        'oneTimeSubtotal' => 'string',
        'recurringSubtotal' => '\PandaDoc\Client\Model\QuoteResponseSummaryRecurringSubtotal[]',
        'totalQty' => 'string',
        'discounts' => 'object',
        'taxes' => 'object',
        'fees' => 'object',
        'customFields' => 'array<string,string>',
        'totalSectionValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total' => null,
        'subtotal' => null,
        'oneTimeSubtotal' => null,
        'recurringSubtotal' => null,
        'totalQty' => null,
        'discounts' => null,
        'taxes' => null,
        'fees' => null,
        'customFields' => null,
        'totalSectionValue' => null
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
        'total' => 'total',
        'subtotal' => 'subtotal',
        'oneTimeSubtotal' => 'one_time_subtotal',
        'recurringSubtotal' => 'recurring_subtotal',
        'totalQty' => 'total_qty',
        'discounts' => 'discounts',
        'taxes' => 'taxes',
        'fees' => 'fees',
        'customFields' => 'custom_fields',
        'totalSectionValue' => 'total_section_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'subtotal' => 'setSubtotal',
        'oneTimeSubtotal' => 'setOneTimeSubtotal',
        'recurringSubtotal' => 'setRecurringSubtotal',
        'totalQty' => 'setTotalQty',
        'discounts' => 'setDiscounts',
        'taxes' => 'setTaxes',
        'fees' => 'setFees',
        'customFields' => 'setCustomFields',
        'totalSectionValue' => 'setTotalSectionValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'subtotal' => 'getSubtotal',
        'oneTimeSubtotal' => 'getOneTimeSubtotal',
        'recurringSubtotal' => 'getRecurringSubtotal',
        'totalQty' => 'getTotalQty',
        'discounts' => 'getDiscounts',
        'taxes' => 'getTaxes',
        'fees' => 'getFees',
        'customFields' => 'getCustomFields',
        'totalSectionValue' => 'getTotalSectionValue'
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
        $this->container['total'] = $data['total'] ?? null;
        $this->container['subtotal'] = $data['subtotal'] ?? null;
        $this->container['oneTimeSubtotal'] = $data['oneTimeSubtotal'] ?? null;
        $this->container['recurringSubtotal'] = $data['recurringSubtotal'] ?? null;
        $this->container['totalQty'] = $data['totalQty'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['customFields'] = $data['customFields'] ?? null;
        $this->container['totalSectionValue'] = $data['totalSectionValue'] ?? null;
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
     * Gets total
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total total
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param string|null $subtotal subtotal
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets oneTimeSubtotal
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getOneTimeSubtotal()
    {
        return $this->container['oneTimeSubtotal'];
    }

    /**
     * Sets oneTimeSubtotal
     *
     * @param string|null $oneTimeSubtotal oneTimeSubtotal
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setOneTimeSubtotal($oneTimeSubtotal)
    {
        $this->container['oneTimeSubtotal'] = $oneTimeSubtotal;

        return $this;
    }

    /**
     * Gets recurringSubtotal
     *
     * @return \PandaDoc\Client\Model\QuoteResponseSummaryRecurringSubtotal[]|null
     */
    #[\ReturnTypeWillChange]
    public function getRecurringSubtotal()
    {
        return $this->container['recurringSubtotal'];
    }

    /**
     * Sets recurringSubtotal
     *
     * @param \PandaDoc\Client\Model\QuoteResponseSummaryRecurringSubtotal[]|null $recurringSubtotal recurringSubtotal
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setRecurringSubtotal($recurringSubtotal)
    {
        $this->container['recurringSubtotal'] = $recurringSubtotal;

        return $this;
    }

    /**
     * Gets totalQty
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getTotalQty()
    {
        return $this->container['totalQty'];
    }

    /**
     * Sets totalQty
     *
     * @param string|null $totalQty totalQty
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setTotalQty($totalQty)
    {
        $this->container['totalQty'] = $totalQty;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return object|null
     */
    #[\ReturnTypeWillChange]
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param object|null $discounts discounts
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return object|null
     */
    #[\ReturnTypeWillChange]
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param object|null $taxes taxes
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return object|null
     */
    #[\ReturnTypeWillChange]
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param object|null $fees fees
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets customFields
     *
     * @return array<string,string>|null
     */
    #[\ReturnTypeWillChange]
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Sets customFields
     *
     * @param array<string,string>|null $customFields customFields
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;

        return $this;
    }

    /**
     * Gets totalSectionValue
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getTotalSectionValue()
    {
        return $this->container['totalSectionValue'];
    }

    /**
     * Sets totalSectionValue
     *
     * @param string|null $totalSectionValue totalSectionValue
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setTotalSectionValue($totalSectionValue)
    {
        $this->container['totalSectionValue'] = $totalSectionValue;

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

