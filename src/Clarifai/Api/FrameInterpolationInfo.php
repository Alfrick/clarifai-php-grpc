<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FrameInterpolationInfo contains information about frame annotations
 * interpolated from other video annotations, such as image object-detection
 * regions generated from video object-tracking regions.
 *
 * Generated from protobuf message <code>clarifai.api.FrameInterpolationInfo</code>
 */
class FrameInterpolationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * sample_ms is the sampling rate at which frame annotations are interpolated.
     * If zero, then the input frame prediction sampling rate is used.
     *
     * Generated from protobuf field <code>uint32 sample_ms = 1;</code>
     */
    protected $sample_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $sample_ms
     *           sample_ms is the sampling rate at which frame annotations are interpolated.
     *           If zero, then the input frame prediction sampling rate is used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * sample_ms is the sampling rate at which frame annotations are interpolated.
     * If zero, then the input frame prediction sampling rate is used.
     *
     * Generated from protobuf field <code>uint32 sample_ms = 1;</code>
     * @return int
     */
    public function getSampleMs()
    {
        return $this->sample_ms;
    }

    /**
     * sample_ms is the sampling rate at which frame annotations are interpolated.
     * If zero, then the input frame prediction sampling rate is used.
     *
     * Generated from protobuf field <code>uint32 sample_ms = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleMs($var)
    {
        GPBUtil::checkUint32($var);
        $this->sample_ms = $var;

        return $this;
    }

}

