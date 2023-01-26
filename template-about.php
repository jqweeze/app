<?php /* Template Name: About */ ?>

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
        $rubrik = CFS()->get( 'rubrik' );
        $namn = CFS()->get( 'namn' );
        $email = CFS()->get( 'e_postadress' );
        $msg = CFS()->get( 'meddelande' );
        $rubrik_2 = CFS()->get( 'rubrik_2' );
        $organisation = CFS()->get( 'organisation' );
        
        ?>

        <h1><?php the_title(); ?></h1>
        <h2><?php echo $rubrik; ?></h2>
		<form>
            <label><?php echo $namn ?></label><br>
            <input type="text"><br>
            <label><?php echo $email ?></label><br>
            <input type="email"><br>
            <label><?php echo $msg ?></label><br>
            <textarea></textarea><br>
            <input type="submit" value="Skicka">
        </form>
        <div style="position:absolute;right:40%;top:15%">
            <h2><?php echo $rubrik_2;?></h2>
            <p><?php echo $organisation;?></p>
        </div>
        
    

            <?php the_content(); ?>
    <?php
	} // end while
} // end if
?>
 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>