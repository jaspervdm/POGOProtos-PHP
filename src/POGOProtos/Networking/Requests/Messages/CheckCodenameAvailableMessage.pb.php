<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/CheckCodenameAvailableMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class CheckCodenameAvailableMessage extends \Google\Protobuf\Internal\Message
{
    private $codename = '';

    public function getCodename()
    {
        return $this->codename;
    }

    public function setCodename($var)
    {
        GPBUtil::checkString($var, True);
        $this->codename = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab1010a4b504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f4d657373616765732f436865636b436f64656e616d654176" .
    "61696c61626c654d6573736167652e70726f746f1227504f474f50726f74" .
    "6f732e4e6574776f726b696e672e52657175657374732e4d657373616765" .
    "7322310a1d436865636b436f64656e616d65417661696c61626c654d6573" .
    "7361676512100a08636f64656e616d65180120012809620670726f746f33"
));

