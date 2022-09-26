<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MultiInputsAddJobResponse
 *
 * Generated from protobuf message <code>clarifai.api.MultiInputsAddJobResponse</code>
 */
class MultiInputsAddJobResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsAddJob inputs_add_jobs = 2;</code>
     */
    private $inputs_add_jobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\InputsAddJob[]|\Google\Protobuf\Internal\RepeatedField $inputs_add_jobs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsAddJob inputs_add_jobs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputsAddJobs()
    {
        return $this->inputs_add_jobs;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsAddJob inputs_add_jobs = 2;</code>
     * @param \Clarifai\Api\InputsAddJob[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputsAddJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\InputsAddJob::class);
        $this->inputs_add_jobs = $arr;

        return $this;
    }

}

