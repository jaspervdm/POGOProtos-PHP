<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Requests/Messages/GymFeedPokemonMessage.proto
 */


namespace POGOProtos\Networking\Requests\Messages;

/**
 * Protobuf message : POGOProtos.Networking.Requests.Messages.GymFeedPokemonMessage
 */
class GymFeedPokemonMessage extends \Protobuf\AbstractMessage
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
     * item optional enum = 1
     *
     * @var \POGOProtos\Inventory\Item\ItemId
     */
    protected $item = null;

    /**
     * starting_quantity optional int32 = 2
     *
     * @var int
     */
    protected $starting_quantity = null;

    /**
     * gym_id optional string = 3
     *
     * @var string
     */
    protected $gym_id = null;

    /**
     * pokemon_id optional fixed64 = 4
     *
     * @var int
     */
    protected $pokemon_id = null;

    /**
     * player_lat_degrees optional double = 5
     *
     * @var float
     */
    protected $player_lat_degrees = null;

    /**
     * player_lng_degrees optional double = 6
     *
     * @var float
     */
    protected $player_lng_degrees = null;

    /**
     * Check if 'item' has a value
     *
     * @return bool
     */
    public function hasItem()
    {
        return $this->item !== null;
    }

    /**
     * Get 'item' value
     *
     * @return \POGOProtos\Inventory\Item\ItemId
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set 'item' value
     *
     * @param \POGOProtos\Inventory\Item\ItemId $value
     */
    public function setItem(\POGOProtos\Inventory\Item\ItemId $value = null)
    {
        $this->item = $value;
    }

    /**
     * Check if 'starting_quantity' has a value
     *
     * @return bool
     */
    public function hasStartingQuantity()
    {
        return $this->starting_quantity !== null;
    }

    /**
     * Get 'starting_quantity' value
     *
     * @return int
     */
    public function getStartingQuantity()
    {
        return $this->starting_quantity;
    }

    /**
     * Set 'starting_quantity' value
     *
     * @param int $value
     */
    public function setStartingQuantity($value = null)
    {
        $this->starting_quantity = $value;
    }

    /**
     * Check if 'gym_id' has a value
     *
     * @return bool
     */
    public function hasGymId()
    {
        return $this->gym_id !== null;
    }

    /**
     * Get 'gym_id' value
     *
     * @return string
     */
    public function getGymId()
    {
        return $this->gym_id;
    }

    /**
     * Set 'gym_id' value
     *
     * @param string $value
     */
    public function setGymId($value = null)
    {
        $this->gym_id = $value;
    }

    /**
     * Check if 'pokemon_id' has a value
     *
     * @return bool
     */
    public function hasPokemonId()
    {
        return $this->pokemon_id !== null;
    }

    /**
     * Get 'pokemon_id' value
     *
     * @return int
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Set 'pokemon_id' value
     *
     * @param int $value
     */
    public function setPokemonId($value = null)
    {
        $this->pokemon_id = $value;
    }

    /**
     * Check if 'player_lat_degrees' has a value
     *
     * @return bool
     */
    public function hasPlayerLatDegrees()
    {
        return $this->player_lat_degrees !== null;
    }

    /**
     * Get 'player_lat_degrees' value
     *
     * @return float
     */
    public function getPlayerLatDegrees()
    {
        return $this->player_lat_degrees;
    }

    /**
     * Set 'player_lat_degrees' value
     *
     * @param float $value
     */
    public function setPlayerLatDegrees($value = null)
    {
        $this->player_lat_degrees = $value;
    }

    /**
     * Check if 'player_lng_degrees' has a value
     *
     * @return bool
     */
    public function hasPlayerLngDegrees()
    {
        return $this->player_lng_degrees !== null;
    }

    /**
     * Get 'player_lng_degrees' value
     *
     * @return float
     */
    public function getPlayerLngDegrees()
    {
        return $this->player_lng_degrees;
    }

    /**
     * Set 'player_lng_degrees' value
     *
     * @param float $value
     */
    public function setPlayerLngDegrees($value = null)
    {
        $this->player_lng_degrees = $value;
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
            'item' => null,
            'starting_quantity' => null,
            'gym_id' => null,
            'pokemon_id' => null,
            'player_lat_degrees' => null,
            'player_lng_degrees' => null
        ], $values);

        $message->setItem($values['item']);
        $message->setStartingQuantity($values['starting_quantity']);
        $message->setGymId($values['gym_id']);
        $message->setPokemonId($values['pokemon_id']);
        $message->setPlayerLatDegrees($values['player_lat_degrees']);
        $message->setPlayerLngDegrees($values['player_lng_degrees']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GymFeedPokemonMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'item',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'starting_quantity',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'gym_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'player_lat_degrees',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'player_lng_degrees',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
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

        if ($this->item !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->item->value());
        }

        if ($this->starting_quantity !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->starting_quantity);
        }

        if ($this->gym_id !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->gym_id);
        }

        if ($this->pokemon_id !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeFixed64($stream, $this->pokemon_id);
        }

        if ($this->player_lat_degrees !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeDouble($stream, $this->player_lat_degrees);
        }

        if ($this->player_lng_degrees !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeDouble($stream, $this->player_lng_degrees);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->item = \POGOProtos\Inventory\Item\ItemId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->starting_quantity = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->gym_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->pokemon_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->player_lat_degrees = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->player_lng_degrees = $reader->readDouble($stream);

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

        if ($this->item !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->item->value());
        }

        if ($this->starting_quantity !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->starting_quantity);
        }

        if ($this->gym_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->gym_id);
        }

        if ($this->pokemon_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->player_lat_degrees !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->player_lng_degrees !== null) {
            $size += 1;
            $size += 8;
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
        $this->item = null;
        $this->starting_quantity = null;
        $this->gym_id = null;
        $this->pokemon_id = null;
        $this->player_lat_degrees = null;
        $this->player_lng_degrees = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Requests\Messages\GymFeedPokemonMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->item = ($message->item !== null) ? $message->item : $this->item;
        $this->starting_quantity = ($message->starting_quantity !== null) ? $message->starting_quantity : $this->starting_quantity;
        $this->gym_id = ($message->gym_id !== null) ? $message->gym_id : $this->gym_id;
        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
        $this->player_lat_degrees = ($message->player_lat_degrees !== null) ? $message->player_lat_degrees : $this->player_lat_degrees;
        $this->player_lng_degrees = ($message->player_lng_degrees !== null) ? $message->player_lng_degrees : $this->player_lng_degrees;
    }


}

