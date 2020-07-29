<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TaskReviewConsensusStrategyInfo</code>
 */
class TaskReviewConsensusStrategyInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of labelers that need to agree in order to automatically approve an annotation.
     *
     * Generated from protobuf field <code>uint32 quorum_necessary_for_approval = 1;</code>
     */
    protected $quorum_necessary_for_approval = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $quorum_necessary_for_approval
     *           The number of labelers that need to agree in order to automatically approve an annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of labelers that need to agree in order to automatically approve an annotation.
     *
     * Generated from protobuf field <code>uint32 quorum_necessary_for_approval = 1;</code>
     * @return int
     */
    public function getQuorumNecessaryForApproval()
    {
        return $this->quorum_necessary_for_approval;
    }

    /**
     * The number of labelers that need to agree in order to automatically approve an annotation.
     *
     * Generated from protobuf field <code>uint32 quorum_necessary_for_approval = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setQuorumNecessaryForApproval($var)
    {
        GPBUtil::checkUint32($var);
        $this->quorum_necessary_for_approval = $var;

        return $this;
    }

}
