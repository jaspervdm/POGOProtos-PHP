<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Logs/BuddyPokemonLogEntry.proto
 */


namespace POGOProtos\Data\Logs;

/**
 * Protobuf message : POGOProtos.Data.Logs.BuddyPokemonLogEntry
 */
class BuddyPokemonLogEntry extends \Protobuf\AbstractMessage
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
     * result optional enum = 1
     *
     * @var \POGOProtos\Data\Logs\BuddyPokemonLogEntry\Result
     */
    protected $result = null;

    /**
     * pokemon_id optional enum = 2
     *
     * @var \POGOProtos\Enums\PokemonId
     */
    protected $pokemon_id = null;

    /**
     * amount optional int32 = 3
     *
     * @var int
     */
    protected $amount = null;

    /**
     * pokemon_display optional message = 4
     *
     * @var \POGOProtos\Data\PokemonDisplay
     */
    protected $pokemon_display = null;

    /**
     * pokemon optional fixed64 = 5
     *
     * @var int
     */
    protected $pokemon = null;

    /**
     * Check if 'result' has a value
     *
     * @return bool
     */
    public function hasResult()
    {
        return $this->result !== null;
    }

    /**
     * Get 'result' value
     *
     * @return \POGOProtos\Data\Logs\BuddyPokemonLogEntry\Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set 'result' value
     *
     * @param \POGOProtos\Data\Logs\BuddyPokemonLogEntry\Result $value
     */
    public function setResult(\POGOProtos\Data\Logs\BuddyPokemonLogEntry\Result $value = null)
    {
        $this->result = $value;
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
     * @return \POGOProtos\Enums\PokemonId
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Set 'pokemon_id' value
     *
     * @param \POGOProtos\Enums\PokemonId $value
     */
    public function setPokemonId(\POGOProtos\Enums\PokemonId $value = null)
    {
        $this->pokemon_id = $value;
    }

    /**
     * Check if 'amount' has a value
     *
     * @return bool
     */
    public function hasAmount()
    {
        return $this->amount !== null;
    }

    /**
     * Get 'amount' value
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set 'amount' value
     *
     * @param int $value
     */
    public function setAmount($value = null)
    {
        $this->amount = $value;
    }

    /**
     * Check if 'pokemon_display' has a value
     *
     * @return bool
     */
    public function hasPokemonDisplay()
    {
        return $this->pokemon_display !== null;
    }

    /**
     * Get 'pokemon_display' value
     *
     * @return \POGOProtos\Data\PokemonDisplay
     */
    public function getPokemonDisplay()
    {
        return $this->pokemon_display;
    }

    /**
     * Set 'pokemon_display' value
     *
     * @param \POGOProtos\Data\PokemonDisplay $value
     */
    public function setPokemonDisplay(\POGOProtos\Data\PokemonDisplay $value = null)
    {
        $this->pokemon_display = $value;
    }

    /**
     * Check if 'pokemon' has a value
     *
     * @return bool
     */
    public function hasPokemon()
    {
        return $this->pokemon !== null;
    }

    /**
     * Get 'pokemon' value
     *
     * @return int
     */
    public function getPokemon()
    {
        return $this->pokemon;
    }

    /**
     * Set 'pokemon' value
     *
     * @param int $value
     */
    public function setPokemon($value = null)
    {
        $this->pokemon = $value;
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
            'result' => null,
            'pokemon_id' => null,
            'amount' => null,
            'pokemon_display' => null,
            'pokemon' => null
        ], $values);

        $message->setResult($values['result']);
        $message->setPokemonId($values['pokemon_id']);
        $message->setAmount($values['amount']);
        $message->setPokemonDisplay($values['pokemon_display']);
        $message->setPokemon($values['pokemon']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'BuddyPokemonLogEntry',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'result',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Logs.BuddyPokemonLogEntry.Result'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'amount',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'pokemon_display',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.PokemonDisplay'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'pokemon',
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

        if ($this->result !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->result->value());
        }

        if ($this->pokemon_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->pokemon_id->value());
        }

        if ($this->amount !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->amount);
        }

        if ($this->pokemon_display !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->pokemon_display->serializedSize($sizeContext));
            $this->pokemon_display->writeTo($context);
        }

        if ($this->pokemon !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeFixed64($stream, $this->pokemon);
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

                $this->result = \POGOProtos\Data\Logs\BuddyPokemonLogEntry\Result::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->pokemon_id = \POGOProtos\Enums\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->amount = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\PokemonDisplay();

                $this->pokemon_display = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->pokemon = $reader->readFixed64($stream);

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

        if ($this->result !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->result->value());
        }

        if ($this->pokemon_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokemon_id->value());
        }

        if ($this->amount !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->amount);
        }

        if ($this->pokemon_display !== null) {
            $innerSize = $this->pokemon_display->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->pokemon !== null) {
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
        $this->result = null;
        $this->pokemon_id = null;
        $this->amount = null;
        $this->pokemon_display = null;
        $this->pokemon = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Logs\BuddyPokemonLogEntry) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->result = ($message->result !== null) ? $message->result : $this->result;
        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
        $this->amount = ($message->amount !== null) ? $message->amount : $this->amount;
        $this->pokemon_display = ($message->pokemon_display !== null) ? $message->pokemon_display : $this->pokemon_display;
        $this->pokemon = ($message->pokemon !== null) ? $message->pokemon : $this->pokemon;
    }


}

