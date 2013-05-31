<?php snippet('header') ?>

<?php 
  $articles = $page->children()->visible()->flip();
?>

<section class="row" role="main">
  <?php foreach($articles as $article): ?>
    <?php $date = strtotime($article->datetime()) ?>
  <article>
    <a href="<?php echo $article->url() ?>">
      <img src="<?php echo $article->images()->find('thumb.jpg')->url() ?>" class="thumb">
    </a>
    <div class="matter">
      <h2><?php echo $article->title() ?></h2>
      <p><?php echo excerpt($article->text(), 300) ?></p>
    </div>
     <footer class="group">
      <time><?php echo date('d. M Y', $date) ?></time>
        <div class="cta-bar">
          <a href="<?php echo $article->url() ?>" class="btn">Read more</a>
        </div>
      </footer>
  </article>
  <?php endforeach ?>
</section>
<?php snippet('footer')?>