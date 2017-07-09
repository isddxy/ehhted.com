<?php

use yii\db\Migration;

/**
 * Handles the creation of table `workexercise`.
 */
class m170709_140614_create_workexercise_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('workexercise', [
            'id' => $this->primaryKey(),
            'work_id' => $this->integer(),
            'exercise_id' => $this->integer(),
            'user_id' => $this->integer(),
            'date' => $this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('workexercise');
    }
}
