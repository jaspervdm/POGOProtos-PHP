<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/RequestEnvelope.proto

namespace POGOProtos\Networking\Envelopes;

require_once('POGOProtos/Networking/Requests/Request.pb.php');
require_once('POGOProtos/Networking/Envelopes/AuthTicket.pb.php');
require_once('POGOProtos/Networking/Platform/PlatformRequestType.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class RequestEnvelope extends \Google\Protobuf\Internal\Message
{
    private $status_code = 0;
    private $request_id = 0;
    private $requests;
    private $platform_requests;
    private $latitude = 0.0;
    private $longitude = 0.0;
    private $accuracy = 0.0;
    private $auth_info = null;
    private $auth_ticket = null;
    private $ms_since_last_locationfix = 0;

    public function getStatusCode()
    {
        return $this->status_code;
    }

    public function setStatusCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->status_code = $var;
    }

    public function getRequestId()
    {
        return $this->request_id;
    }

    public function setRequestId($var)
    {
        GPBUtil::checkUint64($var);
        $this->request_id = $var;
    }

    public function getRequests()
    {
        return $this->requests;
    }

    public function setRequests(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Networking\Requests\Request::class);
        $this->requests = $var;
    }

    public function getPlatformRequests()
    {
        return $this->platform_requests;
    }

    public function setPlatformRequests(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Networking\Envelopes\RequestEnvelope_PlatformRequest::class);
        $this->platform_requests = $var;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;
    }

    public function getAccuracy()
    {
        return $this->accuracy;
    }

    public function setAccuracy($var)
    {
        GPBUtil::checkDouble($var);
        $this->accuracy = $var;
    }

    public function getAuthInfo()
    {
        return $this->auth_info;
    }

    public function setAuthInfo(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Envelopes\RequestEnvelope_AuthInfo::class);
        $this->auth_info = $var;
    }

    public function getAuthTicket()
    {
        return $this->auth_ticket;
    }

    public function setAuthTicket(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Envelopes\AuthTicket::class);
        $this->auth_ticket = $var;
    }

    public function getMsSinceLastLocationfix()
    {
        return $this->ms_since_last_locationfix;
    }

    public function setMsSinceLastLocationfix($var)
    {
        GPBUtil::checkInt64($var);
        $this->ms_since_last_locationfix = $var;
    }

}

class RequestEnvelope_AuthInfo extends \Google\Protobuf\Internal\Message
{
    private $provider = '';
    private $token = null;

    public function getProvider()
    {
        return $this->provider;
    }

    public function setProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider = $var;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Envelopes\RequestEnvelope_AuthInfo_JWT::class);
        $this->token = $var;
    }

}

class RequestEnvelope_AuthInfo_JWT extends \Google\Protobuf\Internal\Message
{
    private $contents = '';
    private $unknown2 = 0;

    public function getContents()
    {
        return $this->contents;
    }

    public function setContents($var)
    {
        GPBUtil::checkString($var, True);
        $this->contents = $var;
    }

    public function getUnknown2()
    {
        return $this->unknown2;
    }

    public function setUnknown2($var)
    {
        GPBUtil::checkInt32($var);
        $this->unknown2 = $var;
    }

}

class RequestEnvelope_PlatformRequest extends \Google\Protobuf\Internal\Message
{
    private $type = 0;
    private $request_message = '';

    public function getType()
    {
        return $this->type;
    }

    public function setType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Platform\PlatformRequestType::class);
        $this->type = $var;
    }

    public function getRequestMessage()
    {
        return $this->request_message;
    }

    public function setRequestMessage($var)
    {
        GPBUtil::checkString($var, False);
        $this->request_message = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac0070a35504f474f50726f746f732f4e6574776f726b696e672f456e76" .
    "656c6f7065732f52657175657374456e76656c6f70652e70726f746f121f" .
    "504f474f50726f746f732e4e6574776f726b696e672e456e76656c6f7065" .
    "731a2c504f474f50726f746f732f4e6574776f726b696e672f5265717565" .
    "7374732f526571756573742e70726f746f1a30504f474f50726f746f732f" .
    "4e6574776f726b696e672f456e76656c6f7065732f417574685469636b65" .
    "742e70726f746f1a38504f474f50726f746f732f4e6574776f726b696e67" .
    "2f506c6174666f726d2f506c6174666f726d52657175657374547970652e" .
    "70726f746f22c3050a0f52657175657374456e76656c6f706512130a0b73" .
    "74617475735f636f646518012001280512120a0a726571756573745f6964" .
    "18032001280412390a08726571756573747318042003280b32272e504f47" .
    "4f50726f746f732e4e6574776f726b696e672e52657175657374732e5265" .
    "7175657374125b0a11706c6174666f726d5f726571756573747318062003" .
    "280b32402e504f474f50726f746f732e4e6574776f726b696e672e456e76" .
    "656c6f7065732e52657175657374456e76656c6f70652e506c6174666f72" .
    "6d5265717565737412100a086c6174697475646518072001280112110a09" .
    "6c6f6e67697475646518082001280112100a086163637572616379180920" .
    "012801124c0a09617574685f696e666f180a2001280b32392e504f474f50" .
    "726f746f732e4e6574776f726b696e672e456e76656c6f7065732e526571" .
    "75657374456e76656c6f70652e41757468496e666f12400a0b617574685f" .
    "7469636b6574180b2001280b322b2e504f474f50726f746f732e4e657477" .
    "6f726b696e672e456e76656c6f7065732e417574685469636b657412210a" .
    "196d735f73696e63655f6c6173745f6c6f636174696f6e666978180c2001" .
    "28031a95010a0841757468496e666f12100a0870726f7669646572180120" .
    "012809124c0a05746f6b656e18022001280b323d2e504f474f50726f746f" .
    "732e4e6574776f726b696e672e456e76656c6f7065732e52657175657374" .
    "456e76656c6f70652e41757468496e666f2e4a57541a290a034a57541210" .
    "0a08636f6e74656e747318012001280912100a08756e6b6e6f776e321802" .
    "200128051a6d0a0f506c6174666f726d5265717565737412410a04747970" .
    "6518012001280e32332e504f474f50726f746f732e4e6574776f726b696e" .
    "672e506c6174666f726d2e506c6174666f726d5265717565737454797065" .
    "12170a0f726571756573745f6d65737361676518022001280c620670726f" .
    "746f33"
));

