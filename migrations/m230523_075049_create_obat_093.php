<?php

use yii\db\Migration;

/**
 * Class m230523_075049_create_obat_093
 */
class m230523_075049_create_obat_093 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230523_075049_create_obat_093 cannot be reverted.\n";

        return false;
    }
    public function up()
{
    $this->createTable('obat_093', [
        'id' => $this->primaryKey(),
        'kode_obat' => $this->string()->notNull(),
        'harga' => $this->decimal(10, 2)->notNull(),
        'stok_obat' => $this->integer()->notNull(),
    ]);
}

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230523_075049_create_obat_093 cannot be reverted.\n";

        return false;
    }
    */
}
