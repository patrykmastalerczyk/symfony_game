<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190113165405 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX twitter_id ON core_members');
        $this->addSql('DROP INDEX member_groups ON core_members');
        $this->addSql('DROP INDEX name_index ON core_members');
        $this->addSql('CREATE INDEX twitter_id ON core_members (twitter_id)');
        $this->addSql('CREATE INDEX member_groups ON core_members (member_group_id, mgroup_others)');
        $this->addSql('CREATE INDEX name_index ON core_members (name)');
        $this->addSql('ALTER TABLE crp_products_groups DROP FOREIGN KEY FK_5DE4FAA14584665A');
        $this->addSql('ALTER TABLE crp_products_groups DROP FOREIGN KEY FK_5DE4FAA1FE54D947');
        $this->addSql('ALTER TABLE crp_products_groups ADD CONSTRAINT FK_5DE4FAA14584665A FOREIGN KEY (product_id) REFERENCES crp_products (product_uid) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE crp_products_groups ADD CONSTRAINT FK_5DE4FAA1FE54D947 FOREIGN KEY (group_id) REFERENCES crp_groups (group_uid) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX member_groups ON core_members');
        $this->addSql('DROP INDEX twitter_id ON core_members');
        $this->addSql('DROP INDEX name_index ON core_members');
        $this->addSql('CREATE INDEX member_groups ON core_members (member_group_id, mgroup_others(191))');
        $this->addSql('CREATE INDEX twitter_id ON core_members (twitter_id(191))');
        $this->addSql('CREATE INDEX name_index ON core_members (name(191))');
        $this->addSql('ALTER TABLE crp_products_groups DROP FOREIGN KEY FK_5DE4FAA14584665A');
        $this->addSql('ALTER TABLE crp_products_groups DROP FOREIGN KEY FK_5DE4FAA1FE54D947');
        $this->addSql('ALTER TABLE crp_products_groups ADD CONSTRAINT FK_5DE4FAA14584665A FOREIGN KEY (product_id) REFERENCES crp_products (product_uid)');
        $this->addSql('ALTER TABLE crp_products_groups ADD CONSTRAINT FK_5DE4FAA1FE54D947 FOREIGN KEY (group_id) REFERENCES crp_groups (group_uid)');
    }
}
