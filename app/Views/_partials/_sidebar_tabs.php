<?php foreach ($posts as $post) { ?>
    <div class="post-entry-1 border-bottom">
        <div class="post-meta"><span class="date"><?= $post->categoryName ?></span> <span class="mx-1">&bullet;</span> <span><?= date('m/d/Y H:i:s', strtotime($post->created_at)) ?></span></div>
        <h2 class="mb-2"><a href="#"><?= $post->title ?></a></h2>
        <span class="author mb-3 d-block"><?= $post->userFirstName . ' ' . $post->userLastName ?></span>
    </div>

<?php } ?>