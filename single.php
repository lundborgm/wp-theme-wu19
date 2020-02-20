<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <small> <?php the_date(); ?> </small>

                <p><?php the_content(); ?></p>

                <div class="d-flex justify-content-between">
                <?php previous_post_link('%link', 'Previous Post'); ?>
                <?php next_post_link('%link', 'Next Post'); ?>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>