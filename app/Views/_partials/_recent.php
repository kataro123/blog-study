<div class="container">
    <div class="row g-5">
        <div class="col-lg-4">
            <?php $post = $recent[0]; ?>
            <div class="post-entry-1 lg">
                <a href="<?= base_url('post/' . $post->slug) ?>"><img src="<?= $post->image ?>" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date"><?= $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($post->created_at)) ?></span></div>
                <h2><a href="<?= base_url('post/' . $post->slug) ?>"><?= $post->title ?></a></h2>
                <p class="mb-4 d-block"><?= word_limiter($post->description, 40) ?></p>

                <div class="d-flex align-items-center author">
                    <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                    <div class="name">
                        <h3 class="m-0 p-0"><?= $post->userFirstName . ' ' . $post->userLastName ?></h3>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8">
            <div class="row g-5">
                <div class="col-lg-4 border-start custom-border">
                    <?php $posts = array_slice($recent, 1, 3);

                    foreach ($posts as $post) { ?>
                        <div class="post-entry-1">
                            <a href="<?= base_url('post/' . $post->slug) ?>"><img src="<?= $post->image ?>" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date"><?= $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($post->created_at)) ?></span></div>
                            <h2><a href="<?= base_url('post/' . $post->slug) ?>"><?= $post->title ?></a></h2>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-4 border-start custom-border">
                    <?php
                    $posts = array_slice($recent, 4, 6);

                    foreach ($posts as $post) {
                    ?>
                        <div class="post-entry-1">
                            <a href="<?= base_url('post/' . $post->slug) ?>"><img src="<?= $post->image ?>" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date"><?= $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($post->created_at)) ?></span></div>
                            <h2><a href="<?= base_url('post/' . $post->slug) ?>"><?= $post->title ?></a></h2>
                        </div>
                    <?php } ?>
                </div>

                <!-- Trending Section -->
                <div class="col-lg-4">
                    <div class="trending _trending">
                        <include-fragment src="trending/home">
                            <?= $this->include('_placeholders/_trending.php'); ?>
                        </include-fragment>
                    </div>
                </div> <!-- End Trending Section -->
            </div>
        </div>

    </div> <!-- End .row -->
</div>