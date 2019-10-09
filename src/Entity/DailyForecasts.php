<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DailyForecastsRepository")
 */
class DailyForecasts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="text")
     */
    private $Temperature;

    /**
     * @ORM\Column(type="text")
     */
    private $Day;

    /**
     * @ORM\Column(type="text")
     */
    private $Night;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Sources;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MobileLink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Link;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTemperature(): ?string
    {
        return $this->Temperature;
    }

    public function setTemperature(string $Temperature): self
    {
        $this->Temperature = $Temperature;

        return $this;
    }

    public function getDay(): ?string
    {
        return $this->Day;
    }

    public function setDay(string $Day): self
    {
        $this->Day = $Day;

        return $this;
    }

    public function getNight(): ?string
    {
        return $this->Night;
    }

    public function setNight(string $Night): self
    {
        $this->Night = $Night;

        return $this;
    }

    public function getSources(): ?string
    {
        return $this->Sources;
    }

    public function setSources(string $Sources): self
    {
        $this->Sources = $Sources;

        return $this;
    }

    public function getMobileLink(): ?string
    {
        return $this->MobileLink;
    }

    public function setMobileLink(string $MobileLink): self
    {
        $this->MobileLink = $MobileLink;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->Link;
    }

    public function setLink(string $Link): self
    {
        $this->Link = $Link;

        return $this;
    }
}
