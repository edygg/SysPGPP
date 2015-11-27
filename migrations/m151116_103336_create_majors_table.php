<?php

use yii\db\Schema;
use yii\db\Migration;

class m151116_103336_create_majors_table extends Migration
{
    public function up()
    {
      $this->createTable('majors', [
        'id' => $this->primaryKey(),
        'name' => $this->string()->notNull(),
        'faculty_id' => $this->integer(),
      ]);
      
      $this->addForeignKey('FK_faculty_major', 'majors', 'faculty_id', 'faculties', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('majors');
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
