<?php /* Template Name: About */ ?>

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
</div><!-- /row -->

<?php 
    $args = [
        'numberposts' => 5,
        'post_type' => 'student',
    ]; 
?>

<?php $students = get_posts($args); ?>

<?php if(count($students)): ?>
<ol>
    <?php foreach ($students as $student): ?>
    <?php $skills = get_the_terms($student, 'skill'); ?>
    <li>
        <a href="<?php echo get_permalink($student); ?>">
            <?php echo $student->post_title; ?>
        </a>
            <ul>
            <?php foreach ($skills as $skill): ?>
                <li>
                    <small> <?php echo $skill->name; ?> </small>
                </li>
            <?php endforeach; ?>
            </ul>
    </li>
    <?php endforeach; ?>
</ol>

<?php endif; ?>

<?php get_footer(); ?>