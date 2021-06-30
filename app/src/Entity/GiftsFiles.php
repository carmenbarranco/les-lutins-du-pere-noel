<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Controller\GiftCsvController;
use App\Repository\GiftsFilesRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=GiftsFilesRepository::class)
 */
#[
    ApiResource(
        collectionOperations: [
        'get',
        'post' => [
            'controller' => GiftCsvController::class,
            'deserialize' => false,
            'openapi_context' => [
                'requestBody' => [
                    'content' => [
                        'multipart/form-data' => [
                            'schema' => [
                                'type' => 'object',
                                'properties' => [
                                    'file' => [
                                        'type' => 'string',
                                        'format' => 'binary',
                                    ],
                                    'factoryId' => [
                                        'type' => 'string',
                                        'format' => 'text',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
        denormalizationContext: ['groups' => ['write:giftFiles']],
        normalizationContext: ['groups' => ['read:collection']]
    )]
class GiftsFiles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    #[Groups(['write:giftFiles'])]
    private $name;

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
     * @ORM\ManyToOne(targetEntity=FactoryGifts::class, inversedBy="csvFiles",  cascade={"persist"}))
     * @ORM\JoinColumn(nullable=false)
     */
    #[Groups(['read:item', 'read:factories', 'write:giftFiles'])]
    private $factoryGifts;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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
}
