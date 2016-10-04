<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/FortDeployPokemonResponse.proto

namespace POGOProtos\Networking\Responses;

require_once('POGOProtos/Data/PokemonData.pb.php');
require_once('POGOProtos/Data/Gym/GymState.pb.php');
require_once('POGOProtos/Networking/Responses/FortDetailsResponse.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class FortDeployPokemonResponse extends \Google\Protobuf\Internal\Message
{
    private $result = 0;
    private $fort_details = null;
    private $pokemon_data = null;
    private $gym_state = null;

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\FortDeployPokemonResponse_Result::class);
        $this->result = $var;
    }

    public function getFortDetails()
    {
        return $this->fort_details;
    }

    public function setFortDetails(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Responses\FortDetailsResponse::class);
        $this->fort_details = $var;
    }

    public function getPokemonData()
    {
        return $this->pokemon_data;
    }

    public function setPokemonData(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->pokemon_data = $var;
    }

    public function getGymState()
    {
        return $this->gym_state;
    }

    public function setGymState(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Gym\GymState::class);
        $this->gym_state = $var;
    }

}

class FortDeployPokemonResponse_Result
{
    const NO_RESULT_SET = 0;
    const SUCCESS = 1;
    const ERROR_ALREADY_HAS_POKEMON_ON_FORT = 2;
    const ERROR_OPPOSING_TEAM_OWNS_FORT = 3;
    const ERROR_FORT_IS_FULL = 4;
    const ERROR_NOT_IN_RANGE = 5;
    const ERROR_PLAYER_HAS_NO_TEAM = 6;
    const ERROR_POKEMON_NOT_FULL_HP = 7;
    const ERROR_PLAYER_BELOW_MINIMUM_LEVEL = 8;
    const ERROR_POKEMON_IS_BUDDY = 9;
}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab3060a3f504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f466f72744465706c6f79506f6b656d6f6e526573706f6e" .
    "73652e70726f746f121f504f474f50726f746f732e4e6574776f726b696e" .
    "672e526573706f6e7365731a21504f474f50726f746f732f446174612f50" .
    "6f6b656d6f6e446174612e70726f746f1a22504f474f50726f746f732f44" .
    "6174612f47796d2f47796d53746174652e70726f746f1a39504f474f5072" .
    "6f746f732f4e6574776f726b696e672f526573706f6e7365732f466f7274" .
    "44657461696c73526573706f6e73652e70726f746f22c4040a19466f7274" .
    "4465706c6f79506f6b656d6f6e526573706f6e736512510a06726573756c" .
    "7418012001280e32412e504f474f50726f746f732e4e6574776f726b696e" .
    "672e526573706f6e7365732e466f72744465706c6f79506f6b656d6f6e52" .
    "6573706f6e73652e526573756c74124a0a0c666f72745f64657461696c73" .
    "18022001280b32342e504f474f50726f746f732e4e6574776f726b696e67" .
    "2e526573706f6e7365732e466f727444657461696c73526573706f6e7365" .
    "12320a0c706f6b656d6f6e5f6461746118032001280b321c2e504f474f50" .
    "726f746f732e446174612e506f6b656d6f6e4461746112300a0967796d5f" .
    "737461746518042001280b321d2e504f474f50726f746f732e446174612e" .
    "47796d2e47796d537461746522a1020a06526573756c7412110a0d4e4f5f" .
    "524553554c545f5345541000120b0a0753554343455353100112250a2145" .
    "52524f525f414c52454144595f4841535f504f4b454d4f4e5f4f4e5f464f" .
    "5254100212210a1d4552524f525f4f50504f53494e475f5445414d5f4f57" .
    "4e535f464f5254100312160a124552524f525f464f52545f49535f46554c" .
    "4c100412160a124552524f525f4e4f545f494e5f52414e47451005121c0a" .
    "184552524f525f504c415945525f4841535f4e4f5f5445414d1006121d0a" .
    "194552524f525f504f4b454d4f4e5f4e4f545f46554c4c5f485010071224" .
    "0a204552524f525f504c415945525f42454c4f575f4d494e494d554d5f4c" .
    "4556454c1008121a0a164552524f525f504f4b454d4f4e5f49535f425544" .
    "44591009620670726f746f33"
));

