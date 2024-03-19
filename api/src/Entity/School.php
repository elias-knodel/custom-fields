<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SchoolRepository;
use App\Traits\AddressTrait;
use App\Traits\IdentifierTrait;
use App\Traits\TimestampTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SchoolRepository::class)]
#[ApiResource]
class School
{
    use IdentifierTrait;
    use TimestampTrait;

    use AddressTrait;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $image = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $banner = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getBanner()
    {
        return $this->banner;
    }

    public function setBanner($banner): static
    {
        $this->banner = $banner;

        return $this;
    }
}
