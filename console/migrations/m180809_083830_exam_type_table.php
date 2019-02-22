<?php

use yii\db\Migration;

/**
 * Class m180809_083830_exam_type_table
 */
class m180809_083830_exam_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%exam_type}}', [
            'exam_type_id' => $this->primaryKey(),
            'exam_type_name' => $this->string(50)->notNull()->unique(),
        ], $tableOptions);

        //populate records
        $this->insert('exam_type', ['exam_type_name' => 'K.C.P.E']);
        $this->insert('exam_type', ['exam_type_name' => 'K.C.S.E']);
        $this->insert('exam_type', ['exam_type_name' => 'Diploma']);
        $this->insert('exam_type', ['exam_type_name' => 'Undergraduate']);
        $this->insert('exam_type', ['exam_type_name' => 'Postgraduate']);

        $this->addForeignKey('fk-exam-type', 'user', 'exam_type', 'exam_type', 'exam_type_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-exam-type', 'user');
        $this->dropTable('exam_type');
    }
}
