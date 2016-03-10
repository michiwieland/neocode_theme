<?php
/**
 * The template for the about section on a one page layout
 *
 * Template Name: Work
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

 /** Custom Query Arguments **/
 $args = array(
   'post_type'   => 'page',
   'meta_query' => array(
     array(
       'key'   => '_wp_page_template',
       'value' => 'templates/onepage-work.php'
     )
   )
 );
 $custom_query = new WP_Query( $args );

 if ( $custom_query -> have_posts() ) :
   while ( $custom_query ->have_posts() ) : $custom_query ->the_post(); ?>
     <section class="section section-about">
       <!-- page header -->
       <h2><?php the_title(); ?></h2>

       <div class="section-box">
         <!-- post thumbnail -->
         <?php if ( has_post_thumbnail() ) : ?>
             <?php the_post_thumbnail('work-image'); ?>
         <?php endif; ?>

         <!-- post content -->
         <?php the_content(); ?>
       </div>

     </section>
   <?php endwhile; ?>
 	<?php wp_reset_postdata(); ?>
 <?php endif; ?>
