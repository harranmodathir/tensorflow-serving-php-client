<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: predict.proto

namespace GPBMetadata;

class Predict
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Tensor::initOnce();
        \GPBMetadata\Model::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac2030a0d707265646963742e70726f746f121274656e736f72666c6f77" .
            "2e73657276696e671a0b6d6f64656c2e70726f746f22e2010a0e50726564" .
            "6963745265717565737412310a0a6d6f64656c5f7370656318012001280b" .
            "321d2e74656e736f72666c6f772e73657276696e672e4d6f64656c537065" .
            "63123e0a06696e7075747318022003280b322e2e74656e736f72666c6f77" .
            "2e73657276696e672e50726564696374526571756573742e496e70757473" .
            "456e74727912150a0d6f75747075745f66696c7465721803200328091a46" .
            "0a0b496e70757473456e747279120b0a036b657918012001280912260a05" .
            "76616c756518022001280b32172e74656e736f72666c6f772e54656e736f" .
            "7250726f746f3a023801229d010a0f50726564696374526573706f6e7365" .
            "12410a076f75747075747318012003280b32302e74656e736f72666c6f77" .
            "2e73657276696e672e50726564696374526573706f6e73652e4f75747075" .
            "7473456e7472791a470a0c4f757470757473456e747279120b0a036b6579" .
            "18012001280912260a0576616c756518022001280b32172e74656e736f72" .
            "666c6f772e54656e736f7250726f746f3a0238014203f80101620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}

