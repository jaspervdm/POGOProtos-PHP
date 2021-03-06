<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Player/PlayerAvatar.proto
 */


namespace POGOProtos\Data\Player;

/**
 * Protobuf message : POGOProtos.Data.Player.PlayerAvatar
 */
class PlayerAvatar extends \Protobuf\AbstractMessage
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
     * skin optional int32 = 2
     *
     * @var int
     */
    protected $skin = null;

    /**
     * hair optional int32 = 3
     *
     * @var int
     */
    protected $hair = null;

    /**
     * shirt optional int32 = 4
     *
     * @var int
     */
    protected $shirt = null;

    /**
     * pants optional int32 = 5
     *
     * @var int
     */
    protected $pants = null;

    /**
     * hat optional int32 = 6
     *
     * @var int
     */
    protected $hat = null;

    /**
     * shoes optional int32 = 7
     *
     * @var int
     */
    protected $shoes = null;

    /**
     * avatar optional int32 = 8
     *
     * @var int
     */
    protected $avatar = null;

    /**
     * eyes optional int32 = 9
     *
     * @var int
     */
    protected $eyes = null;

    /**
     * backpack optional int32 = 10
     *
     * @var int
     */
    protected $backpack = null;

    /**
     * avatar_hair optional string = 11
     *
     * @var string
     */
    protected $avatar_hair = null;

    /**
     * avatar_shirt optional string = 12
     *
     * @var string
     */
    protected $avatar_shirt = null;

    /**
     * avatar_pants optional string = 13
     *
     * @var string
     */
    protected $avatar_pants = null;

    /**
     * avatar_hat optional string = 14
     *
     * @var string
     */
    protected $avatar_hat = null;

    /**
     * avatar_shoes optional string = 15
     *
     * @var string
     */
    protected $avatar_shoes = null;

    /**
     * avatar_eyes optional string = 16
     *
     * @var string
     */
    protected $avatar_eyes = null;

    /**
     * avatar_backpack optional string = 17
     *
     * @var string
     */
    protected $avatar_backpack = null;

    /**
     * avatar_gloves optional string = 18
     *
     * @var string
     */
    protected $avatar_gloves = null;

    /**
     * avatar_socks optional string = 19
     *
     * @var string
     */
    protected $avatar_socks = null;

    /**
     * avatar_belt optional string = 20
     *
     * @var string
     */
    protected $avatar_belt = null;

    /**
     * avatar_glasses optional string = 21
     *
     * @var string
     */
    protected $avatar_glasses = null;

    /**
     * avatar_necklace optional string = 22
     *
     * @var string
     */
    protected $avatar_necklace = null;

    /**
     * Check if 'skin' has a value
     *
     * @return bool
     */
    public function hasSkin()
    {
        return $this->skin !== null;
    }

    /**
     * Get 'skin' value
     *
     * @return int
     */
    public function getSkin()
    {
        return $this->skin;
    }

    /**
     * Set 'skin' value
     *
     * @param int $value
     */
    public function setSkin($value = null)
    {
        $this->skin = $value;
    }

    /**
     * Check if 'hair' has a value
     *
     * @return bool
     */
    public function hasHair()
    {
        return $this->hair !== null;
    }

    /**
     * Get 'hair' value
     *
     * @return int
     */
    public function getHair()
    {
        return $this->hair;
    }

    /**
     * Set 'hair' value
     *
     * @param int $value
     */
    public function setHair($value = null)
    {
        $this->hair = $value;
    }

    /**
     * Check if 'shirt' has a value
     *
     * @return bool
     */
    public function hasShirt()
    {
        return $this->shirt !== null;
    }

    /**
     * Get 'shirt' value
     *
     * @return int
     */
    public function getShirt()
    {
        return $this->shirt;
    }

    /**
     * Set 'shirt' value
     *
     * @param int $value
     */
    public function setShirt($value = null)
    {
        $this->shirt = $value;
    }

    /**
     * Check if 'pants' has a value
     *
     * @return bool
     */
    public function hasPants()
    {
        return $this->pants !== null;
    }

    /**
     * Get 'pants' value
     *
     * @return int
     */
    public function getPants()
    {
        return $this->pants;
    }

    /**
     * Set 'pants' value
     *
     * @param int $value
     */
    public function setPants($value = null)
    {
        $this->pants = $value;
    }

    /**
     * Check if 'hat' has a value
     *
     * @return bool
     */
    public function hasHat()
    {
        return $this->hat !== null;
    }

    /**
     * Get 'hat' value
     *
     * @return int
     */
    public function getHat()
    {
        return $this->hat;
    }

    /**
     * Set 'hat' value
     *
     * @param int $value
     */
    public function setHat($value = null)
    {
        $this->hat = $value;
    }

    /**
     * Check if 'shoes' has a value
     *
     * @return bool
     */
    public function hasShoes()
    {
        return $this->shoes !== null;
    }

    /**
     * Get 'shoes' value
     *
     * @return int
     */
    public function getShoes()
    {
        return $this->shoes;
    }

    /**
     * Set 'shoes' value
     *
     * @param int $value
     */
    public function setShoes($value = null)
    {
        $this->shoes = $value;
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
     * @return int
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set 'avatar' value
     *
     * @param int $value
     */
    public function setAvatar($value = null)
    {
        $this->avatar = $value;
    }

    /**
     * Check if 'eyes' has a value
     *
     * @return bool
     */
    public function hasEyes()
    {
        return $this->eyes !== null;
    }

    /**
     * Get 'eyes' value
     *
     * @return int
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * Set 'eyes' value
     *
     * @param int $value
     */
    public function setEyes($value = null)
    {
        $this->eyes = $value;
    }

    /**
     * Check if 'backpack' has a value
     *
     * @return bool
     */
    public function hasBackpack()
    {
        return $this->backpack !== null;
    }

    /**
     * Get 'backpack' value
     *
     * @return int
     */
    public function getBackpack()
    {
        return $this->backpack;
    }

    /**
     * Set 'backpack' value
     *
     * @param int $value
     */
    public function setBackpack($value = null)
    {
        $this->backpack = $value;
    }

    /**
     * Check if 'avatar_hair' has a value
     *
     * @return bool
     */
    public function hasAvatarHair()
    {
        return $this->avatar_hair !== null;
    }

    /**
     * Get 'avatar_hair' value
     *
     * @return string
     */
    public function getAvatarHair()
    {
        return $this->avatar_hair;
    }

    /**
     * Set 'avatar_hair' value
     *
     * @param string $value
     */
    public function setAvatarHair($value = null)
    {
        $this->avatar_hair = $value;
    }

    /**
     * Check if 'avatar_shirt' has a value
     *
     * @return bool
     */
    public function hasAvatarShirt()
    {
        return $this->avatar_shirt !== null;
    }

    /**
     * Get 'avatar_shirt' value
     *
     * @return string
     */
    public function getAvatarShirt()
    {
        return $this->avatar_shirt;
    }

    /**
     * Set 'avatar_shirt' value
     *
     * @param string $value
     */
    public function setAvatarShirt($value = null)
    {
        $this->avatar_shirt = $value;
    }

    /**
     * Check if 'avatar_pants' has a value
     *
     * @return bool
     */
    public function hasAvatarPants()
    {
        return $this->avatar_pants !== null;
    }

    /**
     * Get 'avatar_pants' value
     *
     * @return string
     */
    public function getAvatarPants()
    {
        return $this->avatar_pants;
    }

    /**
     * Set 'avatar_pants' value
     *
     * @param string $value
     */
    public function setAvatarPants($value = null)
    {
        $this->avatar_pants = $value;
    }

    /**
     * Check if 'avatar_hat' has a value
     *
     * @return bool
     */
    public function hasAvatarHat()
    {
        return $this->avatar_hat !== null;
    }

    /**
     * Get 'avatar_hat' value
     *
     * @return string
     */
    public function getAvatarHat()
    {
        return $this->avatar_hat;
    }

    /**
     * Set 'avatar_hat' value
     *
     * @param string $value
     */
    public function setAvatarHat($value = null)
    {
        $this->avatar_hat = $value;
    }

    /**
     * Check if 'avatar_shoes' has a value
     *
     * @return bool
     */
    public function hasAvatarShoes()
    {
        return $this->avatar_shoes !== null;
    }

    /**
     * Get 'avatar_shoes' value
     *
     * @return string
     */
    public function getAvatarShoes()
    {
        return $this->avatar_shoes;
    }

    /**
     * Set 'avatar_shoes' value
     *
     * @param string $value
     */
    public function setAvatarShoes($value = null)
    {
        $this->avatar_shoes = $value;
    }

    /**
     * Check if 'avatar_eyes' has a value
     *
     * @return bool
     */
    public function hasAvatarEyes()
    {
        return $this->avatar_eyes !== null;
    }

    /**
     * Get 'avatar_eyes' value
     *
     * @return string
     */
    public function getAvatarEyes()
    {
        return $this->avatar_eyes;
    }

    /**
     * Set 'avatar_eyes' value
     *
     * @param string $value
     */
    public function setAvatarEyes($value = null)
    {
        $this->avatar_eyes = $value;
    }

    /**
     * Check if 'avatar_backpack' has a value
     *
     * @return bool
     */
    public function hasAvatarBackpack()
    {
        return $this->avatar_backpack !== null;
    }

    /**
     * Get 'avatar_backpack' value
     *
     * @return string
     */
    public function getAvatarBackpack()
    {
        return $this->avatar_backpack;
    }

    /**
     * Set 'avatar_backpack' value
     *
     * @param string $value
     */
    public function setAvatarBackpack($value = null)
    {
        $this->avatar_backpack = $value;
    }

    /**
     * Check if 'avatar_gloves' has a value
     *
     * @return bool
     */
    public function hasAvatarGloves()
    {
        return $this->avatar_gloves !== null;
    }

    /**
     * Get 'avatar_gloves' value
     *
     * @return string
     */
    public function getAvatarGloves()
    {
        return $this->avatar_gloves;
    }

    /**
     * Set 'avatar_gloves' value
     *
     * @param string $value
     */
    public function setAvatarGloves($value = null)
    {
        $this->avatar_gloves = $value;
    }

    /**
     * Check if 'avatar_socks' has a value
     *
     * @return bool
     */
    public function hasAvatarSocks()
    {
        return $this->avatar_socks !== null;
    }

    /**
     * Get 'avatar_socks' value
     *
     * @return string
     */
    public function getAvatarSocks()
    {
        return $this->avatar_socks;
    }

    /**
     * Set 'avatar_socks' value
     *
     * @param string $value
     */
    public function setAvatarSocks($value = null)
    {
        $this->avatar_socks = $value;
    }

    /**
     * Check if 'avatar_belt' has a value
     *
     * @return bool
     */
    public function hasAvatarBelt()
    {
        return $this->avatar_belt !== null;
    }

    /**
     * Get 'avatar_belt' value
     *
     * @return string
     */
    public function getAvatarBelt()
    {
        return $this->avatar_belt;
    }

    /**
     * Set 'avatar_belt' value
     *
     * @param string $value
     */
    public function setAvatarBelt($value = null)
    {
        $this->avatar_belt = $value;
    }

    /**
     * Check if 'avatar_glasses' has a value
     *
     * @return bool
     */
    public function hasAvatarGlasses()
    {
        return $this->avatar_glasses !== null;
    }

    /**
     * Get 'avatar_glasses' value
     *
     * @return string
     */
    public function getAvatarGlasses()
    {
        return $this->avatar_glasses;
    }

    /**
     * Set 'avatar_glasses' value
     *
     * @param string $value
     */
    public function setAvatarGlasses($value = null)
    {
        $this->avatar_glasses = $value;
    }

    /**
     * Check if 'avatar_necklace' has a value
     *
     * @return bool
     */
    public function hasAvatarNecklace()
    {
        return $this->avatar_necklace !== null;
    }

    /**
     * Get 'avatar_necklace' value
     *
     * @return string
     */
    public function getAvatarNecklace()
    {
        return $this->avatar_necklace;
    }

    /**
     * Set 'avatar_necklace' value
     *
     * @param string $value
     */
    public function setAvatarNecklace($value = null)
    {
        $this->avatar_necklace = $value;
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
            'skin' => null,
            'hair' => null,
            'shirt' => null,
            'pants' => null,
            'hat' => null,
            'shoes' => null,
            'avatar' => null,
            'eyes' => null,
            'backpack' => null,
            'avatar_hair' => null,
            'avatar_shirt' => null,
            'avatar_pants' => null,
            'avatar_hat' => null,
            'avatar_shoes' => null,
            'avatar_eyes' => null,
            'avatar_backpack' => null,
            'avatar_gloves' => null,
            'avatar_socks' => null,
            'avatar_belt' => null,
            'avatar_glasses' => null,
            'avatar_necklace' => null
        ], $values);

        $message->setSkin($values['skin']);
        $message->setHair($values['hair']);
        $message->setShirt($values['shirt']);
        $message->setPants($values['pants']);
        $message->setHat($values['hat']);
        $message->setShoes($values['shoes']);
        $message->setAvatar($values['avatar']);
        $message->setEyes($values['eyes']);
        $message->setBackpack($values['backpack']);
        $message->setAvatarHair($values['avatar_hair']);
        $message->setAvatarShirt($values['avatar_shirt']);
        $message->setAvatarPants($values['avatar_pants']);
        $message->setAvatarHat($values['avatar_hat']);
        $message->setAvatarShoes($values['avatar_shoes']);
        $message->setAvatarEyes($values['avatar_eyes']);
        $message->setAvatarBackpack($values['avatar_backpack']);
        $message->setAvatarGloves($values['avatar_gloves']);
        $message->setAvatarSocks($values['avatar_socks']);
        $message->setAvatarBelt($values['avatar_belt']);
        $message->setAvatarGlasses($values['avatar_glasses']);
        $message->setAvatarNecklace($values['avatar_necklace']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PlayerAvatar',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'skin',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'hair',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'shirt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'pants',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'hat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'shoes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'avatar',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'eyes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'backpack',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'avatar_hair',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'avatar_shirt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'avatar_pants',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'avatar_hat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'avatar_shoes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'avatar_eyes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 17,
                    'name' => 'avatar_backpack',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 18,
                    'name' => 'avatar_gloves',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 19,
                    'name' => 'avatar_socks',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 20,
                    'name' => 'avatar_belt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 21,
                    'name' => 'avatar_glasses',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 22,
                    'name' => 'avatar_necklace',
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

        if ($this->skin !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->skin);
        }

        if ($this->hair !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->hair);
        }

        if ($this->shirt !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->shirt);
        }

        if ($this->pants !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->pants);
        }

        if ($this->hat !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->hat);
        }

        if ($this->shoes !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->shoes);
        }

        if ($this->avatar !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->avatar);
        }

        if ($this->eyes !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->eyes);
        }

        if ($this->backpack !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->backpack);
        }

        if ($this->avatar_hair !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeString($stream, $this->avatar_hair);
        }

        if ($this->avatar_shirt !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeString($stream, $this->avatar_shirt);
        }

        if ($this->avatar_pants !== null) {
            $writer->writeVarint($stream, 106);
            $writer->writeString($stream, $this->avatar_pants);
        }

        if ($this->avatar_hat !== null) {
            $writer->writeVarint($stream, 114);
            $writer->writeString($stream, $this->avatar_hat);
        }

        if ($this->avatar_shoes !== null) {
            $writer->writeVarint($stream, 122);
            $writer->writeString($stream, $this->avatar_shoes);
        }

        if ($this->avatar_eyes !== null) {
            $writer->writeVarint($stream, 130);
            $writer->writeString($stream, $this->avatar_eyes);
        }

        if ($this->avatar_backpack !== null) {
            $writer->writeVarint($stream, 138);
            $writer->writeString($stream, $this->avatar_backpack);
        }

        if ($this->avatar_gloves !== null) {
            $writer->writeVarint($stream, 146);
            $writer->writeString($stream, $this->avatar_gloves);
        }

        if ($this->avatar_socks !== null) {
            $writer->writeVarint($stream, 154);
            $writer->writeString($stream, $this->avatar_socks);
        }

        if ($this->avatar_belt !== null) {
            $writer->writeVarint($stream, 162);
            $writer->writeString($stream, $this->avatar_belt);
        }

        if ($this->avatar_glasses !== null) {
            $writer->writeVarint($stream, 170);
            $writer->writeString($stream, $this->avatar_glasses);
        }

        if ($this->avatar_necklace !== null) {
            $writer->writeVarint($stream, 178);
            $writer->writeString($stream, $this->avatar_necklace);
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

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->skin = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->hair = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->shirt = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->pants = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->hat = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->shoes = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->avatar = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->eyes = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->backpack = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_hair = $reader->readString($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_shirt = $reader->readString($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_pants = $reader->readString($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_hat = $reader->readString($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_shoes = $reader->readString($stream);

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_eyes = $reader->readString($stream);

                continue;
            }

            if ($tag === 17) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_backpack = $reader->readString($stream);

                continue;
            }

            if ($tag === 18) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_gloves = $reader->readString($stream);

                continue;
            }

            if ($tag === 19) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_socks = $reader->readString($stream);

                continue;
            }

            if ($tag === 20) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_belt = $reader->readString($stream);

                continue;
            }

            if ($tag === 21) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_glasses = $reader->readString($stream);

                continue;
            }

            if ($tag === 22) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_necklace = $reader->readString($stream);

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

        if ($this->skin !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->skin);
        }

        if ($this->hair !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->hair);
        }

        if ($this->shirt !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->shirt);
        }

        if ($this->pants !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pants);
        }

        if ($this->hat !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->hat);
        }

        if ($this->shoes !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->shoes);
        }

        if ($this->avatar !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->avatar);
        }

        if ($this->eyes !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->eyes);
        }

        if ($this->backpack !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->backpack);
        }

        if ($this->avatar_hair !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->avatar_hair);
        }

        if ($this->avatar_shirt !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->avatar_shirt);
        }

        if ($this->avatar_pants !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->avatar_pants);
        }

        if ($this->avatar_hat !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->avatar_hat);
        }

        if ($this->avatar_shoes !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->avatar_shoes);
        }

        if ($this->avatar_eyes !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->avatar_eyes);
        }

        if ($this->avatar_backpack !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->avatar_backpack);
        }

        if ($this->avatar_gloves !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->avatar_gloves);
        }

        if ($this->avatar_socks !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->avatar_socks);
        }

        if ($this->avatar_belt !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->avatar_belt);
        }

        if ($this->avatar_glasses !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->avatar_glasses);
        }

        if ($this->avatar_necklace !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->avatar_necklace);
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
        $this->skin = null;
        $this->hair = null;
        $this->shirt = null;
        $this->pants = null;
        $this->hat = null;
        $this->shoes = null;
        $this->avatar = null;
        $this->eyes = null;
        $this->backpack = null;
        $this->avatar_hair = null;
        $this->avatar_shirt = null;
        $this->avatar_pants = null;
        $this->avatar_hat = null;
        $this->avatar_shoes = null;
        $this->avatar_eyes = null;
        $this->avatar_backpack = null;
        $this->avatar_gloves = null;
        $this->avatar_socks = null;
        $this->avatar_belt = null;
        $this->avatar_glasses = null;
        $this->avatar_necklace = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Player\PlayerAvatar) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->skin = ($message->skin !== null) ? $message->skin : $this->skin;
        $this->hair = ($message->hair !== null) ? $message->hair : $this->hair;
        $this->shirt = ($message->shirt !== null) ? $message->shirt : $this->shirt;
        $this->pants = ($message->pants !== null) ? $message->pants : $this->pants;
        $this->hat = ($message->hat !== null) ? $message->hat : $this->hat;
        $this->shoes = ($message->shoes !== null) ? $message->shoes : $this->shoes;
        $this->avatar = ($message->avatar !== null) ? $message->avatar : $this->avatar;
        $this->eyes = ($message->eyes !== null) ? $message->eyes : $this->eyes;
        $this->backpack = ($message->backpack !== null) ? $message->backpack : $this->backpack;
        $this->avatar_hair = ($message->avatar_hair !== null) ? $message->avatar_hair : $this->avatar_hair;
        $this->avatar_shirt = ($message->avatar_shirt !== null) ? $message->avatar_shirt : $this->avatar_shirt;
        $this->avatar_pants = ($message->avatar_pants !== null) ? $message->avatar_pants : $this->avatar_pants;
        $this->avatar_hat = ($message->avatar_hat !== null) ? $message->avatar_hat : $this->avatar_hat;
        $this->avatar_shoes = ($message->avatar_shoes !== null) ? $message->avatar_shoes : $this->avatar_shoes;
        $this->avatar_eyes = ($message->avatar_eyes !== null) ? $message->avatar_eyes : $this->avatar_eyes;
        $this->avatar_backpack = ($message->avatar_backpack !== null) ? $message->avatar_backpack : $this->avatar_backpack;
        $this->avatar_gloves = ($message->avatar_gloves !== null) ? $message->avatar_gloves : $this->avatar_gloves;
        $this->avatar_socks = ($message->avatar_socks !== null) ? $message->avatar_socks : $this->avatar_socks;
        $this->avatar_belt = ($message->avatar_belt !== null) ? $message->avatar_belt : $this->avatar_belt;
        $this->avatar_glasses = ($message->avatar_glasses !== null) ? $message->avatar_glasses : $this->avatar_glasses;
        $this->avatar_necklace = ($message->avatar_necklace !== null) ? $message->avatar_necklace : $this->avatar_necklace;
    }


}

