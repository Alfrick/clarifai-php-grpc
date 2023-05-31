<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.AnnotationDataType</code>
 */
class AnnotationDataType
{
    /**
     * Generated from protobuf enum <code>ANNOTATION_DATA_TYPE_NOT_SET = 0;</code>
     */
    const ANNOTATION_DATA_TYPE_NOT_SET = 0;
    /**
     * Generated from protobuf enum <code>BOUNDING_BOX = 1;</code>
     */
    const BOUNDING_BOX = 1;
    /**
     * Generated from protobuf enum <code>POLYGON = 2;</code>
     */
    const POLYGON = 2;
    /**
     * Generated from protobuf enum <code>POINT = 4;</code>
     */
    const POINT = 4;
    /**
     * Generated from protobuf enum <code>SPAN = 8;</code>
     */
    const SPAN = 8;
    /**
     * Generated from protobuf enum <code>MASK = 16;</code>
     */
    const MASK = 16;

    private static $valueToName = [
        self::ANNOTATION_DATA_TYPE_NOT_SET => 'ANNOTATION_DATA_TYPE_NOT_SET',
        self::BOUNDING_BOX => 'BOUNDING_BOX',
        self::POLYGON => 'POLYGON',
        self::POINT => 'POINT',
        self::SPAN => 'SPAN',
        self::MASK => 'MASK',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

