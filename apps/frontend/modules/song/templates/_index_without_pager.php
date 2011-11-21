<ul>
    <?php foreach ($songs as $item): ?>
        <li>
            <a href="<?php echo url_for('song/show?slug='.$item->getSlug()) ?>">
                <?php echo $item->getTitle() ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
