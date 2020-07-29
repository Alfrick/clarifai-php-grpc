<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PatchCollectorsRequest</code>
 */
class PatchCollectorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Collector collectors = 2;</code>
     */
    private $collectors;
    /**
     * The action to perform on the patched objects
     * For now actions 'merge', 'overwrite', and 'remove' are supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     */
    protected $action = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type \Clarifai\Api\Collector[]|\Google\Protobuf\Internal\RepeatedField $collectors
     *     @type string $action
     *           The action to perform on the patched objects
     *           For now actions 'merge', 'overwrite', and 'remove' are supported
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
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
     * Generated from protobuf field <code>repeated .clarifai.api.Collector collectors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollectors()
    {
        return $this->collectors;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Collector collectors = 2;</code>
     * @param \Clarifai\Api\Collector[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollectors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Collector::class);
        $this->collectors = $arr;

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

}
