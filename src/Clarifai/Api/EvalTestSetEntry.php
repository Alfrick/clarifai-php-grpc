<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EvalTestSetEntry
 *
 * Generated from protobuf message <code>clarifai.api.EvalTestSetEntry</code>
 */
class EvalTestSetEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Input CFID
     *
     * Generated from protobuf field <code>string id = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string url = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $url = '';
    /**
     * the input information
     *
     * Generated from protobuf field <code>.clarifai.api.Input input = 6;</code>
     */
    protected $input = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Concept predicted_concepts = 3;</code>
     */
    private $predicted_concepts;
    /**
     * All the ground truth concepts will be show on the top level
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept ground_truth_concepts = 4;</code>
     */
    private $ground_truth_concepts;
    /**
     * Only region-based/frame-based app contains this annotation
     * Each annotation only contains one region
     * And the concepts is in ground_truth_concepts instead of this annotation
     *
     * Generated from protobuf field <code>.clarifai.api.Annotation annotation = 5;</code>
     */
    protected $annotation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Input CFID
     *     @type string $url
     *     @type \Clarifai\Api\Input $input
     *           the input information
     *     @type array<\Clarifai\Api\Concept>|\Google\Protobuf\Internal\RepeatedField $predicted_concepts
     *     @type array<\Clarifai\Api\Concept>|\Google\Protobuf\Internal\RepeatedField $ground_truth_concepts
     *           All the ground truth concepts will be show on the top level
     *     @type \Clarifai\Api\Annotation $annotation
     *           Only region-based/frame-based app contains this annotation
     *           Each annotation only contains one region
     *           And the concepts is in ground_truth_concepts instead of this annotation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Input CFID
     *
     * Generated from protobuf field <code>string id = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getId()
    {
        @trigger_error('id is deprecated.', E_USER_DEPRECATED);
        return $this->id;
    }

    /**
     * Input CFID
     *
     * Generated from protobuf field <code>string id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setId($var)
    {
        @trigger_error('id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getUrl()
    {
        @trigger_error('url is deprecated.', E_USER_DEPRECATED);
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setUrl($var)
    {
        @trigger_error('url is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * the input information
     *
     * Generated from protobuf field <code>.clarifai.api.Input input = 6;</code>
     * @return \Clarifai\Api\Input|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * the input information
     *
     * Generated from protobuf field <code>.clarifai.api.Input input = 6;</code>
     * @param \Clarifai\Api\Input $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Input::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Concept predicted_concepts = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPredictedConcepts()
    {
        return $this->predicted_concepts;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Concept predicted_concepts = 3;</code>
     * @param array<\Clarifai\Api\Concept>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPredictedConcepts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Concept::class);
        $this->predicted_concepts = $arr;

        return $this;
    }

    /**
     * All the ground truth concepts will be show on the top level
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept ground_truth_concepts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroundTruthConcepts()
    {
        return $this->ground_truth_concepts;
    }

    /**
     * All the ground truth concepts will be show on the top level
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept ground_truth_concepts = 4;</code>
     * @param array<\Clarifai\Api\Concept>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroundTruthConcepts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Concept::class);
        $this->ground_truth_concepts = $arr;

        return $this;
    }

    /**
     * Only region-based/frame-based app contains this annotation
     * Each annotation only contains one region
     * And the concepts is in ground_truth_concepts instead of this annotation
     *
     * Generated from protobuf field <code>.clarifai.api.Annotation annotation = 5;</code>
     * @return \Clarifai\Api\Annotation|null
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    public function hasAnnotation()
    {
        return isset($this->annotation);
    }

    public function clearAnnotation()
    {
        unset($this->annotation);
    }

    /**
     * Only region-based/frame-based app contains this annotation
     * Each annotation only contains one region
     * And the concepts is in ground_truth_concepts instead of this annotation
     *
     * Generated from protobuf field <code>.clarifai.api.Annotation annotation = 5;</code>
     * @param \Clarifai\Api\Annotation $var
     * @return $this
     */
    public function setAnnotation($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Annotation::class);
        $this->annotation = $var;

        return $this;
    }

}

