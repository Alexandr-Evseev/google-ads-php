<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/mutate_job.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of mutates being processed asynchronously. The mutates are uploaded
 * by the user. The mutates themselves aren't readable and the results of the
 * job can only be read using MutateJobService.ListMutateJobResults.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.MutateJob</code>
 */
class MutateJob extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the mutate job.
     * Mutate job resource names have the form:
     * `customers/{customer_id}/mutateJobs/{mutate_job_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    protected $id = null;
    /**
     * The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3;</code>
     */
    protected $next_add_sequence_token = null;
    /**
     * Contains additional information about this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MutateJob.MutateJobMetadata metadata = 4;</code>
     */
    protected $metadata = null;
    /**
     * Status of this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MutateJobStatusEnum.MutateJobStatus status = 5;</code>
     */
    protected $status = 0;
    /**
     * The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6;</code>
     */
    protected $long_running_operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the mutate job.
     *           Mutate job resource names have the form:
     *           `customers/{customer_id}/mutateJobs/{mutate_job_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           ID of this mutate job.
     *     @type \Google\Protobuf\StringValue $next_add_sequence_token
     *           The next sequence token to use when adding operations. Only set when the
     *           mutate job status is PENDING.
     *     @type \Google\Ads\GoogleAds\V3\Resources\MutateJob\MutateJobMetadata $metadata
     *           Contains additional information about this mutate job.
     *     @type int $status
     *           Status of this mutate job.
     *     @type \Google\Protobuf\StringValue $long_running_operation
     *           The resource name of the long-running operation that can be used to poll
     *           for completion. Only set when the mutate job status is RUNNING or DONE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\MutateJob::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the mutate job.
     * Mutate job resource names have the form:
     * `customers/{customer_id}/mutateJobs/{mutate_job_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the mutate job.
     * Mutate job resource names have the form:
     * `customers/{customer_id}/mutateJobs/{mutate_job_id}`
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
     * ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getNextAddSequenceToken()
    {
        return $this->next_add_sequence_token;
    }

    /**
     * Returns the unboxed value from <code>getNextAddSequenceToken()</code>

     * The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3;</code>
     * @return string|null
     */
    public function getNextAddSequenceTokenUnwrapped()
    {
        return $this->readWrapperValue("next_add_sequence_token");
    }

    /**
     * The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setNextAddSequenceToken($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->next_add_sequence_token = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNextAddSequenceTokenUnwrapped($var)
    {
        $this->writeWrapperValue("next_add_sequence_token", $var);
        return $this;}

    /**
     * Contains additional information about this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MutateJob.MutateJobMetadata metadata = 4;</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\MutateJob\MutateJobMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Contains additional information about this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MutateJob.MutateJobMetadata metadata = 4;</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\MutateJob\MutateJobMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\MutateJob_MutateJobMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Status of this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MutateJobStatusEnum.MutateJobStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MutateJobStatusEnum.MutateJobStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\MutateJobStatusEnum_MutateJobStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLongRunningOperation()
    {
        return $this->long_running_operation;
    }

    /**
     * Returns the unboxed value from <code>getLongRunningOperation()</code>

     * The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6;</code>
     * @return string|null
     */
    public function getLongRunningOperationUnwrapped()
    {
        return $this->readWrapperValue("long_running_operation");
    }

    /**
     * The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLongRunningOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->long_running_operation = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLongRunningOperationUnwrapped($var)
    {
        $this->writeWrapperValue("long_running_operation", $var);
        return $this;}

}

