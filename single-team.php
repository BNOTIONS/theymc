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
            <figure>
              <?php 
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
              } 
              ?>
            </figure>
            <h1><?php the_title(); ?></h1>
            <h2>Tagline: <?php the_field('tagline'); ?></h2>
            <h3>Specialties: <?php the_field('specialties'); ?></h3>
            <?php the_content(); ?>

            <dl>
              <dt>Team details</dt>
              <dd>Website: <?php the_field('website'); ?></dd>
              <dd>LinkedIn: <?php the_field('linkedin'); ?></dd>
              <dd>Twitter: <a href="http://twitter.com/<?php the_field('twitter'); ?>" title="Twitter Link" rel="external">@<?php the_field('twitter'); ?></a></dd>
              <dd>Facebook: <?php the_field('facebook'); ?></dd>
            </dl>

				</article>

 
			<?php
					endwhile;
				endif;
			?>
    </ul>
		</div>
	</div>
	

<?php get_footer(); ?>