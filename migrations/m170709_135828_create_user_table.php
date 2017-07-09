<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170709_135828_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->defaultValue(null),
            'firstname' => $this->string()->defaultValue(null),
            'lastname' => $this->string()->defaultValue(null),
            'email' => $this->string(),
            'password' => $this->string(),
            'photo' => $this->string()->defaultValue(null),
            'isAdmin' => $this->string()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
