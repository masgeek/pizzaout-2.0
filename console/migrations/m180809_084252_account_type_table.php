<?php

use yii\db\Migration;

/**
 * Class m180809_084252_account_type_table
 */
class m180809_084252_account_type_table extends Migration
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

        $this->createTable('{{%account_type}}', [
            'account_type_id' => $this->primaryKey(),
            'account_type' => $this->string(50)->notNull()->unique(),
            'module_name' => $this->string(50)->notNull()->unique(),
            'description' => $this->text(),
            'class' => $this->string(10)->defaultValue('bg-dark'),
            'active' => $this->boolean()->defaultValue(true),
        ], $tableOptions);

        //populate records
        $this->insert('account_type', [
            'account_type' => 'CANDIDATE',
            'module_name' => 'candidate',
            'description' => 'Individual Candidate',
            'class' => 'bg-primary'
        ]);

        $this->insert('account_type', [
            'account_type' => 'PRINCIPAL',
            'module_name' => 'school',
            'description' => 'Principal of the school',
           // 'class' => 'bg-primary'
        ]);

        $this->insert('account_type', [
            'account_type' => 'SUB COUNTY DIRECTOR',
            'module_name' => 'sub-county',
            'description' => 'Sub county director of education',
            //'class' => 'bg-orange'
        ]);

        $this->insert('account_type',
            ['account_type' => 'COUNTY DIRECTOR',
                'module_name' => 'county',
                'description' => 'County director of education'
            ]);

        $this->addForeignKey('fk-account-type', 'user', 'account_type', 'account_type', 'account_type_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-account-type', 'user');
        $this->dropTable('account_type');
    }
}
