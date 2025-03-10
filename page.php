<?php get_header(); ?>
<div>
      <div class="container pt-[90px]">
        <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

       
          <?php the_content(); ?>
        
       
      
        
        </div>
            <?php endwhile; ?>
<?php endif; ?>
      </div>
      <!-- Container slut-->
    </div>
    <?php get_footer(); ?>