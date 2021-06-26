<?php

namespace App\Entity;

use App\Repository\FactoryGiftsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JetBrains\PhpStorm\Pure;

/**
 * @ORM\Entity(repositoryClass=FactoryGiftsRepository::class)
 */
class FactoryGifts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $phone;

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
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="factoryGifts")
     */
    private ?Collection $users;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $countryCode;

    /**
     * @ORM\OneToMany(targetEntity=Gift::class, mappedBy="factoryGifts", orphanRemoval=true)
     */
    private ?Collection $gifts;

    #[Pure] public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->gifts = new ArrayCollection();
    }

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setFactoryGifts($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getFactoryGifts() === $this) {
                $user->setFactoryGifts(null);
            }
        }

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getGifts(): Collection
    {
        return $this->gifts;
    }

    public function addGift(Gift $gift): self
    {
        if (!$this->gifts->contains($gift)) {
            $this->gifts[] = $gift;
            $gift->setFactoryGifts($this);
        }

        return $this;
    }

    public function removeGift(Gift $gift): self
    {
        if ($this->gifts->removeElement($gift)) {
            // set the owning side to null (unless already changed)
            if ($gift->getFactoryGifts() === $this) {
                $gift->setFactoryGifts(null);
            }
        }

        return $this;
    }
    /**
     * Generates the magic method
     *
     */
    public function __toString(): string
    {
        return $this->name;
    }

    /**
     * @return int
     * Function to get the number of differents country
     */
    public function nbCountry(): int
    {
        $gifts = $this->getGifts();
        $usersCode = [];
        foreach ($gifts as $gift) {
            array_push($usersCode, $gift->getReceiver()->getcountryCode());
        }
        return count(array_unique($usersCode));
    }

    /**
     * @return float|int
     * Get the avarage price from all gifts
     */
    public function averagePrice(): float|int
    {
        $prices = $this->getAllPrice();
        return $prices ? array_sum($prices)/count($prices) : 0;
    }

    /**
     * @return float|int
     * Get the more expensive price from all gifts
     */
    public function maxPrice(): float|int
    {
        return $this->getAllPrice() ? max($this->getAllPrice()) : 0;
    }

    /**
     * @return float|int
     * Get the cheapest price from all gifts
     */
    public function minPrice(): float|int
    {
        return $this->getAllPrice() ? min($this->getAllPrice()) : 0;
    }

    /**
     * @return array
     */
    public function getAllPrice(): array
    {
        $gifts = $this->getGifts();
        $prices = [];
        foreach ($gifts as $gift) {
            array_push($prices, $gift->getPrice());
        }
        dump($prices);
        return $prices;
    }
}
