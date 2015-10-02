<? get_header(); ?>
<header>
  <div class="header-inner">
    <div>
      <h1>Michael Auer</h1>
      <h2>I write code and occasional deep thoughts</h2>
    </div>
  </div>
</header>
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
        <p><?php the_excerpt(); ?></p>
        <div class="article-button"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
      </article>
    <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
  <div class="right">
    <h5>About Me</h5>
    <img src="img/headshot-vsco.jpg" alt="Personal picture" />
    <p>I love cats, bicycles, and good design. I write code by day and design by night.</p>
    <h5>Subscribe</h5>
    <p>Please enter your email address and subscribe to our email list to receive the latest updates</p>
    <input type="textfield" name="email" placeholder="Email Address">
    <button>SIGN UP</button>
  </div>
</div>
<? get_footer(); ?>
