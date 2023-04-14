<?php

use yii\db\Migration;

class m230413_115936_add_params_field extends Migration
{
    private const TABLE_NAME = '{{%async}}';
    private const COLUMN_NAME = 'params';

    public function safeUp()
    {
        $this->addColumn(
            self::TABLE_NAME,
            self::COLUMN_NAME,
            $this->json()->null()->defaultValue(null)
        );

        // index
    }

    public function safeDown()
    {
        $this->dropColumn(self::TABLE_NAME, self::COLUMN_NAME);
    }

}
