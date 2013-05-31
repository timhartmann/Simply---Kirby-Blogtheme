<?php snippet('header') ?>
<?php $date = strtotime($page->datetime()) ?>

<section class="row" role="main">
  <article>
    <img src="<?php echo thumb($page->images()->find('thumb.jpg'), array('width' => 576, 'height' => 261, 'crop' => true), false) ?>" class="thumb">
    <div class="matter">
      <h2><?php echo $page->title() ?></h2>
      <time><?php echo date('d. M Y', $date) ?></time>
      <p><?php echo kirbytext($page->text()) ?></p>
    </div>
  </article>
</section>
<?php snippet('footer')?>