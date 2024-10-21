<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%repo}}`.
 */
class m241021_175905_create_repo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%repo}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'title' => $this->string(255)->notNull(),
            'url' => $this->string('255')->notNull(),
            'description' => $this->text()->null()->defaultValue(null),
            'created_at' => $this->timestamp()
        ]);

        $this->addForeignKey(
            'fk-repo_user_id',
            'repo',
            'user_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%repo}}');
    }
}
