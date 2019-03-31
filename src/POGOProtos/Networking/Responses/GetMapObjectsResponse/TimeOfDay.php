<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/GetMapObjectsResponse.proto
 */


namespace POGOProtos\Networking\Responses\GetMapObjectsResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.GetMapObjectsResponse.TimeOfDay
 */
class TimeOfDay extends \Protobuf\Enum
{

    /**
     * NONE = 0
     */
    const NONE_VALUE = 0;

    /**
     * DAY = 1
     */
    const DAY_VALUE = 1;

    /**
     * NIGHT = 2
     */
    const NIGHT_VALUE = 2;

    /**
     * @var \POGOProtos\Networking\Responses\GetMapObjectsResponse\TimeOfDay
     */
    protected static $NONE = null;

    /**
     * @var \POGOProtos\Networking\Responses\GetMapObjectsResponse\TimeOfDay
     */
    protected static $DAY = null;

    /**
     * @var \POGOProtos\Networking\Responses\GetMapObjectsResponse\TimeOfDay
     */
    protected static $NIGHT = null;

    /**
     * @return \POGOProtos\Networking\Responses\GetMapObjectsResponse\TimeOfDay
     */
    public static function NONE()
    {
        if (self::$NONE !== null) {
            return self::$NONE;
        }

        return self::$NONE = new self('NONE', self::NONE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GetMapObjectsResponse\TimeOfDay
     */
    public static function DAY()
    {
        if (self::$DAY !== null) {
            return self::$DAY;
        }

        return self::$DAY = new self('DAY', self::DAY_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GetMapObjectsResponse\TimeOfDay
     */
    public static function NIGHT()
    {
        if (self::$NIGHT !== null) {
            return self::$NIGHT;
        }

        return self::$NIGHT = new self('NIGHT', self::NIGHT_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\GetMapObjectsResponse\TimeOfDay
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::NONE();
            case 1: return self::DAY();
            case 2: return self::NIGHT();
            default: return null;
        }
    }


}
