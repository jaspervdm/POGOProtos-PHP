<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Player/PlayerPublicProfile.proto
 */


namespace POGOProtos\Data\Player;

/**
 * Protobuf message : POGOProtos.Data.Player.PlayerPublicProfile
 */
class PlayerPublicProfile extends \Protobuf\AbstractMessage
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
     * name optional string = 1
     *
     * @var string
     */
    protected $name = null;

    /**
     * level optional int32 = 2
     *
     * @var int
     */
    protected $level = null;

    /**
     * avatar optional message = 3
     *
     * @var \POGOProtos\Data\Player\PlayerAvatar
     */
    protected $avatar = null;

    /**
     * team_color optional enum = 4
     *
     * @var \POGOProtos\Enums\TeamColor
     */
    protected $team_color = null;

    /**
     * battles_won optional int32 = 5
     *
     * @var int
     */
    protected $battles_won = null;

    /**
     * km_walked optional float = 6
     *
     * @var float
     */
    protected $km_walked = null;

    /**
     * caught_pokemon optional int32 = 7
     *
     * @var int
     */
    protected $caught_pokemon = null;

    /**
     * gym_badge_type optional enum = 8
     *
     * @var \POGOProtos\Enums\GymBadgeType
     */
    protected $gym_badge_type = null;

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value = null)
    {
        $this->name = $value;
    }

    /**
     * Check if 'level' has a value
     *
     * @return bool
     */
    public function hasLevel()
    {
        return $this->level !== null;
    }

    /**
     * Get 'level' value
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set 'level' value
     *
     * @param int $value
     */
    public function setLevel($value = null)
    {
        $this->level = $value;
    }

    /**
     * Check if 'avatar' has a value
     *
     * @return bool
     */
    public function hasAvatar()
    {
        return $this->avatar !== null;
    }

    /**
     * Get 'avatar' value
     *
     * @return \POGOProtos\Data\Player\PlayerAvatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set 'avatar' value
     *
     * @param \POGOProtos\Data\Player\PlayerAvatar $value
     */
    public function setAvatar(\POGOProtos\Data\Player\PlayerAvatar $value = null)
    {
        $this->avatar = $value;
    }

    /**
     * Check if 'team_color' has a value
     *
     * @return bool
     */
    public function hasTeamColor()
    {
        return $this->team_color !== null;
    }

    /**
     * Get 'team_color' value
     *
     * @return \POGOProtos\Enums\TeamColor
     */
    public function getTeamColor()
    {
        return $this->team_color;
    }

    /**
     * Set 'team_color' value
     *
     * @param \POGOProtos\Enums\TeamColor $value
     */
    public function setTeamColor(\POGOProtos\Enums\TeamColor $value = null)
    {
        $this->team_color = $value;
    }

    /**
     * Check if 'battles_won' has a value
     *
     * @return bool
     */
    public function hasBattlesWon()
    {
        return $this->battles_won !== null;
    }

    /**
     * Get 'battles_won' value
     *
     * @return int
     */
    public function getBattlesWon()
    {
        return $this->battles_won;
    }

    /**
     * Set 'battles_won' value
     *
     * @param int $value
     */
    public function setBattlesWon($value = null)
    {
        $this->battles_won = $value;
    }

    /**
     * Check if 'km_walked' has a value
     *
     * @return bool
     */
    public function hasKmWalked()
    {
        return $this->km_walked !== null;
    }

    /**
     * Get 'km_walked' value
     *
     * @return float
     */
    public function getKmWalked()
    {
        return $this->km_walked;
    }

    /**
     * Set 'km_walked' value
     *
     * @param float $value
     */
    public function setKmWalked($value = null)
    {
        $this->km_walked = $value;
    }

    /**
     * Check if 'caught_pokemon' has a value
     *
     * @return bool
     */
    public function hasCaughtPokemon()
    {
        return $this->caught_pokemon !== null;
    }

    /**
     * Get 'caught_pokemon' value
     *
     * @return int
     */
    public function getCaughtPokemon()
    {
        return $this->caught_pokemon;
    }

    /**
     * Set 'caught_pokemon' value
     *
     * @param int $value
     */
    public function setCaughtPokemon($value = null)
    {
        $this->caught_pokemon = $value;
    }

    /**
     * Check if 'gym_badge_type' has a value
     *
     * @return bool
     */
    public function hasGymBadgeType()
    {
        return $this->gym_badge_type !== null;
    }

    /**
     * Get 'gym_badge_type' value
     *
     * @return \POGOProtos\Enums\GymBadgeType
     */
    public function getGymBadgeType()
    {
        return $this->gym_badge_type;
    }

    /**
     * Set 'gym_badge_type' value
     *
     * @param \POGOProtos\Enums\GymBadgeType $value
     */
    public function setGymBadgeType(\POGOProtos\Enums\GymBadgeType $value = null)
    {
        $this->gym_badge_type = $value;
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
            'name' => null,
            'level' => null,
            'avatar' => null,
            'team_color' => null,
            'battles_won' => null,
            'km_walked' => null,
            'caught_pokemon' => null,
            'gym_badge_type' => null
        ], $values);

        $message->setName($values['name']);
        $message->setLevel($values['level']);
        $message->setAvatar($values['avatar']);
        $message->setTeamColor($values['team_color']);
        $message->setBattlesWon($values['battles_won']);
        $message->setKmWalked($values['km_walked']);
        $message->setCaughtPokemon($values['caught_pokemon']);
        $message->setGymBadgeType($values['gym_badge_type']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PlayerPublicProfile',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'level',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'avatar',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.PlayerAvatar'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'team_color',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.TeamColor'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'battles_won',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'km_walked',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'caught_pokemon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'gym_badge_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.GymBadgeType'
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

        if ($this->name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->name);
        }

        if ($this->level !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->level);
        }

        if ($this->avatar !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->avatar->serializedSize($sizeContext));
            $this->avatar->writeTo($context);
        }

        if ($this->team_color !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->team_color->value());
        }

        if ($this->battles_won !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->battles_won);
        }

        if ($this->km_walked !== null) {
            $writer->writeVarint($stream, 53);
            $writer->writeFloat($stream, $this->km_walked);
        }

        if ($this->caught_pokemon !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->caught_pokemon);
        }

        if ($this->gym_badge_type !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->gym_badge_type->value());
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->level = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\PlayerAvatar();

                $this->avatar = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->team_color = \POGOProtos\Enums\TeamColor::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->battles_won = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->km_walked = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->caught_pokemon = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->gym_badge_type = \POGOProtos\Enums\GymBadgeType::valueOf($reader->readVarint($stream));

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

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->level !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->level);
        }

        if ($this->avatar !== null) {
            $innerSize = $this->avatar->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->team_color !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->team_color->value());
        }

        if ($this->battles_won !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->battles_won);
        }

        if ($this->km_walked !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->caught_pokemon !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->caught_pokemon);
        }

        if ($this->gym_badge_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gym_badge_type->value());
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
        $this->name = null;
        $this->level = null;
        $this->avatar = null;
        $this->team_color = null;
        $this->battles_won = null;
        $this->km_walked = null;
        $this->caught_pokemon = null;
        $this->gym_badge_type = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Player\PlayerPublicProfile) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->name = ($message->name !== null) ? $message->name : $this->name;
        $this->level = ($message->level !== null) ? $message->level : $this->level;
        $this->avatar = ($message->avatar !== null) ? $message->avatar : $this->avatar;
        $this->team_color = ($message->team_color !== null) ? $message->team_color : $this->team_color;
        $this->battles_won = ($message->battles_won !== null) ? $message->battles_won : $this->battles_won;
        $this->km_walked = ($message->km_walked !== null) ? $message->km_walked : $this->km_walked;
        $this->caught_pokemon = ($message->caught_pokemon !== null) ? $message->caught_pokemon : $this->caught_pokemon;
        $this->gym_badge_type = ($message->gym_badge_type !== null) ? $message->gym_badge_type : $this->gym_badge_type;
    }


}

