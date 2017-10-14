<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<?php 

;

?>
<section class="<?php echo (is_front_page())?'fondo-venus':''; ?>">
	<nav>

		<img src="<?php echo get_template_directory_uri() ?>/assets/images/valaxia-gris.png" class="logo">
		<header>
			<div id="sideNavigation" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
				<?php } ?>

			</div>



			<nav class="topnav"> 
				<a href="#" onclick="openNav()"> 
					<div>
						<div class="box"></div>
						<svg width="30" height="30" id="icoOpen">
							<path d="M0,5 30,5" stroke="#505050" stroke-width="2"/>
							<path d="M0,14 30,14" stroke="#505050" stroke-width="2"/>
							<path d="M0,23 30,23" stroke="#505050" stroke-width="2"/>
						</svg>
					</div>
				</a>

			</nav>
		</header>
	</nav>
	
</section>

