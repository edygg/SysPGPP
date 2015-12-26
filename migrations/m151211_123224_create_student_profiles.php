<?php

use yii\db\Schema;
use yii\db\Migration;

class m151211_123224_create_student_profiles extends Migration
{
    public function up()
    {
      $this->createTable('student_profiles', [
        'id' => $this->primaryKey(),
        'first_name' => $this->string()->notNull(),
        'last_name' => $this->string()->notNull(),
        'unitec_id_number' => $this->string()->notNull(),
        'major_id' => $this->integer(),
        'campus_id' => $this->integer(),
        'user_id' => $this->integer(),
      ]);

      $this->addForeignKey('FK_student_profiles_majors', 'student_profiles', 'major_id', 'majors', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('FK_student_profiles_campus', 'student_profiles', 'campus_id', 'campus', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTale('student_profiles');
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
