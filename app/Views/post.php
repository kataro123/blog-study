<?php

use CodeIgniter\I18n\Time;

$this->extend('master');

$this->section('content');
?>



<!-- Usar o TinyNCE para fazer isso aqui pelo painel -->

<section class="single-post-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 post-content" data-aos="fade-up">

                <!-- ======= Single Post Content ======= -->
                <div class="single-post">
                    <div class="post-meta"><span class="date"><?= $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y', strtotime($post->created_at)) ?></span></div>
                    <h1 class="mb-5"><?= $post->title ?></h1>
                    <p><span class="firstcharacter"><?= $post->description[0] ?></span><?= substr($post->description, 1) ?></p>
                </div><!-- End Single Post Content -->

                <!-- ======= Comments ======= -->
                <?php if ($comments) { ?>
                    <div class="comments">
                        <h5 class="comment-title py-4"><?= count($comments->comments) ?> Comments</h5>

                        <?php foreach ($comments->comments as $comment) { ?>

                            <div class="comment d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="<?= $comment->userAvatar ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                        <h6 class="me-2"><?= $comment->userFirstName . ' ' . $comment->userLastName ?></h6>
                                        <span class="text-muted">
                                            <?= Time::parse($comment->created_at, 'America/New_York')->humanize() ?>
                                            <?php if ($comment->isAuthor) { ?>
                                                <span class="badge bg-dark">My comment <i class="bi bi-star-fill"></i></span>

                                            <?php } else { ?>
                                                <?php if (session()->has('auth')) { ?>
                                                    <button type="button" class="btn btn-outline-primary btn-sm btn-reply" data-id="<?= $comment->id ?>">Reply to <?= $comment->userFirstName ?></button>
                                                <?php } ?>
                                            <?php } ?>
                                        </span>
                                    </div>
                                    <div class="comment-body">
                                        <?= $comment->comment ?>
                                    </div>
                                    <?php if (isset($comment->replies)) { ?>

                                        <div class="comment-replies bg-light p-3 mt-3 rounded">
                                            <h6 class="comment-replies-title mb-4 text-muted text-uppercase"><?= count($comment->replies) ?> replies</h6>

                                            <?php foreach ($comment->replies as $reply) { ?>

                                                <div class="reply d-flex mb-4">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar avatar-sm rounded-circle">
                                                            <img class="avatar-img" src="<?= $reply->userAvatar ?>" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 ms-sm-3">
                                                        <div class="reply-meta d-flex align-items-baseline">
                                                            <h6 class="mb-0 me-2"><?= $reply->userFirstName . ' ' . $reply->userLastName ?></h6>
                                                            <span class="text-muted">
                                                                <?= Time::parse($reply->created_at, 'America/New_York')->humanize() ?>
                                                                <?php if ($reply->isAuthor) { ?>
                                                                    <span class="badge bg-dark">My reply <i class="bi bi-star-fill"></i></span>
                                                                    <?php } else {
                                                                    if (session()->has('auth')) {
                                                                    ?>
                                                                        <button type="button" class="btn btn-outline-primary btn-sm btn-reply" data-id="<?= $comment->id ?>">Reply to <?= $reply->userFirstName ?></button>

                                                                <?php }
                                                                } ?>
                                                            </span>
                                                        </div>
                                                        <div class=" reply-body">
                                                            <?= $reply->comment ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>

                                        </div>

                                    <?php } ?>

                                </div>
                            </div>

                        <?php } ?>

                    </div><!-- End Comments -->
                <?php } ?>




                <!-- ======= Comments Form ======= -->
                <div class="row justify-content-center mt-5">

                    <span class="text-danger" style="font-size: 40px;"><?= session()->get('messageThrottleComment') ?? '' ?></span>

                    <div class="col-lg-12">
                        <h5 class="comment-title">Leave a Comment</h5>
                        <form action="<?= url_to('comment.store') ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="comment-name">Name</label>
                                    <input type="text" class="form-control" id="comment-name" placeholder="Enter your name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="comment-email">Email</label>
                                    <input type="text" class="form-control" id="comment-email" placeholder="Enter your email">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="comment-message">Message</label>

                                    <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary" value="Post comment">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- End Comments Form -->

            </div>
            <div class="col-md-3">
                <!-- ======= Sidebar ======= -->
                <?= view_cell('App\Cells\CategorySidebar::render') ?>
            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/modals/replies.php') ?>
<?= $this->section('js') ?>
<script src="<?= base_url('assets/js/replies.js') ?>"></script>
<?= $this->endSection() ?>

<?php $this->endSection(); ?>