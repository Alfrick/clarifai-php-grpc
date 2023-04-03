<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\Search;

use UnexpectedValueException;

/**
 * Metric used for search. Can be EUCLIDEAN_DISTANCE (default) or COSINE_DISTANCE.
 * Currently only brute force search supports non-eudlicean metrics.
 *
 * Protobuf type <code>clarifai.api.Search.Metric</code>
 */
class Metric
{
    /**
     * Generated from protobuf enum <code>METRIC_NOT_SET = 0;</code>
     */
    const METRIC_NOT_SET = 0;
    /**
     * Generated from protobuf enum <code>EUCLIDEAN_DISTANCE = 1;</code>
     */
    const EUCLIDEAN_DISTANCE = 1;
    /**
     * Generated from protobuf enum <code>COSINE_DISTANCE = 2;</code>
     */
    const COSINE_DISTANCE = 2;

    private static $valueToName = [
        self::METRIC_NOT_SET => 'METRIC_NOT_SET',
        self::EUCLIDEAN_DISTANCE => 'EUCLIDEAN_DISTANCE',
        self::COSINE_DISTANCE => 'COSINE_DISTANCE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Metric::class, \Clarifai\Api\Search_Metric::class);

