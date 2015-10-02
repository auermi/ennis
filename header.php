<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header style="background-image: url(<?php echo get_header_image(); ?>);">
      <div class="header-inner">
        <div>
          <h1 style="color: #<?php echo get_header_textcolor() ?>;"><?php echo get_bloginfo('name') ?></h1>
          <h2 style="color: #<?php echo get_header_textcolor() ?>;"><?php echo get_bloginfo('description') ?></h2>
        </div>
      </div>
    </header>
