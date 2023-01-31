<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $excerpt
 * @property string $text
 * @property string|null $keywords
 * @property string|null $description
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    public function getCat()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'excerpt', 'text'], 'required'],
            [['category_id'], 'integer'],
            [['text'], 'string'],
            [['title', 'excerpt', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'title' => 'Заголовок',
            'excerpt' => 'Цитата',
            'text' => 'Содержание',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
