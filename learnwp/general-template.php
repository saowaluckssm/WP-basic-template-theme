<?php 

/*
Template Name: General Template
*/

 ?>

 <?php get_header(); ?>

 <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
 
	<div class="content-area">
		<main>

			<section class="middle-area">
				<div class="container">


						<div class="general-template">
							<?php 

							// If there are any posts
							if( have_posts() ):
								// While have posts, show them to us
								while( have_posts() ): the_post();

							 ?>

							<article>
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
							</article>

							 <?php 
							 endwhile;
							 else: 
							  ?>

							  
								<p><?php _e( "There&rsquo;s nothing yet to be displayed!", "learnwp" ); ?></p>

							<?php endif; ?>

						</div>							

				</div>
			</section>

		</main>
	</div>
<?php get_footer(); ?>