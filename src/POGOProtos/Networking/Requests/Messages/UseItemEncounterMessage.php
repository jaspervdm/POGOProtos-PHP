<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Requests/Messages/UseItemEncounterMessage.proto
 */


namespace POGOProtos\Networking\Requests\Messages;

/**
 * Protobuf message :
 * POGOProtos.Networking.Requests.Messages.UseItemEncounterMessage
 */
class UseItemEncounterMessage extends \Protobuf\AbstractMessage
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
     * encounter_id optional fixed64 = 2
     *
     * @var int
     */
    protected $encounter_id = null;

    /**
     * spawn_point_guid optional string = 3
     *
     * @var string
     */
    protected $spawn_point_guid = null;

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
     * Check if 'encounter_id' has a value
     *
     * @return bool
     */
    public function hasEncounterId()
    {
        return $this->encounter_id !== null;
    }

    /**
     * Get 'encounter_id' value
     *
     * @return int
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * Set 'encounter_id' value
     *
     * @param int $value
     */
    public function setEncounterId($value = null)
    {
        $this->encounter_id = $value;
    }

    /**
     * Check if 'spawn_point_guid' has a value
     *
     * @return bool
     */
    public function hasSpawnPointGuid()
    {
        return $this->spawn_point_guid !== null;
    }

    /**
     * Get 'spawn_point_guid' value
     *
     * @return string
     */
    public function getSpawnPointGuid()
    {
        return $this->spawn_point_guid;
    }

    /**
     * Set 'spawn_point_guid' value
     *
     * @param string $value
     */
    public function setSpawnPointGuid($value = null)
    {
        $this->spawn_point_guid = $value;
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
            'encounter_id' => null,
            'spawn_point_guid' => null
        ], $values);

        $message->setItem($values['item']);
        $message->setEncounterId($values['encounter_id']);
        $message->setSpawnPointGuid($values['spawn_point_guid']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'UseItemEncounterMessage',
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
                    'name' => 'encounter_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'spawn_point_guid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->encounter_id !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->encounter_id);
        }

        if ($this->spawn_point_guid !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->spawn_point_guid);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->encounter_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->spawn_point_guid = $reader->readString($stream);

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

        if ($this->encounter_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->spawn_point_guid !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->spawn_point_guid);
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
        $this->encounter_id = null;
        $this->spawn_point_guid = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Requests\Messages\UseItemEncounterMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->item = ($message->item !== null) ? $message->item : $this->item;
        $this->encounter_id = ($message->encounter_id !== null) ? $message->encounter_id : $this->encounter_id;
        $this->spawn_point_guid = ($message->spawn_point_guid !== null) ? $message->spawn_point_guid : $this->spawn_point_guid;
    }


}

