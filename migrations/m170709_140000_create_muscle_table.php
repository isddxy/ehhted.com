<?php

use yii\db\Migration;

/**
 * Handles the creation of table `muscle`.
 */
class m170709_140000_create_muscle_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('muscle', [
            'id' => $this->primaryKey(),
            'musclegroup_id' => $this->integer(),
            'name' => $this->string(),
            'image' => $this->string(),
            'description' => $this->text(),
            'viewed' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('muscle');
    }
}
