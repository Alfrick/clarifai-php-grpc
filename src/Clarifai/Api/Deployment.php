<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A deployment allows you to configure how runners for a particular type of resource will
 * scale up and down. These are unique per user_id, nodepool and model so for differnet nodepools
 * you can scale differently.
 *
 * Generated from protobuf message <code>clarifai.api.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    /**
     * An id for this configured deployment.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The user who owns the deployment. These live in the user/org account.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     */
    protected $user_id = '';
    /**
     * How to autoscale the object.
     *
     * Generated from protobuf field <code>.clarifai.api.AutoscaleConfig autoscale_config = 3;</code>
     */
    protected $autoscale_config = null;
    /**
     * You can configure different autoscaling per nodepool(s).
     * These nodepools have to be also owned by the same user_id/org as this deployment.
     * If there is more than one nodepool we use the model's ComputeInfo to match
     * with what the nodepool provides to decide which one can handle it combined with the
     * NodepoolRank below. Note: even within a single nodepool if it is heterogeneous then
     * we need a way to rank scheduling choices when we don't know how to decide (like a model
     * supports
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 4;</code>
     */
    private $nodepools;
    /**
     * Generated from protobuf field <code>.clarifai.api.Deployment.SchedulingChoice scheduling_choice = 7;</code>
     */
    protected $scheduling_choice = 0;
    protected $object;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           An id for this configured deployment.
     *     @type string $user_id
     *           The user who owns the deployment. These live in the user/org account.
     *     @type \Clarifai\Api\AutoscaleConfig $autoscale_config
     *           How to autoscale the object.
     *     @type array<\Clarifai\Api\Nodepool>|\Google\Protobuf\Internal\RepeatedField $nodepools
     *           You can configure different autoscaling per nodepool(s).
     *           These nodepools have to be also owned by the same user_id/org as this deployment.
     *           If there is more than one nodepool we use the model's ComputeInfo to match
     *           with what the nodepool provides to decide which one can handle it combined with the
     *           NodepoolRank below. Note: even within a single nodepool if it is heterogeneous then
     *           we need a way to rank scheduling choices when we don't know how to decide (like a model
     *           supports
     *     @type \Clarifai\Api\Model $model
     *           Model
     *     @type \Clarifai\Api\Workflow $workflow
     *           Workflow
     *     @type int $scheduling_choice
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * An id for this configured deployment.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * An id for this configured deployment.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The user who owns the deployment. These live in the user/org account.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user who owns the deployment. These live in the user/org account.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * How to autoscale the object.
     *
     * Generated from protobuf field <code>.clarifai.api.AutoscaleConfig autoscale_config = 3;</code>
     * @return \Clarifai\Api\AutoscaleConfig|null
     */
    public function getAutoscaleConfig()
    {
        return $this->autoscale_config;
    }

    public function hasAutoscaleConfig()
    {
        return isset($this->autoscale_config);
    }

    public function clearAutoscaleConfig()
    {
        unset($this->autoscale_config);
    }

    /**
     * How to autoscale the object.
     *
     * Generated from protobuf field <code>.clarifai.api.AutoscaleConfig autoscale_config = 3;</code>
     * @param \Clarifai\Api\AutoscaleConfig $var
     * @return $this
     */
    public function setAutoscaleConfig($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\AutoscaleConfig::class);
        $this->autoscale_config = $var;

        return $this;
    }

    /**
     * You can configure different autoscaling per nodepool(s).
     * These nodepools have to be also owned by the same user_id/org as this deployment.
     * If there is more than one nodepool we use the model's ComputeInfo to match
     * with what the nodepool provides to decide which one can handle it combined with the
     * NodepoolRank below. Note: even within a single nodepool if it is heterogeneous then
     * we need a way to rank scheduling choices when we don't know how to decide (like a model
     * supports
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodepools()
    {
        return $this->nodepools;
    }

    /**
     * You can configure different autoscaling per nodepool(s).
     * These nodepools have to be also owned by the same user_id/org as this deployment.
     * If there is more than one nodepool we use the model's ComputeInfo to match
     * with what the nodepool provides to decide which one can handle it combined with the
     * NodepoolRank below. Note: even within a single nodepool if it is heterogeneous then
     * we need a way to rank scheduling choices when we don't know how to decide (like a model
     * supports
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 4;</code>
     * @param array<\Clarifai\Api\Nodepool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodepools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Nodepool::class);
        $this->nodepools = $arr;

        return $this;
    }

    /**
     * Model
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 5;</code>
     * @return \Clarifai\Api\Model|null
     */
    public function getModel()
    {
        return $this->readOneof(5);
    }

    public function hasModel()
    {
        return $this->hasOneof(5);
    }

    /**
     * Model
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 5;</code>
     * @param \Clarifai\Api\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Model::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Workflow
     *
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 6;</code>
     * @return \Clarifai\Api\Workflow|null
     */
    public function getWorkflow()
    {
        return $this->readOneof(6);
    }

    public function hasWorkflow()
    {
        return $this->hasOneof(6);
    }

    /**
     * Workflow
     *
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 6;</code>
     * @param \Clarifai\Api\Workflow $var
     * @return $this
     */
    public function setWorkflow($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Workflow::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Deployment.SchedulingChoice scheduling_choice = 7;</code>
     * @return int
     */
    public function getSchedulingChoice()
    {
        return $this->scheduling_choice;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Deployment.SchedulingChoice scheduling_choice = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSchedulingChoice($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\Deployment\SchedulingChoice::class);
        $this->scheduling_choice = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->whichOneof("object");
    }

}

