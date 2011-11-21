<?php $count = count($artists) ?>

<?php foreach ($artists as $k => $artist): ?>
    <a href="<?php echo url_for('artist/show?slug='.$artist->getSlug()) ?>">
        <?php echo $artist->getName() ?>
    </a><?php if ($k < $count - 1): ?>, <?php endif; ?>
<?php endforeach; ?>