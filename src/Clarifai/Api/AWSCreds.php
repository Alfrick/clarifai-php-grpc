<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AWS S3 uses creds: “{accessKey}:{secretKey}” and “region” for authentication.
 *
 * Generated from protobuf message <code>clarifai.api.AWSCreds</code>
 */
class AWSCreds extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string creds = 1;</code>
     */
    protected $creds = '';
    /**
     * Generated from protobuf field <code>string region = 2;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creds
     *     @type string $region
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string creds = 1;</code>
     * @return string
     */
    public function getCreds()
    {
        return $this->creds;
    }

    /**
     * Generated from protobuf field <code>string creds = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCreds($var)
    {
        GPBUtil::checkString($var, True);
        $this->creds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string region = 2;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Generated from protobuf field <code>string region = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

