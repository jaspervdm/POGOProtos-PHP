<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/FortModifierAttributes.proto

namespace POGOProtos\Settings\Master\Item;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class FortModifierAttributes extends \Google\Protobuf\Internal\Message
{
    private $modifier_lifetime_seconds = 0;
    private $troy_disk_num_pokemon_spawned = 0;

    public function getModifierLifetimeSeconds()
    {
        return $this->modifier_lifetime_seconds;
    }

    public function setModifierLifetimeSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->modifier_lifetime_seconds = $var;
    }

    public function getTroyDiskNumPokemonSpawned()
    {
        return $this->troy_disk_num_pokemon_spawned;
    }

    public function setTroyDiskNumPokemonSpawned($var)
    {
        GPBUtil::checkInt32($var);
        $this->troy_disk_num_pokemon_spawned = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0acb010a3c504f474f50726f746f732f53657474696e67732f4d61737465" .
    "722f4974656d2f466f72744d6f646966696572417474726962757465732e" .
    "70726f746f121f504f474f50726f746f732e53657474696e67732e4d6173" .
    "7465722e4974656d22620a16466f72744d6f646966696572417474726962" .
    "7574657312210a196d6f6469666965725f6c69666574696d655f7365636f" .
    "6e647318012001280512250a1d74726f795f6469736b5f6e756d5f706f6b" .
    "656d6f6e5f737061776e6564180220012805620670726f746f33"
));
