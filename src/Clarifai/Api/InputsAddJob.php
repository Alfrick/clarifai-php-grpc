<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.InputsAddJob</code>
 */
class InputsAddJob extends \Google\Protobuf\Internal\Message
{
    /**
     * id of the job
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Cloud storage url from which the inputs can be accessed.
     * Supported providers are AWS S3, Azure blob, GCP cloud storage.
     *
     * Generated from protobuf field <code>string cloud_storage_url = 2;</code>
     */
    protected $cloud_storage_url = '';
    /**
     * If call back url is set, we will send a Post request to this endpoint with job status.
     *
     * Generated from protobuf field <code>string call_back_url = 3;</code>
     */
    protected $call_back_url = '';
    /**
     * Personal Access Token to the application to which inputs are added
     *
     * Generated from protobuf field <code>string app_pat = 4;</code>
     */
    protected $app_pat = '';
    /**
     * Progress of an on-going Input Ingestion task
     *
     * Generated from protobuf field <code>.clarifai.api.InputsAddJobProgress progress = 7;</code>
     */
    protected $progress = null;
    /**
     * When the job was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     */
    protected $created_at = null;
    /**
     * Most recent time when the job was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 9;</code>
     */
    protected $modified_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           id of the job
     *     @type string $cloud_storage_url
     *           Cloud storage url from which the inputs can be accessed.
     *           Supported providers are AWS S3, Azure blob, GCP cloud storage.
     *     @type string $call_back_url
     *           If call back url is set, we will send a Post request to this endpoint with job status.
     *     @type string $app_pat
     *           Personal Access Token to the application to which inputs are added
     *     @type \Clarifai\Api\InputsAddJobProgress $progress
     *           Progress of an on-going Input Ingestion task
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the job was created.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           Most recent time when the job was updated.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * id of the job
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * id of the job
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
     * Cloud storage url from which the inputs can be accessed.
     * Supported providers are AWS S3, Azure blob, GCP cloud storage.
     *
     * Generated from protobuf field <code>string cloud_storage_url = 2;</code>
     * @return string
     */
    public function getCloudStorageUrl()
    {
        return $this->cloud_storage_url;
    }

    /**
     * Cloud storage url from which the inputs can be accessed.
     * Supported providers are AWS S3, Azure blob, GCP cloud storage.
     *
     * Generated from protobuf field <code>string cloud_storage_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCloudStorageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloud_storage_url = $var;

        return $this;
    }

    /**
     * If call back url is set, we will send a Post request to this endpoint with job status.
     *
     * Generated from protobuf field <code>string call_back_url = 3;</code>
     * @return string
     */
    public function getCallBackUrl()
    {
        return $this->call_back_url;
    }

    /**
     * If call back url is set, we will send a Post request to this endpoint with job status.
     *
     * Generated from protobuf field <code>string call_back_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCallBackUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_back_url = $var;

        return $this;
    }

    /**
     * Personal Access Token to the application to which inputs are added
     *
     * Generated from protobuf field <code>string app_pat = 4;</code>
     * @return string
     */
    public function getAppPat()
    {
        return $this->app_pat;
    }

    /**
     * Personal Access Token to the application to which inputs are added
     *
     * Generated from protobuf field <code>string app_pat = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAppPat($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_pat = $var;

        return $this;
    }

    /**
     * Progress of an on-going Input Ingestion task
     *
     * Generated from protobuf field <code>.clarifai.api.InputsAddJobProgress progress = 7;</code>
     * @return \Clarifai\Api\InputsAddJobProgress|null
     */
    public function getProgress()
    {
        return $this->progress;
    }

    public function hasProgress()
    {
        return isset($this->progress);
    }

    public function clearProgress()
    {
        unset($this->progress);
    }

    /**
     * Progress of an on-going Input Ingestion task
     *
     * Generated from protobuf field <code>.clarifai.api.InputsAddJobProgress progress = 7;</code>
     * @param \Clarifai\Api\InputsAddJobProgress $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\InputsAddJobProgress::class);
        $this->progress = $var;

        return $this;
    }

    /**
     * When the job was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * When the job was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
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
     * Most recent time when the job was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    public function hasModifiedAt()
    {
        return isset($this->modified_at);
    }

    public function clearModifiedAt()
    {
        unset($this->modified_at);
    }

    /**
     * Most recent time when the job was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
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

}

