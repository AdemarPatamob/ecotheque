<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $need;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $energyClass;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ges;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $batteryMovable;

    /**
     * @ORM\Column(type="integer")
     */
    private $batteryRecyclability;

    /**
     * @ORM\Column(type="integer")
     */
    private $screenSize;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $shutDownAuto;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $autonomy;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ecologyNotice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getNeed(): ?string
    {
        return $this->need;
    }

    public function setNeed(string $need): self
    {
        $this->need = $need;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getEnergyClass(): ?string
    {
        return $this->energyClass;
    }

    public function setEnergyClass(string $energyClass): self
    {
        $this->energyClass = $energyClass;

        return $this;
    }

    public function getGes(): ?string
    {
        return $this->ges;
    }

    public function setGes(string $ges): self
    {
        $this->ges = $ges;

        return $this;
    }

    public function getBatteryMovable(): ?bool
    {
        return $this->batteryMovable;
    }

    public function setBatteryMovable(?bool $batteryMovable): self
    {
        $this->batteryMovable = $batteryMovable;

        return $this;
    }

    public function getBatteryRecyclability(): ?int
    {
        return $this->batteryRecyclability;
    }

    public function setBatteryRecyclability(int $batteryRecyclability): self
    {
        $this->batteryRecyclability = $batteryRecyclability;

        return $this;
    }

    public function getScreenSize(): ?int
    {
        return $this->screenSize;
    }

    public function setScreenSize(int $screenSize): self
    {
        $this->screenSize = $screenSize;

        return $this;
    }

    public function getShutDownAuto(): ?bool
    {
        return $this->shutDownAuto;
    }

    public function setShutDownAuto(?bool $shutDownAuto): self
    {
        $this->shutDownAuto = $shutDownAuto;

        return $this;
    }

    public function getAutonomy(): ?int
    {
        return $this->autonomy;
    }

    public function setAutonomy(?int $autonomy): self
    {
        $this->autonomy = $autonomy;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getEcologyNotice(): ?string
    {
        return $this->ecologyNotice;
    }

    public function setEcologyNotice(?string $ecologyNotice): self
    {
        $this->ecologyNotice = $ecologyNotice;

        return $this;
    }


}
