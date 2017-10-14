
<?php get_header() ?>

<div class="container">
	<div class="row">
		    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portafolio-fotos.png" class="img-responsive" alt="texto portafolio fotográfico">
  <h2> FOTOGRAFÍAS DE MATRIMONIOS & EVENTOS</h2>
  <hr align="center"/>

		<?php

			$query = new WP_Query( array( 'post_type' => 'fotos' ) );

			if ( $query->have_posts() ) : ?>
		    	<?php while ( $query->have_posts() ) : $query->the_post(); ?>   
		     
		        	<div class="col-md-8 col-md-offset-2">
		        		
		        		
		        			<a href="<?php the_permalink() ?>"><img src="<?php the_field('img_fotos'); ?>" alt="<?php the_title(); ?>" class="img-responsive"></a>
		        			
		        		
   						 
		        		<h4 style="text-align: center; font-size: 16px;"><?php the_title(); ?></h4>
		        	
		        			<?php the_field('the_content'); ?>
		        	


		    	<?php endwhile; wp_reset_postdata(); ?>
			<!-- show pagination here -->
			<?php else : ?>
			    <!-- show 404 error here -->
			<?php endif; ?>


	</div>
</div>

<?php get_footer() ?>


