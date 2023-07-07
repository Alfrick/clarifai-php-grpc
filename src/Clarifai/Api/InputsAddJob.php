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
     * Sub-jobs that extract inputs from the cloud and/or archives
     *
     * Generated from protobuf field <code>repeated .clarifai.api.InputsExtractionJob extraction_jobs = 10;</code>
     */
    private $extraction_jobs;
    /**
     * Archive uploads
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Upload uploads = 11;</code>
     */
    private $uploads;
    /**
     * Status of the job
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 12;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           id of the job
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
     *     @type array<\Clarifai\Api\InputsExtractionJob>|\Google\Protobuf\Internal\RepeatedField $extraction_jobs
     *           Sub-jobs that extract inputs from the cloud and/or archives
     *     @type array<\Clarifai\Api\Upload>|\Google\Protobuf\Internal\RepeatedField $uploads
     *           Archive uploads
     *     @type \Clarifai\Api\Status\Status $status
     *           Status of the job
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

    /**
     * Sub-jobs that extract inputs from the cloud and/or archives
     *
     * Generated from protobuf field <code>repeated .clarifai.api.InputsExtractionJob extraction_jobs = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtractionJobs()
    {
        return $this->extraction_jobs;
    }

    /**
     * Sub-jobs that extract inputs from the cloud and/or archives
     *
     * Generated from protobuf field <code>repeated .clarifai.api.InputsExtractionJob extraction_jobs = 10;</code>
     * @param array<\Clarifai\Api\InputsExtractionJob>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtractionJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\InputsExtractionJob::class);
        $this->extraction_jobs = $arr;

        return $this;
    }

    /**
     * Archive uploads
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Upload uploads = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUploads()
    {
        return $this->uploads;
    }

    /**
     * Archive uploads
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Upload uploads = 11;</code>
     * @param array<\Clarifai\Api\Upload>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUploads($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Upload::class);
        $this->uploads = $arr;

        return $this;
    }

    /**
     * Status of the job
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 12;</code>
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
     * Status of the job
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 12;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

}

