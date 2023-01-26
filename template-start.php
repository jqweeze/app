<?php /* Template Name: Start */ ?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
 <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        $welcome = CFS()->get( 'welcome' );
        $status = CFS()->get( 'status' );
        $policy = CFS()->get( 'policy' );

        ?>

        <h1><?php the_title(); ?></h1>
        <h2><?php echo $welcome; ?></h2>
        <h3><?php echo $status; ?></h3>
        <p><?php echo $policy;?></p>

		<div>
          
            
        </div>
    <?php
	} // end while
} // end if
?>
 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>