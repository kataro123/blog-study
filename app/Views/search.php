<?php
echo $this->extend('master');
echo $this->section('content');
?>

<section id="search-result" class="search-result">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <?php if (!$posts) { ?>
                    <h3 class="category-title">Posts not found(0)</h3>
                    <p>Your search for <?= $searched ?> </p>

                <?php } else { ?>

                    <h3 class="category-title">Search Results (<?= $pager->getTotal(); ?>)</h3>

                    <?php foreach ($posts as $post) { ?>

                        <div class="d-md-flex post-entry-2 small-img">
                            <a href="<?= base_url("post/{$post->slug}") ?>" class="me-4 thumbnail">
                                <img src="<?= $post->image ?>" alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date"><?= $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('d/m/Y', strtotime($post->created_at)) ?></span></div>
                                <h3><a href="<?= base_url("post/{$post->slug}") ?>"><?= $post->title ?></a></h3>
                                <p><?= word_limiter($post->description, 20) ?></p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="<?= $post->avatar ?>" alt="" class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0"><?= $post->userFirstName . ' ' . $post->userLastName ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>


                    <!-- Paging -->
                    <div class="text-start py-4">
                        <div class="custom-pagination">
                            <?= $pager->links(); ?>
                        </div>
                    </div><!-- End Paging -->
                <?php } ?>

            </div>

            <div class="col-md-3">
                <?= view_cell("App\Cells\CategorySidebar::render") ?>
            </div>

        </div>
    </div>
</section> <!-- End Search Result -->

<?= $this->section('js') ?>
<script type="module" src="https://unpkg.com/@github/include-fragment-element"></script>
<?= $this->endSection(); ?>
<?= $this->endSection(); ?>