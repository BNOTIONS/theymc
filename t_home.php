<?php /* Template Name: Home */

get_header(); ?>
	<div id="main">
		<div id="main_content">
			<?php
        // Gather all of the parameters / filters to be used in your database query as an array of arguments
        $args = array(
          'post_type' => 'programs',
          'posts_per_page' => '1',
          'order' => 'asc'
        );

        // Run query_posts function with your array of arguments
        query_posts($args);

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post();
          ?>
				<article>
				  <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
				</article>

        <?php

  // Find connected pages
  $connected = new WP_Query( array(
    'connected_type' => array('module_to_program'),
    'connected_items' => $post,
    'connected_orderby' => true,
    'connected_order' => asc,
    'nopaging' => true
  ) );

  // Display connected pages
  echo '<h2>Modules</h2><ul>';

  while ( $connected->have_posts() ) : $connected->the_post();
    ?>
    <li>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_title(); ?></a> - <?php the_field('next_date'); ?> - <?php the_field('start_time'); ?>
    
  </li>
    <?php 
  endwhile;

  wp_reset_postdata(); // set $post back to original post
  ?>
			<?php
					endwhile;
				endif;
			?>
    </ul>
		</div>
	</div>
	

<?php get_footer(); ?>