<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150406203621 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Image (id INT AUTO_INCREMENT NOT NULL, property_id INT DEFAULT NULL, user_id INT DEFAULT NULL, created_at DATETIME NOT NULL, main TINYINT(1) NOT NULL, temporal_file_name VARCHAR(255) DEFAULT NULL, type INT NOT NULL, INDEX IDX_4FC2B5B549213EC (property_id), INDEX IDX_4FC2B5BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Operation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, cost_id INT DEFAULT NULL, property_id INT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, operation_type INT NOT NULL, INDEX IDX_9B7024CEA76ED395 (user_id), INDEX IDX_9B7024CE1DBF857F (cost_id), INDEX IDX_9B7024CE549213EC (property_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Property (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, postcode VARCHAR(100) NOT NULL, address VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, age INT NOT NULL, rooms INT NOT NULL, uncoveredArea NUMERIC(10, 2) NOT NULL, coveredArea NUMERIC(10, 2) NOT NULL, totalArea NUMERIC(10, 2) NOT NULL, credit TINYINT(1) NOT NULL, financing TINYINT(1) NOT NULL, json_attributes LONGTEXT DEFAULT NULL, type INT NOT NULL, INDEX IDX_72847E88A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, username VARCHAR(100) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(100) NOT NULL, date_of_birth DATETIME NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cost (id INT AUTO_INCREMENT NOT NULL, currency_id INT DEFAULT NULL, value NUMERIC(10, 2) NOT NULL, INDEX IDX_182694FC38248176 (currency_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image_presentation (id INT AUTO_INCREMENT NOT NULL, image_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, width INT NOT NULL, height INT NOT NULL, url VARCHAR(255) DEFAULT NULL, static_file_name VARCHAR(255) DEFAULT NULL, INDEX IDX_91A990FF3DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE currency (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, iso_code VARCHAR(100) NOT NULL, symbol VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Image ADD CONSTRAINT FK_4FC2B5B549213EC FOREIGN KEY (property_id) REFERENCES Property (id)');
        $this->addSql('ALTER TABLE Image ADD CONSTRAINT FK_4FC2B5BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE Operation ADD CONSTRAINT FK_9B7024CEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE Operation ADD CONSTRAINT FK_9B7024CE1DBF857F FOREIGN KEY (cost_id) REFERENCES cost (id)');
        $this->addSql('ALTER TABLE Operation ADD CONSTRAINT FK_9B7024CE549213EC FOREIGN KEY (property_id) REFERENCES Property (id)');
        $this->addSql('ALTER TABLE Property ADD CONSTRAINT FK_72847E88A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE cost ADD CONSTRAINT FK_182694FC38248176 FOREIGN KEY (currency_id) REFERENCES currency (id)');
        $this->addSql('ALTER TABLE image_presentation ADD CONSTRAINT FK_91A990FF3DA5256D FOREIGN KEY (image_id) REFERENCES Image (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE image_presentation DROP FOREIGN KEY FK_91A990FF3DA5256D');
        $this->addSql('ALTER TABLE Image DROP FOREIGN KEY FK_4FC2B5B549213EC');
        $this->addSql('ALTER TABLE Operation DROP FOREIGN KEY FK_9B7024CE549213EC');
        $this->addSql('ALTER TABLE Image DROP FOREIGN KEY FK_4FC2B5BA76ED395');
        $this->addSql('ALTER TABLE Operation DROP FOREIGN KEY FK_9B7024CEA76ED395');
        $this->addSql('ALTER TABLE Property DROP FOREIGN KEY FK_72847E88A76ED395');
        $this->addSql('ALTER TABLE Operation DROP FOREIGN KEY FK_9B7024CE1DBF857F');
        $this->addSql('ALTER TABLE cost DROP FOREIGN KEY FK_182694FC38248176');
        $this->addSql('DROP TABLE Image');
        $this->addSql('DROP TABLE Operation');
        $this->addSql('DROP TABLE Property');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE cost');
        $this->addSql('DROP TABLE image_presentation');
        $this->addSql('DROP TABLE currency');
    }
}
