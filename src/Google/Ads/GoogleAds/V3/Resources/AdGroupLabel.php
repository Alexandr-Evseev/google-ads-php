<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/ad_group_label.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A relationship between an ad group and a label.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.AdGroupLabel</code>
 */
class AdGroupLabel extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad group label.
     * Ad group label resource names have the form:
     * `customers/{customer_id}/adGroupLabels/{ad_group_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ad group to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     */
    protected $ad_group = null;
    /**
     * The label assigned to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     */
    protected $label = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad group label.
     *           Ad group label resource names have the form:
     *           `customers/{customer_id}/adGroupLabels/{ad_group_id}~{label_id}`
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The ad group to which the label is attached.
     *     @type \Google\Protobuf\StringValue $label
     *           The label assigned to the ad group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\AdGroupLabel::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad group label.
     * Ad group label resource names have the form:
     * `customers/{customer_id}/adGroupLabels/{ad_group_id}~{label_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad group label.
     * Ad group label resource names have the form:
     * `customers/{customer_id}/adGroupLabels/{ad_group_id}~{label_id}`
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

    /**
     * The ad group to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * The ad group to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     * @return string|null
     */
    public function getAdGroupUnwrapped()
    {
        return $this->readWrapperValue("ad_group");
    }

    /**
     * The ad group to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The ad group to which the label is attached.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group", $var);
        return $this;}

    /**
     * The label assigned to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Returns the unboxed value from <code>getLabel()</code>

     * The label assigned to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     * @return string|null
     */
    public function getLabelUnwrapped()
    {
        return $this->readWrapperValue("label");
    }

    /**
     * The label assigned to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->label = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The label assigned to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue label = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLabelUnwrapped($var)
    {
        $this->writeWrapperValue("label", $var);
        return $this;}

}

