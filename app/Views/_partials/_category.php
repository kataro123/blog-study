<div class="container">

    <div class="section-header d-flex justify-content-between align-items-center mb-5">
        <h2><?= $posts[0]->categoryName ?></h2>
        <div><a href="category.html" class="more">See All <?= $posts[0]->categoryName; ?></a></div>
    </div>

    <div class="row">
        <div class="col-md-9">

            <div class="d-lg-flex post-entry-2">
                <a href="<?= base_url('post/' . $posts[0]->slug) ?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                    <img src="<?= $posts[0]->image ?>" alt="" class="img-fluid">
                </a>
                <div>
                    <div class="post-meta"><span class="date"><?= $posts[0]->categoryName; ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($posts[0]->created_at)) ?></span></div>
                    <h3><a href="<?= base_url('post/' . $posts[0]->slug) ?>"><?= $posts[0]->title ?></a></h3>
                    <p><?= word_limiter($posts[0]->description, 30) ?></p>
                    <div class="d-flex align-items-center author">
                        <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0"><?= $posts[0]->userFirstName . ' ' . $posts[0]->userLastName ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="post-entry-1 border-bottom">
                        <a href="<?= base_url('post/' . $posts[2]->slug) ?>"><img src="<?= $posts[2]->image ?>" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date"><?= $posts[2]->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($posts[2]->created_at)) ?></span></div>
                        <h2 class="mb-2"><a href="<?= base_url('post/' . $posts[2]->slug) ?>"><?= $posts[2]->title ?></a></h2>
                        <span class="author mb-3 d-block"><?= $posts[2]->userFirstName . ' ' . $posts[2]->userLastName ?></span>
                        <p class="mb-4 d-block"><?= word_limiter($posts[2]->description, 15) ?></p>
                    </div>

                    <div class="post-entry-1">
                        <div class="post-meta"><span class="date"><?= $posts[3]->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($posts[3]->created_at)) ?></span></div>
                        <h2 class="mb-2"><a href="<?= base_url('post/' . $posts[3]->slug) ?>"><?= $posts[3]->title ?></a></h2>
                        <span class="author mb-3 d-block"><?= $posts[3]->userFirstName . ' ' . $posts[3]->userLastName ?></span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="post-entry-1">
                        <a href="<?= base_url('post/' . $posts[1]->slug) ?>"><img src="<?= $posts[1]->image ?>" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date"><?= $posts[1]->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($posts[1]->created_at)) ?></span></div>
                        <h2 class="mb-2"><a href="<?= base_url('post/' . $posts[1]->slug) ?>"><?= $posts[1]->title ?></a></h2>
                        <span class="author mb-3 d-block"><?= $posts[1]->userFirstName . ' ' . $posts[1]->userLastName ?></span>
                        <p class="mb-4 d-block"><?= word_limiter($posts[1]->description, 15) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <?php $posts = array_slice($posts, 4, 9);

            foreach ($posts as $post) {
            ?>
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date"><?= $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($post->created_at)) ?></span></div>
                    <h2 class="mb-2"><a href="<?= base_url('post/' . $post->slug) ?>"><?= $post->title ?></a></h2>
                    <span class="author mb-3 d-block"><?= $post->userFirstName . ' ' . $post->userLastName ?></span>
                </div>

            <?php } ?>

        </div>
    </div>
</div>