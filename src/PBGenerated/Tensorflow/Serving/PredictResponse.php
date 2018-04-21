<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: predict.proto

namespace Tensorflow\Serving;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for PredictRequest on successful run.
 *
 * Generated from protobuf message <code>tensorflow.serving.PredictResponse</code>
 */
class PredictResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output tensors.
     *
     * Generated from protobuf field <code>map<string, .tensorflow.TensorProto> outputs = 1;</code>
     */
    private $outputs;

    public function __construct() {
        \GPBMetadata\Predict::initOnce();
        parent::__construct();
    }

    /**
     * Output tensors.
     *
     * Generated from protobuf field <code>map<string, .tensorflow.TensorProto> outputs = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Output tensors.
     *
     * Generated from protobuf field <code>map<string, .tensorflow.TensorProto> outputs = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tensorflow\TensorProto::class);
        $this->outputs = $arr;

        return $this;
    }

}

