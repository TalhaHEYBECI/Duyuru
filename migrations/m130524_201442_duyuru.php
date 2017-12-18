<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_duyuru extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%duyurus}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
			'description' => $this->text()->notNull(),
            'picture' => $this->text(),
        ], $tableOptions);

        $this->createTable('{{%duyuru_data}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'duyuru_id' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->createIndex(
            'idx_duyuru_data_duyuru_id-1',
            'duyuru_data',
            'duyuru_id'
        );

        $this->addForeignKey(
          'fk_duyuru_data_duyuru_id-1',
          'duyuru_data',
          'duyuru_id',
          'duyurus',
          'id'
        );

    }

    public function down()
    {
        $this->dropForeignKey('fk_duyuru_data_duyuru_id-1','duyuru_data');
        $this->dropIndex('idx_duyuru_data_duyuru_id-1','duyuru_data');
        $this->dropTable('{{%duyuru_data}}');
        $this->dropTable('{{%duyurus}}');
    }
}
