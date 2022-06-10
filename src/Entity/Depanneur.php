<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depanneur
 *
 * @ORM\Table(name="depanneur")
 * @ORM\Entity
 */
class Depanneur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="depanneur_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_tel", type="string", length=255, nullable=true)
     */
    private $numeroTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motdepasse", type="string", length=255, nullable=true)
     */
    private $motdepasse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_assurance", type="string", length=255, nullable=true)
     */
    private $nomAssurance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_debut_contrat", type="string", length=255, nullable=true)
     */
    private $dateDebutContrat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_fin_contrat", type="string", length=255, nullable=true)
     */
    private $dateFinContrat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNumeroTel(): ?string
    {
        return $this->numeroTel;
    }

    public function setNumeroTel(?string $numeroTel): self
    {
        $this->numeroTel = $numeroTel;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(?string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getNomAssurance(): ?string
    {
        return $this->nomAssurance;
    }

    public function setNomAssurance(?string $nomAssurance): self
    {
        $this->nomAssurance = $nomAssurance;

        return $this;
    }

    public function getDateDebutContrat(): ?string
    {
        return $this->dateDebutContrat;
    }

    public function setDateDebutContrat(?string $dateDebutContrat): self
    {
        $this->dateDebutContrat = $dateDebutContrat;

        return $this;
    }

    public function getDateFinContrat(): ?string
    {
        return $this->dateFinContrat;
    }

    public function setDateFinContrat(?string $dateFinContrat): self
    {
        $this->dateFinContrat = $dateFinContrat;

        return $this;
    }


}
