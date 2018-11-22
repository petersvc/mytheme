<div id="ttr_main" class="container-fluid">
    <div class="row-fluid"><?php get_header(); ?></div>
    <div id="coisa" class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-sm-5">
            <h1><?php the_title(); ?></h1>
            <h4>Postado em <?php the_time('d, m, Y') ?></h4>
            <p><?php the_content('Read more ...'); ?></p>
        </div>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <div class="col-sm-2"><?php get_sidebar(); ?></div> 
    </div>
</div>
       
</div>

<?php get_footer(); ?>


<?php get_footer(); ?>