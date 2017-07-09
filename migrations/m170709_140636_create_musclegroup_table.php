<?php

use yii\db\Migration;

/**
 * Handles the creation of table `musclegroup`.
 */
class m170709_140636_create_musclegroup_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('musclegroup', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
            'image' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('musclegroup');
    }
}
