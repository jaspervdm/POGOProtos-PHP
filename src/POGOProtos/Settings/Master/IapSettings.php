<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/Master/IapSettings.proto
 */


namespace POGOProtos\Settings\Master;

/**
 * Protobuf message : POGOProtos.Settings.Master.IapSettings
 */
class IapSettings extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * daily_bonus_coins optional int32 = 1
     *
     * @var int
     */
    protected $daily_bonus_coins = null;

    /**
     * daily_defender_bonus_per_pokemon repeated int32 = 2
     *
     * @var \Protobuf\Collection
     */
    protected $daily_defender_bonus_per_pokemon = null;

    /**
     * daily_defender_bonus_max_defenders optional int32 = 3
     *
     * @var int
     */
    protected $daily_defender_bonus_max_defenders = null;

    /**
     * daily_defender_bonus_currency repeated string = 4
     *
     * @var \Protobuf\Collection
     */
    protected $daily_defender_bonus_currency = null;

    /**
     * min_time_between_claims_ms optional int64 = 5
     *
     * @var int
     */
    protected $min_time_between_claims_ms = null;

    /**
     * daily_bonus_enabled optional bool = 6
     *
     * @var bool
     */
    protected $daily_bonus_enabled = null;

    /**
     * daily_defender_bonus_enabled optional bool = 7
     *
     * @var bool
     */
    protected $daily_defender_bonus_enabled = null;

    /**
     * Check if 'daily_bonus_coins' has a value
     *
     * @return bool
     */
    public function hasDailyBonusCoins()
    {
        return $this->daily_bonus_coins !== null;
    }

    /**
     * Get 'daily_bonus_coins' value
     *
     * @return int
     */
    public function getDailyBonusCoins()
    {
        return $this->daily_bonus_coins;
    }

    /**
     * Set 'daily_bonus_coins' value
     *
     * @param int $value
     */
    public function setDailyBonusCoins($value = null)
    {
        $this->daily_bonus_coins = $value;
    }

    /**
     * Check if 'daily_defender_bonus_per_pokemon' has a value
     *
     * @return bool
     */
    public function hasDailyDefenderBonusPerPokemonList()
    {
        return $this->daily_defender_bonus_per_pokemon !== null;
    }

    /**
     * Get 'daily_defender_bonus_per_pokemon' value
     *
     * @return \Protobuf\Collection
     */
    public function getDailyDefenderBonusPerPokemonList()
    {
        return $this->daily_defender_bonus_per_pokemon;
    }

    /**
     * Set 'daily_defender_bonus_per_pokemon' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setDailyDefenderBonusPerPokemonList(\Protobuf\Collection $value = null)
    {
        $this->daily_defender_bonus_per_pokemon = $value;
    }

    /**
     * Add a new element to 'daily_defender_bonus_per_pokemon'
     *
     * @param int $value
     */
    public function addDailyDefenderBonusPerPokemon($value)
    {
        if ($this->daily_defender_bonus_per_pokemon === null) {
            $this->daily_defender_bonus_per_pokemon = new \Protobuf\ScalarCollection();
        }

        $this->daily_defender_bonus_per_pokemon->add($value);
    }

    /**
     * Check if 'daily_defender_bonus_max_defenders' has a value
     *
     * @return bool
     */
    public function hasDailyDefenderBonusMaxDefenders()
    {
        return $this->daily_defender_bonus_max_defenders !== null;
    }

    /**
     * Get 'daily_defender_bonus_max_defenders' value
     *
     * @return int
     */
    public function getDailyDefenderBonusMaxDefenders()
    {
        return $this->daily_defender_bonus_max_defenders;
    }

    /**
     * Set 'daily_defender_bonus_max_defenders' value
     *
     * @param int $value
     */
    public function setDailyDefenderBonusMaxDefenders($value = null)
    {
        $this->daily_defender_bonus_max_defenders = $value;
    }

    /**
     * Check if 'daily_defender_bonus_currency' has a value
     *
     * @return bool
     */
    public function hasDailyDefenderBonusCurrencyList()
    {
        return $this->daily_defender_bonus_currency !== null;
    }

    /**
     * Get 'daily_defender_bonus_currency' value
     *
     * @return \Protobuf\Collection
     */
    public function getDailyDefenderBonusCurrencyList()
    {
        return $this->daily_defender_bonus_currency;
    }

    /**
     * Set 'daily_defender_bonus_currency' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setDailyDefenderBonusCurrencyList(\Protobuf\Collection $value = null)
    {
        $this->daily_defender_bonus_currency = $value;
    }

    /**
     * Add a new element to 'daily_defender_bonus_currency'
     *
     * @param string $value
     */
    public function addDailyDefenderBonusCurrency($value)
    {
        if ($this->daily_defender_bonus_currency === null) {
            $this->daily_defender_bonus_currency = new \Protobuf\ScalarCollection();
        }

        $this->daily_defender_bonus_currency->add($value);
    }

    /**
     * Check if 'min_time_between_claims_ms' has a value
     *
     * @return bool
     */
    public function hasMinTimeBetweenClaimsMs()
    {
        return $this->min_time_between_claims_ms !== null;
    }

    /**
     * Get 'min_time_between_claims_ms' value
     *
     * @return int
     */
    public function getMinTimeBetweenClaimsMs()
    {
        return $this->min_time_between_claims_ms;
    }

    /**
     * Set 'min_time_between_claims_ms' value
     *
     * @param int $value
     */
    public function setMinTimeBetweenClaimsMs($value = null)
    {
        $this->min_time_between_claims_ms = $value;
    }

    /**
     * Check if 'daily_bonus_enabled' has a value
     *
     * @return bool
     */
    public function hasDailyBonusEnabled()
    {
        return $this->daily_bonus_enabled !== null;
    }

    /**
     * Get 'daily_bonus_enabled' value
     *
     * @return bool
     */
    public function getDailyBonusEnabled()
    {
        return $this->daily_bonus_enabled;
    }

    /**
     * Set 'daily_bonus_enabled' value
     *
     * @param bool $value
     */
    public function setDailyBonusEnabled($value = null)
    {
        $this->daily_bonus_enabled = $value;
    }

    /**
     * Check if 'daily_defender_bonus_enabled' has a value
     *
     * @return bool
     */
    public function hasDailyDefenderBonusEnabled()
    {
        return $this->daily_defender_bonus_enabled !== null;
    }

    /**
     * Get 'daily_defender_bonus_enabled' value
     *
     * @return bool
     */
    public function getDailyDefenderBonusEnabled()
    {
        return $this->daily_defender_bonus_enabled;
    }

    /**
     * Set 'daily_defender_bonus_enabled' value
     *
     * @param bool $value
     */
    public function setDailyDefenderBonusEnabled($value = null)
    {
        $this->daily_defender_bonus_enabled = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'daily_bonus_coins' => null,
            'daily_defender_bonus_per_pokemon' => [],
            'daily_defender_bonus_max_defenders' => null,
            'daily_defender_bonus_currency' => [],
            'min_time_between_claims_ms' => null,
            'daily_bonus_enabled' => null,
            'daily_defender_bonus_enabled' => null
        ], $values);

        $message->setDailyBonusCoins($values['daily_bonus_coins']);
        $message->setDailyDefenderBonusMaxDefenders($values['daily_defender_bonus_max_defenders']);
        $message->setMinTimeBetweenClaimsMs($values['min_time_between_claims_ms']);
        $message->setDailyBonusEnabled($values['daily_bonus_enabled']);
        $message->setDailyDefenderBonusEnabled($values['daily_defender_bonus_enabled']);

        foreach ($values['daily_defender_bonus_per_pokemon'] as $item) {
            $message->addDailyDefenderBonusPerPokemon($item);
        }

        foreach ($values['daily_defender_bonus_currency'] as $item) {
            $message->addDailyDefenderBonusCurrency($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'IapSettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'daily_bonus_coins',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'daily_defender_bonus_per_pokemon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'daily_defender_bonus_max_defenders',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'daily_defender_bonus_currency',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'min_time_between_claims_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'daily_bonus_enabled',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'daily_defender_bonus_enabled',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->daily_bonus_coins !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->daily_bonus_coins);
        }

        if ($this->daily_defender_bonus_per_pokemon !== null) {
            foreach ($this->daily_defender_bonus_per_pokemon as $val) {
                $writer->writeVarint($stream, 16);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->daily_defender_bonus_max_defenders !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->daily_defender_bonus_max_defenders);
        }

        if ($this->daily_defender_bonus_currency !== null) {
            foreach ($this->daily_defender_bonus_currency as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->min_time_between_claims_ms !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->min_time_between_claims_ms);
        }

        if ($this->daily_bonus_enabled !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->daily_bonus_enabled);
        }

        if ($this->daily_defender_bonus_enabled !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->daily_defender_bonus_enabled);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->daily_bonus_coins = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->daily_defender_bonus_per_pokemon === null) {
                    $this->daily_defender_bonus_per_pokemon = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->daily_defender_bonus_per_pokemon->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->daily_defender_bonus_max_defenders = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->daily_defender_bonus_currency === null) {
                    $this->daily_defender_bonus_currency = new \Protobuf\ScalarCollection();
                }

                $this->daily_defender_bonus_currency->add($reader->readString($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->min_time_between_claims_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->daily_bonus_enabled = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->daily_defender_bonus_enabled = $reader->readBool($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->daily_bonus_coins !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->daily_bonus_coins);
        }

        if ($this->daily_defender_bonus_per_pokemon !== null) {
            foreach ($this->daily_defender_bonus_per_pokemon as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->daily_defender_bonus_max_defenders !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->daily_defender_bonus_max_defenders);
        }

        if ($this->daily_defender_bonus_currency !== null) {
            foreach ($this->daily_defender_bonus_currency as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->min_time_between_claims_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->min_time_between_claims_ms);
        }

        if ($this->daily_bonus_enabled !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->daily_defender_bonus_enabled !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->daily_bonus_coins = null;
        $this->daily_defender_bonus_per_pokemon = null;
        $this->daily_defender_bonus_max_defenders = null;
        $this->daily_defender_bonus_currency = null;
        $this->min_time_between_claims_ms = null;
        $this->daily_bonus_enabled = null;
        $this->daily_defender_bonus_enabled = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Settings\Master\IapSettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->daily_bonus_coins = ($message->daily_bonus_coins !== null) ? $message->daily_bonus_coins : $this->daily_bonus_coins;
        $this->daily_defender_bonus_per_pokemon = ($message->daily_defender_bonus_per_pokemon !== null) ? $message->daily_defender_bonus_per_pokemon : $this->daily_defender_bonus_per_pokemon;
        $this->daily_defender_bonus_max_defenders = ($message->daily_defender_bonus_max_defenders !== null) ? $message->daily_defender_bonus_max_defenders : $this->daily_defender_bonus_max_defenders;
        $this->daily_defender_bonus_currency = ($message->daily_defender_bonus_currency !== null) ? $message->daily_defender_bonus_currency : $this->daily_defender_bonus_currency;
        $this->min_time_between_claims_ms = ($message->min_time_between_claims_ms !== null) ? $message->min_time_between_claims_ms : $this->min_time_between_claims_ms;
        $this->daily_bonus_enabled = ($message->daily_bonus_enabled !== null) ? $message->daily_bonus_enabled : $this->daily_bonus_enabled;
        $this->daily_defender_bonus_enabled = ($message->daily_defender_bonus_enabled !== null) ? $message->daily_defender_bonus_enabled : $this->daily_defender_bonus_enabled;
    }


}

