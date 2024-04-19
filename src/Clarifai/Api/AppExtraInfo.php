<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.AppExtraInfo</code>
 */
class AppExtraInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Revision marker for this application.
     * The value of the revision changes when
     * * inputs are added, updated or deleted
     * * annotations are added, updated or deleted
     * * inputs are added to or removed from datasets
     * For example, this value can be used to detect if client side caches related to searching should be invalidated.
     * Field not filled in for list endpoints, use GetApp
     *
     * Generated from protobuf field <code>string search_revision_marker = 1;</code>
     */
    protected $search_revision_marker = '';
    /**
     * Generated from protobuf field <code>.clarifai.api.AppResourceCounts counts = 2;</code>
     */
    protected $counts = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $search_revision_marker
     *           Revision marker for this application.
     *           The value of the revision changes when
     *           * inputs are added, updated or deleted
     *           * annotations are added, updated or deleted
     *           * inputs are added to or removed from datasets
     *           For example, this value can be used to detect if client side caches related to searching should be invalidated.
     *           Field not filled in for list endpoints, use GetApp
     *     @type \Clarifai\Api\AppResourceCounts $counts
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Revision marker for this application.
     * The value of the revision changes when
     * * inputs are added, updated or deleted
     * * annotations are added, updated or deleted
     * * inputs are added to or removed from datasets
     * For example, this value can be used to detect if client side caches related to searching should be invalidated.
     * Field not filled in for list endpoints, use GetApp
     *
     * Generated from protobuf field <code>string search_revision_marker = 1;</code>
     * @return string
     */
    public function getSearchRevisionMarker()
    {
        return $this->search_revision_marker;
    }

    /**
     * Revision marker for this application.
     * The value of the revision changes when
     * * inputs are added, updated or deleted
     * * annotations are added, updated or deleted
     * * inputs are added to or removed from datasets
     * For example, this value can be used to detect if client side caches related to searching should be invalidated.
     * Field not filled in for list endpoints, use GetApp
     *
     * Generated from protobuf field <code>string search_revision_marker = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSearchRevisionMarker($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_revision_marker = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.AppResourceCounts counts = 2;</code>
     * @return \Clarifai\Api\AppResourceCounts|null
     */
    public function getCounts()
    {
        return $this->counts;
    }

    public function hasCounts()
    {
        return isset($this->counts);
    }

    public function clearCounts()
    {
        unset($this->counts);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.AppResourceCounts counts = 2;</code>
     * @param \Clarifai\Api\AppResourceCounts $var
     * @return $this
     */
    public function setCounts($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\AppResourceCounts::class);
        $this->counts = $var;

        return $this;
    }

}

