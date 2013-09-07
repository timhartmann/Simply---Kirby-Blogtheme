<?php snippet('header') ?>

<main role="main">
  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
  </article>
</main>

<?php snippet('footer') ?>