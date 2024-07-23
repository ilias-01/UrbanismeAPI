<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240718141628 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis_depot (id INT AUTO_INCREMENT NOT NULL, srt INT NOT NULL, dateenclaire VARCHAR(255) NOT NULL, bie_adresse LONGTEXT NOT NULL, bie_cad_t LONGTEXT NOT NULL, trs_titre LONGTEXT NOT NULL, trs_nom LONGTEXT NOT NULL, trs_prenom LONGTEXT NOT NULL, trs_adresse LONGTEXT NOT NULL, trs_code_pos INT NOT NULL, trs_commune LONGTEXT NOT NULL, reference LONGTEXT NOT NULL, dos_drs_t LONGTEXT NOT NULL, dos_ddn_t LONGTEXT NOT NULL, dos_dpn_t VARCHAR(255) NOT NULL, dos_dad_t LONGTEXT NOT NULL, doc_dcp_t INT NOT NULL, dos_dlc_t VARCHAR(255) NOT NULL, dos_dnm_t LONGTEXT NOT NULL, dpc_anm_t LONGTEXT NOT NULL, dpc_apn_t VARCHAR(255) NOT NULL, dpc_aad_t LONGTEXT NOT NULL, dpc_acp_t INT NOT NULL, nature LONGTEXT NOT NULL, surf_ex INT NOT NULL, surf_cc INT NOT NULL, date_demande VARCHAR(255) NOT NULL, date_depot VARCHAR(255) NOT NULL, date_complet VARCHAR(255) NOT NULL, date_decision VARCHAR(255) NOT NULL, decision INT NOT NULL, srt_2 INT NOT NULL, srt_3 VARCHAR(255) NOT NULL, insee INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE v_ads_avis_depot');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE v_ads_avis_depot (srt INT NOT NULL, DATEENCLAIRE DATE NOT NULL, BIE_ADRESSE TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, BIE_CAD_T TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, TRS_TITRE TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, TRS_NOM TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, TRS_PRENOM TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, TRS_ADRESSE TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, TRS_CODEPOS INT NOT NULL, TRS_COMMUNE TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, REFERENCE TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dos_drs_t TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dos_ddn_t TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dos_dpn_t VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dos_dad_t TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dos_dcp_t INT NOT NULL, dos_dlc_t VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dos_dnm_t TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dpc_anm_t TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dpc_apn_t VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dpc_aad_t TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dpc_acp_t INT NOT NULL, nature TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, surf_ex INT NOT NULL, surf_cc INT NOT NULL, date_demande DATE NOT NULL, date_depot DATE NOT NULL, date_complet DATE NOT NULL, date_decision DATE NOT NULL, decision INT NOT NULL, srt_2 INT NOT NULL, srt_3 VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INSEE INT NOT NULL) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE avis_depot');
    }
}
