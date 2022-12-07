<?php
/**
 * PricingTablesResponseItems
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
 * PricingTablesResponseItems Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PricingTablesResponseItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PricingTablesResponse_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'sku' => 'string',
        'qty' => 'string',
        'name' => 'string',
        'cost' => 'string',
        'price' => 'string',
        'description' => 'string',
        'customFields' => 'object',
        'customColumns' => 'object',
        'discount' => '\PandaDoc\Client\Model\PricingTablesResponseDiscount',
        'taxFirst' => '\PandaDoc\Client\Model\PricingTablesResponseDiscount',
        'taxSecond' => '\PandaDoc\Client\Model\PricingTablesResponseDiscount',
        'subtotal' => 'string',
        'options' => '\PandaDoc\Client\Model\PricingTablesResponseOptions',
        'salePrice' => 'string',
        'taxes' => 'object',
        'discounts' => 'object',
        'fees' => 'object',
        'mergedData' => 'object'
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
        'sku' => null,
        'qty' => null,
        'name' => null,
        'cost' => null,
        'price' => null,
        'description' => null,
        'customFields' => null,
        'customColumns' => null,
        'discount' => null,
        'taxFirst' => null,
        'taxSecond' => null,
        'subtotal' => null,
        'options' => null,
        'salePrice' => null,
        'taxes' => null,
        'discounts' => null,
        'fees' => null,
        'mergedData' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
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
        'sku' => 'sku',
        'qty' => 'qty',
        'name' => 'name',
        'cost' => 'cost',
        'price' => 'price',
        'description' => 'description',
        'customFields' => 'custom_fields',
        'customColumns' => 'custom_columns',
        'discount' => 'discount',
        'taxFirst' => 'tax_first',
        'taxSecond' => 'tax_second',
        'subtotal' => 'subtotal',
        'options' => 'options',
        'salePrice' => 'sale_price',
        'taxes' => 'taxes',
        'discounts' => 'discounts',
        'fees' => 'fees',
        'mergedData' => 'merged_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku' => 'setSku',
        'qty' => 'setQty',
        'name' => 'setName',
        'cost' => 'setCost',
        'price' => 'setPrice',
        'description' => 'setDescription',
        'customFields' => 'setCustomFields',
        'customColumns' => 'setCustomColumns',
        'discount' => 'setDiscount',
        'taxFirst' => 'setTaxFirst',
        'taxSecond' => 'setTaxSecond',
        'subtotal' => 'setSubtotal',
        'options' => 'setOptions',
        'salePrice' => 'setSalePrice',
        'taxes' => 'setTaxes',
        'discounts' => 'setDiscounts',
        'fees' => 'setFees',
        'mergedData' => 'setMergedData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku' => 'getSku',
        'qty' => 'getQty',
        'name' => 'getName',
        'cost' => 'getCost',
        'price' => 'getPrice',
        'description' => 'getDescription',
        'customFields' => 'getCustomFields',
        'customColumns' => 'getCustomColumns',
        'discount' => 'getDiscount',
        'taxFirst' => 'getTaxFirst',
        'taxSecond' => 'getTaxSecond',
        'subtotal' => 'getSubtotal',
        'options' => 'getOptions',
        'salePrice' => 'getSalePrice',
        'taxes' => 'getTaxes',
        'discounts' => 'getDiscounts',
        'fees' => 'getFees',
        'mergedData' => 'getMergedData'
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
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['qty'] = $data['qty'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['customFields'] = $data['customFields'] ?? null;
        $this->container['customColumns'] = $data['customColumns'] ?? null;
        $this->container['discount'] = $data['discount'] ?? null;
        $this->container['taxFirst'] = $data['taxFirst'] ?? null;
        $this->container['taxSecond'] = $data['taxSecond'] ?? null;
        $this->container['subtotal'] = $data['subtotal'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['salePrice'] = $data['salePrice'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['mergedData'] = $data['mergedData'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
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
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return string|null
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param string|null $qty qty
     *
     * @return self
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return string|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param string|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets customFields
     *
     * @return object|null
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Sets customFields
     *
     * @param object|null $customFields customFields
     *
     * @return self
     */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;

        return $this;
    }

    /**
     * Gets customColumns
     *
     * @return object|null
     */
    public function getCustomColumns()
    {
        return $this->container['customColumns'];
    }

    /**
     * Sets customColumns
     *
     * @param object|null $customColumns customColumns
     *
     * @return self
     */
    public function setCustomColumns($customColumns)
    {
        $this->container['customColumns'] = $customColumns;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \PandaDoc\Client\Model\PricingTablesResponseDiscount|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \PandaDoc\Client\Model\PricingTablesResponseDiscount|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets taxFirst
     *
     * @return \PandaDoc\Client\Model\PricingTablesResponseDiscount|null
     */
    public function getTaxFirst()
    {
        return $this->container['taxFirst'];
    }

    /**
     * Sets taxFirst
     *
     * @param \PandaDoc\Client\Model\PricingTablesResponseDiscount|null $taxFirst taxFirst
     *
     * @return self
     */
    public function setTaxFirst($taxFirst)
    {
        $this->container['taxFirst'] = $taxFirst;

        return $this;
    }

    /**
     * Gets taxSecond
     *
     * @return \PandaDoc\Client\Model\PricingTablesResponseDiscount|null
     */
    public function getTaxSecond()
    {
        return $this->container['taxSecond'];
    }

    /**
     * Sets taxSecond
     *
     * @param \PandaDoc\Client\Model\PricingTablesResponseDiscount|null $taxSecond taxSecond
     *
     * @return self
     */
    public function setTaxSecond($taxSecond)
    {
        $this->container['taxSecond'] = $taxSecond;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return string|null
     */
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
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \PandaDoc\Client\Model\PricingTablesResponseOptions|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \PandaDoc\Client\Model\PricingTablesResponseOptions|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets salePrice
     *
     * @return string|null
     */
    public function getSalePrice()
    {
        return $this->container['salePrice'];
    }

    /**
     * Sets salePrice
     *
     * @param string|null $salePrice salePrice
     *
     * @return self
     */
    public function setSalePrice($salePrice)
    {
        $this->container['salePrice'] = $salePrice;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return object|null
     */
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
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return object|null
     */
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
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return object|null
     */
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
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets mergedData
     *
     * @return object|null
     */
    public function getMergedData()
    {
        return $this->container['mergedData'];
    }

    /**
     * Sets mergedData
     *
     * @param object|null $mergedData Will contain all the fields in flat structure with external field names defined in the template.
     *
     * @return self
     */
    public function setMergedData($mergedData)
    {
        $this->container['mergedData'] = $mergedData;

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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
