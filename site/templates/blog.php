<?php snippet('header') ?>

<?php
  $articles = $page->children()->visible()->flip();
?>

<main role="main">
  <?php foreach($articles as $article): ?>
    <?php $date = strtotime($article->datetime()) ?>
  <article class="m-post">
    <a href="<?php echo $article->url() ?>">
      <img src="<?php echo thumb($article->images()->find('thumb.jpg'), array('width' => 576, 'height' => 261, 'crop' => true), false) ?>" class="m-post__thumb">
    </a>
    <div class="m-post__matter">
      <h2><?php echo $article->title() ?></h2>
      <p><?php echo excerpt($article->text(), 300) ?></p>
    </div>
     <footer class="group">
      <time><?php echo date('d. M Y', $date) ?></time>
        <div class="m-cta-bar">
          <a href="<?php echo $article->url() ?>" class="m-button">Read more</a>
        </div>
      </footer>
  </article>
  <?php endforeach ?>
</main>
<?php snippet('footer')?>