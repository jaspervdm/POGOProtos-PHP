<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemCaptureResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class UseItemCaptureResponse extends \Google\Protobuf\Internal\Message
{
    private $success = false;
    private $item_capture_mult = 0.0;
    private $item_flee_mult = 0.0;
    private $stop_movement = false;
    private $stop_attack = false;
    private $target_max = false;
    private $target_slow = false;

    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;
    }

    public function getItemCaptureMult()
    {
        return $this->item_capture_mult;
    }

    public function setItemCaptureMult($var)
    {
        GPBUtil::checkDouble($var);
        $this->item_capture_mult = $var;
    }

    public function getItemFleeMult()
    {
        return $this->item_flee_mult;
    }

    public function setItemFleeMult($var)
    {
        GPBUtil::checkDouble($var);
        $this->item_flee_mult = $var;
    }

    public function getStopMovement()
    {
        return $this->stop_movement;
    }

    public function setStopMovement($var)
    {
        GPBUtil::checkBool($var);
        $this->stop_movement = $var;
    }

    public function getStopAttack()
    {
        return $this->stop_attack;
    }

    public function setStopAttack($var)
    {
        GPBUtil::checkBool($var);
        $this->stop_attack = $var;
    }

    public function getTargetMax()
    {
        return $this->target_max;
    }

    public function setTargetMax($var)
    {
        GPBUtil::checkBool($var);
        $this->target_max = $var;
    }

    public function getTargetSlow()
    {
        return $this->target_slow;
    }

    public function setTargetSlow($var)
    {
        GPBUtil::checkBool($var);
        $this->target_slow = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9b020a3c504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f5573654974656d43617074757265526573706f6e73652e" .
    "70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e52" .
    "6573706f6e73657322b1010a165573654974656d43617074757265526573" .
    "706f6e7365120f0a077375636365737318012001280812190a116974656d" .
    "5f636170747572655f6d756c7418022001280112160a0e6974656d5f666c" .
    "65655f6d756c7418032001280112150a0d73746f705f6d6f76656d656e74" .
    "18042001280812130a0b73746f705f61747461636b18052001280812120a" .
    "0a7461726765745f6d617818062001280812130a0b7461726765745f736c" .
    "6f77180720012808620670726f746f33"
));

