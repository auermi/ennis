<? get_header(); ?>
<div class="wrap">
  <div class="left">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <h3><?php the_title(); ?></h3>
        <div class="article-details">
          <h4>Written by: <a class="author"><?php the_author(); ?></a></h4>
          <h4>/</h4>
          <h4><?php the_time('F j, Y') ?></h4>
        </div>
        <?php the_post_thumbnail('auto', 'auto'); ?>
        <?php the_excerpt(); ?>
        <div class="article-button"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
      </article>
    <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
  <div class="right">
    <h5>About Me</h5>
    <!-- <img src="img/headshot-vsco.jpg" alt="Personal picture" /> -->
    <?php echo get_avatar(get_the_author_meta('ID'), 207); ?>
    <p><?php echo get_the_author_meta('description');?></p>
    <?php get_sidebar(); ?>
  </div>
</div>
<? get_footer(); ?>
