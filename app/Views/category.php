<?php $this->extend('master');

$this->section('content');

?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-md-9" data-aos="fade-up">
                <h3 class="category-title">Category: <?= $posts[0]->categoryName ?? 'Sem Postagens nessa categoria' ?></h3>

                <?php foreach ($posts as $post) { ?>

                    <div class="d-md-flex post-entry-2 half">
                        <a href="<?= base_url('post/' . $post->slug) ?>" class="me-4 thumbnail">
                            <img src="<?= $post->image; ?>" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date"><?= $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($post->created_at)) ?></span></div>
                            <h3><a href="<?= base_url('post/' . $post->slug) ?>"><?= $post->title ?></a></h3>
                            <p><?= word_limiter($post->description, 20) ?></p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="<?= $post->userAvatar ?>" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0"><?= $post->userFirstName . ' ' . $post->userLastName ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <div class="text-start py-4">
                    <div class="custom-pagination">
                        <?= $pager->links(); ?>
                        <!-- <a href="#" class="prev">Prevous</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#" class="next">Next</a> -->
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <?= view_cell('App\Cells\CategorySidebar::render') ?>
            </div>

        </div>
    </div>
</section>

<?php $this->section('js') ?>
<script type="module" src="https://unpkg.com/@github/include-fragment-element"></script>
<?php $this->endSection() ?>

<?php $this->endSection(); ?>