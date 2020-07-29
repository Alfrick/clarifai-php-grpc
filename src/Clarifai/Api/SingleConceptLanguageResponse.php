<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.SingleConceptLanguageResponse</code>
 */
class SingleConceptLanguageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.ConceptLanguage concept_language = 2;</code>
     */
    protected $concept_language = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\ConceptLanguage $concept_language
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
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
     * Generated from protobuf field <code>.clarifai.api.ConceptLanguage concept_language = 2;</code>
     * @return \Clarifai\Api\ConceptLanguage
     */
    public function getConceptLanguage()
    {
        return $this->concept_language;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ConceptLanguage concept_language = 2;</code>
     * @param \Clarifai\Api\ConceptLanguage $var
     * @return $this
     */
    public function setConceptLanguage($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConceptLanguage::class);
        $this->concept_language = $var;

        return $this;
    }

}
