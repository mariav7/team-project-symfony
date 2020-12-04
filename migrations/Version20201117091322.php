<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201117091322 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artiste (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type_de_artiste VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_art (id INT AUTO_INCREMENT NOT NULL, type_de_art VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oeuvre (id INT AUTO_INCREMENT NOT NULL, artiste_id INT NOT NULL, categorie_id INT NOT NULL, titre VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, technique VARCHAR(255) NOT NULL, bio VARCHAR(255) NOT NULL, INDEX IDX_35FE2EFE21D25844 (artiste_id), INDEX IDX_35FE2EFEBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE oeuvre ADD CONSTRAINT FK_35FE2EFE21D25844 FOREIGN KEY (artiste_id) REFERENCES artiste (id)');
        $this->addSql('ALTER TABLE oeuvre ADD CONSTRAINT FK_35FE2EFEBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_art (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oeuvre DROP FOREIGN KEY FK_35FE2EFE21D25844');
        $this->addSql('ALTER TABLE oeuvre DROP FOREIGN KEY FK_35FE2EFEBCF5E72D');
        $this->addSql('DROP TABLE artiste');
        $this->addSql('DROP TABLE categorie_art');
        $this->addSql('DROP TABLE oeuvre');
    }
}
