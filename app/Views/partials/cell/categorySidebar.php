<ul class="aside-links list-unstyled">
    <?php foreach ($categories as $category) { ?>
        <li><a href="<?= base_url('category/' . $category->slug) ?>"><i class="bi bi-chevron-right"></i> <?= $category->name ?></a></li>
    <?php } ?>
</ul>