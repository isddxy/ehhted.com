<?php

use yii\db\Migration;

/**
 * Handles the creation of table `work`.
 */
class m170709_140540_create_work_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('work', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'image' => $this->string(),
            'user_id' => $this->integer(),
            'date_start' => $this->date(),
            'date_end' => $this->date(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('work');
    }
}
