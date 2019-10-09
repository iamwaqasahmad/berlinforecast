<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191009115954 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE daily_forecasts (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, temperature LONGTEXT NOT NULL, day LONGTEXT NOT NULL, night LONGTEXT NOT NULL, sources VARCHAR(255) NOT NULL, mobile_link VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE headlines (id INT AUTO_INCREMENT NOT NULL, effective_date DATE DEFAULT NULL, effective_epoch_date VARCHAR(255) DEFAULT NULL, severity VARCHAR(255) DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, category VARCHAR(255) DEFAULT NULL, end_date VARCHAR(255) DEFAULT NULL, end_epoch_date VARCHAR(255) DEFAULT NULL, mobile_link VARCHAR(255) DEFAULT NULL, link VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE daily_forecasts');
        $this->addSql('DROP TABLE headlines');
    }
}
