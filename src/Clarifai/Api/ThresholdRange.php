<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ThresholdRange</code>
 */
class ThresholdRange extends \Google\Protobuf\Internal\Message
{
    /**
     * The range used to filter over concept values.
     * e.g. GREATER_THAN_OR_EQUAL_TO 0.7 -> is_lower_inclusive = true, lower = 0.7, is_upper_inclusive = true, upper = 1.0
     * e.g. (0.3, 0.75] -> is_lower_inclusive = false, lower = 0.3, is_upper_inclusive = true, upper = 0.75
     *
     * Generated from protobuf field <code>bool is_lower_inclusive = 1;</code>
     */
    protected $is_lower_inclusive = false;
    /**
     * Generated from protobuf field <code>bool is_upper_inclusive = 2;</code>
     */
    protected $is_upper_inclusive = false;
    /**
     * Generated from protobuf field <code>float lower = 3;</code>
     */
    protected $lower = 0.0;
    /**
     * Generated from protobuf field <code>float upper = 4;</code>
     */
    protected $upper = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_lower_inclusive
     *           The range used to filter over concept values.
     *           e.g. GREATER_THAN_OR_EQUAL_TO 0.7 -> is_lower_inclusive = true, lower = 0.7, is_upper_inclusive = true, upper = 1.0
     *           e.g. (0.3, 0.75] -> is_lower_inclusive = false, lower = 0.3, is_upper_inclusive = true, upper = 0.75
     *     @type bool $is_upper_inclusive
     *     @type float $lower
     *     @type float $upper
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The range used to filter over concept values.
     * e.g. GREATER_THAN_OR_EQUAL_TO 0.7 -> is_lower_inclusive = true, lower = 0.7, is_upper_inclusive = true, upper = 1.0
     * e.g. (0.3, 0.75] -> is_lower_inclusive = false, lower = 0.3, is_upper_inclusive = true, upper = 0.75
     *
     * Generated from protobuf field <code>bool is_lower_inclusive = 1;</code>
     * @return bool
     */
    public function getIsLowerInclusive()
    {
        return $this->is_lower_inclusive;
    }

    /**
     * The range used to filter over concept values.
     * e.g. GREATER_THAN_OR_EQUAL_TO 0.7 -> is_lower_inclusive = true, lower = 0.7, is_upper_inclusive = true, upper = 1.0
     * e.g. (0.3, 0.75] -> is_lower_inclusive = false, lower = 0.3, is_upper_inclusive = true, upper = 0.75
     *
     * Generated from protobuf field <code>bool is_lower_inclusive = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLowerInclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->is_lower_inclusive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_upper_inclusive = 2;</code>
     * @return bool
     */
    public function getIsUpperInclusive()
    {
        return $this->is_upper_inclusive;
    }

    /**
     * Generated from protobuf field <code>bool is_upper_inclusive = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsUpperInclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->is_upper_inclusive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float lower = 3;</code>
     * @return float
     */
    public function getLower()
    {
        return $this->lower;
    }

    /**
     * Generated from protobuf field <code>float lower = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setLower($var)
    {
        GPBUtil::checkFloat($var);
        $this->lower = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float upper = 4;</code>
     * @return float
     */
    public function getUpper()
    {
        return $this->upper;
    }

    /**
     * Generated from protobuf field <code>float upper = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setUpper($var)
    {
        GPBUtil::checkFloat($var);
        $this->upper = $var;

        return $this;
    }

}

