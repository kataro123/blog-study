<h3>Trending</h3>
<ul class="trending-post">
    <?php foreach ($posts as $index => $post) { ?>
        <li>
            <a href="<?= base_url('post/' . $post->slug) ?>">
                <span class="number"><?= ++$index ?></span>
                <h3><?= $post->title ?></h3>
                <span class="author"><?= $post->userFirstName . ' ' . $post->userLastName ?></span>
            </a>
        </li>
    <?php } ?>
</ul>