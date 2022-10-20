<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221020143902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etat (id VARCHAR(255) NOT NULL, libelle VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche_frais (id INT NOT NULL, mois VARCHAR(255) NOT NULL, id_visiteur_id VARCHAR(255) NOT NULL, id_etat_id VARCHAR(255) DEFAULT NULL, nb_justificatifs INT NOT NULL, montant_valide VARCHAR(15) NOT NULL, date_modif VARCHAR(10) NOT NULL, INDEX IDX_5FC0A6A76760FECA (id_visiteur_id), INDEX IDX_5FC0A6A7D3C32F8F (id_etat_id), PRIMARY KEY(id, id_visiteur_id, mois)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE frais_forfait (id VARCHAR(255) NOT NULL, libelle VARCHAR(20) NOT NULL, montant VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_frais_forfait (id_visiteur_id VARCHAR(255) NOT NULL, id_frais_forfait_id VARCHAR(255) NOT NULL, mois_id INT DEFAULT NULL, quantite INT NOT NULL, INDEX IDX_BD293ECF6760FECA (id_visiteur_id), INDEX IDX_BD293ECF98FA628F (id_frais_forfait_id), INDEX IDX_BD293ECFFA0749B8 (mois_id), PRIMARY KEY(id_visiteur_id, id_frais_forfait_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_frais_hors_forfait (id INT AUTO_INCREMENT NOT NULL, id_visiteur_id VARCHAR(255) DEFAULT NULL, mois_id INT DEFAULT NULL, libelle VARCHAR(100) NOT NULL, date VARCHAR(10) NOT NULL, montant VARCHAR(15) NOT NULL, INDEX IDX_EC01626D6760FECA (id_visiteur_id), INDEX IDX_EC01626DFA0749B8 (mois_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id VARCHAR(255) NOT NULL, login VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, adresse VARCHAR(30) NOT NULL, cp VARCHAR(5) NOT NULL, ville VARCHAR(30) NOT NULL, date_embauche VARCHAR(10) NOT NULL, UNIQUE INDEX UNIQ_8D93D649AA08CB10 (login), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visiteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, login VARCHAR(20) NOT NULL, mdp VARCHAR(20) NOT NULL, adresse VARCHAR(30) NOT NULL, cp VARCHAR(5) NOT NULL, ville VARCHAR(30) NOT NULL, date_embauche VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A76760FECA FOREIGN KEY (id_visiteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A7D3C32F8F FOREIGN KEY (id_etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF98FA628F FOREIGN KEY (id_frais_forfait_id) REFERENCES frais_forfait (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECFFA0749B8 FOREIGN KEY (mois_id) REFERENCES fiche_frais (id)');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait ADD CONSTRAINT FK_EC01626D6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait ADD CONSTRAINT FK_EC01626DFA0749B8 FOREIGN KEY (mois_id) REFERENCES fiche_frais (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A76760FECA');
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A7D3C32F8F');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF6760FECA');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF98FA628F');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECFFA0749B8');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait DROP FOREIGN KEY FK_EC01626D6760FECA');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait DROP FOREIGN KEY FK_EC01626DFA0749B8');
        $this->addSql('DROP TABLE etat');
        $this->addSql('DROP TABLE fiche_frais');
        $this->addSql('DROP TABLE frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_hors_forfait');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE visiteur');
    }
}
