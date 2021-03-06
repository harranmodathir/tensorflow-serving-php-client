<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: tensor_shape.proto

namespace Tensorflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dimensions of a tensor.
 *
 * Generated from protobuf message <code>tensorflow.TensorShapeProto</code>
 */
class TensorShapeProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Dimensions of the tensor, such as {"input", 30}, {"output", 40}
     * for a 30 x 40 2D tensor.  If an entry has size -1, this
     * corresponds to a dimension of unknown size. The names are
     * optional.
     * The order of entries in "dim" matters: It indicates the layout of the
     * values in the tensor in-memory representation.
     * The first entry in "dim" is the outermost dimension used to layout the
     * values, the last entry is the innermost dimension.  This matches the
     * in-memory layout of RowMajor Eigen tensors.
     * If "dim.size()" > 0, "unknown_rank" must be false.
     *
     * Generated from protobuf field <code>repeated .tensorflow.TensorShapeProto.Dim dim = 2;</code>
     */
    private $dim;
    /**
     * If true, the number of dimensions in the shape is unknown.
     * If true, "dim.size()" must be 0.
     *
     * Generated from protobuf field <code>bool unknown_rank = 3;</code>
     */
    private $unknown_rank = false;

    public function __construct() {
        \GPBMetadata\TensorShape::initOnce();
        parent::__construct();
    }

    /**
     * Dimensions of the tensor, such as {"input", 30}, {"output", 40}
     * for a 30 x 40 2D tensor.  If an entry has size -1, this
     * corresponds to a dimension of unknown size. The names are
     * optional.
     * The order of entries in "dim" matters: It indicates the layout of the
     * values in the tensor in-memory representation.
     * The first entry in "dim" is the outermost dimension used to layout the
     * values, the last entry is the innermost dimension.  This matches the
     * in-memory layout of RowMajor Eigen tensors.
     * If "dim.size()" > 0, "unknown_rank" must be false.
     *
     * Generated from protobuf field <code>repeated .tensorflow.TensorShapeProto.Dim dim = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDim()
    {
        return $this->dim;
    }

    /**
     * Dimensions of the tensor, such as {"input", 30}, {"output", 40}
     * for a 30 x 40 2D tensor.  If an entry has size -1, this
     * corresponds to a dimension of unknown size. The names are
     * optional.
     * The order of entries in "dim" matters: It indicates the layout of the
     * values in the tensor in-memory representation.
     * The first entry in "dim" is the outermost dimension used to layout the
     * values, the last entry is the innermost dimension.  This matches the
     * in-memory layout of RowMajor Eigen tensors.
     * If "dim.size()" > 0, "unknown_rank" must be false.
     *
     * Generated from protobuf field <code>repeated .tensorflow.TensorShapeProto.Dim dim = 2;</code>
     * @param \Tensorflow\TensorShapeProto_Dim[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDim($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tensorflow\TensorShapeProto_Dim::class);
        $this->dim = $arr;

        return $this;
    }

    /**
     * If true, the number of dimensions in the shape is unknown.
     * If true, "dim.size()" must be 0.
     *
     * Generated from protobuf field <code>bool unknown_rank = 3;</code>
     * @return bool
     */
    public function getUnknownRank()
    {
        return $this->unknown_rank;
    }

    /**
     * If true, the number of dimensions in the shape is unknown.
     * If true, "dim.size()" must be 0.
     *
     * Generated from protobuf field <code>bool unknown_rank = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setUnknownRank($var)
    {
        GPBUtil::checkBool($var);
        $this->unknown_rank = $var;

        return $this;
    }

}

