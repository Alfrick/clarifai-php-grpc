<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostConceptsSearchesRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostConceptsSearchesRequest</code>
 */
class PostConceptsSearchesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Ids present in the url of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * The body of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptQuery concept_query = 2;</code>
     */
    protected $concept_query = null;
    /**
     * Request additional info to be retrieved for each concept in the response.
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptExtraInfoRequest extra_info = 4;</code>
     */
    protected $extra_info = null;
    /**
     * Pagination parameters here since there are no url args in this
     * POST request.
     *
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 3;</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *           Ids present in the url of the request.
     *     @type \Clarifai\Api\ConceptQuery $concept_query
     *           The body of the request.
     *     @type \Clarifai\Api\ConceptExtraInfoRequest $extra_info
     *           Request additional info to be retrieved for each concept in the response.
     *     @type \Clarifai\Api\Pagination $pagination
     *           Pagination parameters here since there are no url args in this
     *           POST request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Ids present in the url of the request.
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
     * Ids present in the url of the request.
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
     * The body of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptQuery concept_query = 2;</code>
     * @return \Clarifai\Api\ConceptQuery|null
     */
    public function getConceptQuery()
    {
        return $this->concept_query;
    }

    public function hasConceptQuery()
    {
        return isset($this->concept_query);
    }

    public function clearConceptQuery()
    {
        unset($this->concept_query);
    }

    /**
     * The body of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptQuery concept_query = 2;</code>
     * @param \Clarifai\Api\ConceptQuery $var
     * @return $this
     */
    public function setConceptQuery($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConceptQuery::class);
        $this->concept_query = $var;

        return $this;
    }

    /**
     * Request additional info to be retrieved for each concept in the response.
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptExtraInfoRequest extra_info = 4;</code>
     * @return \Clarifai\Api\ConceptExtraInfoRequest|null
     */
    public function getExtraInfo()
    {
        return $this->extra_info;
    }

    public function hasExtraInfo()
    {
        return isset($this->extra_info);
    }

    public function clearExtraInfo()
    {
        unset($this->extra_info);
    }

    /**
     * Request additional info to be retrieved for each concept in the response.
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptExtraInfoRequest extra_info = 4;</code>
     * @param \Clarifai\Api\ConceptExtraInfoRequest $var
     * @return $this
     */
    public function setExtraInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConceptExtraInfoRequest::class);
        $this->extra_info = $var;

        return $this;
    }

    /**
     * Pagination parameters here since there are no url args in this
     * POST request.
     *
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 3;</code>
     * @return \Clarifai\Api\Pagination|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    public function hasPagination()
    {
        return isset($this->pagination);
    }

    public function clearPagination()
    {
        unset($this->pagination);
    }

    /**
     * Pagination parameters here since there are no url args in this
     * POST request.
     *
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 3;</code>
     * @param \Clarifai\Api\Pagination $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Pagination::class);
        $this->pagination = $var;

        return $this;
    }

}

