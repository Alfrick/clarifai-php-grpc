<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\ModuleVersion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ModuleVersion.ModuleNav</code>
 */
class ModuleNav extends \Google\Protobuf\Internal\Message
{
    /**
     * This is the left side title for this module and for browser tab title of the module.
     * We have this in the version so that users can change those settings
     * when releasing a new version of their module.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * A list of subnav elements to put under the module title.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModuleVersion.ModuleSubNav module_sub_navs = 2;</code>
     */
    private $module_sub_navs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           This is the left side title for this module and for browser tab title of the module.
     *           We have this in the version so that users can change those settings
     *           when releasing a new version of their module.
     *     @type array<\Clarifai\Api\ModuleVersion\ModuleSubNav>|\Google\Protobuf\Internal\RepeatedField $module_sub_navs
     *           A list of subnav elements to put under the module title.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is the left side title for this module and for browser tab title of the module.
     * We have this in the version so that users can change those settings
     * when releasing a new version of their module.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * This is the left side title for this module and for browser tab title of the module.
     * We have this in the version so that users can change those settings
     * when releasing a new version of their module.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * A list of subnav elements to put under the module title.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModuleVersion.ModuleSubNav module_sub_navs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModuleSubNavs()
    {
        return $this->module_sub_navs;
    }

    /**
     * A list of subnav elements to put under the module title.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModuleVersion.ModuleSubNav module_sub_navs = 2;</code>
     * @param array<\Clarifai\Api\ModuleVersion\ModuleSubNav>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModuleSubNavs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ModuleVersion\ModuleSubNav::class);
        $this->module_sub_navs = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ModuleNav::class, \Clarifai\Api\ModuleVersion_ModuleNav::class);

