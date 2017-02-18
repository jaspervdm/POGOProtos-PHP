<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Enums/Filter.proto
 */


namespace POGOProtos\Enums;

/**
 * Protobuf enum : POGOProtos.Enums.Filter
 */
class Filter extends \Protobuf\Enum
{

    /**
     * UNSET_FILTER = 0
     */
    const UNSET_FILTER_VALUE = 0;

    /**
     * ALL = 1
     */
    const ALL_VALUE = 1;

    /**
     * DEFAULT = 2
     */
    const DEFAULT_VALUE = 2;

    /**
     * OWNED = 3
     */
    const OWNED_VALUE = 3;

    /**
     * FEATURED = 4
     */
    const FEATURED_VALUE = 4;

    /**
     * PURCHASABLE = 5
     */
    const PURCHASABLE_VALUE = 5;

    /**
     * UNLOCKABLE = 6
     */
    const UNLOCKABLE_VALUE = 6;

    /**
     * @var \POGOProtos\Enums\Filter
     */
    protected static $UNSET_FILTER = null;

    /**
     * @var \POGOProtos\Enums\Filter
     */
    protected static $ALL = null;

    /**
     * @var \POGOProtos\Enums\Filter
     */
    protected static $DEFAULT = null;

    /**
     * @var \POGOProtos\Enums\Filter
     */
    protected static $OWNED = null;

    /**
     * @var \POGOProtos\Enums\Filter
     */
    protected static $FEATURED = null;

    /**
     * @var \POGOProtos\Enums\Filter
     */
    protected static $PURCHASABLE = null;

    /**
     * @var \POGOProtos\Enums\Filter
     */
    protected static $UNLOCKABLE = null;

    /**
     * @return \POGOProtos\Enums\Filter
     */
    public static function UNSET_FILTER()
    {
        if (self::$UNSET_FILTER !== null) {
            return self::$UNSET_FILTER;
        }

        return self::$UNSET_FILTER = new self('UNSET_FILTER', self::UNSET_FILTER_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Filter
     */
    public static function ALL()
    {
        if (self::$ALL !== null) {
            return self::$ALL;
        }

        return self::$ALL = new self('ALL', self::ALL_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Filter
     */
    public static function DEFAULT()
    {
        if (self::$DEFAULT !== null) {
            return self::$DEFAULT;
        }

        return self::$DEFAULT = new self('DEFAULT', self::DEFAULT_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Filter
     */
    public static function OWNED()
    {
        if (self::$OWNED !== null) {
            return self::$OWNED;
        }

        return self::$OWNED = new self('OWNED', self::OWNED_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Filter
     */
    public static function FEATURED()
    {
        if (self::$FEATURED !== null) {
            return self::$FEATURED;
        }

        return self::$FEATURED = new self('FEATURED', self::FEATURED_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Filter
     */
    public static function PURCHASABLE()
    {
        if (self::$PURCHASABLE !== null) {
            return self::$PURCHASABLE;
        }

        return self::$PURCHASABLE = new self('PURCHASABLE', self::PURCHASABLE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Filter
     */
    public static function UNLOCKABLE()
    {
        if (self::$UNLOCKABLE !== null) {
            return self::$UNLOCKABLE;
        }

        return self::$UNLOCKABLE = new self('UNLOCKABLE', self::UNLOCKABLE_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Enums\Filter
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET_FILTER();
            case 1: return self::ALL();
            case 2: return self::DEFAULT();
            case 3: return self::OWNED();
            case 4: return self::FEATURED();
            case 5: return self::PURCHASABLE();
            case 6: return self::UNLOCKABLE();
            default: return null;
        }
    }


}

