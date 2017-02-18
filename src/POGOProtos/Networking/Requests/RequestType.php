<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Requests/RequestType.proto
 */


namespace POGOProtos\Networking\Requests;

/**
 * Protobuf enum : POGOProtos.Networking.Requests.RequestType
 */
class RequestType extends \Protobuf\Enum
{

    /**
     * METHOD_UNSET = 0
     */
    const METHOD_UNSET_VALUE = 0;

    /**
     * GET_PLAYER = 2
     */
    const GET_PLAYER_VALUE = 2;

    /**
     * GET_INVENTORY = 4
     */
    const GET_INVENTORY_VALUE = 4;

    /**
     * DOWNLOAD_SETTINGS = 5
     */
    const DOWNLOAD_SETTINGS_VALUE = 5;

    /**
     * DOWNLOAD_ITEM_TEMPLATES = 6
     */
    const DOWNLOAD_ITEM_TEMPLATES_VALUE = 6;

    /**
     * DOWNLOAD_REMOTE_CONFIG_VERSION = 7
     */
    const DOWNLOAD_REMOTE_CONFIG_VERSION_VALUE = 7;

    /**
     * REGISTER_BACKGROUND_DEVICE = 8
     */
    const REGISTER_BACKGROUND_DEVICE_VALUE = 8;

    /**
     * FORT_SEARCH = 101
     */
    const FORT_SEARCH_VALUE = 101;

    /**
     * ENCOUNTER = 102
     */
    const ENCOUNTER_VALUE = 102;

    /**
     * CATCH_POKEMON = 103
     */
    const CATCH_POKEMON_VALUE = 103;

    /**
     * FORT_DETAILS = 104
     */
    const FORT_DETAILS_VALUE = 104;

    /**
     * GET_MAP_OBJECTS = 106
     */
    const GET_MAP_OBJECTS_VALUE = 106;

    /**
     * FORT_DEPLOY_POKEMON = 110
     */
    const FORT_DEPLOY_POKEMON_VALUE = 110;

    /**
     * FORT_RECALL_POKEMON = 111
     */
    const FORT_RECALL_POKEMON_VALUE = 111;

    /**
     * RELEASE_POKEMON = 112
     */
    const RELEASE_POKEMON_VALUE = 112;

    /**
     * USE_ITEM_POTION = 113
     */
    const USE_ITEM_POTION_VALUE = 113;

    /**
     * USE_ITEM_CAPTURE = 114
     */
    const USE_ITEM_CAPTURE_VALUE = 114;

    /**
     * USE_ITEM_FLEE = 115
     */
    const USE_ITEM_FLEE_VALUE = 115;

    /**
     * USE_ITEM_REVIVE = 116
     */
    const USE_ITEM_REVIVE_VALUE = 116;

    /**
     * GET_PLAYER_PROFILE = 121
     */
    const GET_PLAYER_PROFILE_VALUE = 121;

    /**
     * EVOLVE_POKEMON = 125
     */
    const EVOLVE_POKEMON_VALUE = 125;

    /**
     * GET_HATCHED_EGGS = 126
     */
    const GET_HATCHED_EGGS_VALUE = 126;

    /**
     * ENCOUNTER_TUTORIAL_COMPLETE = 127
     */
    const ENCOUNTER_TUTORIAL_COMPLETE_VALUE = 127;

    /**
     * LEVEL_UP_REWARDS = 128
     */
    const LEVEL_UP_REWARDS_VALUE = 128;

    /**
     * CHECK_AWARDED_BADGES = 129
     */
    const CHECK_AWARDED_BADGES_VALUE = 129;

    /**
     * USE_ITEM_GYM = 133
     */
    const USE_ITEM_GYM_VALUE = 133;

    /**
     * GET_GYM_DETAILS = 134
     */
    const GET_GYM_DETAILS_VALUE = 134;

    /**
     * START_GYM_BATTLE = 135
     */
    const START_GYM_BATTLE_VALUE = 135;

    /**
     * ATTACK_GYM = 136
     */
    const ATTACK_GYM_VALUE = 136;

    /**
     * RECYCLE_INVENTORY_ITEM = 137
     */
    const RECYCLE_INVENTORY_ITEM_VALUE = 137;

    /**
     * COLLECT_DAILY_BONUS = 138
     */
    const COLLECT_DAILY_BONUS_VALUE = 138;

