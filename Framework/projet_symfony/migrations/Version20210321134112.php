<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210321134112 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dessert (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, ingredients LONGTEXT NOT NULL, recette LONGTEXT NOT NULL, tempspreparation INT DEFAULT NULL, tempscuisson INT DEFAULT NULL, imgrecette VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entree (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, ingredients LONGTEXT NOT NULL, recette LONGTEXT NOT NULL, tempspreparation INT DEFAULT NULL, tempscuisson INT DEFAULT NULL, imgrecette VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, telephone INT DEFAULT NULL, admin TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plat (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, ingredients LONGTEXT NOT NULL, recette LONGTEXT NOT NULL, tempspreparation INT DEFAULT NULL, tempscuisson INT DEFAULT NULL, imgrecette VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, membres_id INT DEFAULT NULL, date DATE NOT NULL, heure INT NOT NULL, personne INT NOT NULL, INDEX IDX_42C8495571128C5C (membres_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_entree (reservation_id INT NOT NULL, entree_id INT NOT NULL, INDEX IDX_11723E3DB83297E7 (reservation_id), INDEX IDX_11723E3DAF7BD910 (entree_id), PRIMARY KEY(reservation_id, entree_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_plat (reservation_id INT NOT NULL, plat_id INT NOT NULL, INDEX IDX_36016F6FB83297E7 (reservation_id), INDEX IDX_36016F6FD73DB560 (plat_id), PRIMARY KEY(reservation_id, plat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_dessert (reservation_id INT NOT NULL, dessert_id INT NOT NULL, INDEX IDX_1EBCA013B83297E7 (reservation_id), INDEX IDX_1EBCA013745B52FD (dessert_id), PRIMARY KEY(reservation_id, dessert_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495571128C5C FOREIGN KEY (membres_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE reservation_entree ADD CONSTRAINT FK_11723E3DB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_entree ADD CONSTRAINT FK_11723E3DAF7BD910 FOREIGN KEY (entree_id) REFERENCES entree (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_plat ADD CONSTRAINT FK_36016F6FB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_plat ADD CONSTRAINT FK_36016F6FD73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_dessert ADD CONSTRAINT FK_1EBCA013B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_dessert ADD CONSTRAINT FK_1EBCA013745B52FD FOREIGN KEY (dessert_id) REFERENCES dessert (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_dessert DROP FOREIGN KEY FK_1EBCA013745B52FD');
        $this->addSql('ALTER TABLE reservation_entree DROP FOREIGN KEY FK_11723E3DAF7BD910');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495571128C5C');
        $this->addSql('ALTER TABLE reservation_plat DROP FOREIGN KEY FK_36016F6FD73DB560');
        $this->addSql('ALTER TABLE reservation_entree DROP FOREIGN KEY FK_11723E3DB83297E7');
        $this->addSql('ALTER TABLE reservation_plat DROP FOREIGN KEY FK_36016F6FB83297E7');
        $this->addSql('ALTER TABLE reservation_dessert DROP FOREIGN KEY FK_1EBCA013B83297E7');
        $this->addSql('DROP TABLE dessert');
        $this->addSql('DROP TABLE entree');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE plat');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE reservation_entree');
        $this->addSql('DROP TABLE reservation_plat');
        $this->addSql('DROP TABLE reservation_dessert');
    }
}
