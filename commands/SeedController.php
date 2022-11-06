<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\models\Category;
use app\models\Post;
use Faker\Factory;

class SeedController extends Controller
{

    public function actionCategory()
    {
        $faker = Factory::create();
 
        for($i = 0; $i < 8; $i++)
        {
          $category = new Category();
          $category->name = $faker->word();
          $category->keywords = $faker->words(3, true);
          $category->description = $faker->text(30);
          $category->save(false);
        }

        echo "Data generation is complete!\n";

        return ExitCode::OK;
    }

    public function actionPost()
    {
        $faker = Factory::create();
 
        for($i = 0; $i < 30; $i++)
        {
          $post = new Post();
          $post->category_id = $faker->numberBetween(1, 8);
          $post->title = $faker->text(30);
          $text = $faker->text(rand(300, 500));
          $post->excerpt = mb_substr($text, 0, 50) . '...';
          $post->text = $text;
          $post->keywords = $faker->words(3, true);
          $post->description = $faker->text(30);
          $post->save(false);
        }

        echo "Data generation is complete!\n";

        return ExitCode::OK;
    }
}
