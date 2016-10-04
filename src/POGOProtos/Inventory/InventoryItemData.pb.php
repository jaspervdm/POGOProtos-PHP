<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/InventoryItemData.proto

namespace POGOProtos\Inventory;

require_once('POGOProtos/Inventory/Item/ItemData.pb.php');
require_once('POGOProtos/Inventory/AppliedItems.pb.php');
require_once('POGOProtos/Inventory/EggIncubators.pb.php');
require_once('POGOProtos/Inventory/Candy.pb.php');
require_once('POGOProtos/Inventory/InventoryUpgrades.pb.php');
require_once('POGOProtos/Data/PokemonData.pb.php');
require_once('POGOProtos/Data/PokedexEntry.pb.php');
require_once('POGOProtos/Data/Player/PlayerStats.pb.php');
require_once('POGOProtos/Data/Player/PlayerCurrency.pb.php');
require_once('POGOProtos/Data/Player/PlayerCamera.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class InventoryItemData extends \Google\Protobuf\Internal\Message
{
    private $pokemon_data = null;
    private $item = null;
    private $pokedex_entry = null;
    private $player_stats = null;
    private $player_currency = null;
    private $player_camera = null;
    private $inventory_upgrades = null;
    private $applied_items = null;
    private $egg_incubators = null;
    private $candy = null;

    public function getPokemonData()
    {
        return $this->pokemon_data;
    }

    public function setPokemonData(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->pokemon_data = $var;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Item\ItemData::class);
        $this->item = $var;
    }

    public function getPokedexEntry()
    {
        return $this->pokedex_entry;
    }

    public function setPokedexEntry(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokedexEntry::class);
        $this->pokedex_entry = $var;
    }

    public function getPlayerStats()
    {
        return $this->player_stats;
    }

    public function setPlayerStats(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerStats::class);
        $this->player_stats = $var;
    }

    public function getPlayerCurrency()
    {
        return $this->player_currency;
    }

    public function setPlayerCurrency(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerCurrency::class);
        $this->player_currency = $var;
    }

    public function getPlayerCamera()
    {
        return $this->player_camera;
    }

    public function setPlayerCamera(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerCamera::class);
        $this->player_camera = $var;
    }

    public function getInventoryUpgrades()
    {
        return $this->inventory_upgrades;
    }

    public function setInventoryUpgrades(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\InventoryUpgrades::class);
        $this->inventory_upgrades = $var;
    }

    public function getAppliedItems()
    {
        return $this->applied_items;
    }

    public function setAppliedItems(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\AppliedItems::class);
        $this->applied_items = $var;
    }

    public function getEggIncubators()
    {
        return $this->egg_incubators;
    }

    public function setEggIncubators(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\EggIncubators::class);
        $this->egg_incubators = $var;
    }

    public function getCandy()
    {
        return $this->candy;
    }

    public function setCandy(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Candy::class);
        $this->candy = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab7080a2c504f474f50726f746f732f496e76656e746f72792f496e7665" .
    "6e746f72794974656d446174612e70726f746f1214504f474f50726f746f" .
    "732e496e76656e746f72791a28504f474f50726f746f732f496e76656e74" .
    "6f72792f4974656d2f4974656d446174612e70726f746f1a27504f474f50" .
    "726f746f732f496e76656e746f72792f4170706c6965644974656d732e70" .
    "726f746f1a28504f474f50726f746f732f496e76656e746f72792f456767" .
    "496e63756261746f72732e70726f746f1a20504f474f50726f746f732f49" .
    "6e76656e746f72792f43616e64792e70726f746f1a2c504f474f50726f74" .
    "6f732f496e76656e746f72792f496e76656e746f72795570677261646573" .
    "2e70726f746f1a21504f474f50726f746f732f446174612f506f6b656d6f" .
    "6e446174612e70726f746f1a22504f474f50726f746f732f446174612f50" .
    "6f6b65646578456e7472792e70726f746f1a28504f474f50726f746f732f" .
    "446174612f506c617965722f506c6179657253746174732e70726f746f1a" .
    "2b504f474f50726f746f732f446174612f506c617965722f506c61796572" .
    "43757272656e63792e70726f746f1a29504f474f50726f746f732f446174" .
    "612f506c617965722f506c6179657243616d6572612e70726f746f22d204" .
    "0a11496e76656e746f72794974656d4461746112320a0c706f6b656d6f6e" .
    "5f6461746118012001280b321c2e504f474f50726f746f732e446174612e" .
    "506f6b656d6f6e4461746112310a046974656d18022001280b32232e504f" .
    "474f50726f746f732e496e76656e746f72792e4974656d2e4974656d4461" .
    "746112340a0d706f6b656465785f656e74727918032001280b321d2e504f" .
    "474f50726f746f732e446174612e506f6b65646578456e74727912390a0c" .
    "706c617965725f737461747318042001280b32232e504f474f50726f746f" .
    "732e446174612e506c617965722e506c617965725374617473123f0a0f70" .
    "6c617965725f63757272656e637918052001280b32262e504f474f50726f" .
    "746f732e446174612e506c617965722e506c6179657243757272656e6379" .
    "123b0a0d706c617965725f63616d65726118062001280b32242e504f474f" .
    "50726f746f732e446174612e506c617965722e506c6179657243616d6572" .
    "6112430a12696e76656e746f72795f757067726164657318072001280b32" .
    "272e504f474f50726f746f732e496e76656e746f72792e496e76656e746f" .
    "7279557067726164657312390a0d6170706c6965645f6974656d73180820" .
    "01280b32222e504f474f50726f746f732e496e76656e746f72792e417070" .
    "6c6965644974656d73123b0a0e6567675f696e63756261746f7273180920" .
    "01280b32232e504f474f50726f746f732e496e76656e746f72792e456767" .
    "496e63756261746f7273122a0a0563616e6479180a2001280b321b2e504f" .
    "474f50726f746f732e496e76656e746f72792e43616e6479620670726f74" .
    "6f33"
));

