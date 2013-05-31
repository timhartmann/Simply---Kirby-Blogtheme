<!DOCTYPE html>
<html dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>">
  <meta name="robots" content="index, follow">

  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <?php echo css('assets/stylesheets/main.css') ?>
  
  <?php echo js('assets/js/jquery.1.9.1.js') ?>
  <?php echo js('assets/js/app.js') ?>
</head>

<?php 
  $about = $pages->find('about-me');
  $social = yaml($about->social());
?>

<body class="<?php echo $site->uri->path(1) ?><?php if($site->uri->path(1) == 'blog' && $site->uri->path(2)) { echo ' article'; } ?>">
  <div class="wrapper">
    <header class="top">
      <div class="row group">
        <h1 class="logo"><a href="<?php echo $site->url() ?>">Simply</a></h1>
        <ul class="social">
          <li>Social Media:</li>
          <?php foreach($social as $point): ?>
            <li><a class="icon-<?php echo str::lower($point['Title']) ?>-sign" href="<?php echo $point['Link'] ?>" target="_blank"></a></li>
          <?php endforeach ?>
        </ul>
      </div>
    </header>
    <section class="about">
      <div class="row">
        <?php echo thumb($about->images()->find('blogger.jpg'), array('width' => 125 )) ?>
        <div>
          <h2><?php echo $about->name() ?>  I  <?php echo $about->age() ?>  I  <?php echo $about->position() ?></h2>
          <p class="subheader"><?php echo $about->text() ?></p>
        </div>
        <a href="" class="icon-remove-sign close"></a>
      </div>
    </section>