<div class="right">
  <h5>About Me</h5>
  <?php $args = array('size' => 320); ?>
  <?php $avatar_src = get_avatar_url(get_the_author_meta('ID'), $args); echo '<img src="' . $avatar_src . '" width="100%" />'; ?>
  <?php if (get_the_author_meta('description') === ""): ?>
    <p>Add a profile description here from the Wordpress dashboard.</p>
  <?php endif; ?>
  <p><?php echo get_the_author_meta('description');?></p>

  <?php dynamic_sidebar( 'page' ); ?>
</div>
