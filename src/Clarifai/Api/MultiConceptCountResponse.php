<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MultiConceptCountResponse
 *
 * Generated from protobuf message <code>clarifai.api.MultiConceptCountResponse</code>
 */
class MultiConceptCountResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The response status.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * The returned concept counts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptCount concept_counts = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $concept_counts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           The response status.
     *     @type array<\Clarifai\Api\ConceptCount>|\Google\Protobuf\Internal\RepeatedField $concept_counts
     *           The returned concept counts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The response status.
     *
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
     * The response status.
     *
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
     * The returned concept counts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptCount concept_counts = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConceptCounts()
    {
        return $this->concept_counts;
    }

    /**
     * The returned concept counts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptCount concept_counts = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param array<\Clarifai\Api\ConceptCount>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConceptCounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ConceptCount::class);
        $this->concept_counts = $arr;

        return $this;
    }

}

