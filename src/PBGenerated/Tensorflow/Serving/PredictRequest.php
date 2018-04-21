<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: predict.proto

namespace Tensorflow\Serving;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PredictRequest specifies which TensorFlow model to run, as well as
 * how inputs are mapped to tensors and how outputs are filtered before
 * returning to user.
 *
 * Generated from protobuf message <code>tensorflow.serving.PredictRequest</code>
 */
class PredictRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Model Specification.
     *
     * Generated from protobuf field <code>.tensorflow.serving.ModelSpec model_spec = 1;</code>
     */
    private $model_spec = null;
    /**
     * Input tensors.
     * Names of input tensor are alias names. The mapping from aliases to real
     * input tensor names is expected to be stored as named generic signature
     * under the key "inputs" in the model export.
     * Each alias listed in a generic signature named "inputs" should be provided
     * exactly once in order to run the prediction.
     *
     * Generated from protobuf field <code>map<string, .tensorflow.TensorProto> inputs = 2;</code>
     */
    private $inputs;
    /**
     * Output filter.
     * Names specified are alias names. The mapping from aliases to real output
     * tensor names is expected to be stored as named generic signature under
     * the key "outputs" in the model export.
     * Only tensors specified here will be run/fetched and returned, with the
     * exception that when none is specified, all tensors specified in the
     * named signature will be run/fetched and returned.
     *
     * Generated from protobuf field <code>repeated string output_filter = 3;</code>
     */
    private $output_filter;

    public function __construct() {
        \GPBMetadata\Predict::initOnce();
        parent::__construct();
    }

    /**
     * Model Specification.
     *
     * Generated from protobuf field <code>.tensorflow.serving.ModelSpec model_spec = 1;</code>
     * @return \Tensorflow\Serving\ModelSpec
     */
    public function getModelSpec()
    {
        return $this->model_spec;
    }

    /**
     * Model Specification.
     *
     * Generated from protobuf field <code>.tensorflow.serving.ModelSpec model_spec = 1;</code>
     * @param \Tensorflow\Serving\ModelSpec $var
     * @return $this
     */
    public function setModelSpec($var)
    {
        GPBUtil::checkMessage($var, \Tensorflow\Serving\ModelSpec::class);
        $this->model_spec = $var;

        return $this;
    }

    /**
     * Input tensors.
     * Names of input tensor are alias names. The mapping from aliases to real
     * input tensor names is expected to be stored as named generic signature
     * under the key "inputs" in the model export.
     * Each alias listed in a generic signature named "inputs" should be provided
     * exactly once in order to run the prediction.
     *
     * Generated from protobuf field <code>map<string, .tensorflow.TensorProto> inputs = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Input tensors.
     * Names of input tensor are alias names. The mapping from aliases to real
     * input tensor names is expected to be stored as named generic signature
     * under the key "inputs" in the model export.
     * Each alias listed in a generic signature named "inputs" should be provided
     * exactly once in order to run the prediction.
     *
     * Generated from protobuf field <code>map<string, .tensorflow.TensorProto> inputs = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tensorflow\TensorProto::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * Output filter.
     * Names specified are alias names. The mapping from aliases to real output
     * tensor names is expected to be stored as named generic signature under
     * the key "outputs" in the model export.
     * Only tensors specified here will be run/fetched and returned, with the
     * exception that when none is specified, all tensors specified in the
     * named signature will be run/fetched and returned.
     *
     * Generated from protobuf field <code>repeated string output_filter = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputFilter()
    {
        return $this->output_filter;
    }

    /**
     * Output filter.
     * Names specified are alias names. The mapping from aliases to real output
     * tensor names is expected to be stored as named generic signature under
     * the key "outputs" in the model export.
     * Only tensors specified here will be run/fetched and returned, with the
     * exception that when none is specified, all tensors specified in the
     * named signature will be run/fetched and returned.
     *
     * Generated from protobuf field <code>repeated string output_filter = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputFilter($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->output_filter = $arr;

        return $this;
    }

}

