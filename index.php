<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>



    
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
    <?php the_content(); ?>

        <p><?= get_the_date('l, F jS, Y'); ?> @ <?php the_time('g:i a'); ?> |
        <a href="<?php the_permalink(); ?>"><?php comments_number('Comments (0)', 'Comment (1)', 'Comment (%)'); ?></a> |
        Categories: <?php the_category(', '); ?>
            <?php the_tags('<br />Tags: ', ', '); ?></p>


<?php endwhile; else: ?>
    <h1>Not Found</h1>
    
    Your request didn't find anything. Please try again.
    
<?php endif; ?>

<table class="post_nav">
    <tr>
        <td class="left"><?php next_posts_link('&laquo; Older Entries') ?></td>
        <td class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></td>
    </tr>
</table>

<?php get_footer(); ?>
