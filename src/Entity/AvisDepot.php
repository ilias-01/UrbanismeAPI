<?php

namespace App\Entity;

use App\Repository\AvisDepotRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisDepotRepository::class)]
class AvisDepot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $srt = null;

    #[ORM\Column(length: 255)]
    private ?string $dateenclaire = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $bie_adresse = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $bie_cad_t = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $trs_titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $trs_nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $trs_prenom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $trs_adresse = null;

    #[ORM\Column]
    private ?int $trs_codePos = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $trs_commune = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $reference = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $dos_drs_t = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $dos_ddn_t = null;

    #[ORM\Column(length: 255)]
    private ?string $dos_dpn_t = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $dos_dad_t = null;

    #[ORM\Column]
    private ?int $doc_dcp_t = null;

    #[ORM\Column(length: 255)]
    private ?string $dos_dlc_t = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $dos_dnm_t = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $dpc_anm_t = null;

    #[ORM\Column(length: 255)]
    private ?string $dpc_apn_t = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $dpc_aad_t = null;

    #[ORM\Column]
    private ?int $dpc_acp_t = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $nature = null;

    #[ORM\Column]
    private ?int $surf_ex = null;

    #[ORM\Column]
    private ?int $surf_cc = null;

    #[ORM\Column(length: 255)]
    private ?string $date_demande = null;

    #[ORM\Column(length: 255)]
    private ?string $date_depot = null;

    #[ORM\Column(length: 255)]
    private ?string $date_complet = null;

    #[ORM\Column(length: 255)]
    private ?string $date_decision = null;

    #[ORM\Column]
    private ?int $decision = null;

    #[ORM\Column]
    private ?int $srt_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $srt_3 = null;

    #[ORM\Column]
    private ?int $INSEE = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSrt(): ?int
    {
        return $this->srt;
    }

    public function setSrt(int $srt): static
    {
        $this->srt = $srt;

        return $this;
    }

    public function getDateenclaire(): ?string
    {
        return $this->dateenclaire;
    }

    public function setDateenclaire(string $dateenclaire): static
    {
        $this->dateenclaire = $dateenclaire;

        return $this;
    }

    public function getBieAdresse(): ?string
    {
        return $this->bie_adresse;
    }

    public function setBieAdresse(string $bie_adresse): static
    {
        $this->bie_adresse = $bie_adresse;

        return $this;
    }

    public function getBieCadT(): ?string
    {
        return $this->bie_cad_t;
    }

    public function setBieCadT(string $bie_cad_t): static
    {
        $this->bie_cad_t = $bie_cad_t;

        return $this;
    }

    public function getTrsTitre(): ?string
    {
        return $this->trs_titre;
    }

    public function setTrsTitre(string $trs_titre): static
    {
        $this->trs_titre = $trs_titre;

        return $this;
    }

    public function getTrsNom(): ?string
    {
        return $this->trs_nom;
    }

    public function setTrsNom(string $trs_nom): static
    {
        $this->trs_nom = $trs_nom;

        return $this;
    }

    public function getTrsPrenom(): ?string
    {
        return $this->trs_prenom;
    }

    public function setTrsPrenom(string $trs_prenom): static
    {
        $this->trs_prenom = $trs_prenom;

        return $this;
    }

    public function getTrsAdresse(): ?string
    {
        return $this->trs_adresse;
    }

    public function setTrsAdresse(string $trs_adresse): static
    {
        $this->trs_adresse = $trs_adresse;

        return $this;
    }

    public function getTrsCodePos(): ?int
    {
        return $this->trs_codePos;
    }

    public function setTrsCodePos(int $trs_codePos): static
    {
        $this->trs_codePos = $trs_codePos;

        return $this;
    }

    public function getTrsCommune(): ?string
    {
        return $this->trs_commune;
    }

    public function setTrsCommune(string $trs_commune): static
    {
        $this->trs_commune = $trs_commune;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDosDrsT(): ?string
    {
        return $this->dos_drs_t;
    }

    public function setDosDrsT(string $dos_drs_t): static
    {
        $this->dos_drs_t = $dos_drs_t;

        return $this;
    }

    public function getDosDdnT(): ?string
    {
        return $this->dos_ddn_t;
    }

    public function setDosDdnT(string $dos_ddn_t): static
    {
        $this->dos_ddn_t = $dos_ddn_t;

        return $this;
    }

    public function getDosDpnT(): ?string
    {
        return $this->dos_dpn_t;
    }

    public function setDosDpnT(string $dos_dpn_t): static
    {
        $this->dos_dpn_t = $dos_dpn_t;

        return $this;
    }

    public function getDosDadT(): ?string
    {
        return $this->dos_dad_t;
    }

    public function setDosDadT(string $dos_dad_t): static
    {
        $this->dos_dad_t = $dos_dad_t;

        return $this;
    }

    public function getDocDcpT(): ?int
    {
        return $this->doc_dcp_t;
    }

    public function setDocDcpT(int $doc_dcp_t): static
    {
        $this->doc_dcp_t = $doc_dcp_t;

        return $this;
    }

    public function getDosDlcT(): ?string
    {
        return $this->dos_dlc_t;
    }

    public function setDosDlcT(string $dos_dlc_t): static
    {
        $this->dos_dlc_t = $dos_dlc_t;

        return $this;
    }

    public function getDosDnmT(): ?string
    {
        return $this->dos_dnm_t;
    }

    public function setDosDnmT(string $dos_dnm_t): static
    {
        $this->dos_dnm_t = $dos_dnm_t;

        return $this;
    }

    public function getDpcAnmT(): ?string
    {
        return $this->dpc_anm_t;
    }

    public function setDpcAnmT(string $dpc_anm_t): static
    {
        $this->dpc_anm_t = $dpc_anm_t;

        return $this;
    }

    public function getDpcApnT(): ?string
    {
        return $this->dpc_apn_t;
    }

    public function setDpcApnT(string $dpc_apn_t): static
    {
        $this->dpc_apn_t = $dpc_apn_t;

        return $this;
    }

    public function getDpcAadT(): ?string
    {
        return $this->dpc_aad_t;
    }

    public function setDpcAadT(string $dpc_aad_t): static
    {
        $this->dpc_aad_t = $dpc_aad_t;

        return $this;
    }

    public function getDpcAcpT(): ?int
    {
        return $this->dpc_acp_t;
    }

    public function setDpcAcpT(int $dpc_acp_t): static
    {
        $this->dpc_acp_t = $dpc_acp_t;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(string $nature): static
    {
        $this->nature = $nature;

        return $this;
    }

    public function getSurfEx(): ?int
    {
        return $this->surf_ex;
    }

    public function setSurfEx(int $surf_ex): static
    {
        $this->surf_ex = $surf_ex;

        return $this;
    }

    public function getSurfCc(): ?int
    {
        return $this->surf_cc;
    }

    public function setSurfCc(int $surf_cc): static
    {
        $this->surf_cc = $surf_cc;

        return $this;
    }

    public function getDateDemande(): ?string
    {
        return $this->date_demande;
    }

    public function setDateDemande(string $date_demande): static
    {
        $this->date_demande = $date_demande;

        return $this;
    }

    public function getDateDepot(): ?string
    {
        return $this->date_depot;
    }

    public function setDateDepot(string $date_depot): static
    {
        $this->date_depot = $date_depot;

        return $this;
    }

    public function getDateComplet(): ?string
    {
        return $this->date_complet;
    }

    public function setDateComplet(string $date_complet): static
    {
        $this->date_complet = $date_complet;

        return $this;
    }

    public function getDateDecision(): ?string
    {
        return $this->date_decision;
    }

    public function setDateDecision(string $date_decision): static
    {
        $this->date_decision = $date_decision;

        return $this;
    }

    public function getDecision(): ?int
    {
        return $this->decision;
    }

    public function setDecision(int $decision): static
    {
        $this->decision = $decision;

        return $this;
    }

    public function getSrt2(): ?int
    {
        return $this->srt_2;
    }

    public function setSrt2(int $srt_2): static
    {
        $this->srt_2 = $srt_2;

        return $this;
    }

    public function getSrt3(): ?string
    {
        return $this->srt_3;
    }

    public function setSrt3(string $srt_3): static
    {
        $this->srt_3 = $srt_3;

        return $this;
    }

    public function getINSEE(): ?int
    {
        return $this->INSEE;
    }

    public function setINSEE(int $INSEE): static
    {
        $this->INSEE = $INSEE;

        return $this;
    }
}
