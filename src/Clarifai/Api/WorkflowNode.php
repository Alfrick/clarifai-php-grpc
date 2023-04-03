<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * WorkflowNode
 *
 * Generated from protobuf message <code>clarifai.api.WorkflowNode</code>
 */
class WorkflowNode extends \Google\Protobuf\Internal\Message
{
    /**
     * An identifier for this node in the graph. This is used when connecting NodeInputs
     * together.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The model that will do the processing at this node. We only vlidate the model.id and
     * model.model_version.id fields.
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 2;</code>
     */
    protected $model = null;
    /**
     * Each WorkflowNode can connect to multiple input nodes so that we can handle multi-model data
     * and more complex workflow operations.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.NodeInput node_inputs = 3;</code>
     */
    private $node_inputs;
    /**
     * suppress the output for workflow prediction
     *
     * Generated from protobuf field <code>bool suppress_output = 4;</code>
     */
    protected $suppress_output = false;
    /**
     * Used to override the output_info.data and output_info.params of the model specified by the node.
     * Values for fields_map, message, and output_config are ignored.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info_override = 5;</code>
     */
    protected $output_info_override = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           An identifier for this node in the graph. This is used when connecting NodeInputs
     *           together.
     *     @type \Clarifai\Api\Model $model
     *           The model that will do the processing at this node. We only vlidate the model.id and
     *           model.model_version.id fields.
     *     @type array<\Clarifai\Api\NodeInput>|\Google\Protobuf\Internal\RepeatedField $node_inputs
     *           Each WorkflowNode can connect to multiple input nodes so that we can handle multi-model data
     *           and more complex workflow operations.
     *     @type bool $suppress_output
     *           suppress the output for workflow prediction
     *     @type \Clarifai\Api\OutputInfo $output_info_override
     *           Used to override the output_info.data and output_info.params of the model specified by the node.
     *           Values for fields_map, message, and output_config are ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * An identifier for this node in the graph. This is used when connecting NodeInputs
     * together.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * An identifier for this node in the graph. This is used when connecting NodeInputs
     * together.
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
     * The model that will do the processing at this node. We only vlidate the model.id and
     * model.model_version.id fields.
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 2;</code>
     * @return \Clarifai\Api\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }

    public function hasModel()
    {
        return isset($this->model);
    }

    public function clearModel()
    {
        unset($this->model);
    }

    /**
     * The model that will do the processing at this node. We only vlidate the model.id and
     * model.model_version.id fields.
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 2;</code>
     * @param \Clarifai\Api\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Model::class);
        $this->model = $var;

        return $this;
    }

    /**
     * Each WorkflowNode can connect to multiple input nodes so that we can handle multi-model data
     * and more complex workflow operations.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.NodeInput node_inputs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeInputs()
    {
        return $this->node_inputs;
    }

    /**
     * Each WorkflowNode can connect to multiple input nodes so that we can handle multi-model data
     * and more complex workflow operations.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.NodeInput node_inputs = 3;</code>
     * @param array<\Clarifai\Api\NodeInput>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\NodeInput::class);
        $this->node_inputs = $arr;

        return $this;
    }

    /**
     * suppress the output for workflow prediction
     *
     * Generated from protobuf field <code>bool suppress_output = 4;</code>
     * @return bool
     */
    public function getSuppressOutput()
    {
        return $this->suppress_output;
    }

    /**
     * suppress the output for workflow prediction
     *
     * Generated from protobuf field <code>bool suppress_output = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuppressOutput($var)
    {
        GPBUtil::checkBool($var);
        $this->suppress_output = $var;

        return $this;
    }

    /**
     * Used to override the output_info.data and output_info.params of the model specified by the node.
     * Values for fields_map, message, and output_config are ignored.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info_override = 5;</code>
     * @return \Clarifai\Api\OutputInfo|null
     */
    public function getOutputInfoOverride()
    {
        return $this->output_info_override;
    }

    public function hasOutputInfoOverride()
    {
        return isset($this->output_info_override);
    }

    public function clearOutputInfoOverride()
    {
        unset($this->output_info_override);
    }

    /**
     * Used to override the output_info.data and output_info.params of the model specified by the node.
     * Values for fields_map, message, and output_config are ignored.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info_override = 5;</code>
     * @param \Clarifai\Api\OutputInfo $var
     * @return $this
     */
    public function setOutputInfoOverride($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\OutputInfo::class);
        $this->output_info_override = $var;

        return $this;
    }

}

