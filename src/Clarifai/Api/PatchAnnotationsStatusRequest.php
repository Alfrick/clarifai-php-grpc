<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PatchAnnotationsStatusRequest
 *
 * Generated from protobuf message <code>clarifai.api.PatchAnnotationsStatusRequest</code>
 */
class PatchAnnotationsStatusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Annotation Status code
     *
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode status_code = 2;</code>
     */
    protected $status_code = 0;
    /**
     * Generated from protobuf field <code>repeated string user_ids = 3;</code>
     */
    private $user_ids;
    /**
     * Generated from protobuf field <code>string task_id = 4;</code>
     */
    protected $task_id = '';
    /**
     * 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 5;</code>
     */
    protected $action = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type int $status_code
     *           Annotation Status code
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $user_ids
     *     @type string $task_id
     *     @type string $action
     *           'overwrite' is supported
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
     * Annotation Status code
     *
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode status_code = 2;</code>
     * @return int
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Annotation Status code
     *
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode status_code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusCode($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\Status\StatusCode::class);
        $this->status_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string user_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIds()
    {
        return $this->user_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string user_ids = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string task_id = 4;</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * Generated from protobuf field <code>string task_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_id = $var;

        return $this;
    }

    /**
     * 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 5;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

}