    /**
     * USE_ITEM_XP_BOOST = 139
     */
    const USE_ITEM_XP_BOOST_VALUE = 139;

    /**
     * USE_ITEM_EGG_INCUBATOR = 140
     */
    const USE_ITEM_EGG_INCUBATOR_VALUE = 140;

    /**
     * USE_INCENSE = 141
     */
    const USE_INCENSE_VALUE = 141;

    /**
     * GET_INCENSE_POKEMON = 142
     */
    const GET_INCENSE_POKEMON_VALUE = 142;

    /**
     * INCENSE_ENCOUNTER = 143
     */
    const INCENSE_ENCOUNTER_VALUE = 143;

    /**
     * ADD_FORT_MODIFIER = 144
     */
    const ADD_FORT_MODIFIER_VALUE = 144;

    /**
     * DISK_ENCOUNTER = 145
     */
    const DISK_ENCOUNTER_VALUE = 145;

    /**
     * COLLECT_DAILY_DEFENDER_BONUS = 146
     */
    const COLLECT_DAILY_DEFENDER_BONUS_VALUE = 146;

    /**
     * UPGRADE_POKEMON = 147
     */
    const UPGRADE_POKEMON_VALUE = 147;

    /**
     * SET_FAVORITE_POKEMON = 148
     */
    const SET_FAVORITE_POKEMON_VALUE = 148;

    /**
     * NICKNAME_POKEMON = 149
     */
    const NICKNAME_POKEMON_VALUE = 149;

    /**
     * EQUIP_BADGE = 150
     */
    const EQUIP_BADGE_VALUE = 150;

    /**
     * SET_CONTACT_SETTINGS = 151
     */
    const SET_CONTACT_SETTINGS_VALUE = 151;

    /**
     * SET_BUDDY_POKEMON = 152
     */
    const SET_BUDDY_POKEMON_VALUE = 152;

    /**
     * GET_BUDDY_WALKED = 153
     */
    const GET_BUDDY_WALKED_VALUE = 153;

    /**
     * USE_ITEM_ENCOUNTER = 154
     */
    const USE_ITEM_ENCOUNTER_VALUE = 154;

    /**
     * GET_ASSET_DIGEST = 300
     */
    const GET_ASSET_DIGEST_VALUE = 300;

    /**
     * GET_DOWNLOAD_URLS = 301
     */
    const GET_DOWNLOAD_URLS_VALUE = 301;

    /**
     * CLAIM_CODENAME = 403
     */
    const CLAIM_CODENAME_VALUE = 403;

    /**
     * SET_AVATAR = 404
     */
    const SET_AVATAR_VALUE = 404;

    /**
     * SET_PLAYER_TEAM = 405
     */
    const SET_PLAYER_TEAM_VALUE = 405;

    /**
     * MARK_TUTORIAL_COMPLETE = 406
     */
    const MARK_TUTORIAL_COMPLETE_VALUE = 406;

    /**
     * CHECK_CHALLENGE = 600
     */
    const CHECK_CHALLENGE_VALUE = 600;

    /**
     * VERIFY_CHALLENGE = 601
     */
    const VERIFY_CHALLENGE_VALUE = 601;

    /**
     * ECHO = 666
     */
    const ECHO_VALUE = 666;

    /**
     * SFIDA_REGISTRATION = 800
     */
    const SFIDA_REGISTRATION_VALUE = 800;

    /**
     * SFIDA_ACTION_LOG = 801
     */
    const SFIDA_ACTION_LOG_VALUE = 801;

    /**
     * SFIDA_CERTIFICATION = 802
     */
    const SFIDA_CERTIFICATION_VALUE = 802;

    /**
     * SFIDA_UPDATE = 803
     */
    const SFIDA_UPDATE_VALUE = 803;

    /**
     * SFIDA_ACTION = 804
     */
    const SFIDA_ACTION_VALUE = 804;

    /**
     * SFIDA_DOWSER = 805
     */
    const SFIDA_DOWSER_VALUE = 805;

    /**
     * SFIDA_CAPTURE = 806
     */
    const SFIDA_CAPTURE_VALUE = 806;

    /**
     * LIST_AVATAR_CUSTOMIZATIONS = 807
     */
    const LIST_AVATAR_CUSTOMIZATIONS_VALUE = 807;

