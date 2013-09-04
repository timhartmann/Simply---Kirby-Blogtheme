<?php snippet('header') ?>
<?php $date = strtotime($page->datetime()) ?>

<main role="main">
  <article class="m-post">
    <img src="<?php echo thumb($page->images()->find('thumb.jpg'), array('width' => 576, 'height' => 261, 'crop' => true), false) ?>" class="m-post__thumb">
    <div class="m-post__matter">
      <h2><?php echo $page->title() ?></h2>
      <time><?php echo date('d. M Y', $date) ?></time>
      <p><?php echo kirbytext($page->text()) ?></p>
    </div>
  </article>
</main>
<?php snippet('footer')?>