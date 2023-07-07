<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PatchAnnotationsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PatchAnnotationsRequest</code>
 */
class PatchAnnotationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Annotation annotations = 2;</code>
     */
    private $annotations;
    /**
     * The action to perform on the patched objects
     * For now actions 'merge', 'overwrite', and 'remove' are supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     */
    protected $action = '';
    /**
     * If the request is a "remove" action and the annotation is left with empty data,
     * then setting delete_if_empty_data to true will delete the annotation,
     * if possible (for example, will not delete an input-level annotation).
     *
     * Generated from protobuf field <code>bool delete_if_empty_data = 4;</code>
     */
    protected $delete_if_empty_data = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type array<\Clarifai\Api\Annotation>|\Google\Protobuf\Internal\RepeatedField $annotations
     *     @type string $action
     *           The action to perform on the patched objects
     *           For now actions 'merge', 'overwrite', and 'remove' are supported
     *     @type bool $delete_if_empty_data
     *           If the request is a "remove" action and the annotation is left with empty data,
     *           then setting delete_if_empty_data to true will delete the annotation,
     *           if possible (for example, will not delete an input-level annotation).
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
     * Generated from protobuf field <code>repeated .clarifai.api.Annotation annotations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Annotation annotations = 2;</code>
     * @param array<\Clarifai\Api\Annotation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Annotation::class);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * The action to perform on the patched objects
     * For now actions 'merge', 'overwrite', and 'remove' are supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action to perform on the patched objects
     * For now actions 'merge', 'overwrite', and 'remove' are supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * If the request is a "remove" action and the annotation is left with empty data,
     * then setting delete_if_empty_data to true will delete the annotation,
     * if possible (for example, will not delete an input-level annotation).
     *
     * Generated from protobuf field <code>bool delete_if_empty_data = 4;</code>
     * @return bool
     */
    public function getDeleteIfEmptyData()
    {
        return $this->delete_if_empty_data;
    }

    /**
     * If the request is a "remove" action and the annotation is left with empty data,
     * then setting delete_if_empty_data to true will delete the annotation,
     * if possible (for example, will not delete an input-level annotation).
     *
     * Generated from protobuf field <code>bool delete_if_empty_data = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleteIfEmptyData($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_if_empty_data = $var;

        return $this;
    }

}

