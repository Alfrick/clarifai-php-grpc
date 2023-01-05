<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Task is the work that needs to be done for labeling the inputs in an app.
 *
 * Generated from protobuf message <code>clarifai.api.Task</code>
 */
class Task extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique ID for the task.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * When the task was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     */
    protected $created_at = null;
    /**
     * Most recent time when the task was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
     */
    protected $modified_at = null;
    /**
     * Task type.
     *
     * Generated from protobuf field <code>.clarifai.api.Task.TaskType type = 4;</code>
     */
    protected $type = 0;
    /**
     * Description of the task.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Worker details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskWorker worker = 6;</code>
     */
    protected $worker = null;
    /**
     * List of concept ids used in the work of this task if label type is classification.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 7;</code>
     */
    private $concept_ids;
    /**
     * List of inputs used in this task will be taken from this source.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskInputSource input_source = 8;</code>
     */
    protected $input_source = null;
    /**
     * For model predictions on video: Sample delay for video predicting (1 frame per N milliseconds)
     *
     * Generated from protobuf field <code>uint32 sample_ms = 9;</code>
     */
    protected $sample_ms = 0;
    /**
     * AI assistant details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskAIAssistant ai_assistant = 10;</code>
     */
    protected $ai_assistant = null;
    /**
     * Review details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskReview review = 11;</code>
     */
    protected $review = null;
    /**
     * Status of this task.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 12;</code>
     */
    protected $status = null;
    /**
     * Add a title for this task to quickly recognise it in a list of tasks.
     *
     * Generated from protobuf field <code>string name = 13;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.clarifai.api.AiAssistParameters ai_assist_params = 14;</code>
     */
    protected $ai_assist_params = null;
    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 15;</code>
     */
    protected $visibility = null;
    /**
     * The app the task belongs to.
     *
     * Generated from protobuf field <code>string app_id = 16;</code>
     */
    protected $app_id = '';
    /**
     * The user the task belongs to.
     *
     * Generated from protobuf field <code>string user_id = 17;</code>
     */
    protected $user_id = '';
    /**
     * The label order the task belongs to.
     *
     * Generated from protobuf field <code>string label_order_id = 18;</code>
     */
    protected $label_order_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Unique ID for the task.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the task was created.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           Most recent time when the task was updated.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type int $type
     *           Task type.
     *     @type string $description
     *           Description of the task.
     *     @type \Clarifai\Api\TaskWorker $worker
     *           Worker details.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $concept_ids
     *           List of concept ids used in the work of this task if label type is classification.
     *     @type \Clarifai\Api\TaskInputSource $input_source
     *           List of inputs used in this task will be taken from this source.
     *     @type int $sample_ms
     *           For model predictions on video: Sample delay for video predicting (1 frame per N milliseconds)
     *     @type \Clarifai\Api\TaskAIAssistant $ai_assistant
     *           AI assistant details.
     *     @type \Clarifai\Api\TaskReview $review
     *           Review details.
     *     @type \Clarifai\Api\Status\Status $status
     *           Status of this task.
     *     @type string $name
     *           Add a title for this task to quickly recognise it in a list of tasks.
     *     @type \Clarifai\Api\AiAssistParameters $ai_assist_params
     *     @type \Clarifai\Api\Visibility $visibility
     *           The visibility field represents whether this message is privately/publicly visible.
     *           To be visible to the public the App that contains it AND the User that contains the App must
     *           also be publicly visible.
     *     @type string $app_id
     *           The app the task belongs to.
     *     @type string $user_id
     *           The user the task belongs to.
     *     @type string $label_order_id
     *           The label order the task belongs to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique ID for the task.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique ID for the task.
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
     * When the task was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
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
     * When the task was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
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
     * Most recent time when the task was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
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
     * Most recent time when the task was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
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
     * Task type.
     *
     * Generated from protobuf field <code>.clarifai.api.Task.TaskType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Task type.
     *
     * Generated from protobuf field <code>.clarifai.api.Task.TaskType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\Task\TaskType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Description of the task.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the task.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Worker details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskWorker worker = 6;</code>
     * @return \Clarifai\Api\TaskWorker|null
     */
    public function getWorker()
    {
        return $this->worker;
    }

    public function hasWorker()
    {
        return isset($this->worker);
    }

    public function clearWorker()
    {
        unset($this->worker);
    }

    /**
     * Worker details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskWorker worker = 6;</code>
     * @param \Clarifai\Api\TaskWorker $var
     * @return $this
     */
    public function setWorker($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskWorker::class);
        $this->worker = $var;

        return $this;
    }

    /**
     * List of concept ids used in the work of this task if label type is classification.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConceptIds()
    {
        return $this->concept_ids;
    }

    /**
     * List of concept ids used in the work of this task if label type is classification.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConceptIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->concept_ids = $arr;

        return $this;
    }

    /**
     * List of inputs used in this task will be taken from this source.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskInputSource input_source = 8;</code>
     * @return \Clarifai\Api\TaskInputSource|null
     */
    public function getInputSource()
    {
        return $this->input_source;
    }

    public function hasInputSource()
    {
        return isset($this->input_source);
    }

    public function clearInputSource()
    {
        unset($this->input_source);
    }

    /**
     * List of inputs used in this task will be taken from this source.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskInputSource input_source = 8;</code>
     * @param \Clarifai\Api\TaskInputSource $var
     * @return $this
     */
    public function setInputSource($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskInputSource::class);
        $this->input_source = $var;

        return $this;
    }

    /**
     * For model predictions on video: Sample delay for video predicting (1 frame per N milliseconds)
     *
     * Generated from protobuf field <code>uint32 sample_ms = 9;</code>
     * @return int
     */
    public function getSampleMs()
    {
        return $this->sample_ms;
    }

    /**
     * For model predictions on video: Sample delay for video predicting (1 frame per N milliseconds)
     *
     * Generated from protobuf field <code>uint32 sample_ms = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleMs($var)
    {
        GPBUtil::checkUint32($var);
        $this->sample_ms = $var;

        return $this;
    }

    /**
     * AI assistant details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskAIAssistant ai_assistant = 10;</code>
     * @return \Clarifai\Api\TaskAIAssistant|null
     */
    public function getAiAssistant()
    {
        return $this->ai_assistant;
    }

    public function hasAiAssistant()
    {
        return isset($this->ai_assistant);
    }

    public function clearAiAssistant()
    {
        unset($this->ai_assistant);
    }

    /**
     * AI assistant details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskAIAssistant ai_assistant = 10;</code>
     * @param \Clarifai\Api\TaskAIAssistant $var
     * @return $this
     */
    public function setAiAssistant($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskAIAssistant::class);
        $this->ai_assistant = $var;

        return $this;
    }

    /**
     * Review details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskReview review = 11;</code>
     * @return \Clarifai\Api\TaskReview|null
     */
    public function getReview()
    {
        return $this->review;
    }

    public function hasReview()
    {
        return isset($this->review);
    }

    public function clearReview()
    {
        unset($this->review);
    }

    /**
     * Review details.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskReview review = 11;</code>
     * @param \Clarifai\Api\TaskReview $var
     * @return $this
     */
    public function setReview($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskReview::class);
        $this->review = $var;

        return $this;
    }

    /**
     * Status of this task.
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
     * Status of this task.
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

    /**
     * Add a title for this task to quickly recognise it in a list of tasks.
     *
     * Generated from protobuf field <code>string name = 13;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add a title for this task to quickly recognise it in a list of tasks.
     *
     * Generated from protobuf field <code>string name = 13;</code>
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
     * Generated from protobuf field <code>.clarifai.api.AiAssistParameters ai_assist_params = 14;</code>
     * @return \Clarifai\Api\AiAssistParameters|null
     */
    public function getAiAssistParams()
    {
        return $this->ai_assist_params;
    }

    public function hasAiAssistParams()
    {
        return isset($this->ai_assist_params);
    }

    public function clearAiAssistParams()
    {
        unset($this->ai_assist_params);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.AiAssistParameters ai_assist_params = 14;</code>
     * @param \Clarifai\Api\AiAssistParameters $var
     * @return $this
     */
    public function setAiAssistParams($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\AiAssistParameters::class);
        $this->ai_assist_params = $var;

        return $this;
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 15;</code>
     * @return \Clarifai\Api\Visibility|null
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    public function hasVisibility()
    {
        return isset($this->visibility);
    }

    public function clearVisibility()
    {
        unset($this->visibility);
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 15;</code>
     * @param \Clarifai\Api\Visibility $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * The app the task belongs to.
     *
     * Generated from protobuf field <code>string app_id = 16;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app the task belongs to.
     *
     * Generated from protobuf field <code>string app_id = 16;</code>
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
     * The user the task belongs to.
     *
     * Generated from protobuf field <code>string user_id = 17;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user the task belongs to.
     *
     * Generated from protobuf field <code>string user_id = 17;</code>
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
     * The label order the task belongs to.
     *
     * Generated from protobuf field <code>string label_order_id = 18;</code>
     * @return string
     */
    public function getLabelOrderId()
    {
        return $this->label_order_id;
    }

    /**
     * The label order the task belongs to.
     *
     * Generated from protobuf field <code>string label_order_id = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setLabelOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->label_order_id = $var;

        return $this;
    }

}

