<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221107091822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6495E0D5582');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498BAC62AF');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496BB74515');
        $this->addSql('DROP INDEX fk_8d93d6496bb74515 ON user');
        $this->addSql('CREATE INDEX IDX_8D93D6496BB74515 ON user (house_id)');
        $this->addSql('DROP INDEX fk_8d93d6498bac62af ON user');
        $this->addSql('CREATE INDEX IDX_8D93D6498BAC62AF ON user (city_id)');
        $this->addSql('DROP INDEX fk_8d93d6495e0d5582 ON user');
        $this->addSql('CREATE INDEX IDX_8D93D6495E0D5582 ON user (village_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6495E0D5582 FOREIGN KEY (village_id) REFERENCES village (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496BB74515 FOREIGN KEY (house_id) REFERENCES house (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496BB74515');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498BAC62AF');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6495E0D5582');
        $this->addSql('DROP INDEX idx_8d93d6495e0d5582 ON user');
        $this->addSql('CREATE INDEX FK_8D93D6495E0D5582 ON user (village_id)');
        $this->addSql('DROP INDEX idx_8d93d6496bb74515 ON user');
        $this->addSql('CREATE INDEX FK_8D93D6496BB74515 ON user (house_id)');
        $this->addSql('DROP INDEX idx_8d93d6498bac62af ON user');
        $this->addSql('CREATE INDEX FK_8D93D6498BAC62AF ON user (city_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496BB74515 FOREIGN KEY (house_id) REFERENCES house (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6495E0D5582 FOREIGN KEY (village_id) REFERENCES village (id)');
    }
}
