<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LabelOrder
 *
 * Generated from protobuf message <code>clarifai.api.LabelOrder</code>
 */
class LabelOrder extends \Google\Protobuf\Internal\Message
{
    /**
     * id of the order
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * name of the order
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * status of the order.
     * pending (QA lead review the order),
     * in progress (labeling in progress),
     * ready for release (passed clarifai QA and client can review)
     * success (released)
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
     */
    protected $status = null;
    /**
     * if set to true, automatically release the labels once passed clarifai review.
     *
     * Generated from protobuf field <code>bool auto_release = 4;</code>
     */
    protected $auto_release = false;
    /**
     * allow input without any tag.
     *
     * Generated from protobuf field <code>bool allow_empty_tag = 5;</code>
     */
    protected $allow_empty_tag = false;
    /**
     * User desired estimation when the task should be done
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp desired_fulfill_time = 6;</code>
     */
    protected $desired_fulfill_time = null;
    /**
     * Clarifai estimation when the task should be done .
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimate_fulfill_time = 7;</code>
     */
    protected $estimate_fulfill_time = null;
    /**
     * task for this label order
     *
     * Generated from protobuf field <code>.clarifai.api.Task task = 8;</code>
     */
    protected $task = null;
    /**
     * When the label order was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 9;</code>
     */
    protected $created_at = null;
    /**
     * Most recent time when the label order was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 10;</code>
     */
    protected $modified_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           id of the order
     *     @type string $name
     *           name of the order
     *     @type \Clarifai\Api\Status\Status $status
     *           status of the order.
     *           pending (QA lead review the order),
     *           in progress (labeling in progress),
     *           ready for release (passed clarifai QA and client can review)
     *           success (released)
     *     @type bool $auto_release
     *           if set to true, automatically release the labels once passed clarifai review.
     *     @type bool $allow_empty_tag
     *           allow input without any tag.
     *     @type \Google\Protobuf\Timestamp $desired_fulfill_time
     *           User desired estimation when the task should be done
     *     @type \Google\Protobuf\Timestamp $estimate_fulfill_time
     *           Clarifai estimation when the task should be done .
     *     @type \Clarifai\Api\Task $task
     *           task for this label order
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the label order was created.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           Most recent time when the label order was updated.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * id of the order
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * id of the order
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
     * name of the order
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name of the order
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * status of the order.
     * pending (QA lead review the order),
     * in progress (labeling in progress),
     * ready for release (passed clarifai QA and client can review)
     * success (released)
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
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
     * status of the order.
     * pending (QA lead review the order),
     * in progress (labeling in progress),
     * ready for release (passed clarifai QA and client can review)
     * success (released)
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
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
     * if set to true, automatically release the labels once passed clarifai review.
     *
     * Generated from protobuf field <code>bool auto_release = 4;</code>
     * @return bool
     */
    public function getAutoRelease()
    {
        return $this->auto_release;
    }

    /**
     * if set to true, automatically release the labels once passed clarifai review.
     *
     * Generated from protobuf field <code>bool auto_release = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoRelease($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_release = $var;

        return $this;
    }

    /**
     * allow input without any tag.
     *
     * Generated from protobuf field <code>bool allow_empty_tag = 5;</code>
     * @return bool
     */
    public function getAllowEmptyTag()
    {
        return $this->allow_empty_tag;
    }

    /**
     * allow input without any tag.
     *
     * Generated from protobuf field <code>bool allow_empty_tag = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowEmptyTag($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_empty_tag = $var;

        return $this;
    }

    /**
     * User desired estimation when the task should be done
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp desired_fulfill_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDesiredFulfillTime()
    {
        return $this->desired_fulfill_time;
    }

    public function hasDesiredFulfillTime()
    {
        return isset($this->desired_fulfill_time);
    }

    public function clearDesiredFulfillTime()
    {
        unset($this->desired_fulfill_time);
    }

    /**
     * User desired estimation when the task should be done
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp desired_fulfill_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDesiredFulfillTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->desired_fulfill_time = $var;

        return $this;
    }

    /**
     * Clarifai estimation when the task should be done .
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimate_fulfill_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEstimateFulfillTime()
    {
        return $this->estimate_fulfill_time;
    }

    public function hasEstimateFulfillTime()
    {
        return isset($this->estimate_fulfill_time);
    }

    public function clearEstimateFulfillTime()
    {
        unset($this->estimate_fulfill_time);
    }

    /**
     * Clarifai estimation when the task should be done .
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimate_fulfill_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEstimateFulfillTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->estimate_fulfill_time = $var;

        return $this;
    }

    /**
     * task for this label order
     *
     * Generated from protobuf field <code>.clarifai.api.Task task = 8;</code>
     * @return \Clarifai\Api\Task|null
     */
    public function getTask()
    {
        return $this->task;
    }

    public function hasTask()
    {
        return isset($this->task);
    }

    public function clearTask()
    {
        unset($this->task);
    }

    /**
     * task for this label order
     *
     * Generated from protobuf field <code>.clarifai.api.Task task = 8;</code>
     * @param \Clarifai\Api\Task $var
     * @return $this
     */
    public function setTask($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Task::class);
        $this->task = $var;

        return $this;
    }

    /**
     * When the label order was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 9;</code>
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
     * When the label order was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 9;</code>
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
     * Most recent time when the label order was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 10;</code>
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
     * Most recent time when the label order was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 10;</code>
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
