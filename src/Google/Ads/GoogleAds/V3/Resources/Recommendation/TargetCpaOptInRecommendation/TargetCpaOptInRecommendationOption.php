<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V3\Resources\Recommendation\TargetCpaOptInRecommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Target CPA opt-in option with impact estimate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.Recommendation.TargetCpaOptInRecommendation.TargetCpaOptInRecommendationOption</code>
 */
class TargetCpaOptInRecommendationOption extends \Google\Protobuf\Internal\Message
{
    /**
     * The goal achieved by this option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal goal = 1;</code>
     */
    protected $goal = 0;
    /**
     * Average CPA target.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 2;</code>
     */
    protected $target_cpa_micros = null;
    /**
     * The minimum campaign budget, in local currency for the account,
     * required to achieve the target CPA.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value required_campaign_budget_amount_micros = 3;</code>
     */
    protected $required_campaign_budget_amount_micros = null;
    /**
     * The impact estimate if this option is selected.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Recommendation.RecommendationImpact impact = 4;</code>
     */
    protected $impact = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $goal
     *           The goal achieved by this option.
     *     @type \Google\Protobuf\Int64Value $target_cpa_micros
     *           Average CPA target.
     *     @type \Google\Protobuf\Int64Value $required_campaign_budget_amount_micros
     *           The minimum campaign budget, in local currency for the account,
     *           required to achieve the target CPA.
     *           Amount is specified in micros, where one million is equivalent to one
     *           currency unit.
     *     @type \Google\Ads\GoogleAds\V3\Resources\Recommendation\RecommendationImpact $impact
     *           The impact estimate if this option is selected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * The goal achieved by this option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal goal = 1;</code>
     * @return int
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * The goal achieved by this option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal goal = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGoal($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\TargetCpaOptInRecommendationGoalEnum_TargetCpaOptInRecommendationGoal::class);
        $this->goal = $var;

        return $this;
    }

    /**
     * Average CPA target.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getTargetCpaMicros()
    {
        return $this->target_cpa_micros;
    }

    /**
     * Returns the unboxed value from <code>getTargetCpaMicros()</code>

     * Average CPA target.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 2;</code>
     * @return int|string|null
     */
    public function getTargetCpaMicrosUnwrapped()
    {
        return $this->readWrapperValue("target_cpa_micros");
    }

    /**
     * Average CPA target.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setTargetCpaMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->target_cpa_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Average CPA target.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_cpa_micros = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setTargetCpaMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("target_cpa_micros", $var);
        return $this;}

    /**
     * The minimum campaign budget, in local currency for the account,
     * required to achieve the target CPA.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value required_campaign_budget_amount_micros = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRequiredCampaignBudgetAmountMicros()
    {
        return $this->required_campaign_budget_amount_micros;
    }

    /**
     * Returns the unboxed value from <code>getRequiredCampaignBudgetAmountMicros()</code>

     * The minimum campaign budget, in local currency for the account,
     * required to achieve the target CPA.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value required_campaign_budget_amount_micros = 3;</code>
     * @return int|string|null
     */
    public function getRequiredCampaignBudgetAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("required_campaign_budget_amount_micros");
    }

    /**
     * The minimum campaign budget, in local currency for the account,
     * required to achieve the target CPA.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value required_campaign_budget_amount_micros = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRequiredCampaignBudgetAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->required_campaign_budget_amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The minimum campaign budget, in local currency for the account,
     * required to achieve the target CPA.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value required_campaign_budget_amount_micros = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setRequiredCampaignBudgetAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("required_campaign_budget_amount_micros", $var);
        return $this;}

    /**
     * The impact estimate if this option is selected.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Recommendation.RecommendationImpact impact = 4;</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\Recommendation\RecommendationImpact
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * The impact estimate if this option is selected.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Recommendation.RecommendationImpact impact = 4;</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\Recommendation\RecommendationImpact $var
     * @return $this
     */
    public function setImpact($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\Recommendation_RecommendationImpact::class);
        $this->impact = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetCpaOptInRecommendationOption::class, \Google\Ads\GoogleAds\V3\Resources\Recommendation_TargetCpaOptInRecommendation_TargetCpaOptInRecommendationOption::class);

