<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/GymLevelSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class GymLevelSettings extends \Google\Protobuf\Internal\Message
{
    private $required_experience;
    private $leader_slots;
    private $trainer_slots;
    private $search_roll_bonus;

    public function getRequiredExperience()
    {
        return $this->required_experience;
    }

    public function setRequiredExperience(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->required_experience = $var;
    }

    public function getLeaderSlots()
    {
        return $this->leader_slots;
    }

    public function setLeaderSlots(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->leader_slots = $var;
    }

    public function getTrainerSlots()
    {
        return $this->trainer_slots;
    }

    public function setTrainerSlots(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->trainer_slots = $var;
    }

    public function getSearchRollBonus()
    {
        return $this->search_roll_bonus;
    }

    public function setSearchRollBonus(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->search_roll_bonus = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad0010a31504f474f50726f746f732f53657474696e67732f4d61737465" .
    "722f47796d4c6576656c53657474696e67732e70726f746f121a504f474f" .
    "50726f746f732e53657474696e67732e4d617374657222770a1047796d4c" .
    "6576656c53657474696e6773121b0a1372657175697265645f6578706572" .
    "69656e636518012003280512140a0c6c65616465725f736c6f7473180220" .
    "03280512150a0d747261696e65725f736c6f747318032003280512190a11" .
    "7365617263685f726f6c6c5f626f6e7573180420032805620670726f746f" .
    "33"
));

