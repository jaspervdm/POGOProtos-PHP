<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gym/GymState.proto

namespace POGOProtos\Data\Gym;

require_once('POGOProtos/Map/Fort/FortData.pb.php');
require_once('POGOProtos/Data/Gym/GymMembership.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class GymState extends \Google\Protobuf\Internal\Message
{
    private $fort_data = null;
    private $memberships;

    public function getFortData()
    {
        return $this->fort_data;
    }

    public function setFortData(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Map\Fort\FortData::class);
        $this->fort_data = $var;
    }

    public function getMemberships()
    {
        return $this->memberships;
    }

    public function setMemberships(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Data\Gym\GymMembership::class);
        $this->memberships = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a85020a22504f474f50726f746f732f446174612f47796d2f47796d5374" .
    "6174652e70726f746f1213504f474f50726f746f732e446174612e47796d" .
    "1a22504f474f50726f746f732f4d61702f466f72742f466f727444617461" .
    "2e70726f746f1a27504f474f50726f746f732f446174612f47796d2f4779" .
    "6d4d656d626572736869702e70726f746f22750a0847796d537461746512" .
    "300a09666f72745f6461746118012001280b321d2e504f474f50726f746f" .
    "732e4d61702e466f72742e466f72744461746112370a0b6d656d62657273" .
    "6869707318022003280b32222e504f474f50726f746f732e446174612e47" .
    "796d2e47796d4d656d62657273686970620670726f746f33"
));

