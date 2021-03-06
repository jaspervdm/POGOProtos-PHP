<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/FortSearchResponse.proto
 */


namespace POGOProtos\Networking\Responses\FortSearchResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.FortSearchResponse.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * NO_RESULT_SET = 0
     */
    const NO_RESULT_SET_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * OUT_OF_RANGE = 2
     */
    const OUT_OF_RANGE_VALUE = 2;

    /**
     * IN_COOLDOWN_PERIOD = 3
     */
    const IN_COOLDOWN_PERIOD_VALUE = 3;

    /**
     * INVENTORY_FULL = 4
     */
    const INVENTORY_FULL_VALUE = 4;

    /**
     * EXCEEDED_DAILY_LIMIT = 5
     */
    const EXCEEDED_DAILY_LIMIT_VALUE = 5;

    /**
     * POI_INACCESSIBLE = 6
     */
    const POI_INACCESSIBLE_VALUE = 6;

    /**
     * @var \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    protected static $NO_RESULT_SET = null;

    /**
     * @var \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    protected static $OUT_OF_RANGE = null;

    /**
     * @var \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    protected static $IN_COOLDOWN_PERIOD = null;

    /**
     * @var \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    protected static $INVENTORY_FULL = null;

    /**
     * @var \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    protected static $EXCEEDED_DAILY_LIMIT = null;

    /**
     * @var \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    protected static $POI_INACCESSIBLE = null;

    /**
     * @return \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    public static function NO_RESULT_SET()
    {
        if (self::$NO_RESULT_SET !== null) {
            return self::$NO_RESULT_SET;
        }

        return self::$NO_RESULT_SET = new self('NO_RESULT_SET', self::NO_RESULT_SET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    public static function OUT_OF_RANGE()
    {
        if (self::$OUT_OF_RANGE !== null) {
            return self::$OUT_OF_RANGE;
        }

        return self::$OUT_OF_RANGE = new self('OUT_OF_RANGE', self::OUT_OF_RANGE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    public static function IN_COOLDOWN_PERIOD()
    {
        if (self::$IN_COOLDOWN_PERIOD !== null) {
            return self::$IN_COOLDOWN_PERIOD;
        }

        return self::$IN_COOLDOWN_PERIOD = new self('IN_COOLDOWN_PERIOD', self::IN_COOLDOWN_PERIOD_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    public static function INVENTORY_FULL()
    {
        if (self::$INVENTORY_FULL !== null) {
            return self::$INVENTORY_FULL;
        }

        return self::$INVENTORY_FULL = new self('INVENTORY_FULL', self::INVENTORY_FULL_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    public static function EXCEEDED_DAILY_LIMIT()
    {
        if (self::$EXCEEDED_DAILY_LIMIT !== null) {
            return self::$EXCEEDED_DAILY_LIMIT;
        }

        return self::$EXCEEDED_DAILY_LIMIT = new self('EXCEEDED_DAILY_LIMIT', self::EXCEEDED_DAILY_LIMIT_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    public static function POI_INACCESSIBLE()
    {
        if (self::$POI_INACCESSIBLE !== null) {
            return self::$POI_INACCESSIBLE;
        }

        return self::$POI_INACCESSIBLE = new self('POI_INACCESSIBLE', self::POI_INACCESSIBLE_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\FortSearchResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::NO_RESULT_SET();
            case 1: return self::SUCCESS();
            case 2: return self::OUT_OF_RANGE();
            case 3: return self::IN_COOLDOWN_PERIOD();
            case 4: return self::INVENTORY_FULL();
            case 5: return self::EXCEEDED_DAILY_LIMIT();
            case 6: return self::POI_INACCESSIBLE();
            default: return null;
        }
    }


}

