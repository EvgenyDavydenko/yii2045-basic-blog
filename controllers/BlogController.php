<?php

namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Post;

class BlogController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Post::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $posts = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'posts' => $posts,
            'pagination' => $pagination,
        ]);
    }

    public function actionPost($id)
    {
        //$id = \Yii::$app->request->get('id');
        $post = Post::find()->where(['id' => $id])->one();
        return $this->render('post', ['post' => $post]);
    }
}
