<?php

use yii\db\Schema;
use yii\db\Migration;

class m151211_152924_create_company_profiles extends Migration
{
    public function up()
    {
      $this->createTable('company_profiles', [
        'id' => $this->primaryKey(),
        'name' => $this->string()->notNull(),
        'phone_number' => $this->string()->notNull(),
        'email' => $this->string()->notNull(),
        'web_site_url' => $this->string(),
        'company_heading' => $this->string()->notNull(),
        'mission' => $this->string(),
        'vision' => $this->string(),
        'contact_name' => $this->string()->notNull(),
        'contact_phone_1' => $this->string()->notNull(),
        'contact_phone_2' => $this->string(),
        'contact_email' => $this->string()->notNull(),
        'contact_position' => $this->string(),
        'user_id' => $this->integer(),
      ]);
    }

    public function down()
    {
        $this->dropTable('company_profiles');
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
