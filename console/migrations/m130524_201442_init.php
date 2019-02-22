<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(50)->notNull()->unique(), //can be phone number etec
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string()->notNull(),
            'role' => $this->smallInteger()->notNull()->defaultValue(10), //Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',

            'account_type' => $this->integer(3), //define the account type
            'exam_ref' => $this->string(50)->notNull(), //hold the registration number of the student
            'exam_type' => $this->integer(3), //hold the type of exams one is registering for
            'exam_year' => $this->string(32)->notNull(), //hold the year exams was done


            'status' => $this->smallInteger()->notNull()->defaultValue(10), //10 means active
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx-exam-ref-year', 'user', ['exam_ref', 'exam_year'], true); //create unique index
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
