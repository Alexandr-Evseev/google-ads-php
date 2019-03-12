<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/bidding_source.proto

namespace Google\Ads\GoogleAds\V1\Enums\BiddingSourceEnum;

/**
 * Enum describing possible bidding sources.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.BiddingSourceEnum.BiddingSource</code>
 */
class BiddingSource
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
     * Bidding entity is defined on the ad group.
     *
     * Generated from protobuf enum <code>ADGROUP = 2;</code>
     */
    const ADGROUP = 2;
    /**
     * Bidding entity is defined on the ad group criterion.
     *
     * Generated from protobuf enum <code>CRITERION = 3;</code>
     */
    const CRITERION = 3;
    /**
     * Effective bidding entity is inherited from campaign bidding strategy.
     *
     * Generated from protobuf enum <code>CAMPAIGN_BIDDING_STRATEGY = 5;</code>
     */
    const CAMPAIGN_BIDDING_STRATEGY = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BiddingSource::class, \Google\Ads\GoogleAds\V1\Enums\BiddingSourceEnum_BiddingSource::class);
