<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.InputsDataSource</code>
 */
class InputsDataSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Collect statistics about created inputs in job with given ID.
     * On Post call:
     * * If job ID is empty, then job is automatically created with random ID
     * * If job ID is non-empty, then a new job will be created with given ID.
     *
     * Generated from protobuf field <code>string inputs_add_job_id = 1;</code>
     */
    protected $inputs_add_job_id = '';
    /**
     * Generated from protobuf field <code>.clarifai.api.DataSourceURL url = 2;</code>
     */
    protected $url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $inputs_add_job_id
     *           Collect statistics about created inputs in job with given ID.
     *           On Post call:
     *           * If job ID is empty, then job is automatically created with random ID
     *           * If job ID is non-empty, then a new job will be created with given ID.
     *     @type \Clarifai\Api\DataSourceURL $url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Collect statistics about created inputs in job with given ID.
     * On Post call:
     * * If job ID is empty, then job is automatically created with random ID
     * * If job ID is non-empty, then a new job will be created with given ID.
     *
     * Generated from protobuf field <code>string inputs_add_job_id = 1;</code>
     * @return string
     */
    public function getInputsAddJobId()
    {
        return $this->inputs_add_job_id;
    }

    /**
     * Collect statistics about created inputs in job with given ID.
     * On Post call:
     * * If job ID is empty, then job is automatically created with random ID
     * * If job ID is non-empty, then a new job will be created with given ID.
     *
     * Generated from protobuf field <code>string inputs_add_job_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInputsAddJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->inputs_add_job_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.DataSourceURL url = 2;</code>
     * @return \Clarifai\Api\DataSourceURL|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function hasUrl()
    {
        return isset($this->url);
    }

    public function clearUrl()
    {
        unset($this->url);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.DataSourceURL url = 2;</code>
     * @param \Clarifai\Api\DataSourceURL $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DataSourceURL::class);
        $this->url = $var;

        return $this;
    }

}

