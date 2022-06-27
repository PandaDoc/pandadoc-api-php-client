<?php
/**
 * WebhookSubscriptionPayloadEnum
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
use \PandaDoc\Client\ObjectSerializer;

/**
 * WebhookSubscriptionPayloadEnum Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookSubscriptionPayloadEnum
{
    /**
     * Possible values of this enum
     */
    const METADATA = 'metadata';

    const FIELDS = 'fields';

    const PRODUCTS = 'products';

    const TOKENS = 'tokens';

    const PRICING = 'pricing';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::METADATA,
            self::FIELDS,
            self::PRODUCTS,
            self::TOKENS,
            self::PRICING
        ];
    }
}


