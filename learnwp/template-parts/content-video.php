<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a>
	<div class="meta-info">
		<p><?php _e( "Posted in", "learnwp" ); ?><?php echo get_the_date(); ?><?php _e( "by", "learnwp"); ?><?php the_author_posts_link(); ?></p>
		<p><?php _e( "Categories:", "learnwp" ); ?><?php the_category( ' ' ); ?></p>
		<p><?php the_tags( __('Tags: ', 'learnwp' ), ', ' ); ?></p>			
	</div>
	<p><?php the_content(); ?></p>
</article>