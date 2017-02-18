<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/Master/PokemonSettings.proto
 */


namespace POGOProtos\Settings\Master\PokemonSettings;

/**
 * Protobuf enum : POGOProtos.Settings.Master.PokemonSettings.BuddySize
 */
class BuddySize extends \Protobuf\Enum
{

    /**
     * BUDDY_MEDIUM = 0
     */
    const BUDDY_MEDIUM_VALUE = 0;

    /**
     * BUDDY_SHOULDER = 1
     */
    const BUDDY_SHOULDER_VALUE = 1;

    /**
     * BUDDY_BIG = 2
     */
    const BUDDY_BIG_VALUE = 2;

    /**
     * BUDDY_FLYING = 3
     */
    const BUDDY_FLYING_VALUE = 3;

    /**
     * BUDDY_BABY = 4
     */
    const BUDDY_BABY_VALUE = 4;

    /**
     * @var \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    protected static $BUDDY_MEDIUM = null;

    /**
     * @var \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    protected static $BUDDY_SHOULDER = null;

    /**
     * @var \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    protected static $BUDDY_BIG = null;

    /**
     * @var \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    protected static $BUDDY_FLYING = null;

    /**
     * @var \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    protected static $BUDDY_BABY = null;

    /**
     * @return \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    public static function BUDDY_MEDIUM()
    {
        if (self::$BUDDY_MEDIUM !== null) {
            return self::$BUDDY_MEDIUM;
        }

        return self::$BUDDY_MEDIUM = new self('BUDDY_MEDIUM', self::BUDDY_MEDIUM_VALUE);
    }

    /**
     * @return \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    public static function BUDDY_SHOULDER()
    {
        if (self::$BUDDY_SHOULDER !== null) {
            return self::$BUDDY_SHOULDER;
        }

        return self::$BUDDY_SHOULDER = new self('BUDDY_SHOULDER', self::BUDDY_SHOULDER_VALUE);
    }

    /**
     * @return \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    public static function BUDDY_BIG()
    {
        if (self::$BUDDY_BIG !== null) {
            return self::$BUDDY_BIG;
        }

        return self::$BUDDY_BIG = new self('BUDDY_BIG', self::BUDDY_BIG_VALUE);
    }

    /**
     * @return \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    public static function BUDDY_FLYING()
    {
        if (self::$BUDDY_FLYING !== null) {
            return self::$BUDDY_FLYING;
        }

        return self::$BUDDY_FLYING = new self('BUDDY_FLYING', self::BUDDY_FLYING_VALUE);
    }

    /**
     * @return \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    public static function BUDDY_BABY()
    {
        if (self::$BUDDY_BABY !== null) {
            return self::$BUDDY_BABY;
        }

        return self::$BUDDY_BABY = new self('BUDDY_BABY', self::BUDDY_BABY_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Settings\Master\PokemonSettings\BuddySize
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::BUDDY_MEDIUM();
            case 1: return self::BUDDY_SHOULDER();
            case 2: return self::BUDDY_BIG();
            case 3: return self::BUDDY_FLYING();
            case 4: return self::BUDDY_BABY();
            default: return null;
        }
    }


}

