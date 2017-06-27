<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Map/Fort/GymEvent.proto
 */


namespace POGOProtos\Map\Fort;

/**
 * Protobuf message : POGOProtos.Map.Fort.GymEvent
 */
class GymEvent extends \Protobuf\AbstractMessage
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
     * trainer optional string = 1
     *
     * @var string
     */
    protected $trainer = null;

    /**
     * timestamp_ms optional int64 = 2
     *
     * @var int
     */
    protected $timestamp_ms = null;

    /**
     * event optional enum = 3
     *
     * @var \POGOProtos\Map\Fort\GymEvent\Event
     */
    protected $event = null;

    /**
     * pokedex_id optional int32 = 4
     *
     * @var int
     */
    protected $pokedex_id = null;

    /**
     * pokemon_id optional fixed64 = 5
     *
     * @var int
     */
    protected $pokemon_id = null;

    /**
     * Check if 'trainer' has a value
     *
     * @return bool
     */
    public function hasTrainer()
    {
        return $this->trainer !== null;
    }

    /**
     * Get 'trainer' value
     *
     * @return string
     */
    public function getTrainer()
    {
        return $this->trainer;
    }

    /**
     * Set 'trainer' value
     *
     * @param string $value
     */
    public function setTrainer($value = null)
    {
        $this->trainer = $value;
    }

    /**
     * Check if 'timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasTimestampMs()
    {
        return $this->timestamp_ms !== null;
    }

    /**
     * Get 'timestamp_ms' value
     *
     * @return int
     */
    public function getTimestampMs()
    {
        return $this->timestamp_ms;
    }

    /**
     * Set 'timestamp_ms' value
     *
     * @param int $value
     */
    public function setTimestampMs($value = null)
    {
        $this->timestamp_ms = $value;
    }

    /**
     * Check if 'event' has a value
     *
     * @return bool
     */
    public function hasEvent()
    {
        return $this->event !== null;
    }

    /**
     * Get 'event' value
     *
     * @return \POGOProtos\Map\Fort\GymEvent\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set 'event' value
     *
     * @param \POGOProtos\Map\Fort\GymEvent\Event $value
     */
    public function setEvent(\POGOProtos\Map\Fort\GymEvent\Event $value = null)
    {
        $this->event = $value;
    }

    /**
     * Check if 'pokedex_id' has a value
     *
     * @return bool
     */
    public function hasPokedexId()
    {
        return $this->pokedex_id !== null;
    }

    /**
     * Get 'pokedex_id' value
     *
     * @return int
     */
    public function getPokedexId()
    {
        return $this->pokedex_id;
    }

    /**
     * Set 'pokedex_id' value
     *
     * @param int $value
     */
    public function setPokedexId($value = null)
    {
        $this->pokedex_id = $value;
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
            'trainer' => null,
            'timestamp_ms' => null,
            'event' => null,
            'pokedex_id' => null,
            'pokemon_id' => null
        ], $values);

        $message->setTrainer($values['trainer']);
        $message->setTimestampMs($values['timestamp_ms']);
        $message->setEvent($values['event']);
        $message->setPokedexId($values['pokedex_id']);
        $message->setPokemonId($values['pokemon_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GymEvent',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'trainer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'event',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Map.Fort.GymEvent.Event'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'pokedex_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
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

        if ($this->trainer !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->trainer);
        }

        if ($this->timestamp_ms !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->timestamp_ms);
        }

        if ($this->event !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->event->value());
        }

        if ($this->pokedex_id !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->pokedex_id);
        }

        if ($this->pokemon_id !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeFixed64($stream, $this->pokemon_id);
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

                $this->trainer = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->event = \POGOProtos\Map\Fort\GymEvent\Event::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->pokedex_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->pokemon_id = $reader->readFixed64($stream);

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

        if ($this->trainer !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->trainer);
        }

        if ($this->timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->timestamp_ms);
        }

        if ($this->event !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->event->value());
        }

        if ($this->pokedex_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokedex_id);
        }

        if ($this->pokemon_id !== null) {
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
        $this->trainer = null;
        $this->timestamp_ms = null;
        $this->event = null;
        $this->pokedex_id = null;
        $this->pokemon_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Map\Fort\GymEvent) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->trainer = ($message->trainer !== null) ? $message->trainer : $this->trainer;
        $this->timestamp_ms = ($message->timestamp_ms !== null) ? $message->timestamp_ms : $this->timestamp_ms;
        $this->event = ($message->event !== null) ? $message->event : $this->event;
        $this->pokedex_id = ($message->pokedex_id !== null) ? $message->pokedex_id : $this->pokedex_id;
        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
    }


}

