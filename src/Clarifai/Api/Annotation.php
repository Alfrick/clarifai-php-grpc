<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * Messages from /proto/clarifai/api/annotation.proto
 * //////////////////////////////////////////////////////////////////////////////
 *
 * Generated from protobuf message <code>clarifai.api.Annotation</code>
 */
class Annotation extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID for the annotation
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * ID of the input this annotation is tied to
     *
     * Generated from protobuf field <code>string input_id = 2;</code>
     */
    protected $input_id = '';
    /**
     * The data passed along in this annotation.
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 3;</code>
     */
    protected $data = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct annotation_info = 13;</code>
     */
    protected $annotation_info = null;
    /**
     * ID of the user this annotation is created by
     *
     * Generated from protobuf field <code>string user_id = 15;</code>
     */
    protected $user_id = '';
    /**
     * ID of the model version this annotation is created by
     *
     * Generated from protobuf field <code>string model_version_id = 16;</code>
     */
    protected $model_version_id = '';
    /**
     * The embedding model version used make this annotation available for search and training
     * Note that an annotation always have an 'embed_model_version_id' even if it is For human
     * produced annotations i.e. if its worker is of type 'human' or 'app_owner'.
     *
     * Generated from protobuf field <code>string embed_model_version_id = 14;</code>
     */
    protected $embed_model_version_id = '';
    /**
     * Annotation Status
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 7;</code>
     */
    protected $status = null;
    /**
     * When the annotation was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     */
    protected $created_at = null;
    /**
     * When the annotation was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 9;</code>
     */
    protected $modified_at = null;
    /**
     * Whether or not this annotation is trusted
     * Will be deprecated
     *
     * Generated from protobuf field <code>bool trusted = 10 [deprecated = true];</code>
     */
    protected $trusted = false;
    /**
     * Is this the input level annotation.
     *
     * Generated from protobuf field <code>bool input_level = 17;</code>
     */
    protected $input_level = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The ID for the annotation
     *     @type string $input_id
     *           ID of the input this annotation is tied to
     *     @type \Clarifai\Api\Data $data
     *           The data passed along in this annotation.
     *     @type \Google\Protobuf\Struct $annotation_info
     *     @type string $user_id
     *           ID of the user this annotation is created by
     *     @type string $model_version_id
     *           ID of the model version this annotation is created by
     *     @type string $embed_model_version_id
     *           The embedding model version used make this annotation available for search and training
     *           Note that an annotation always have an 'embed_model_version_id' even if it is For human
     *           produced annotations i.e. if its worker is of type 'human' or 'app_owner'.
     *     @type \Clarifai\Api\Status\Status $status
     *           Annotation Status
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the annotation was created. We follow the XXXX timestamp
     *           format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     *           "2006-01-02T15:04:05.999999Z" so you can expect results like
     *           the following from the API:
     *           "2017-04-11T21:50:50.223962Z"
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the annotation was modified.
     *     @type bool $trusted
     *           Whether or not this annotation is trusted
     *           Will be deprecated
     *     @type bool $input_level
     *           Is this the input level annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID for the annotation
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID for the annotation
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
     * ID of the input this annotation is tied to
     *
     * Generated from protobuf field <code>string input_id = 2;</code>
     * @return string
     */
    public function getInputId()
    {
        return $this->input_id;
    }

    /**
     * ID of the input this annotation is tied to
     *
     * Generated from protobuf field <code>string input_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInputId($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_id = $var;

        return $this;
    }

    /**
     * The data passed along in this annotation.
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 3;</code>
     * @return \Clarifai\Api\Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The data passed along in this annotation.
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 3;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Struct annotation_info = 13;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getAnnotationInfo()
    {
        return $this->annotation_info;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct annotation_info = 13;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setAnnotationInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->annotation_info = $var;

        return $this;
    }

    /**
     * ID of the user this annotation is created by
     *
     * Generated from protobuf field <code>string user_id = 15;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * ID of the user this annotation is created by
     *
     * Generated from protobuf field <code>string user_id = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * ID of the model version this annotation is created by
     *
     * Generated from protobuf field <code>string model_version_id = 16;</code>
     * @return string
     */
    public function getModelVersionId()
    {
        return $this->model_version_id;
    }

    /**
     * ID of the model version this annotation is created by
     *
     * Generated from protobuf field <code>string model_version_id = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version_id = $var;

        return $this;
    }

    /**
     * The embedding model version used make this annotation available for search and training
     * Note that an annotation always have an 'embed_model_version_id' even if it is For human
     * produced annotations i.e. if its worker is of type 'human' or 'app_owner'.
     *
     * Generated from protobuf field <code>string embed_model_version_id = 14;</code>
     * @return string
     */
    public function getEmbedModelVersionId()
    {
        return $this->embed_model_version_id;
    }

    /**
     * The embedding model version used make this annotation available for search and training
     * Note that an annotation always have an 'embed_model_version_id' even if it is For human
     * produced annotations i.e. if its worker is of type 'human' or 'app_owner'.
     *
     * Generated from protobuf field <code>string embed_model_version_id = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setEmbedModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->embed_model_version_id = $var;

        return $this;
    }

    /**
     * Annotation Status
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 7;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Annotation Status
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 7;</code>
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
     * When the annotation was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * When the annotation was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * When the annotation was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 9;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    /**
     * When the annotation was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

    /**
     * Whether or not this annotation is trusted
     * Will be deprecated
     *
     * Generated from protobuf field <code>bool trusted = 10 [deprecated = true];</code>
     * @return bool
     */
    public function getTrusted()
    {
        return $this->trusted;
    }

    /**
     * Whether or not this annotation is trusted
     * Will be deprecated
     *
     * Generated from protobuf field <code>bool trusted = 10 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setTrusted($var)
    {
        GPBUtil::checkBool($var);
        $this->trusted = $var;

        return $this;
    }

    /**
     * Is this the input level annotation.
     *
     * Generated from protobuf field <code>bool input_level = 17;</code>
     * @return bool
     */
    public function getInputLevel()
    {
        return $this->input_level;
    }

    /**
     * Is this the input level annotation.
     *
     * Generated from protobuf field <code>bool input_level = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setInputLevel($var)
    {
        GPBUtil::checkBool($var);
        $this->input_level = $var;

        return $this;
    }

}
