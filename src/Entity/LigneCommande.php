<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneCommandeRepository")
 */
class LigneCommande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCom;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="ligneCommandes")
     */
    private $Client;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Produit", cascade={"persist", "remove"})
     */
    private $Produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $QteCom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCom(): ?\DateTimeInterface
    {
        return $this->dateCom;
    }

    public function setDateCom(\DateTimeInterface $dateCom): self
    {
        $this->dateCom = $dateCom;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->Client;
    }

    public function setClient(?Client $Client): self
    {
        $this->Client = $Client;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->Produit;
    }

    public function setProduit(?Produit $Produit): self
    {
        $this->Produit = $Produit;

        return $this;
    }

    public function getQteCom(): ?int
    {
        return $this->QteCom;
    }

    public function setQteCom(int $QteCom): self
    {
        $this->QteCom = $QteCom;

        return $this;
    }
}
