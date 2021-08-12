<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <h1><?php the_title(); ?></h1>
    <div class="meta-info">
      <p><?php _e( "Posted in", "learnwp" ); ?><?php echo get_the_date(); ?><?php _e( "by", "learnwp"); ?><?php the_author_posts_link(); ?></p>
      <p><?php _e( "Categories:", "learnwp" ); ?><?php the_category(" "); ?></p>
      <p><?php the_tags( __('Tags: ', 'learnwp' ), ', ' ); ?></p>	
    </div>
  </header>

  <div class="content">
    <?php the_content(); ?>
  </div>


</article>