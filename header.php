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
          <?php if (display_header_text()): ?>
            <a href="<?php echo home_url() ?>"><h1 style="color: #<?php echo get_header_textcolor() ?>;"><?php echo get_bloginfo('name') ?></h1></a>
            <h2 style="color: #<?php echo get_header_textcolor() ?>;"><?php echo get_bloginfo('description') ?></h2>
          <?php endif; ?>
        </div>
      </div>
    </header>
