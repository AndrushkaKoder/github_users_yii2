<?php

namespace app\models;

use yii\db\ActiveRecord;

class Repo extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'repo';
    }
}