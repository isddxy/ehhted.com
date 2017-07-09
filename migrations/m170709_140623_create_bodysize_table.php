<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bodysize`.
 */
class m170709_140623_create_bodysize_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('bodysize', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'description' => $this->text(),
            'date' => $this->date(),
            'shoulders' => $this->double(),
            'wrist' => $this->double(),
            'forearms' => $this->double(),
            'chest' => $this->double(),
            'biceps' => $this->double(),
            'pelvis' => $this->double(),
            'waist' => $this->double(),
            'hip' => $this->double(),
            'calves' => $this->double(),
            'аnkle' => $this->double(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('bodysize');
    }
}
