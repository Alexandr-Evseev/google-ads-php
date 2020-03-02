<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/ad_schedule_view.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad schedule view summarizes the performance of campaigns by
 * AdSchedule criteria.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.AdScheduleView</code>
 */
class AdScheduleView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad schedule view.
     * AdSchedule view resource names have the form:
     * `customers/{customer_id}/adScheduleViews/{campaign_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad schedule view.
     *           AdSchedule view resource names have the form:
     *           `customers/{customer_id}/adScheduleViews/{campaign_id}~{criterion_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\AdScheduleView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad schedule view.
     * AdSchedule view resource names have the form:
     * `customers/{customer_id}/adScheduleViews/{campaign_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad schedule view.
     * AdSchedule view resource names have the form:
     * `customers/{customer_id}/adScheduleViews/{campaign_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

