<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

<table class="post_nav">
    <tr>
        <td class="left"><?php next_post_link('&laquo; %link') ?></td>
        <td class="right"><?php previous_post_link('%link &raquo;') ?></td>
    </tr>
</table>

<?php the_content(); ?>

    Posted on <?php the_date('n/j/Y'); ?> at <?php the_time('g:i a'); ?><br />
    Categories: <?php the_category(', '); ?>
    <?php the_tags('<br />Tags: ', ', '); ?>
    <hr />

<?php comments_template(); ?>

<table class="post_nav">
    <tr>
        <td class="left"><?php next_post_link('&laquo; %link') ?></td>
        <td class="right"><?php previous_post_link('%link &raquo;') ?></td>
    </tr>
</table>


<?php endwhile; endif; ?>

<?php get_footer(); ?>
