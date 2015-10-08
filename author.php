<? get_header(); ?>
<div class="wrap">
  <div class="left">
    <?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
    <h3 class="author-header">Posts by <?php echo $curauth->display_name; ?></h3>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
        <h3><a class="article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
          <p><?php _e( 'Sorry, no posts have been written by this author' ); ?></p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<? get_footer(); ?>
