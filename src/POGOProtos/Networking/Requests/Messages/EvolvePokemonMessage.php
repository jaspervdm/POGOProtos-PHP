<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Requests/Messages/EvolvePokemonMessage.proto
 */


namespace POGOProtos\Networking\Requests\Messages;

/**
 * Protobuf message : POGOProtos.Networking.Requests.Messages.EvolvePokemonMessage
 */
class EvolvePokemonMessage extends \Protobuf\AbstractMessage
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
     * pokemon_id optional fixed64 = 1
     *
     * @var int
     */
    protected $pokemon_id = null;

    /**
     * evolution_item_requirement optional enum = 2
     *
     * @var \POGOProtos\Inventory\Item\ItemId
     */
    protected $evolution_item_requirement = null;

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
     * Check if 'evolution_item_requirement' has a value
     *
     * @return bool
     */
    public function hasEvolutionItemRequirement()
    {
        return $this->evolution_item_requirement !== null;
    }

    /**
     * Get 'evolution_item_requirement' value
     *
     * @return \POGOProtos\Inventory\Item\ItemId
     */
    public function getEvolutionItemRequirement()
    {
        return $this->evolution_item_requirement;
    }

    /**
     * Set 'evolution_item_requirement' value
     *
     * @param \POGOProtos\Inventory\Item\ItemId $value
     */
    public function setEvolutionItemRequirement(\POGOProtos\Inventory\Item\ItemId $value = null)
    {
        $this->evolution_item_requirement = $value;
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
            'pokemon_id' => null,
            'evolution_item_requirement' => null
        ], $values);

        $message->setPokemonId($values['pokemon_id']);
        $message->setEvolutionItemRequirement($values['evolution_item_requirement']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EvolvePokemonMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'evolution_item_requirement',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemId'
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

        if ($this->pokemon_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->pokemon_id);
        }

        if ($this->evolution_item_requirement !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->evolution_item_requirement->value());
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->pokemon_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->evolution_item_requirement = \POGOProtos\Inventory\Item\ItemId::valueOf($reader->readVarint($stream));

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

        if ($this->pokemon_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->evolution_item_requirement !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->evolution_item_requirement->value());
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
        $this->pokemon_id = null;
        $this->evolution_item_requirement = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Requests\Messages\EvolvePokemonMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
        $this->evolution_item_requirement = ($message->evolution_item_requirement !== null) ? $message->evolution_item_requirement : $this->evolution_item_requirement;
    }


}

