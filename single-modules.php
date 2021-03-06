<?php /* Template Name: Home */

get_header(); ?>
	<div id="main">
		<div id="main_content">
			<?php
        
        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post();
          ?>
          <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <dl>
              <dt>Session Details</dt>
              <dd>Next date: <?php the_field('next_date'); ?></dd>
              <dd>Start time: <?php the_field('start_time'); ?></dd>
              <dd>End time: <?php the_field('end_time'); ?></dd>
            </dl>

            <h3>Outcomes</h3>
            <p><?php the_field('outcomes'); ?></p>

            <h3>Topics</h3>
            <p><?php the_field('Topics'); ?></p>

				</article>

        <?php

  // Find connected pages
  $connected = new WP_Query( array(
    'connected_type' => 'team_to_module',
    'connected_items' => $post,
    'nopaging' => true
  ) );

  // Display connected pages
  echo '<p>Instructors:</p><ul>';

  while ( $connected->have_posts() ) : $connected->the_post();
    ?>
    <li>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_title(); ?>
    </a>
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