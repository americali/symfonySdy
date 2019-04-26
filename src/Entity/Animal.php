<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $characteristics;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateLost;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFound;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=600, nullable=true)
     */
    private $stories;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Specie", inversedBy="animalLink")
     * @ORM\JoinColumn(nullable=false)
     */
    private $petSpecie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="animalRelated")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userParent;

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

    public function getAge(): ?float
    {
        return $this->age;
    }

    public function setAge(?float $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getCharacteristics(): ?string
    {
        return $this->characteristics;
    }

    public function setCharacteristics(?string $characteristics): self
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    public function getDateLost(): ?\DateTimeInterface
    {
        return $this->dateLost;
    }

    public function setDateLost(?\DateTimeInterface $dateLost): self
    {
        $this->dateLost = $dateLost;

        return $this;
    }

    public function getDateFound(): ?\DateTimeInterface
    {
        return $this->dateFound;
    }

    public function setDateFound(?\DateTimeInterface $dateFound): self
    {
        $this->dateFound = $dateFound;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getStories(): ?string
    {
        return $this->stories;
    }

    public function setStories(?string $stories): self
    {
        $this->stories = $stories;

        return $this;
    }

    public function getPetSpecie(): ?Specie
    {
        return $this->petSpecie;
    }

    public function setPetSpecie(?Specie $petSpecie): self
    {
        $this->petSpecie = $petSpecie;

        return $this;
    }

    public function getUserParent(): ?User
    {
        return $this->userParent;
    }

    public function setUserParent(?User $userParent): self
    {
        $this->userParent = $userParent;

        return $this;
    }
}
