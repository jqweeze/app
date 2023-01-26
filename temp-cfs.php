<?php /* Template Name: Produkt */ ?>

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
        $pris = CFS()->get( 'pris' );
        $rubrik = CFS()->get( 'rubrik' );
        $text = CFS()->get( 'text' );
        $img = CFS()->get( 'img' );

        ?>
        <h1><?php the_title();?></h1>
        <h2><?php echo $rubrik; ?></h2>
		<div>
            <p><?php echo $text; ?></p>
            <p><?php echo $pris; ?></p>
            <img src="<?php echo $img; ?>">

        </div>
    <?php
	} // end while
} // end if
?>
 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>