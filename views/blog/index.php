
<div class="row">
    <!-- Blog entries-->
    <div class="col-md-8">
        <h1 class="my-4">
            Page Heading
        </h1>
        <?php foreach ($posts as $post): ?> 
        <!-- Blog post-->
        <div class="card mb-4">
            <img class="card-img-top" src="https://via.placeholder.com/750x300" alt="Card image cap" />
            <div class="card-body">
                <h2 class="card-title"><?= $post->title ?></h2>
                <p class="card-text"><?= $post->excerpt ?></p>
                <a class="btn btn-primary" href="<?= \yii\helpers\Url::to(['blog/post', 'id'=>$post->id])?>">Read More →</a>
            </div>
            <div class="card-footer text-muted">
                Posted on January 1, 2021 by
                <a href="#!">Start Bootstrap</a>
            </div>
        </div>
        <?php endforeach; ?>
        
        <!-- Pagination-->
        <?= \yii\widgets\LinkPager::widget([
            'pagination' => $pagination,
            'maxButtonCount' => 5,
            'activePageCssClass' => 'active',
            'linkContainerOptions' => ['class' => 'page-item'],
            'linkOptions' => ['class' => 'page-link'],
            'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
        ]) ?>
    </div>
    <!-- Side widgets-->
    <div class="col-md-4">
        <!-- Search widget-->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." />
                    <span class="input-group-append"><button class="btn btn-secondary" type="button">Go!</button></span>
                </div>
            </div>
        </div>
        <!-- Categories widget-->
        <?= \app\widgets\MenuWidget::widget()?>

        <!-- Side widget-->
        <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!</div>
        </div>
    </div>
</div>

