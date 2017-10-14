
<?php get_header() ?>

<div class="container">
	<div class="row">
		    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portafolio-grafico.png" class="img-responsive" alt="texto portafolio grafico">
  <h2> DISEÑO / DIRECCIÓN DE ARTE / FOTOGRAFÍA E ILUSTRACIÓN </h2>
  <hr align="center"/>

		<?php

			$query = new WP_Query( array( 'post_type' => 'portafolio' ) );

			if ( $query->have_posts() ) : ?>
		    	<?php while ( $query->have_posts() ) : $query->the_post(); ?>   
		     
		        	<div class="col-md-4">
		        		<a href="<?php the_permalink() ?>"><img src="<?php the_field('img_portafolio'); ?>" alt="<?php the_title(); ?>" class="img-responsive"></a>
		        		<h4 style="text-align: center; font-size: 16px;"><?php the_title(); ?></h4>
		        		<?php the_content(); ?>
		        		<p><?php the_field('the_bajada'); ?></p>
		        	</div>


		    	<?php endwhile; wp_reset_postdata(); ?>
			<!-- show pagination here -->
			<?php else : ?>
			    <!-- show 404 error here -->
			<?php endif; ?>



	</div>
</div>

<?php get_footer() ?>

