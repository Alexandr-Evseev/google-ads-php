<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/conversion_action_status.proto

namespace Google\Ads\GoogleAds\V3\Enums\ConversionActionStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a conversion action.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.ConversionActionStatusEnum.ConversionActionStatus</code>
 */
class ConversionActionStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Conversions will be recorded.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * Conversions will not be recorded.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    const REMOVED = 3;
    /**
     * Conversions will not be recorded and the conversion action will not
     * appear in the UI.
     *
     * Generated from protobuf enum <code>HIDDEN = 4;</code>
     */
    const HIDDEN = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
        self::HIDDEN => 'HIDDEN',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionActionStatus::class, \Google\Ads\GoogleAds\V3\Enums\ConversionActionStatusEnum_ConversionActionStatus::class);

