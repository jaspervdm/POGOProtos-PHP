<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/Master/Pokemon/EvolutionBranch.proto
 */


namespace POGOProtos\Settings\Master\Pokemon;

/**
 * Protobuf message : POGOProtos.Settings.Master.Pokemon.EvolutionBranch
 */
class EvolutionBranch extends \Protobuf\AbstractMessage
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
     * evolution optional enum = 1
     *
     * @var \POGOProtos\Enums\PokemonId
     */
    protected $evolution = null;

    /**
     * evolution_item_requirement optional enum = 2
     *
     * @var \POGOProtos\Inventory\Item\ItemId
     */
    protected $evolution_item_requirement = null;

    /**
     * candy_cost optional int32 = 3
     *
     * @var int
     */
    protected $candy_cost = null;

    /**
     * Check if 'evolution' has a value
     *
     * @return bool
     */
    public function hasEvolution()
    {
        return $this->evolution !== null;
    }

    /**
     * Get 'evolution' value
     *
     * @return \POGOProtos\Enums\PokemonId
     */
    public function getEvolution()
    {
        return $this->evolution;
    }

    /**
     * Set 'evolution' value
     *
     * @param \POGOProtos\Enums\PokemonId $value
     */
    public function setEvolution(\POGOProtos\Enums\PokemonId $value = null)
    {
        $this->evolution = $value;
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
     * Check if 'candy_cost' has a value
     *
     * @return bool
     */
    public function hasCandyCost()
    {
        return $this->candy_cost !== null;
    }

    /**
     * Get 'candy_cost' value
     *
     * @return int
     */
    public function getCandyCost()
    {
        return $this->candy_cost;
    }

    /**
     * Set 'candy_cost' value
     *
     * @param int $value
     */
    public function setCandyCost($value = null)
    {
        $this->candy_cost = $value;
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
            'evolution' => null,
            'evolution_item_requirement' => null,
            'candy_cost' => null
        ], $values);

        $message->setEvolution($values['evolution']);
        $message->setEvolutionItemRequirement($values['evolution_item_requirement']);
        $message->setCandyCost($values['candy_cost']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EvolutionBranch',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'evolution',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'evolution_item_requirement',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'candy_cost',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->evolution !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->evolution->value());
        }

        if ($this->evolution_item_requirement !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->evolution_item_requirement->value());
        }

        if ($this->candy_cost !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->candy_cost);
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

                $this->evolution = \POGOProtos\Enums\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->evolution_item_requirement = \POGOProtos\Inventory\Item\ItemId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->candy_cost = $reader->readVarint($stream);

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

        if ($this->evolution !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->evolution->value());
        }

        if ($this->evolution_item_requirement !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->evolution_item_requirement->value());
        }

        if ($this->candy_cost !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->candy_cost);
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
        $this->evolution = null;
        $this->evolution_item_requirement = null;
        $this->candy_cost = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Settings\Master\Pokemon\EvolutionBranch) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->evolution = ($message->evolution !== null) ? $message->evolution : $this->evolution;
        $this->evolution_item_requirement = ($message->evolution_item_requirement !== null) ? $message->evolution_item_requirement : $this->evolution_item_requirement;
        $this->candy_cost = ($message->candy_cost !== null) ? $message->candy_cost : $this->candy_cost;
    }


}

