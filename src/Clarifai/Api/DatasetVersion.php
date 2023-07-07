<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DatasetVersion
 *
 * Generated from protobuf message <code>clarifai.api.DatasetVersion</code>
 */
class DatasetVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID for the dataset version
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * When the dataset version was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     */
    protected $created_at = null;
    /**
     * When the dataset version was modified.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
     */
    protected $modified_at = null;
    /**
     * The app the dataset version belongs to.
     *
     * Generated from protobuf field <code>string app_id = 4;</code>
     */
    protected $app_id = '';
    /**
     * The user the dataset version belongs to.
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
     */
    protected $user_id = '';
    /**
     * The dataset the dataset version belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 6;</code>
     */
    protected $dataset_id = '';
    /**
     * Status for this dataset version.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 8;</code>
     */
    protected $status = null;
    /**
     * Description of the dataset version
     *
     * Generated from protobuf field <code>string description = 10;</code>
     */
    protected $description = '';
    /**
     * Dataset version processing
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionProcessingInfo processing_info = 19;</code>
     */
    protected $processing_info = null;
    /**
     * Dataset version metrics
     *
     * Generated from protobuf field <code>map<string, .clarifai.api.DatasetVersionMetrics> metrics = 16;</code>
     */
    private $metrics;
    /**
     * Dataset version exports
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionExportInfo export_info = 17;</code>
     */
    protected $export_info = null;
    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 12;</code>
     */
    protected $metadata = null;
    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 13;</code>
     */
    protected $visibility = null;
    /**
     * The embedding models to return embeddings for. If empty, no embeddings are returned.
     *
     * Generated from protobuf field <code>repeated string embed_model_version_ids = 14;</code>
     */
    private $embed_model_version_ids;
    protected $data_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The ID for the dataset version
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the dataset version was created.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the dataset version was modified.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type string $app_id
     *           The app the dataset version belongs to.
     *     @type string $user_id
     *           The user the dataset version belongs to.
     *     @type string $dataset_id
     *           The dataset the dataset version belongs to.
     *     @type \Clarifai\Api\AnnotationFilterConfig $annotation_filter_config
     *           The dataset version will be generated based on a single annotation filter.
     *     @type \Clarifai\Api\ModelPredictConfig $model_predict_config
     *           The dataset version will be generated based on model version inferences.
     *     @type \Clarifai\Api\Status\Status $status
     *           Status for this dataset version.
     *     @type string $description
     *           Description of the dataset version
     *     @type \Clarifai\Api\DatasetVersionProcessingInfo $processing_info
     *           Dataset version processing
     *     @type array|\Google\Protobuf\Internal\MapField $metrics
     *           Dataset version metrics
     *     @type \Clarifai\Api\DatasetVersionExportInfo $export_info
     *           Dataset version exports
     *     @type \Google\Protobuf\Struct $metadata
     *           To handle arbitrary json metadata you can use a struct field:
     *           https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *     @type \Clarifai\Api\Visibility $visibility
     *           The visibility field represents whether this message is privately/publicly visible.
     *           To be visible to the public the App that contains it AND the User that contains the App must
     *           also be publicly visible.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $embed_model_version_ids
     *           The embedding models to return embeddings for. If empty, no embeddings are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID for the dataset version
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID for the dataset version
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
     * When the dataset version was created.
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
     * When the dataset version was created.
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
     * When the dataset version was modified.
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
     * When the dataset version was modified.
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
     * The app the dataset version belongs to.
     *
     * Generated from protobuf field <code>string app_id = 4;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app the dataset version belongs to.
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
     * The user the dataset version belongs to.
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user the dataset version belongs to.
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
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
     * The dataset the dataset version belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 6;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * The dataset the dataset version belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * The dataset version will be generated based on a single annotation filter.
     *
     * Generated from protobuf field <code>.clarifai.api.AnnotationFilterConfig annotation_filter_config = 15;</code>
     * @return \Clarifai\Api\AnnotationFilterConfig|null
     */
    public function getAnnotationFilterConfig()
    {
        return $this->readOneof(15);
    }

    public function hasAnnotationFilterConfig()
    {
        return $this->hasOneof(15);
    }

    /**
     * The dataset version will be generated based on a single annotation filter.
     *
     * Generated from protobuf field <code>.clarifai.api.AnnotationFilterConfig annotation_filter_config = 15;</code>
     * @param \Clarifai\Api\AnnotationFilterConfig $var
     * @return $this
     */
    public function setAnnotationFilterConfig($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\AnnotationFilterConfig::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * The dataset version will be generated based on model version inferences.
     *
     * Generated from protobuf field <code>.clarifai.api.ModelPredictConfig model_predict_config = 18;</code>
     * @return \Clarifai\Api\ModelPredictConfig|null
     */
    public function getModelPredictConfig()
    {
        return $this->readOneof(18);
    }

    public function hasModelPredictConfig()
    {
        return $this->hasOneof(18);
    }

    /**
     * The dataset version will be generated based on model version inferences.
     *
     * Generated from protobuf field <code>.clarifai.api.ModelPredictConfig model_predict_config = 18;</code>
     * @param \Clarifai\Api\ModelPredictConfig $var
     * @return $this
     */
    public function setModelPredictConfig($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ModelPredictConfig::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Status for this dataset version.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 8;</code>
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
     * Status for this dataset version.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 8;</code>
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
     * Description of the dataset version
     *
     * Generated from protobuf field <code>string description = 10;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the dataset version
     *
     * Generated from protobuf field <code>string description = 10;</code>
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
     * Dataset version processing
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionProcessingInfo processing_info = 19;</code>
     * @return \Clarifai\Api\DatasetVersionProcessingInfo|null
     */
    public function getProcessingInfo()
    {
        return $this->processing_info;
    }

    public function hasProcessingInfo()
    {
        return isset($this->processing_info);
    }

    public function clearProcessingInfo()
    {
        unset($this->processing_info);
    }

    /**
     * Dataset version processing
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionProcessingInfo processing_info = 19;</code>
     * @param \Clarifai\Api\DatasetVersionProcessingInfo $var
     * @return $this
     */
    public function setProcessingInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DatasetVersionProcessingInfo::class);
        $this->processing_info = $var;

        return $this;
    }

    /**
     * Dataset version metrics
     *
     * Generated from protobuf field <code>map<string, .clarifai.api.DatasetVersionMetrics> metrics = 16;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Dataset version metrics
     *
     * Generated from protobuf field <code>map<string, .clarifai.api.DatasetVersionMetrics> metrics = 16;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\DatasetVersionMetrics::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Dataset version exports
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionExportInfo export_info = 17;</code>
     * @return \Clarifai\Api\DatasetVersionExportInfo|null
     */
    public function getExportInfo()
    {
        return $this->export_info;
    }

    public function hasExportInfo()
    {
        return isset($this->export_info);
    }

    public function clearExportInfo()
    {
        unset($this->export_info);
    }

    /**
     * Dataset version exports
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionExportInfo export_info = 17;</code>
     * @param \Clarifai\Api\DatasetVersionExportInfo $var
     * @return $this
     */
    public function setExportInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DatasetVersionExportInfo::class);
        $this->export_info = $var;

        return $this;
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 12;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 12;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 13;</code>
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
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 13;</code>
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
     * The embedding models to return embeddings for. If empty, no embeddings are returned.
     *
     * Generated from protobuf field <code>repeated string embed_model_version_ids = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmbedModelVersionIds()
    {
        return $this->embed_model_version_ids;
    }

    /**
     * The embedding models to return embeddings for. If empty, no embeddings are returned.
     *
     * Generated from protobuf field <code>repeated string embed_model_version_ids = 14;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmbedModelVersionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->embed_model_version_ids = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataConfig()
    {
        return $this->whichOneof("data_config");
    }

}

