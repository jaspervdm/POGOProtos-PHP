<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/SetPlayerTeamResponse.proto
 */


namespace POGOProtos\Networking\Responses\SetPlayerTeamResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.SetPlayerTeamResponse.Status
 */
class Status extends \Protobuf\Enum
{

    /**
     * UNSET = 0
     */
    const UNSET_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * TEAM_ALREADY_SET = 2
     */
    const TEAM_ALREADY_SET_VALUE = 2;

    /**
     * FAILURE = 3
     */
    const FAILURE_VALUE = 3;

    /**
     * @var \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    protected static $TEAM_ALREADY_SET = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    protected static $FAILURE = null;

    /**
     * @return \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    public static function TEAM_ALREADY_SET()
    {
        if (self::$TEAM_ALREADY_SET !== null) {
            return self::$TEAM_ALREADY_SET;
        }

        return self::$TEAM_ALREADY_SET = new self('TEAM_ALREADY_SET', self::TEAM_ALREADY_SET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    public static function FAILURE()
    {
        if (self::$FAILURE !== null) {
            return self::$FAILURE;
        }

        return self::$FAILURE = new self('FAILURE', self::FAILURE_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\SetPlayerTeamResponse\Status
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::TEAM_ALREADY_SET();
            case 3: return self::FAILURE();
            default: return null;
        }
    }


}

