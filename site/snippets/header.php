<!DOCTYPE html>
<html dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>">
  <meta name="robots" content="index, follow">

  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway'>
  <?php echo css('assets/build/stylesheets/application.min.css') ?>
</head>

<?php
  $about = $pages->find('about-me');
  $social = yaml($about->social());
?>

<body class="<?php echo $site->uri->path(1) ?><?php if($site->uri->path(1) == 'l-blog' && $site->uri->path(2)) { echo ' l-post'; } ?>">
  <div class="l-wrapper">
    <header class="l-banner" role="banner">
      <div class="row group">
        <h1 class="l-banner__logo"><a href="<?php echo $site->url() ?>">Simply</a></h1>
        <ul class="m-list m-list--abreast">
          <li>Social Media:</li>
          <?php foreach($social as $point): ?>
            <li><a class="icon--<?php echo str::lower($point['Title']) ?>-sign" href="<?php echo $point['Link'] ?>" target="_blank"></a></li>
          <?php endforeach ?>
        </ul>
      </div>
    </header>
    <aside class="l-about">
      <div class="l-row">
        <?php echo thumb($about->images()->find('blogger.jpg'), array('width' => 125 )) ?>
        <div>
          <h2><?php echo $about->name() ?>  I  <?php echo $about->age() ?>  I  <?php echo $about->position() ?></h2>
          <p class="m-subheader"><?php echo $about->text() ?></p>
        </div>
        <a href="" class="icon--remove-sign close"></a>
      </div>
    </aside>