
<div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
        <ul class="list-unstyled mb-0">
            <?php foreach ($cats as $cat) : ?>
            <li><a href="<?= \yii\helpers\Url::to(['blog/category', 'id'=>$cat['id']])?>"><?= $cat['name']?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

