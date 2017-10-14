
<?php get_header() ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 style="text-align: center;"><?php echo the_title() ?></h3>
			<hr align="center"/>

			<?php 

$images = get_field('the_galeria');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
       <?php foreach( $images as $image ): ?>
            
            	<?php echo wp_get_attachment_image( $image['ID'], $size, "", array( "class" => "img-responsive" ) ); ?>
            
        <?php endforeach; ?>
    
<?php endif; ?>


<p><?php the_content() ?></p>

		</div>
	</div>
</div>


<?php get_footer() ?>



