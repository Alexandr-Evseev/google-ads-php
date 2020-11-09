<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A product being planned for reach.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.PlannedProduct</code>
 */
class PlannedProduct extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Selected product for planning.
     * Plannable products codes can be obtained from ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     */
    protected $plannable_product_code = null;
    /**
     * Required. Maximum budget allocation in micros for the selected product.
     * The value is specified in the selected planning currency_code.
     * E.g. 1 000 000$ = 1 000 000 000 000 micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     */
    protected $budget_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $plannable_product_code
     *           Required. Selected product for planning.
     *           Plannable products codes can be obtained from ListPlannableProducts.
     *     @type \Google\Protobuf\Int64Value $budget_micros
     *           Required. Maximum budget allocation in micros for the selected product.
     *           The value is specified in the selected planning currency_code.
     *           E.g. 1 000 000$ = 1 000 000 000 000 micros.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Selected product for planning.
     * Plannable products codes can be obtained from ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPlannableProductCode()
    {
        return isset($this->plannable_product_code) ? $this->plannable_product_code : null;
    }

    public function hasPlannableProductCode()
    {
        return isset($this->plannable_product_code);
    }

    public function clearPlannableProductCode()
    {
        unset($this->plannable_product_code);
    }

    /**
     * Returns the unboxed value from <code>getPlannableProductCode()</code>

     * Required. Selected product for planning.
     * Plannable products codes can be obtained from ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @return string|null
     */
    public function getPlannableProductCodeUnwrapped()
    {
        return $this->readWrapperValue("plannable_product_code");
    }

    /**
     * Required. Selected product for planning.
     * Plannable products codes can be obtained from ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPlannableProductCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->plannable_product_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Required. Selected product for planning.
     * Plannable products codes can be obtained from ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPlannableProductCodeUnwrapped($var)
    {
        $this->writeWrapperValue("plannable_product_code", $var);
        return $this;}

    /**
     * Required. Maximum budget allocation in micros for the selected product.
     * The value is specified in the selected planning currency_code.
     * E.g. 1 000 000$ = 1 000 000 000 000 micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getBudgetMicros()
    {
        return isset($this->budget_micros) ? $this->budget_micros : null;
    }

    public function hasBudgetMicros()
    {
        return isset($this->budget_micros);
    }

    public function clearBudgetMicros()
    {
        unset($this->budget_micros);
    }

    /**
     * Returns the unboxed value from <code>getBudgetMicros()</code>

     * Required. Maximum budget allocation in micros for the selected product.
     * The value is specified in the selected planning currency_code.
     * E.g. 1 000 000$ = 1 000 000 000 000 micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     * @return int|string|null
     */
    public function getBudgetMicrosUnwrapped()
    {
        return $this->readWrapperValue("budget_micros");
    }

    /**
     * Required. Maximum budget allocation in micros for the selected product.
     * The value is specified in the selected planning currency_code.
     * E.g. 1 000 000$ = 1 000 000 000 000 micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setBudgetMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->budget_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Required. Maximum budget allocation in micros for the selected product.
     * The value is specified in the selected planning currency_code.
     * E.g. 1 000 000$ = 1 000 000 000 000 micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_micros = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setBudgetMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("budget_micros", $var);
        return $this;}

}
