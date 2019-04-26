<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecieRepository")
 */
class Specie
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
     * @ORM\OneToMany(targetEntity="App\Entity\Animal", mappedBy="petSpecie")
     */
    private $animalLink;

    public function __construct()
    {
        $this->animalLink = new ArrayCollection();
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

    /**
     * @return Collection|Animal[]
     */
    public function getAnimalLink(): Collection
    {
        return $this->animalLink;
    }

    public function addAnimalLink(Animal $animalLink): self
    {
        if (!$this->animalLink->contains($animalLink)) {
            $this->animalLink[] = $animalLink;
            $animalLink->setPetSpecie($this);
        }

        return $this;
    }

    public function removeAnimalLink(Animal $animalLink): self
    {
        if ($this->animalLink->contains($animalLink)) {
            $this->animalLink->removeElement($animalLink);
            // set the owning side to null (unless already changed)
            if ($animalLink->getPetSpecie() === $this) {
                $animalLink->setPetSpecie(null);
            }
        }

        return $this;
    }
}
