<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Map/Fort/GymEvent.proto
 */


namespace POGOProtos\Map\Fort\GymEvent;

/**
 * Protobuf enum : POGOProtos.Map.Fort.GymEvent.Event
 */
class Event extends \Protobuf\Enum
{

    /**
     * UNKNOWN = 0
     */
    const UNKNOWN_VALUE = 0;

    /**
     * POKEMON_FED = 1
     */
    const POKEMON_FED_VALUE = 1;

    /**
     * POKEMON_DEPLOYED = 2
     */
    const POKEMON_DEPLOYED_VALUE = 2;

    /**
     * POKEMON_RETURNED = 3
     */
    const POKEMON_RETURNED_VALUE = 3;

    /**
     * BATTLE_WON = 4
     */
    const BATTLE_WON_VALUE = 4;

    /**
     * BATTLE_LOSS = 5
     */
    const BATTLE_LOSS_VALUE = 5;

    /**
     * RAID_STARTED = 6
     */
    const RAID_STARTED_VALUE = 6;

    /**
     * RAID_ENDED = 7
     */
    const RAID_ENDED_VALUE = 7;

    /**
     * GYM_NEUTRALIZED = 8
     */
    const GYM_NEUTRALIZED_VALUE = 8;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $UNKNOWN = null;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $POKEMON_FED = null;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $POKEMON_DEPLOYED = null;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $POKEMON_RETURNED = null;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $BATTLE_WON = null;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $BATTLE_LOSS = null;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $RAID_STARTED = null;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $RAID_ENDED = null;

    /**
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected static $GYM_NEUTRALIZED = null;

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function UNKNOWN()
    {
        if (self::$UNKNOWN !== null) {
            return self::$UNKNOWN;
        }

        return self::$UNKNOWN = new self('UNKNOWN', self::UNKNOWN_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function POKEMON_FED()
    {
        if (self::$POKEMON_FED !== null) {
            return self::$POKEMON_FED;
        }

        return self::$POKEMON_FED = new self('POKEMON_FED', self::POKEMON_FED_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function POKEMON_DEPLOYED()
    {
        if (self::$POKEMON_DEPLOYED !== null) {
            return self::$POKEMON_DEPLOYED;
        }

        return self::$POKEMON_DEPLOYED = new self('POKEMON_DEPLOYED', self::POKEMON_DEPLOYED_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function POKEMON_RETURNED()
    {
        if (self::$POKEMON_RETURNED !== null) {
            return self::$POKEMON_RETURNED;
        }

        return self::$POKEMON_RETURNED = new self('POKEMON_RETURNED', self::POKEMON_RETURNED_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function BATTLE_WON()
    {
        if (self::$BATTLE_WON !== null) {
            return self::$BATTLE_WON;
        }

        return self::$BATTLE_WON = new self('BATTLE_WON', self::BATTLE_WON_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function BATTLE_LOSS()
    {
        if (self::$BATTLE_LOSS !== null) {
            return self::$BATTLE_LOSS;
        }

        return self::$BATTLE_LOSS = new self('BATTLE_LOSS', self::BATTLE_LOSS_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function RAID_STARTED()
    {
        if (self::$RAID_STARTED !== null) {
            return self::$RAID_STARTED;
        }

        return self::$RAID_STARTED = new self('RAID_STARTED', self::RAID_STARTED_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function RAID_ENDED()
    {
        if (self::$RAID_ENDED !== null) {
            return self::$RAID_ENDED;
        }

        return self::$RAID_ENDED = new self('RAID_ENDED', self::RAID_ENDED_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function GYM_NEUTRALIZED()
    {
        if (self::$GYM_NEUTRALIZED !== null) {
            return self::$GYM_NEUTRALIZED;
        }

        return self::$GYM_NEUTRALIZED = new self('GYM_NEUTRALIZED', self::GYM_NEUTRALIZED_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNKNOWN();
            case 1: return self::POKEMON_FED();
            case 2: return self::POKEMON_DEPLOYED();
            case 3: return self::POKEMON_RETURNED();
            case 4: return self::BATTLE_WON();
            case 5: return self::BATTLE_LOSS();
            case 6: return self::RAID_STARTED();
            case 7: return self::RAID_ENDED();
            case 8: return self::GYM_NEUTRALIZED();
            default: return null;
        }
    }


}

