<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190328103621 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animal ADD pet_specie_id INT NOT NULL, CHANGE age age DOUBLE PRECISION DEFAULT NULL, CHANGE characteristics characteristics VARCHAR(500) DEFAULT NULL, CHANGE date_lost date_lost DATE DEFAULT NULL, CHANGE date_found date_found DATE DEFAULT NULL, CHANGE stories stories VARCHAR(600) DEFAULT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F30DFA3B3 FOREIGN KEY (pet_specie_id) REFERENCES specie (id)');
        $this->addSql('CREATE INDEX IDX_6AAB231F30DFA3B3 ON animal (pet_specie_id)');
        $this->addSql('ALTER TABLE user CHANGE last_name last_name VARCHAR(255) DEFAULT NULL, CHANGE phone2 phone2 VARCHAR(255) DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE site_web site_web VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F30DFA3B3');
        $this->addSql('DROP INDEX IDX_6AAB231F30DFA3B3 ON animal');
        $this->addSql('ALTER TABLE animal DROP pet_specie_id, CHANGE age age DOUBLE PRECISION DEFAULT \'NULL\', CHANGE characteristics characteristics VARCHAR(500) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE date_lost date_lost DATE DEFAULT \'NULL\', CHANGE date_found date_found DATE DEFAULT \'NULL\', CHANGE stories stories VARCHAR(600) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user CHANGE last_name last_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE phone2 phone2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE adress adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE site_web site_web VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
