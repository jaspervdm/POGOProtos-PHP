<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Raid/Raid.proto
 */


namespace POGOProtos\Data\Raid;

/**
 * Protobuf message : POGOProtos.Data.Raid.Raid
 */
class Raid extends \Protobuf\AbstractMessage
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
     * raid_seed optional int64 = 1
     *
     * @var int
     */
    protected $raid_seed = null;

    /**
     * started_ms optional int64 = 2
     *
     * @var int
     */
    protected $started_ms = null;

    /**
     * completed_ms optional int64 = 3
     *
     * @var int
     */
    protected $completed_ms = null;

    /**
     * encounter_pokemon_id optional enum = 4
     *
     * @var \POGOProtos\Enums\PokemonId
     */
    protected $encounter_pokemon_id = null;

    /**
     * completed_battle optional bool = 5
     *
     * @var bool
     */
    protected $completed_battle = null;

    /**
     * received_rewards optional bool = 6
     *
     * @var bool
     */
    protected $received_rewards = null;

    /**
     * finished_encounter optional bool = 7
     *
     * @var bool
     */
    protected $finished_encounter = null;

    /**
     * Check if 'raid_seed' has a value
     *
     * @return bool
     */
    public function hasRaidSeed()
    {
        return $this->raid_seed !== null;
    }

    /**
     * Get 'raid_seed' value
     *
     * @return int
     */
    public function getRaidSeed()
    {
        return $this->raid_seed;
    }

    /**
     * Set 'raid_seed' value
     *
     * @param int $value
     */
    public function setRaidSeed($value = null)
    {
        $this->raid_seed = $value;
    }

    /**
     * Check if 'started_ms' has a value
     *
     * @return bool
     */
    public function hasStartedMs()
    {
        return $this->started_ms !== null;
    }

    /**
     * Get 'started_ms' value
     *
     * @return int
     */
    public function getStartedMs()
    {
        return $this->started_ms;
    }

    /**
     * Set 'started_ms' value
     *
     * @param int $value
     */
    public function setStartedMs($value = null)
    {
        $this->started_ms = $value;
    }

    /**
     * Check if 'completed_ms' has a value
     *
     * @return bool
     */
    public function hasCompletedMs()
    {
        return $this->completed_ms !== null;
    }

    /**
     * Get 'completed_ms' value
     *
     * @return int
     */
    public function getCompletedMs()
    {
        return $this->completed_ms;
    }

    /**
     * Set 'completed_ms' value
     *
     * @param int $value
     */
    public function setCompletedMs($value = null)
    {
        $this->completed_ms = $value;
    }

    /**
     * Check if 'encounter_pokemon_id' has a value
     *
     * @return bool
     */
    public function hasEncounterPokemonId()
    {
        return $this->encounter_pokemon_id !== null;
    }

    /**
     * Get 'encounter_pokemon_id' value
     *
     * @return \POGOProtos\Enums\PokemonId
     */
    public function getEncounterPokemonId()
    {
        return $this->encounter_pokemon_id;
    }

    /**
     * Set 'encounter_pokemon_id' value
     *
     * @param \POGOProtos\Enums\PokemonId $value
     */
    public function setEncounterPokemonId(\POGOProtos\Enums\PokemonId $value = null)
    {
        $this->encounter_pokemon_id = $value;
    }

    /**
     * Check if 'completed_battle' has a value
     *
     * @return bool
     */
    public function hasCompletedBattle()
    {
        return $this->completed_battle !== null;
    }

    /**
     * Get 'completed_battle' value
     *
     * @return bool
     */
    public function getCompletedBattle()
    {
        return $this->completed_battle;
    }

    /**
     * Set 'completed_battle' value
     *
     * @param bool $value
     */
    public function setCompletedBattle($value = null)
    {
        $this->completed_battle = $value;
    }

    /**
     * Check if 'received_rewards' has a value
     *
     * @return bool
     */
    public function hasReceivedRewards()
    {
        return $this->received_rewards !== null;
    }

    /**
     * Get 'received_rewards' value
     *
     * @return bool
     */
    public function getReceivedRewards()
    {
        return $this->received_rewards;
    }

    /**
     * Set 'received_rewards' value
     *
     * @param bool $value
     */
    public function setReceivedRewards($value = null)
    {
        $this->received_rewards = $value;
    }

    /**
     * Check if 'finished_encounter' has a value
     *
     * @return bool
     */
    public function hasFinishedEncounter()
    {
        return $this->finished_encounter !== null;
    }

    /**
     * Get 'finished_encounter' value
     *
     * @return bool
     */
    public function getFinishedEncounter()
    {
        return $this->finished_encounter;
    }

    /**
     * Set 'finished_encounter' value
     *
     * @param bool $value
     */
    public function setFinishedEncounter($value = null)
    {
        $this->finished_encounter = $value;
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
            'raid_seed' => null,
            'started_ms' => null,
            'completed_ms' => null,
            'encounter_pokemon_id' => null,
            'completed_battle' => null,
            'received_rewards' => null,
            'finished_encounter' => null
        ], $values);

        $message->setRaidSeed($values['raid_seed']);
        $message->setStartedMs($values['started_ms']);
        $message->setCompletedMs($values['completed_ms']);
        $message->setEncounterPokemonId($values['encounter_pokemon_id']);
        $message->setCompletedBattle($values['completed_battle']);
        $message->setReceivedRewards($values['received_rewards']);
        $message->setFinishedEncounter($values['finished_encounter']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Raid',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'raid_seed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'started_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'completed_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'encounter_pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'completed_battle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'received_rewards',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'finished_encounter',
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

        if ($this->raid_seed !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->raid_seed);
        }

        if ($this->started_ms !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->started_ms);
        }

        if ($this->completed_ms !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->completed_ms);
        }

        if ($this->encounter_pokemon_id !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->encounter_pokemon_id->value());
        }

        if ($this->completed_battle !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->completed_battle);
        }

        if ($this->received_rewards !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->received_rewards);
        }

        if ($this->finished_encounter !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->finished_encounter);
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
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->raid_seed = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->started_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->completed_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->encounter_pokemon_id = \POGOProtos\Enums\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->completed_battle = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->received_rewards = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->finished_encounter = $reader->readBool($stream);

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

        if ($this->raid_seed !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->raid_seed);
        }

        if ($this->started_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->started_ms);
        }

        if ($this->completed_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->completed_ms);
        }

        if ($this->encounter_pokemon_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->encounter_pokemon_id->value());
        }

        if ($this->completed_battle !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->received_rewards !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->finished_encounter !== null) {
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
        $this->raid_seed = null;
        $this->started_ms = null;
        $this->completed_ms = null;
        $this->encounter_pokemon_id = null;
        $this->completed_battle = null;
        $this->received_rewards = null;
        $this->finished_encounter = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Raid\Raid) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->raid_seed = ($message->raid_seed !== null) ? $message->raid_seed : $this->raid_seed;
        $this->started_ms = ($message->started_ms !== null) ? $message->started_ms : $this->started_ms;
        $this->completed_ms = ($message->completed_ms !== null) ? $message->completed_ms : $this->completed_ms;
        $this->encounter_pokemon_id = ($message->encounter_pokemon_id !== null) ? $message->encounter_pokemon_id : $this->encounter_pokemon_id;
        $this->completed_battle = ($message->completed_battle !== null) ? $message->completed_battle : $this->completed_battle;
        $this->received_rewards = ($message->received_rewards !== null) ? $message->received_rewards : $this->received_rewards;
        $this->finished_encounter = ($message->finished_encounter !== null) ? $message->finished_encounter : $this->finished_encounter;
    }


}

