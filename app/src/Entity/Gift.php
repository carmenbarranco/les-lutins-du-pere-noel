<?php

namespace App\Entity;

use App\Repository\GiftRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=GiftRepository::class)
 * @ApiResource(
 *  collectionOperations={"get"={"normalization_context"={"groups"="gift:list"}}},
 *     itemOperations={"get"={"normalization_context"={"groups"="gift:item"}}},
 *     paginationEnabled=false)
 */

class Gift
{
    /**
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     */

    private $id;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="text", nullable=true)
     * #[Groups(['gift:list', 'gift:item'])]
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     * #[Groups(['gift:list', 'gift:item'])]
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="gifts")
     * #[Groups(['gift:list', 'gift:item'])]
     */
    private $receiver;

    /**
     * @ORM\ManyToOne(targetEntity=FactoryGifts::class, inversedBy="gifts")
     *#[Groups(['gift:list', 'gift:item'])]
     * @ORM\JoinColumn(nullable=false)
     */
    private $factoryGifts;

    /**
     * @ORM\ManyToOne(targetEntity=GiftCode::class, inversedBy="gifts")
     * #[Groups(['gift:list', 'gift:item'])]
     * @ORM\JoinColumn(nullable=false)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     * #[Groups(["gift:list", "gift:item"])]
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sentToSanta;

    public function getId()
    {
        return $this->id;
    }

    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getReceiver(): ?User
    {
        return $this->receiver;
    }

    public function setReceiver(?User $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getFactoryGifts(): ?FactoryGifts
    {
        return $this->factoryGifts;
    }

    public function setFactoryGifts(?FactoryGifts $factoryGifts): self
    {
        $this->factoryGifts = $factoryGifts;

        return $this;
    }

    public function getCode(): ?GiftCode
    {
        return $this->code;
    }

    public function setCode(?GiftCode $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param $id
     * @return Gift
     */
    public function setId($id): Gift
    {
        $this->id = $id;
        return $this;
    }

    public function getSentToSanta(): ?bool
    {
        return $this->sentToSanta;
    }

    public function setSentToSanta(bool $sentToSanta): self
    {
        $this->sentToSanta = $sentToSanta;

        return $this;
    }
}
