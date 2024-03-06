<?php
/**
 * UploadSectionResponse
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
 * UploadSectionResponse Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UploadSectionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UploadSectionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'name' => 'string',
        'documentUuid' => 'string',
        'status' => '\PandaDoc\Client\Model\UploadSectionStatusEnum',
        'sectionsUuids' => 'string[]',
        'dateCreated' => 'string',
        'dateModified' => 'string',
        'dateCompleted' => 'string',
        'infoMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => null,
        'name' => null,
        'documentUuid' => null,
        'status' => null,
        'sectionsUuids' => null,
        'dateCreated' => null,
        'dateModified' => null,
        'dateCompleted' => null,
        'infoMessage' => null
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
        'uuid' => 'uuid',
        'name' => 'name',
        'documentUuid' => 'document_uuid',
        'status' => 'status',
        'sectionsUuids' => 'sections_uuids',
        'dateCreated' => 'date_created',
        'dateModified' => 'date_modified',
        'dateCompleted' => 'date_completed',
        'infoMessage' => 'info_message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'name' => 'setName',
        'documentUuid' => 'setDocumentUuid',
        'status' => 'setStatus',
        'sectionsUuids' => 'setSectionsUuids',
        'dateCreated' => 'setDateCreated',
        'dateModified' => 'setDateModified',
        'dateCompleted' => 'setDateCompleted',
        'infoMessage' => 'setInfoMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'name' => 'getName',
        'documentUuid' => 'getDocumentUuid',
        'status' => 'getStatus',
        'sectionsUuids' => 'getSectionsUuids',
        'dateCreated' => 'getDateCreated',
        'dateModified' => 'getDateModified',
        'dateCompleted' => 'getDateCompleted',
        'infoMessage' => 'getInfoMessage'
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
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['documentUuid'] = $data['documentUuid'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['sectionsUuids'] = $data['sectionsUuids'] ?? null;
        $this->container['dateCreated'] = $data['dateCreated'] ?? null;
        $this->container['dateModified'] = $data['dateModified'] ?? null;
        $this->container['dateCompleted'] = $data['dateCompleted'] ?? null;
        $this->container['infoMessage'] = $data['infoMessage'] ?? null;
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
     * Gets uuid
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
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
     * @param string|null $name name
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
     * Gets documentUuid
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getDocumentUuid()
    {
        return $this->container['documentUuid'];
    }

    /**
     * Sets documentUuid
     *
     * @param string|null $documentUuid documentUuid
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setDocumentUuid($documentUuid)
    {
        $this->container['documentUuid'] = $documentUuid;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \PandaDoc\Client\Model\UploadSectionStatusEnum|null
     */
    #[\ReturnTypeWillChange]
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \PandaDoc\Client\Model\UploadSectionStatusEnum|null $status status
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sectionsUuids
     *
     * @return string[]|null
     */
    #[\ReturnTypeWillChange]
    public function getSectionsUuids()
    {
        return $this->container['sectionsUuids'];
    }

    /**
     * Sets sectionsUuids
     *
     * @param string[]|null $sectionsUuids sectionsUuids
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setSectionsUuids($sectionsUuids)
    {
        $this->container['sectionsUuids'] = $sectionsUuids;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param string|null $dateCreated dateCreated
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets dateModified
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /**
     * Sets dateModified
     *
     * @param string|null $dateModified dateModified
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * Gets dateCompleted
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getDateCompleted()
    {
        return $this->container['dateCompleted'];
    }

    /**
     * Sets dateCompleted
     *
     * @param string|null $dateCompleted dateCompleted
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setDateCompleted($dateCompleted)
    {
        $this->container['dateCompleted'] = $dateCompleted;

        return $this;
    }

    /**
     * Gets infoMessage
     *
     * @return string|null
     */
    #[\ReturnTypeWillChange]
    public function getInfoMessage()
    {
        return $this->container['infoMessage'];
    }

    /**
     * Sets infoMessage
     *
     * @param string|null $infoMessage infoMessage
     *
     * @return self
     */
    #[\ReturnTypeWillChange]
    public function setInfoMessage($infoMessage)
    {
        $this->container['infoMessage'] = $infoMessage;

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


