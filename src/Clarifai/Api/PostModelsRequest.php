<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostModelsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostModelsRequest</code>
 */
class PostModelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * NOTE: inconsistent since "model" is not plural, please use "models" below.
     * Previously you could only create one model at a time.
     * We still support this but you should pass it as models=[model] so
     * that this endpoint is consistent with the rest of our API.
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $model = null;
    /**
     * This allows you to create one or more model by posting it to the API.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Model models = 3;</code>
     */
    private $models;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type \Clarifai\Api\Model $model
     *           NOTE: inconsistent since "model" is not plural, please use "models" below.
     *           Previously you could only create one model at a time.
     *           We still support this but you should pass it as models=[model] so
     *           that this endpoint is consistent with the rest of our API.
     *     @type array<\Clarifai\Api\Model>|\Google\Protobuf\Internal\RepeatedField $models
     *           This allows you to create one or more model by posting it to the API.
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
     * NOTE: inconsistent since "model" is not plural, please use "models" below.
     * Previously you could only create one model at a time.
     * We still support this but you should pass it as models=[model] so
     * that this endpoint is consistent with the rest of our API.
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 2 [deprecated = true];</code>
     * @return \Clarifai\Api\Model|null
     * @deprecated
     */
    public function getModel()
    {
        @trigger_error('model is deprecated.', E_USER_DEPRECATED);
        return $this->model;
    }

    public function hasModel()
    {
        @trigger_error('model is deprecated.', E_USER_DEPRECATED);
        return isset($this->model);
    }

    public function clearModel()
    {
        @trigger_error('model is deprecated.', E_USER_DEPRECATED);
        unset($this->model);
    }

    /**
     * NOTE: inconsistent since "model" is not plural, please use "models" below.
     * Previously you could only create one model at a time.
     * We still support this but you should pass it as models=[model] so
     * that this endpoint is consistent with the rest of our API.
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 2 [deprecated = true];</code>
     * @param \Clarifai\Api\Model $var
     * @return $this
     * @deprecated
     */
    public function setModel($var)
    {
        @trigger_error('model is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Clarifai\Api\Model::class);
        $this->model = $var;

        return $this;
    }

    /**
     * This allows you to create one or more model by posting it to the API.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Model models = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * This allows you to create one or more model by posting it to the API.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Model models = 3;</code>
     * @param array<\Clarifai\Api\Model>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Model::class);
        $this->models = $arr;

        return $this;
    }

}

