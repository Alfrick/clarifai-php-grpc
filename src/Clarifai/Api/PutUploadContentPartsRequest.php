<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Upload part of multipart upload
 *
 * Generated from protobuf message <code>clarifai.api.PutUploadContentPartsRequest</code>
 */
class PutUploadContentPartsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>string upload_id = 2;</code>
     */
    protected $upload_id = '';
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.UploadContentPart content_parts = 3;</code>
     */
    private $content_parts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $upload_id
     *     @type array<\Clarifai\Api\UploadContentPart>|\Google\Protobuf\Internal\RepeatedField $content_parts
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
     * Generated from protobuf field <code>string upload_id = 2;</code>
     * @return string
     */
    public function getUploadId()
    {
        return $this->upload_id;
    }

    /**
     * Generated from protobuf field <code>string upload_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUploadId($var)
    {
        GPBUtil::checkString($var, True);
        $this->upload_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.UploadContentPart content_parts = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContentParts()
    {
        return $this->content_parts;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.UploadContentPart content_parts = 3;</code>
     * @param array<\Clarifai\Api\UploadContentPart>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContentParts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\UploadContentPart::class);
        $this->content_parts = $arr;

        return $this;
    }

}

