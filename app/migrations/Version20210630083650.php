<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210630083650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gifts_files ADD factory_gifts_id INT NOT NULL');
        $this->addSql('ALTER TABLE gifts_files ADD CONSTRAINT FK_D8B6BD795A15ACEF FOREIGN KEY (factory_gifts_id) REFERENCES factory_gifts (id)');
        $this->addSql('CREATE INDEX IDX_D8B6BD795A15ACEF ON gifts_files (factory_gifts_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gifts_files DROP FOREIGN KEY FK_D8B6BD795A15ACEF');
        $this->addSql('DROP INDEX IDX_D8B6BD795A15ACEF ON gifts_files');
        $this->addSql('ALTER TABLE gifts_files DROP factory_gifts_id');
    }
}