    /**
     * SET_AVATAR_ITEM_AS_VIEWED = 808
     */
    const SET_AVATAR_ITEM_AS_VIEWED_VALUE = 808;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $METHOD_UNSET = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_PLAYER = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_INVENTORY = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $DOWNLOAD_SETTINGS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $DOWNLOAD_ITEM_TEMPLATES = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $DOWNLOAD_REMOTE_CONFIG_VERSION = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $REGISTER_BACKGROUND_DEVICE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $FORT_SEARCH = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $ENCOUNTER = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $CATCH_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $FORT_DETAILS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_MAP_OBJECTS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $FORT_DEPLOY_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $FORT_RECALL_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $RELEASE_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_ITEM_POTION = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_ITEM_CAPTURE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_ITEM_FLEE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_ITEM_REVIVE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_PLAYER_PROFILE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $EVOLVE_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_HATCHED_EGGS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $ENCOUNTER_TUTORIAL_COMPLETE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $LEVEL_UP_REWARDS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $CHECK_AWARDED_BADGES = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_ITEM_GYM = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_GYM_DETAILS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $START_GYM_BATTLE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $ATTACK_GYM = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $RECYCLE_INVENTORY_ITEM = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $COLLECT_DAILY_BONUS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_ITEM_XP_BOOST = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_ITEM_EGG_INCUBATOR = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_INCENSE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_INCENSE_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $INCENSE_ENCOUNTER = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $ADD_FORT_MODIFIER = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $DISK_ENCOUNTER = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $COLLECT_DAILY_DEFENDER_BONUS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $UPGRADE_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SET_FAVORITE_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $NICKNAME_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $EQUIP_BADGE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SET_CONTACT_SETTINGS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SET_BUDDY_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_BUDDY_WALKED = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $USE_ITEM_ENCOUNTER = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_ASSET_DIGEST = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $GET_DOWNLOAD_URLS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $CLAIM_CODENAME = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SET_AVATAR = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SET_PLAYER_TEAM = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $MARK_TUTORIAL_COMPLETE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $CHECK_CHALLENGE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $VERIFY_CHALLENGE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $ECHO = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SFIDA_REGISTRATION = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SFIDA_ACTION_LOG = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SFIDA_CERTIFICATION = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SFIDA_UPDATE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SFIDA_ACTION = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SFIDA_DOWSER = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SFIDA_CAPTURE = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $LIST_AVATAR_CUSTOMIZATIONS = null;

