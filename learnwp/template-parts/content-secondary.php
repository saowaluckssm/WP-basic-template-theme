<article <?php post_class( array( "class" => "secondary" ) ); ?>>
  
  <div class="thumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( "large", array( "class" => "img-fluid" ) ); ?></a>
  </div>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <div class="meta-info">
    <p><?php _e( "by", "learnwp"); ?><span><?php the_author_posts_link(); ?></span>
    <?php _e( "Categories:", "learnwp" ); ?><span><?php the_category( " "); ?></span>
    <?php the_tags( __( "Tags: ", "learnwp" ) . "<span>",",","</span>"); ?>
    </p>
    

  </div>
  <p><?php the_excerpt(); ?></p>

</article>