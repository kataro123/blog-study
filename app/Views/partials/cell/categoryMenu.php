<ul>
    <?php foreach ($categories as $category) { ?>
        <li><a href="<?= base_url('category/' . $category->slug); ?>"><?= $category->name ?></a></li>
    <?php } ?>
</ul>