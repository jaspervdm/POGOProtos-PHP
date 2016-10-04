<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/GymBattleSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class GymBattleSettings extends \Google\Protobuf\Internal\Message
{
    private $energy_per_sec = 0.0;
    private $dodge_energy_cost = 0.0;
    private $retarget_seconds = 0.0;
    private $enemy_attack_interval = 0.0;
    private $attack_server_interval = 0.0;
    private $round_duration_seconds = 0.0;
    private $bonus_time_per_ally_seconds = 0.0;
    private $maximum_attackers_per_battle = 0;
    private $same_type_attack_bonus_multiplier = 0.0;
    private $maximum_energy = 0;
    private $energy_delta_per_health_lost = 0.0;
    private $dodge_duration_ms = 0;
    private $minimum_player_level = 0;
    private $swap_duration_ms = 0;
    private $dodge_damage_reduction_percent = 0.0;

    public function getEnergyPerSec()
    {
        return $this->energy_per_sec;
    }

    public function setEnergyPerSec($var)
    {
        GPBUtil::checkFloat($var);
        $this->energy_per_sec = $var;
    }

    public function getDodgeEnergyCost()
    {
        return $this->dodge_energy_cost;
    }

    public function setDodgeEnergyCost($var)
    {
        GPBUtil::checkFloat($var);
        $this->dodge_energy_cost = $var;
    }

    public function getRetargetSeconds()
    {
        return $this->retarget_seconds;
    }

    public function setRetargetSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->retarget_seconds = $var;
    }

    public function getEnemyAttackInterval()
    {
        return $this->enemy_attack_interval;
    }

    public function setEnemyAttackInterval($var)
    {
        GPBUtil::checkFloat($var);
        $this->enemy_attack_interval = $var;
    }

    public function getAttackServerInterval()
    {
        return $this->attack_server_interval;
    }

    public function setAttackServerInterval($var)
    {
        GPBUtil::checkFloat($var);
        $this->attack_server_interval = $var;
    }

    public function getRoundDurationSeconds()
    {
        return $this->round_duration_seconds;
    }

    public function setRoundDurationSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->round_duration_seconds = $var;
    }

    public function getBonusTimePerAllySeconds()
    {
        return $this->bonus_time_per_ally_seconds;
    }

    public function setBonusTimePerAllySeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->bonus_time_per_ally_seconds = $var;
    }

    public function getMaximumAttackersPerBattle()
    {
        return $this->maximum_attackers_per_battle;
    }

    public function setMaximumAttackersPerBattle($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_attackers_per_battle = $var;
    }

    public function getSameTypeAttackBonusMultiplier()
    {
        return $this->same_type_attack_bonus_multiplier;
    }

    public function setSameTypeAttackBonusMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->same_type_attack_bonus_multiplier = $var;
    }

    public function getMaximumEnergy()
    {
        return $this->maximum_energy;
    }

    public function setMaximumEnergy($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_energy = $var;
    }

    public function getEnergyDeltaPerHealthLost()
    {
        return $this->energy_delta_per_health_lost;
    }

    public function setEnergyDeltaPerHealthLost($var)
    {
        GPBUtil::checkFloat($var);
        $this->energy_delta_per_health_lost = $var;
    }

    public function getDodgeDurationMs()
    {
        return $this->dodge_duration_ms;
    }

    public function setDodgeDurationMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->dodge_duration_ms = $var;
    }

    public function getMinimumPlayerLevel()
    {
        return $this->minimum_player_level;
    }

    public function setMinimumPlayerLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->minimum_player_level = $var;
    }

    public function getSwapDurationMs()
    {
        return $this->swap_duration_ms;
    }

    public function setSwapDurationMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->swap_duration_ms = $var;
    }

    public function getDodgeDamageReductionPercent()
    {
        return $this->dodge_damage_reduction_percent;
    }

    public function setDodgeDamageReductionPercent($var)
    {
        GPBUtil::checkFloat($var);
        $this->dodge_damage_reduction_percent = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac9040a32504f474f50726f746f732f53657474696e67732f4d61737465" .
    "722f47796d426174746c6553657474696e67732e70726f746f121a504f47" .
    "4f50726f746f732e53657474696e67732e4d617374657222ee030a114779" .
    "6d426174746c6553657474696e677312160a0e656e657267795f7065725f" .
    "73656318012001280212190a11646f6467655f656e657267795f636f7374" .
    "18022001280212180a1072657461726765745f7365636f6e647318032001" .
    "2802121d0a15656e656d795f61747461636b5f696e74657276616c180420" .
    "012802121e0a1661747461636b5f7365727665725f696e74657276616c18" .
    "0520012802121e0a16726f756e645f6475726174696f6e5f7365636f6e64" .
    "7318062001280212230a1b626f6e75735f74696d655f7065725f616c6c79" .
    "5f7365636f6e647318072001280212240a1c6d6178696d756d5f61747461" .
    "636b6572735f7065725f626174746c6518082001280512290a2173616d65" .
    "5f747970655f61747461636b5f626f6e75735f6d756c7469706c69657218" .
    "092001280212160a0e6d6178696d756d5f656e65726779180a2001280512" .
    "240a1c656e657267795f64656c74615f7065725f6865616c74685f6c6f73" .
    "74180b2001280212190a11646f6467655f6475726174696f6e5f6d73180c" .
    "20012805121c0a146d696e696d756d5f706c617965725f6c6576656c180d" .
    "2001280512180a10737761705f6475726174696f6e5f6d73180e20012805" .
    "12260a1e646f6467655f64616d6167655f726564756374696f6e5f706572" .
    "63656e74180f20012802620670726f746f33"
));
