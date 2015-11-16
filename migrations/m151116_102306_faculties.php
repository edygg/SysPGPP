<?php

use yii\db\Schema;
use yii\db\Migration;

class m151116_102306_faculties extends Migration
{
    public function up()
    {
      $this->createTable('faculties', [
        'id' => $this->primaryKey(),
        'name' => $this->string()->notNull(),
      ]);
    }

    public function down()
    {
        $this->dropTable('faculties');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
