<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluate this model vesion
 *
 * Generated from protobuf message <code>clarifai.api.PostModelVersionEvaluationsRequest</code>
 */
class PostModelVersionEvaluationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>string model_id = 2;</code>
     */
    protected $model_id = '';
    /**
     * Generated from protobuf field <code>string model_version_id = 3;</code>
     */
    protected $model_version_id = '';
    /**
     * EvalInfo and ID will be used when creating the evaluation
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvalMetrics eval_metrics = 4;</code>
     */
    private $eval_metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $model_id
     *     @type string $model_version_id
     *     @type array<\Clarifai\Api\EvalMetrics>|\Google\Protobuf\Internal\RepeatedField $eval_metrics
     *           EvalInfo and ID will be used when creating the evaluation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet|null
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    public function hasUserAppId()
    {
        return isset($this->user_app_id);
    }

    public function clearUserAppId()
    {
        unset($this->user_app_id);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Api\UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string model_id = 2;</code>
     * @return string
     */
    public function getModelId()
    {
        return $this->model_id;
    }

    /**
     * Generated from protobuf field <code>string model_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string model_version_id = 3;</code>
     * @return string
     */
    public function getModelVersionId()
    {
        return $this->model_version_id;
    }

    /**
     * Generated from protobuf field <code>string model_version_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version_id = $var;

        return $this;
    }

    /**
     * EvalInfo and ID will be used when creating the evaluation
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvalMetrics eval_metrics = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvalMetrics()
    {
        return $this->eval_metrics;
    }

    /**
     * EvalInfo and ID will be used when creating the evaluation
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvalMetrics eval_metrics = 4;</code>
     * @param array<\Clarifai\Api\EvalMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvalMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\EvalMetrics::class);
        $this->eval_metrics = $arr;

        return $this;
    }

}

