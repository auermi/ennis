<? get_header(); ?>
<div class="wrap">
  <div class="left">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <h3><?php the_title(); ?></h3>
        <div class="article-details">
          <h4>Written by: <span class="author"><?php the_author_posts_link(); ?></span></h4>
          <h4>/</h4>
          <h4><?php the_time('F j, Y') ?></h4>
        </div>
        <?php
          if ( has_post_thumbnail() ) {
            $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'thumbname' );
            echo '<img src="' . $image_src[0] . '" width="100%" />';
          }  
        ?>
        <?php the_excerpt(); ?>
        <div class="article-button"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
      </article>
    <?php endwhile; else : ?>
          <h3>Thank you for installing the Ennis Wordpress Theme!</h3>
          <h5>Getting Started</h5>
          <ul>
            <li>Add a blog post</li>
            <li>Add widgets</li>
            <li>Change your site title</li>
            <li>Change your site tagline</li>
            <li>Update your header background</li>
          </ul>
          <br>
          <h5>About</h5>
          <ul>
            <li>The Ennis theme is a simple one page blogging theme. The theme also includes a small section for a brief biography and photo as well as a widget area.</li>
            <li>Add a blog post in the Wordpress dashboard to start using the theme.</li>
            <li>The Ennis theme is a free and open source theme developed by <a href="https://twitter.com/auermi" target="_blank">Michael Auer</a>. You can view the source on <a href="https://github.com/auermi/ennis" target="_blank">Github</a>.</li>
          </ul>
    <?php endif; ?>
  </div>
  <?php if ( have_posts() ) : ?>
    <?php get_sidebar(); ?>
  <? endif ?>
</div>
<? get_footer(); ?>