    /**
     * @var \POGOProtos\Networking\Requests\RequestType
     */
    protected static $SET_AVATAR_ITEM_AS_VIEWED = null;

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function METHOD_UNSET()
    {
        if (self::$METHOD_UNSET !== null) {
            return self::$METHOD_UNSET;
        }

        return self::$METHOD_UNSET = new self('METHOD_UNSET', self::METHOD_UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_PLAYER()
    {
        if (self::$GET_PLAYER !== null) {
            return self::$GET_PLAYER;
        }

        return self::$GET_PLAYER = new self('GET_PLAYER', self::GET_PLAYER_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_INVENTORY()
    {
        if (self::$GET_INVENTORY !== null) {
            return self::$GET_INVENTORY;
        }

        return self::$GET_INVENTORY = new self('GET_INVENTORY', self::GET_INVENTORY_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function DOWNLOAD_SETTINGS()
    {
        if (self::$DOWNLOAD_SETTINGS !== null) {
            return self::$DOWNLOAD_SETTINGS;
        }

        return self::$DOWNLOAD_SETTINGS = new self('DOWNLOAD_SETTINGS', self::DOWNLOAD_SETTINGS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function DOWNLOAD_ITEM_TEMPLATES()
    {
        if (self::$DOWNLOAD_ITEM_TEMPLATES !== null) {
            return self::$DOWNLOAD_ITEM_TEMPLATES;
        }

        return self::$DOWNLOAD_ITEM_TEMPLATES = new self('DOWNLOAD_ITEM_TEMPLATES', self::DOWNLOAD_ITEM_TEMPLATES_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function DOWNLOAD_REMOTE_CONFIG_VERSION()
    {
        if (self::$DOWNLOAD_REMOTE_CONFIG_VERSION !== null) {
            return self::$DOWNLOAD_REMOTE_CONFIG_VERSION;
        }

        return self::$DOWNLOAD_REMOTE_CONFIG_VERSION = new self('DOWNLOAD_REMOTE_CONFIG_VERSION', self::DOWNLOAD_REMOTE_CONFIG_VERSION_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function REGISTER_BACKGROUND_DEVICE()
    {
        if (self::$REGISTER_BACKGROUND_DEVICE !== null) {
            return self::$REGISTER_BACKGROUND_DEVICE;
        }

        return self::$REGISTER_BACKGROUND_DEVICE = new self('REGISTER_BACKGROUND_DEVICE', self::REGISTER_BACKGROUND_DEVICE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function FORT_SEARCH()
    {
        if (self::$FORT_SEARCH !== null) {
            return self::$FORT_SEARCH;
        }

        return self::$FORT_SEARCH = new self('FORT_SEARCH', self::FORT_SEARCH_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function ENCOUNTER()
    {
        if (self::$ENCOUNTER !== null) {
            return self::$ENCOUNTER;
        }

        return self::$ENCOUNTER = new self('ENCOUNTER', self::ENCOUNTER_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function CATCH_POKEMON()
    {
        if (self::$CATCH_POKEMON !== null) {
            return self::$CATCH_POKEMON;
        }

        return self::$CATCH_POKEMON = new self('CATCH_POKEMON', self::CATCH_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function FORT_DETAILS()
    {
        if (self::$FORT_DETAILS !== null) {
            return self::$FORT_DETAILS;
        }

        return self::$FORT_DETAILS = new self('FORT_DETAILS', self::FORT_DETAILS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_MAP_OBJECTS()
    {
        if (self::$GET_MAP_OBJECTS !== null) {
            return self::$GET_MAP_OBJECTS;
        }

        return self::$GET_MAP_OBJECTS = new self('GET_MAP_OBJECTS', self::GET_MAP_OBJECTS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function FORT_DEPLOY_POKEMON()
    {
        if (self::$FORT_DEPLOY_POKEMON !== null) {
            return self::$FORT_DEPLOY_POKEMON;
        }

        return self::$FORT_DEPLOY_POKEMON = new self('FORT_DEPLOY_POKEMON', self::FORT_DEPLOY_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function FORT_RECALL_POKEMON()
    {
        if (self::$FORT_RECALL_POKEMON !== null) {
            return self::$FORT_RECALL_POKEMON;
        }

        return self::$FORT_RECALL_POKEMON = new self('FORT_RECALL_POKEMON', self::FORT_RECALL_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function RELEASE_POKEMON()
    {
        if (self::$RELEASE_POKEMON !== null) {
            return self::$RELEASE_POKEMON;
        }

        return self::$RELEASE_POKEMON = new self('RELEASE_POKEMON', self::RELEASE_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_ITEM_POTION()
    {
        if (self::$USE_ITEM_POTION !== null) {
            return self::$USE_ITEM_POTION;
        }

        return self::$USE_ITEM_POTION = new self('USE_ITEM_POTION', self::USE_ITEM_POTION_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_ITEM_CAPTURE()
    {
        if (self::$USE_ITEM_CAPTURE !== null) {
            return self::$USE_ITEM_CAPTURE;
        }

        return self::$USE_ITEM_CAPTURE = new self('USE_ITEM_CAPTURE', self::USE_ITEM_CAPTURE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_ITEM_FLEE()
    {
        if (self::$USE_ITEM_FLEE !== null) {
            return self::$USE_ITEM_FLEE;
        }

        return self::$USE_ITEM_FLEE = new self('USE_ITEM_FLEE', self::USE_ITEM_FLEE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_ITEM_REVIVE()
    {
        if (self::$USE_ITEM_REVIVE !== null) {
            return self::$USE_ITEM_REVIVE;
        }

        return self::$USE_ITEM_REVIVE = new self('USE_ITEM_REVIVE', self::USE_ITEM_REVIVE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_PLAYER_PROFILE()
    {
        if (self::$GET_PLAYER_PROFILE !== null) {
            return self::$GET_PLAYER_PROFILE;
        }

        return self::$GET_PLAYER_PROFILE = new self('GET_PLAYER_PROFILE', self::GET_PLAYER_PROFILE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function EVOLVE_POKEMON()
    {
        if (self::$EVOLVE_POKEMON !== null) {
            return self::$EVOLVE_POKEMON;
        }

        return self::$EVOLVE_POKEMON = new self('EVOLVE_POKEMON', self::EVOLVE_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_HATCHED_EGGS()
    {
        if (self::$GET_HATCHED_EGGS !== null) {
            return self::$GET_HATCHED_EGGS;
        }

        return self::$GET_HATCHED_EGGS = new self('GET_HATCHED_EGGS', self::GET_HATCHED_EGGS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function ENCOUNTER_TUTORIAL_COMPLETE()
    {
        if (self::$ENCOUNTER_TUTORIAL_COMPLETE !== null) {
            return self::$ENCOUNTER_TUTORIAL_COMPLETE;
        }

        return self::$ENCOUNTER_TUTORIAL_COMPLETE = new self('ENCOUNTER_TUTORIAL_COMPLETE', self::ENCOUNTER_TUTORIAL_COMPLETE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function LEVEL_UP_REWARDS()
    {
        if (self::$LEVEL_UP_REWARDS !== null) {
            return self::$LEVEL_UP_REWARDS;
        }

        return self::$LEVEL_UP_REWARDS = new self('LEVEL_UP_REWARDS', self::LEVEL_UP_REWARDS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function CHECK_AWARDED_BADGES()
    {
        if (self::$CHECK_AWARDED_BADGES !== null) {
            return self::$CHECK_AWARDED_BADGES;
        }

        return self::$CHECK_AWARDED_BADGES = new self('CHECK_AWARDED_BADGES', self::CHECK_AWARDED_BADGES_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_ITEM_GYM()
    {
        if (self::$USE_ITEM_GYM !== null) {
            return self::$USE_ITEM_GYM;
        }

        return self::$USE_ITEM_GYM = new self('USE_ITEM_GYM', self::USE_ITEM_GYM_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_GYM_DETAILS()
    {
        if (self::$GET_GYM_DETAILS !== null) {
            return self::$GET_GYM_DETAILS;
        }

        return self::$GET_GYM_DETAILS = new self('GET_GYM_DETAILS', self::GET_GYM_DETAILS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function START_GYM_BATTLE()
    {
        if (self::$START_GYM_BATTLE !== null) {
            return self::$START_GYM_BATTLE;
        }

        return self::$START_GYM_BATTLE = new self('START_GYM_BATTLE', self::START_GYM_BATTLE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function ATTACK_GYM()
    {
        if (self::$ATTACK_GYM !== null) {
            return self::$ATTACK_GYM;
        }

        return self::$ATTACK_GYM = new self('ATTACK_GYM', self::ATTACK_GYM_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function RECYCLE_INVENTORY_ITEM()
    {
        if (self::$RECYCLE_INVENTORY_ITEM !== null) {
            return self::$RECYCLE_INVENTORY_ITEM;
        }

        return self::$RECYCLE_INVENTORY_ITEM = new self('RECYCLE_INVENTORY_ITEM', self::RECYCLE_INVENTORY_ITEM_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function COLLECT_DAILY_BONUS()
    {
        if (self::$COLLECT_DAILY_BONUS !== null) {
            return self::$COLLECT_DAILY_BONUS;
        }

        return self::$COLLECT_DAILY_BONUS = new self('COLLECT_DAILY_BONUS', self::COLLECT_DAILY_BONUS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_ITEM_XP_BOOST()
    {
        if (self::$USE_ITEM_XP_BOOST !== null) {
            return self::$USE_ITEM_XP_BOOST;
        }

        return self::$USE_ITEM_XP_BOOST = new self('USE_ITEM_XP_BOOST', self::USE_ITEM_XP_BOOST_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_ITEM_EGG_INCUBATOR()
    {
        if (self::$USE_ITEM_EGG_INCUBATOR !== null) {
            return self::$USE_ITEM_EGG_INCUBATOR;
        }

        return self::$USE_ITEM_EGG_INCUBATOR = new self('USE_ITEM_EGG_INCUBATOR', self::USE_ITEM_EGG_INCUBATOR_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_INCENSE()
    {
        if (self::$USE_INCENSE !== null) {
            return self::$USE_INCENSE;
        }

        return self::$USE_INCENSE = new self('USE_INCENSE', self::USE_INCENSE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_INCENSE_POKEMON()
    {
        if (self::$GET_INCENSE_POKEMON !== null) {
            return self::$GET_INCENSE_POKEMON;
        }

        return self::$GET_INCENSE_POKEMON = new self('GET_INCENSE_POKEMON', self::GET_INCENSE_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function INCENSE_ENCOUNTER()
    {
        if (self::$INCENSE_ENCOUNTER !== null) {
            return self::$INCENSE_ENCOUNTER;
        }

        return self::$INCENSE_ENCOUNTER = new self('INCENSE_ENCOUNTER', self::INCENSE_ENCOUNTER_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function ADD_FORT_MODIFIER()
    {
        if (self::$ADD_FORT_MODIFIER !== null) {
            return self::$ADD_FORT_MODIFIER;
        }

        return self::$ADD_FORT_MODIFIER = new self('ADD_FORT_MODIFIER', self::ADD_FORT_MODIFIER_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function DISK_ENCOUNTER()
    {
        if (self::$DISK_ENCOUNTER !== null) {
            return self::$DISK_ENCOUNTER;
        }

        return self::$DISK_ENCOUNTER = new self('DISK_ENCOUNTER', self::DISK_ENCOUNTER_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function COLLECT_DAILY_DEFENDER_BONUS()
    {
        if (self::$COLLECT_DAILY_DEFENDER_BONUS !== null) {
            return self::$COLLECT_DAILY_DEFENDER_BONUS;
        }

        return self::$COLLECT_DAILY_DEFENDER_BONUS = new self('COLLECT_DAILY_DEFENDER_BONUS', self::COLLECT_DAILY_DEFENDER_BONUS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function UPGRADE_POKEMON()
    {
        if (self::$UPGRADE_POKEMON !== null) {
            return self::$UPGRADE_POKEMON;
        }

        return self::$UPGRADE_POKEMON = new self('UPGRADE_POKEMON', self::UPGRADE_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SET_FAVORITE_POKEMON()
    {
        if (self::$SET_FAVORITE_POKEMON !== null) {
            return self::$SET_FAVORITE_POKEMON;
        }

        return self::$SET_FAVORITE_POKEMON = new self('SET_FAVORITE_POKEMON', self::SET_FAVORITE_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function NICKNAME_POKEMON()
    {
        if (self::$NICKNAME_POKEMON !== null) {
            return self::$NICKNAME_POKEMON;
        }

        return self::$NICKNAME_POKEMON = new self('NICKNAME_POKEMON', self::NICKNAME_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function EQUIP_BADGE()
    {
        if (self::$EQUIP_BADGE !== null) {
            return self::$EQUIP_BADGE;
        }

        return self::$EQUIP_BADGE = new self('EQUIP_BADGE', self::EQUIP_BADGE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SET_CONTACT_SETTINGS()
    {
        if (self::$SET_CONTACT_SETTINGS !== null) {
            return self::$SET_CONTACT_SETTINGS;
        }

        return self::$SET_CONTACT_SETTINGS = new self('SET_CONTACT_SETTINGS', self::SET_CONTACT_SETTINGS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SET_BUDDY_POKEMON()
    {
        if (self::$SET_BUDDY_POKEMON !== null) {
            return self::$SET_BUDDY_POKEMON;
        }

        return self::$SET_BUDDY_POKEMON = new self('SET_BUDDY_POKEMON', self::SET_BUDDY_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_BUDDY_WALKED()
    {
        if (self::$GET_BUDDY_WALKED !== null) {
            return self::$GET_BUDDY_WALKED;
        }

        return self::$GET_BUDDY_WALKED = new self('GET_BUDDY_WALKED', self::GET_BUDDY_WALKED_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function USE_ITEM_ENCOUNTER()
    {
        if (self::$USE_ITEM_ENCOUNTER !== null) {
            return self::$USE_ITEM_ENCOUNTER;
        }

        return self::$USE_ITEM_ENCOUNTER = new self('USE_ITEM_ENCOUNTER', self::USE_ITEM_ENCOUNTER_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_ASSET_DIGEST()
    {
        if (self::$GET_ASSET_DIGEST !== null) {
            return self::$GET_ASSET_DIGEST;
        }

        return self::$GET_ASSET_DIGEST = new self('GET_ASSET_DIGEST', self::GET_ASSET_DIGEST_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function GET_DOWNLOAD_URLS()
    {
        if (self::$GET_DOWNLOAD_URLS !== null) {
            return self::$GET_DOWNLOAD_URLS;
        }

        return self::$GET_DOWNLOAD_URLS = new self('GET_DOWNLOAD_URLS', self::GET_DOWNLOAD_URLS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function CLAIM_CODENAME()
    {
        if (self::$CLAIM_CODENAME !== null) {
            return self::$CLAIM_CODENAME;
        }

        return self::$CLAIM_CODENAME = new self('CLAIM_CODENAME', self::CLAIM_CODENAME_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SET_AVATAR()
    {
        if (self::$SET_AVATAR !== null) {
            return self::$SET_AVATAR;
        }

        return self::$SET_AVATAR = new self('SET_AVATAR', self::SET_AVATAR_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SET_PLAYER_TEAM()
    {
        if (self::$SET_PLAYER_TEAM !== null) {
            return self::$SET_PLAYER_TEAM;
        }

        return self::$SET_PLAYER_TEAM = new self('SET_PLAYER_TEAM', self::SET_PLAYER_TEAM_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function MARK_TUTORIAL_COMPLETE()
    {
        if (self::$MARK_TUTORIAL_COMPLETE !== null) {
            return self::$MARK_TUTORIAL_COMPLETE;
        }

        return self::$MARK_TUTORIAL_COMPLETE = new self('MARK_TUTORIAL_COMPLETE', self::MARK_TUTORIAL_COMPLETE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function CHECK_CHALLENGE()
    {
        if (self::$CHECK_CHALLENGE !== null) {
            return self::$CHECK_CHALLENGE;
        }

        return self::$CHECK_CHALLENGE = new self('CHECK_CHALLENGE', self::CHECK_CHALLENGE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function VERIFY_CHALLENGE()
    {
        if (self::$VERIFY_CHALLENGE !== null) {
            return self::$VERIFY_CHALLENGE;
        }

        return self::$VERIFY_CHALLENGE = new self('VERIFY_CHALLENGE', self::VERIFY_CHALLENGE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function ECHO()
    {
        if (self::$ECHO !== null) {
            return self::$ECHO;
        }

        return self::$ECHO = new self('ECHO', self::ECHO_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SFIDA_REGISTRATION()
    {
        if (self::$SFIDA_REGISTRATION !== null) {
            return self::$SFIDA_REGISTRATION;
        }

        return self::$SFIDA_REGISTRATION = new self('SFIDA_REGISTRATION', self::SFIDA_REGISTRATION_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SFIDA_ACTION_LOG()
    {
        if (self::$SFIDA_ACTION_LOG !== null) {
            return self::$SFIDA_ACTION_LOG;
        }

        return self::$SFIDA_ACTION_LOG = new self('SFIDA_ACTION_LOG', self::SFIDA_ACTION_LOG_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SFIDA_CERTIFICATION()
    {
        if (self::$SFIDA_CERTIFICATION !== null) {
            return self::$SFIDA_CERTIFICATION;
        }

        return self::$SFIDA_CERTIFICATION = new self('SFIDA_CERTIFICATION', self::SFIDA_CERTIFICATION_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SFIDA_UPDATE()
    {
        if (self::$SFIDA_UPDATE !== null) {
            return self::$SFIDA_UPDATE;
        }

        return self::$SFIDA_UPDATE = new self('SFIDA_UPDATE', self::SFIDA_UPDATE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SFIDA_ACTION()
    {
        if (self::$SFIDA_ACTION !== null) {
            return self::$SFIDA_ACTION;
        }

        return self::$SFIDA_ACTION = new self('SFIDA_ACTION', self::SFIDA_ACTION_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SFIDA_DOWSER()
    {
        if (self::$SFIDA_DOWSER !== null) {
            return self::$SFIDA_DOWSER;
        }

        return self::$SFIDA_DOWSER = new self('SFIDA_DOWSER', self::SFIDA_DOWSER_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SFIDA_CAPTURE()
    {
        if (self::$SFIDA_CAPTURE !== null) {
            return self::$SFIDA_CAPTURE;
        }

        return self::$SFIDA_CAPTURE = new self('SFIDA_CAPTURE', self::SFIDA_CAPTURE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function LIST_AVATAR_CUSTOMIZATIONS()
    {
        if (self::$LIST_AVATAR_CUSTOMIZATIONS !== null) {
            return self::$LIST_AVATAR_CUSTOMIZATIONS;
        }

        return self::$LIST_AVATAR_CUSTOMIZATIONS = new self('LIST_AVATAR_CUSTOMIZATIONS', self::LIST_AVATAR_CUSTOMIZATIONS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function SET_AVATAR_ITEM_AS_VIEWED()
    {
        if (self::$SET_AVATAR_ITEM_AS_VIEWED !== null) {
            return self::$SET_AVATAR_ITEM_AS_VIEWED;
        }

        return self::$SET_AVATAR_ITEM_AS_VIEWED = new self('SET_AVATAR_ITEM_AS_VIEWED', self::SET_AVATAR_ITEM_AS_VIEWED_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Requests\RequestType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::METHOD_UNSET();
            case 2: return self::GET_PLAYER();
            case 4: return self::GET_INVENTORY();
            case 5: return self::DOWNLOAD_SETTINGS();
            case 6: return self::DOWNLOAD_ITEM_TEMPLATES();
            case 7: return self::DOWNLOAD_REMOTE_CONFIG_VERSION();
            case 8: return self::REGISTER_BACKGROUND_DEVICE();
            case 101: return self::FORT_SEARCH();
            case 102: return self::ENCOUNTER();
            case 103: return self::CATCH_POKEMON();
            case 104: return self::FORT_DETAILS();
            case 106: return self::GET_MAP_OBJECTS();
            case 110: return self::FORT_DEPLOY_POKEMON();
            case 111: return self::FORT_RECALL_POKEMON();
            case 112: return self::RELEASE_POKEMON();
            case 113: return self::USE_ITEM_POTION();
            case 114: return self::USE_ITEM_CAPTURE();
            case 115: return self::USE_ITEM_FLEE();
            case 116: return self::USE_ITEM_REVIVE();
            case 121: return self::GET_PLAYER_PROFILE();
            case 125: return self::EVOLVE_POKEMON();
            case 126: return self::GET_HATCHED_EGGS();
            case 127: return self::ENCOUNTER_TUTORIAL_COMPLETE();
            case 128: return self::LEVEL_UP_REWARDS();
            case 129: return self::CHECK_AWARDED_BADGES();
            case 133: return self::USE_ITEM_GYM();
            case 134: return self::GET_GYM_DETAILS();
            case 135: return self::START_GYM_BATTLE();
            case 136: return self::ATTACK_GYM();
            case 137: return self::RECYCLE_INVENTORY_ITEM();
            case 138: return self::COLLECT_DAILY_BONUS();
            case 139: return self::USE_ITEM_XP_BOOST();
            case 140: return self::USE_ITEM_EGG_INCUBATOR();
            case 141: return self::USE_INCENSE();
            case 142: return self::GET_INCENSE_POKEMON();
            case 143: return self::INCENSE_ENCOUNTER();
            case 144: return self::ADD_FORT_MODIFIER();
            case 145: return self::DISK_ENCOUNTER();
            case 146: return self::COLLECT_DAILY_DEFENDER_BONUS();
            case 147: return self::UPGRADE_POKEMON();
            case 148: return self::SET_FAVORITE_POKEMON();
            case 149: return self::NICKNAME_POKEMON();
            case 150: return self::EQUIP_BADGE();
            case 151: return self::SET_CONTACT_SETTINGS();
            case 152: return self::SET_BUDDY_POKEMON();
            case 153: return self::GET_BUDDY_WALKED();
            case 154: return self::USE_ITEM_ENCOUNTER();
            case 300: return self::GET_ASSET_DIGEST();
            case 301: return self::GET_DOWNLOAD_URLS();
            case 403: return self::CLAIM_CODENAME();
            case 404: return self::SET_AVATAR();
            case 405: return self::SET_PLAYER_TEAM();
            case 406: return self::MARK_TUTORIAL_COMPLETE();
            case 600: return self::CHECK_CHALLENGE();
            case 601: return self::VERIFY_CHALLENGE();
            case 666: return self::ECHO();
            case 800: return self::SFIDA_REGISTRATION();
            case 801: return self::SFIDA_ACTION_LOG();
            case 802: return self::SFIDA_CERTIFICATION();
            case 803: return self::SFIDA_UPDATE();
            case 804: return self::SFIDA_ACTION();
            case 805: return self::SFIDA_DOWSER();
            case 806: return self::SFIDA_CAPTURE();
            case 807: return self::LIST_AVATAR_CUSTOMIZATIONS();
            case 808: return self::SET_AVATAR_ITEM_AS_VIEWED();
            default: return null;
        }
    }


}

