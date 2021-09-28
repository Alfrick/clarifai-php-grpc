<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TimeSegment</code>
 */
class TimeSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique id for the time segment.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.clarifai.api.Data data = 2;</code>
     */
    protected $data = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.TimeInfo time_info = 3;</code>
     */
    protected $time_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A unique id for the time segment.
     *     @type \Clarifai\Api\Data $data
     *     @type \Clarifai\Api\TimeInfo $time_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique id for the time segment.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique id for the time segment.
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
     * Generated from protobuf field <code>.clarifai.api.Data data = 2;</code>
     * @return \Clarifai\Api\Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Data data = 2;</code>
     * @param \Clarifai\Api\Data $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Data::class);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TimeInfo time_info = 3;</code>
     * @return \Clarifai\Api\TimeInfo
     */
    public function getTimeInfo()
    {
        return $this->time_info;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TimeInfo time_info = 3;</code>
     * @param \Clarifai\Api\TimeInfo $var
     * @return $this
     */
    public function setTimeInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TimeInfo::class);
        $this->time_info = $var;

        return $this;
    }

}

