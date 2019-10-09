<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HeadlinesRepository")
 */
class Headlines
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $EffectiveDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $EffectiveEpochDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Severity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Text;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $EndDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $EndEpochDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $MobileLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Link;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEffectiveDate(): ?\DateTimeInterface
    {
        return $this->EffectiveDate;
    }

    public function setEffectiveDate(?\DateTimeInterface $EffectiveDate): self
    {
        $this->EffectiveDate = $EffectiveDate;

        return $this;
    }

    public function getEffectiveEpochDate(): ?string
    {
        return $this->EffectiveEpochDate;
    }

    public function setEffectiveEpochDate(?string $EffectiveEpochDate): self
    {
        $this->EffectiveEpochDate = $EffectiveEpochDate;

        return $this;
    }

    public function getSeverity(): ?string
    {
        return $this->Severity;
    }

    public function setSeverity(?string $Severity): self
    {
        $this->Severity = $Severity;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(?string $Text): self
    {
        $this->Text = $Text;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->Category;
    }

    public function setCategory(?string $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }

    public function setEndDate(?string $EndDate): self
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    public function getEndEpochDate(): ?string
    {
        return $this->EndEpochDate;
    }

    public function setEndEpochDate(?string $EndEpochDate): self
    {
        $this->EndEpochDate = $EndEpochDate;

        return $this;
    }

    public function getMobileLink(): ?string
    {
        return $this->MobileLink;
    }

    public function setMobileLink(?string $MobileLink): self
    {
        $this->MobileLink = $MobileLink;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->Link;
    }

    public function setLink(?string $Link): self
    {
        $this->Link = $Link;

        return $this;
    }
}
