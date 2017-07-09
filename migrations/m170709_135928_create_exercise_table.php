<?php

use yii\db\Migration;

/**
 * Handles the creation of table `exercise`.
 */
class m170709_135928_create_exercise_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('exercise', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'image' => $this->string(),
            'viewed' => $this->integer(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('exercise');
    }
}
