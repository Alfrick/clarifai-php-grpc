<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Start concept mapping jobs
 *
 * Generated from protobuf message <code>clarifai.api.PostConceptMappingJobsRequest</code>
 */
class PostConceptMappingJobsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The user_id and app_id information.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * The concept mapping jobs that are being started
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptMappingJob concept_mapping_jobs = 2;</code>
     */
    private $concept_mapping_jobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *           The user_id and app_id information.
     *     @type array<\Clarifai\Api\ConceptMappingJob>|\Google\Protobuf\Internal\RepeatedField $concept_mapping_jobs
     *           The concept mapping jobs that are being started
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The user_id and app_id information.
     *
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
     * The user_id and app_id information.
     *
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
     * The concept mapping jobs that are being started
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptMappingJob concept_mapping_jobs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConceptMappingJobs()
    {
        return $this->concept_mapping_jobs;
    }

    /**
     * The concept mapping jobs that are being started
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptMappingJob concept_mapping_jobs = 2;</code>
     * @param array<\Clarifai\Api\ConceptMappingJob>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConceptMappingJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ConceptMappingJob::class);
        $this->concept_mapping_jobs = $arr;

        return $this;
    }

}

