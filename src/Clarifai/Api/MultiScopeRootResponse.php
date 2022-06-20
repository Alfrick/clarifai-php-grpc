<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MultiScopeRootResponse
 *
 * Generated from protobuf message <code>clarifai.api.MultiScopeRootResponse</code>
 */
class MultiScopeRootResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The status of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * This is a list of the scopes that your key has.
     *
     * Generated from protobuf field <code>repeated string scopes = 2;</code>
     */
    private $scopes;
    /**
     * This is a list of endpoint permissions that your key has.
     *
     * Generated from protobuf field <code>repeated string endpoints = 4;</code>
     */
    private $endpoints;
    /**
     * Generated from protobuf field <code>string user_feature_flags = 5;</code>
     */
    protected $user_feature_flags = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           The status of the request.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $scopes
     *           This is a list of the scopes that your key has.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $endpoints
     *           This is a list of endpoint permissions that your key has.
     *     @type string $user_feature_flags
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The status of the request.
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
     * The status of the request.
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
     * This is a list of the scopes that your key has.
     *
     * Generated from protobuf field <code>repeated string scopes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * This is a list of the scopes that your key has.
     *
     * Generated from protobuf field <code>repeated string scopes = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

    /**
     * This is a list of endpoint permissions that your key has.
     *
     * Generated from protobuf field <code>repeated string endpoints = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * This is a list of endpoint permissions that your key has.
     *
     * Generated from protobuf field <code>repeated string endpoints = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->endpoints = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_feature_flags = 5;</code>
     * @return string
     */
    public function getUserFeatureFlags()
    {
        return $this->user_feature_flags;
    }

    /**
     * Generated from protobuf field <code>string user_feature_flags = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUserFeatureFlags($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_feature_flags = $var;

        return $this;
    }

}
