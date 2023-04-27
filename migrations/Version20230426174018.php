<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230426174018 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cart2 (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, products LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', quantity INT NOT NULL, total DOUBLE PRECISION NOT NULL, status TINYINT(1) NOT NULL, INDEX IDX_4FDB3BAAA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cart2 ADD CONSTRAINT FK_4FDB3BAAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart2 DROP FOREIGN KEY FK_4FDB3BAAA76ED395');
        $this->addSql('DROP TABLE cart2');
    }
}
