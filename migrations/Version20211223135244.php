<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211223135244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_client (reservation_id INT NOT NULL, client_id INT NOT NULL, INDEX IDX_8FB54DCEB83297E7 (reservation_id), INDEX IDX_8FB54DCE19EB6921 (client_id), PRIMARY KEY(reservation_id, client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_voiture (reservation_id INT NOT NULL, voiture_id INT NOT NULL, INDEX IDX_8E773A8AB83297E7 (reservation_id), INDEX IDX_8E773A8A181A8BA (voiture_id), PRIMARY KEY(reservation_id, voiture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation_client ADD CONSTRAINT FK_8FB54DCEB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_client ADD CONSTRAINT FK_8FB54DCE19EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_voiture ADD CONSTRAINT FK_8E773A8AB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_voiture ADD CONSTRAINT FK_8E773A8A181A8BA FOREIGN KEY (voiture_id) REFERENCES voiture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559B97F6AD');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955E50D1B2E');
        $this->addSql('DROP INDEX IDX_42C84955E50D1B2E ON reservation');
        $this->addSql('DROP INDEX IDX_42C849559B97F6AD ON reservation');
        $this->addSql('ALTER TABLE reservation DROP pk_client_id, DROP pk_voiture_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservation_client');
        $this->addSql('DROP TABLE reservation_voiture');
        $this->addSql('ALTER TABLE reservation ADD pk_client_id INT DEFAULT NULL, ADD pk_voiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849559B97F6AD FOREIGN KEY (pk_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E50D1B2E FOREIGN KEY (pk_voiture_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_42C84955E50D1B2E ON reservation (pk_voiture_id)');
        $this->addSql('CREATE INDEX IDX_42C849559B97F6AD ON reservation (pk_client_id)');
    }
}
