<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AppDuplicationFilters
 *
 * Generated from protobuf message <code>clarifai.api.AppDuplicationFilters</code>
 */
class AppDuplicationFilters extends \Google\Protobuf\Internal\Message
{
    /**
     * Copy inputs. Requires that copy_concepts is also set.
     * Note that this will still copy input-level annotations even if copy_annotations is not set.
     *
     * Generated from protobuf field <code>bool copy_inputs = 1;</code>
     */
    protected $copy_inputs = false;
    /**
     * Copy concepts.
     *
     * Generated from protobuf field <code>bool copy_concepts = 2;</code>
     */
    protected $copy_concepts = false;
    /**
     * Copy annotations. Requires that copy_inputs and copy_concepts are also set.
     *
     * Generated from protobuf field <code>bool copy_annotations = 3;</code>
     */
    protected $copy_annotations = false;
    /**
     * Copy models. Requires that copy_concepts is also set.
     *
     * Generated from protobuf field <code>bool copy_models = 4;</code>
     */
    protected $copy_models = false;
    /**
     * Copy workflows. Requires that copy_models and copy_concepts are also set.
     *
     * Generated from protobuf field <code>bool copy_workflows = 5;</code>
     */
    protected $copy_workflows = false;
    /**
     * Copy installed module versions.
     *
     * Generated from protobuf field <code>bool copy_installed_module_versions = 6;</code>
     */
    protected $copy_installed_module_versions = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $copy_inputs
     *           Copy inputs. Requires that copy_concepts is also set.
     *           Note that this will still copy input-level annotations even if copy_annotations is not set.
     *     @type bool $copy_concepts
     *           Copy concepts.
     *     @type bool $copy_annotations
     *           Copy annotations. Requires that copy_inputs and copy_concepts are also set.
     *     @type bool $copy_models
     *           Copy models. Requires that copy_concepts is also set.
     *     @type bool $copy_workflows
     *           Copy workflows. Requires that copy_models and copy_concepts are also set.
     *     @type bool $copy_installed_module_versions
     *           Copy installed module versions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Copy inputs. Requires that copy_concepts is also set.
     * Note that this will still copy input-level annotations even if copy_annotations is not set.
     *
     * Generated from protobuf field <code>bool copy_inputs = 1;</code>
     * @return bool
     */
    public function getCopyInputs()
    {
        return $this->copy_inputs;
    }

    /**
     * Copy inputs. Requires that copy_concepts is also set.
     * Note that this will still copy input-level annotations even if copy_annotations is not set.
     *
     * Generated from protobuf field <code>bool copy_inputs = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyInputs($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_inputs = $var;

        return $this;
    }

    /**
     * Copy concepts.
     *
     * Generated from protobuf field <code>bool copy_concepts = 2;</code>
     * @return bool
     */
    public function getCopyConcepts()
    {
        return $this->copy_concepts;
    }

    /**
     * Copy concepts.
     *
     * Generated from protobuf field <code>bool copy_concepts = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyConcepts($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_concepts = $var;

        return $this;
    }

    /**
     * Copy annotations. Requires that copy_inputs and copy_concepts are also set.
     *
     * Generated from protobuf field <code>bool copy_annotations = 3;</code>
     * @return bool
     */
    public function getCopyAnnotations()
    {
        return $this->copy_annotations;
    }

    /**
     * Copy annotations. Requires that copy_inputs and copy_concepts are also set.
     *
     * Generated from protobuf field <code>bool copy_annotations = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyAnnotations($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_annotations = $var;

        return $this;
    }

    /**
     * Copy models. Requires that copy_concepts is also set.
     *
     * Generated from protobuf field <code>bool copy_models = 4;</code>
     * @return bool
     */
    public function getCopyModels()
    {
        return $this->copy_models;
    }

    /**
     * Copy models. Requires that copy_concepts is also set.
     *
     * Generated from protobuf field <code>bool copy_models = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyModels($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_models = $var;

        return $this;
    }

    /**
     * Copy workflows. Requires that copy_models and copy_concepts are also set.
     *
     * Generated from protobuf field <code>bool copy_workflows = 5;</code>
     * @return bool
     */
    public function getCopyWorkflows()
    {
        return $this->copy_workflows;
    }

    /**
     * Copy workflows. Requires that copy_models and copy_concepts are also set.
     *
     * Generated from protobuf field <code>bool copy_workflows = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyWorkflows($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_workflows = $var;

        return $this;
    }

    /**
     * Copy installed module versions.
     *
     * Generated from protobuf field <code>bool copy_installed_module_versions = 6;</code>
     * @return bool
     */
    public function getCopyInstalledModuleVersions()
    {
        return $this->copy_installed_module_versions;
    }

    /**
     * Copy installed module versions.
     *
     * Generated from protobuf field <code>bool copy_installed_module_versions = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyInstalledModuleVersions($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_installed_module_versions = $var;

        return $this;
    }

}

