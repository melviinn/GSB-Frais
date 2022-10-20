<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221019173346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etat (id VARCHAR(255) NOT NULL, libelle VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche_frais (id_visiteur_id INT NOT NULL, mois_id INT NOT NULL, nb_justificatifs INT NOT NULL, montant_valide VARCHAR(15) NOT NULL, date_modif VARCHAR(10) NOT NULL, INDEX IDX_5FC0A6A76760FECA (id_visiteur_id), INDEX IDX_5FC0A6A7FA0749B8 (mois_id), PRIMARY KEY(id_visiteur_id, mois_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE frais_forfait (id VARCHAR(255) NOT NULL, libelle VARCHAR(20) NOT NULL, montant VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_frais_forfait (id_visiteur_id INT NOT NULL, mois_id INT NOT NULL, id_frais_forfait_id VARCHAR(255) NOT NULL, quantite INT NOT NULL, INDEX IDX_BD293ECF6760FECA (id_visiteur_id), INDEX IDX_BD293ECFFA0749B8 (mois_id), INDEX IDX_BD293ECF98FA628F (id_frais_forfait_id), PRIMARY KEY(id_visiteur_id, mois_id, id_frais_forfait_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_frais_hors_forfait (id INT AUTO_INCREMENT NOT NULL, id_visiteur_id INT DEFAULT NULL, mois_id INT DEFAULT NULL, libelle VARCHAR(100) NOT NULL, date VARCHAR(10) NOT NULL, montant VARCHAR(15) NOT NULL, INDEX IDX_EC01626D6760FECA (id_visiteur_id), INDEX IDX_EC01626DFA0749B8 (mois_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A76760FECA FOREIGN KEY (id_visiteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A7FA0749B8 FOREIGN KEY (mois_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECFFA0749B8 FOREIGN KEY (mois_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF98FA628F FOREIGN KEY (id_frais_forfait_id) REFERENCES frais_forfait (id)');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait ADD CONSTRAINT FK_EC01626D6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait ADD CONSTRAINT FK_EC01626DFA0749B8 FOREIGN KEY (mois_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(30) NOT NULL, ADD prenom VARCHAR(30) NOT NULL, ADD adresse VARCHAR(30) NOT NULL, ADD cp VARCHAR(5) NOT NULL, ADD ville VARCHAR(30) NOT NULL, ADD date_embauche VARCHAR(10) NOT NULL, CHANGE id id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A76760FECA');
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A7FA0749B8');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF6760FECA');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECFFA0749B8');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF98FA628F');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait DROP FOREIGN KEY FK_EC01626D6760FECA');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait DROP FOREIGN KEY FK_EC01626DFA0749B8');
        $this->addSql('DROP TABLE etat');
        $this->addSql('DROP TABLE fiche_frais');
        $this->addSql('DROP TABLE frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_hors_forfait');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom, DROP adresse, DROP cp, DROP ville, DROP date_embauche, CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }
}
