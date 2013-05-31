<?php snippet('header') ?>
<?php $date = strtotime($page->datetime()) ?>

<section class="row" role="main">
  <article>
    <img src="<?php echo $page->images()->find('thumb.jpg')->url() ?>" class="thumb">
    <div class="matter">
      <h2><?php echo $page->title() ?></h2>
      <time><?php echo date('d. M Y', $date) ?></time>
      <p><?php echo kirbytext($page->text()) ?></p>
    </div>
  </article>
</section>
<?php snippet('footer')?>