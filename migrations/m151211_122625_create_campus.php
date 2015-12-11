<?php

use yii\db\Schema;
use yii\db\Migration;

class m151211_122625_create_campus extends Migration
{
    public function up()
    {
      $this->createTable('campus', [
        'id' => $this->primaryKey(),
        'name' => $this->string()->notNull(),
      ]);
    }

    public function down()
    {
        $this->dropTable('campus');
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
