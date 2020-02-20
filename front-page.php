<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->

   <?php 
        $args = [
            'numberposts' => 2,
            'order' => 'desc'
        ];
        $latestPosts = get_posts($args); 
   ?>

   <div class="col-12">
        <?php foreach ($latestPosts as $post): setup_postdata($post); ?>
        <h2><a href="<?php echo get_permalink() ?>"><?php echo the_title(); ?></a></h2>
        <?php endforeach; ?>

        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Visit Blog</a>
   </div>

</div><!-- /row -->

<?php get_footer(); ?>