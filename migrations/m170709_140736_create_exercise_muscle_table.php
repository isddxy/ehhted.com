<?php

use yii\db\Migration;

/**
 * Handles the creation of table `exercise_muscle`.
 */
class m170709_140736_create_exercise_muscle_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('exercise_muscle', [
            'id' => $this->primaryKey(),
            'exercise_id' => $this->integer(),
            'muscle_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('exercise_muscle');
    }
}
