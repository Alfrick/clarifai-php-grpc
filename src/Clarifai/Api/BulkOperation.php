<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.BulkOperation</code>
 */
class BulkOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * id of the Bulk Operation task
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Operation to perform
     *
     * Generated from protobuf field <code>.clarifai.api.Operation operation = 3;</code>
     */
    protected $operation = null;
    /**
     * Application ID that this Operation was created from
     *
     * Generated from protobuf field <code>string app_id = 4;</code>
     */
    protected $app_id = '';
    /**
     * Status (pending, in-progress, completed, failed) of the operation
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 5;</code>
     */
    protected $status = null;
    /**
     * Progress of an on-going Bulk Operation task
     *
     * Generated from protobuf field <code>.clarifai.api.Progress progress = 6;</code>
     */
    protected $progress = null;
    /**
     * User id that created this operation
     *
     * Generated from protobuf field <code>string created_by = 7;</code>
     */
    protected $created_by = '';
    /**
     * When the operation was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     */
    protected $created_at = null;
    /**
     * Last time the status got updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_at = 9;</code>
     */
    protected $last_modified_at = null;
    protected $input_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           id of the Bulk Operation task
     *     @type \Clarifai\Api\InputIDs $input_ids
     *     @type \Clarifai\Api\Search $search
     *     @type \Clarifai\Api\Dataset $dataset
     *     @type \Clarifai\Api\Operation $operation
     *           Operation to perform
     *     @type string $app_id
     *           Application ID that this Operation was created from
     *     @type \Clarifai\Api\Status\Status $status
     *           Status (pending, in-progress, completed, failed) of the operation
     *     @type \Clarifai\Api\Progress $progress
     *           Progress of an on-going Bulk Operation task
     *     @type string $created_by
     *           User id that created this operation
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the operation was created. We follow the XXXX timestamp
     *           format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     *           "2006-01-02T15:04:05.999999Z" so you can expect results like
     *           the following from the API:
     *           "2017-04-11T21:50:50.223962Z"
     *     @type \Google\Protobuf\Timestamp $last_modified_at
     *           Last time the status got updated
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * id of the Bulk Operation task
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * id of the Bulk Operation task
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
     * Generated from protobuf field <code>.clarifai.api.InputIDs input_ids = 2;</code>
     * @return \Clarifai\Api\InputIDs|null
     */
    public function getInputIds()
    {
        return $this->readOneof(2);
    }

    public function hasInputIds()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.InputIDs input_ids = 2;</code>
     * @param \Clarifai\Api\InputIDs $var
     * @return $this
     */
    public function setInputIds($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\InputIDs::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Search search = 10;</code>
     * @return \Clarifai\Api\Search|null
     */
    public function getSearch()
    {
        return $this->readOneof(10);
    }

    public function hasSearch()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Search search = 10;</code>
     * @param \Clarifai\Api\Search $var
     * @return $this
     */
    public function setSearch($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Search::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Dataset dataset = 11;</code>
     * @return \Clarifai\Api\Dataset|null
     */
    public function getDataset()
    {
        return $this->readOneof(11);
    }

    public function hasDataset()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Dataset dataset = 11;</code>
     * @param \Clarifai\Api\Dataset $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Dataset::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Operation to perform
     *
     * Generated from protobuf field <code>.clarifai.api.Operation operation = 3;</code>
     * @return \Clarifai\Api\Operation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Operation to perform
     *
     * Generated from protobuf field <code>.clarifai.api.Operation operation = 3;</code>
     * @param \Clarifai\Api\Operation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Operation::class);
        $this->operation = $var;

        return $this;
    }

    /**
     * Application ID that this Operation was created from
     *
     * Generated from protobuf field <code>string app_id = 4;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Application ID that this Operation was created from
     *
     * Generated from protobuf field <code>string app_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Status (pending, in-progress, completed, failed) of the operation
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 5;</code>
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
     * Status (pending, in-progress, completed, failed) of the operation
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 5;</code>
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
     * Progress of an on-going Bulk Operation task
     *
     * Generated from protobuf field <code>.clarifai.api.Progress progress = 6;</code>
     * @return \Clarifai\Api\Progress|null
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
     * Progress of an on-going Bulk Operation task
     *
     * Generated from protobuf field <code>.clarifai.api.Progress progress = 6;</code>
     * @param \Clarifai\Api\Progress $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Progress::class);
        $this->progress = $var;

        return $this;
    }

    /**
     * User id that created this operation
     *
     * Generated from protobuf field <code>string created_by = 7;</code>
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * User id that created this operation
     *
     * Generated from protobuf field <code>string created_by = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_by = $var;

        return $this;
    }

    /**
     * When the operation was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
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
     * When the operation was created. We follow the XXXX timestamp
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
     * Last time the status got updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_at = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastModifiedAt()
    {
        return $this->last_modified_at;
    }

    public function hasLastModifiedAt()
    {
        return isset($this->last_modified_at);
    }

    public function clearLastModifiedAt()
    {
        unset($this->last_modified_at);
    }

    /**
     * Last time the status got updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_at = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_modified_at = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getInputSource()
    {
        return $this->whichOneof("input_source");
    }

}

