<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211223144644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C450B127');
        $this->addSql('DROP INDEX IDX_42C84955C450B127 ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE pk_voitue_id pk_voiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E50D1B2E FOREIGN KEY (pk_voiture_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_42C84955E50D1B2E ON reservation (pk_voiture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955E50D1B2E');
        $this->addSql('DROP INDEX IDX_42C84955E50D1B2E ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE pk_voiture_id pk_voitue_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C450B127 FOREIGN KEY (pk_voitue_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_42C84955C450B127 ON reservation (pk_voitue_id)');
    }
}
