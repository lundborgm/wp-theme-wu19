<?php get_header(); ?>

<div class="row mt-5">
    <div class="col">

      <?php if (have_posts()): ?>
      
          <?php while (have_posts()): the_post(); ?>
              
              <span><?php the_date(); ?></span>
              <h1><?php the_title(); ?></h1>

            <?php if(get_field('email') || get_field('github_profile')): ?>
                <p><a href="<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                <p><a href="<?php the_field('github_profile'); ?>">GitHub Profile</a></p>
            <?php endif; ?>

              <?php the_content(); ?>

              <div class="float-left">
               <?php previous_post_link(); ?>
             </div>
             
             <div class="float-right">
               <?php next_post_link(); ?>
             </div>
            
          <?php endwhile; ?>

      <?php endif; ?>
      
    
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>
