
<div class="row">
    <!-- Post content-->
    <div class="col-lg-8">
        <!-- Title-->
        <h1 class="mt-4"><?= $post->title ?></h1>
        <!-- Author-->
        <p class="lead">
            by
            <a href="#!">Start Bootstrap</a>
        </p>
        <hr />
        <!-- Date and time-->
        <p>Posted on January 1, 2021 at 12:00 PM</p>
        <hr />
        <!-- Preview image-->
        <img class="img-fluid rounded" src="https://via.placeholder.com/900x300" alt="..." />
        <hr />
        <!-- Post content-->
        <p class="lead"><?= $post->text ?></p>
        <hr />
        <!-- Comments form-->
        <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
                <form>
                    <div class="form-group"><textarea class="form-control" rows="3"></textarea></div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
        <!-- Single comment-->
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="..." />
            <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <!-- Comment with nested comments-->
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="..." />
            <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <div class="media mt-4">
                    <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="..." />
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <div class="media mt-4">
                    <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="..." />
                    <div class="media-body">
                        <h5 class="mt-0">Commenter Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar widgets column-->
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

