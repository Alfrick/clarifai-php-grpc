<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * Messages from /proto/clarifai/api/concept.proto
 * //////////////////////////////////////////////////////////////////////////////
 *
 * Generated from protobuf message <code>clarifai.api.Concept</code>
 */
class Concept extends \Google\Protobuf\Internal\Message
{
    /**
     * The concept's unique id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The name of the concept in the given language.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Used to indicate presence (1.0) or not (0.0) of this concept when making a request.
     * This is also the prediction probability when returning predictions from our API.
     * For convenience we use the default of 1.0 when making requests so the concept you provide is
     * is treated as a positive (1.0) and not a negative (which would be value == 0.0).
     *
     * Generated from protobuf field <code>float value = 3 [(.clarifai.api.utils.cl_show_if_empty) = true, (.clarifai.api.utils.cl_default_float) = 1];</code>
     */
    protected $value = 0.0;
    /**
     * When the concept was created. The format is https://www.ietf.org/rfc/rfc3339.txt .
     * Example: "2006-01-02T15:04:05.999999Z". This field is used only in a response.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
     */
    protected $created_at = null;
    /**
     * The language in which the concept name is in. This is *ONLY* used in the response and setting
     * it in a request is ignored since the default language of your app is used when creating
     * or patching a Concept. To set other languages for your concept use the ConceptLanguage object
     * and its corresponding endpoints.
     *
     * Generated from protobuf field <code>string language = 5;</code>
     */
    protected $language = '';
    /**
     * The application id that this concept is within. This can be ignored by most users.
     *
     * Generated from protobuf field <code>string app_id = 6;</code>
     */
    protected $app_id = '';
    /**
     * The definition for the concept. Similar to name. This can be ignored by most users.
     *
     * Generated from protobuf field <code>string definition = 7;</code>
     */
    protected $definition = '';
    /**
     * The vocabulary that this concept belongs to. This is useful if you have different unique sets
     * of concepts that you can separate out based on this field. For example "age_appearance" vs
     * "gender_appearance" in a list of concept returned from the demographics model.
     *
     * Generated from protobuf field <code>string vocab_id = 8;</code>
     */
    protected $vocab_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The concept's unique id.
     *     @type string $name
     *           The name of the concept in the given language.
     *     @type float $value
     *           Used to indicate presence (1.0) or not (0.0) of this concept when making a request.
     *           This is also the prediction probability when returning predictions from our API.
     *           For convenience we use the default of 1.0 when making requests so the concept you provide is
     *           is treated as a positive (1.0) and not a negative (which would be value == 0.0).
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the concept was created. The format is https://www.ietf.org/rfc/rfc3339.txt .
     *           Example: "2006-01-02T15:04:05.999999Z". This field is used only in a response.
     *     @type string $language
     *           The language in which the concept name is in. This is *ONLY* used in the response and setting
     *           it in a request is ignored since the default language of your app is used when creating
     *           or patching a Concept. To set other languages for your concept use the ConceptLanguage object
     *           and its corresponding endpoints.
     *     @type string $app_id
     *           The application id that this concept is within. This can be ignored by most users.
     *     @type string $definition
     *           The definition for the concept. Similar to name. This can be ignored by most users.
     *     @type string $vocab_id
     *           The vocabulary that this concept belongs to. This is useful if you have different unique sets
     *           of concepts that you can separate out based on this field. For example "age_appearance" vs
     *           "gender_appearance" in a list of concept returned from the demographics model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The concept's unique id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The concept's unique id.
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
     * The name of the concept in the given language.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the concept in the given language.
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
     * Used to indicate presence (1.0) or not (0.0) of this concept when making a request.
     * This is also the prediction probability when returning predictions from our API.
     * For convenience we use the default of 1.0 when making requests so the concept you provide is
     * is treated as a positive (1.0) and not a negative (which would be value == 0.0).
     *
     * Generated from protobuf field <code>float value = 3 [(.clarifai.api.utils.cl_show_if_empty) = true, (.clarifai.api.utils.cl_default_float) = 1];</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Used to indicate presence (1.0) or not (0.0) of this concept when making a request.
     * This is also the prediction probability when returning predictions from our API.
     * For convenience we use the default of 1.0 when making requests so the concept you provide is
     * is treated as a positive (1.0) and not a negative (which would be value == 0.0).
     *
     * Generated from protobuf field <code>float value = 3 [(.clarifai.api.utils.cl_show_if_empty) = true, (.clarifai.api.utils.cl_default_float) = 1];</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->value = $var;

        return $this;
    }

    /**
     * When the concept was created. The format is https://www.ietf.org/rfc/rfc3339.txt .
     * Example: "2006-01-02T15:04:05.999999Z". This field is used only in a response.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * When the concept was created. The format is https://www.ietf.org/rfc/rfc3339.txt .
     * Example: "2006-01-02T15:04:05.999999Z". This field is used only in a response.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
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
     * The language in which the concept name is in. This is *ONLY* used in the response and setting
     * it in a request is ignored since the default language of your app is used when creating
     * or patching a Concept. To set other languages for your concept use the ConceptLanguage object
     * and its corresponding endpoints.
     *
     * Generated from protobuf field <code>string language = 5;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The language in which the concept name is in. This is *ONLY* used in the response and setting
     * it in a request is ignored since the default language of your app is used when creating
     * or patching a Concept. To set other languages for your concept use the ConceptLanguage object
     * and its corresponding endpoints.
     *
     * Generated from protobuf field <code>string language = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

    /**
     * The application id that this concept is within. This can be ignored by most users.
     *
     * Generated from protobuf field <code>string app_id = 6;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The application id that this concept is within. This can be ignored by most users.
     *
     * Generated from protobuf field <code>string app_id = 6;</code>
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
     * The definition for the concept. Similar to name. This can be ignored by most users.
     *
     * Generated from protobuf field <code>string definition = 7;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * The definition for the concept. Similar to name. This can be ignored by most users.
     *
     * Generated from protobuf field <code>string definition = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->definition = $var;

        return $this;
    }

    /**
     * The vocabulary that this concept belongs to. This is useful if you have different unique sets
     * of concepts that you can separate out based on this field. For example "age_appearance" vs
     * "gender_appearance" in a list of concept returned from the demographics model.
     *
     * Generated from protobuf field <code>string vocab_id = 8;</code>
     * @return string
     */
    public function getVocabId()
    {
        return $this->vocab_id;
    }

    /**
     * The vocabulary that this concept belongs to. This is useful if you have different unique sets
     * of concepts that you can separate out based on this field. For example "age_appearance" vs
     * "gender_appearance" in a list of concept returned from the demographics model.
     *
     * Generated from protobuf field <code>string vocab_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setVocabId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vocab_id = $var;

        return $this;
    }

}
