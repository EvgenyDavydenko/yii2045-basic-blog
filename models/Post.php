<?php

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord{
    
    public static function tableName()
    {
        return 'post';
    }

    public function getCat()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}