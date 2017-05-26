<?php 
/* Template Name: Highlighted Page */
get_header(); ?>

<div class="section group" style="background: yellow;">
    <div class="col span_3_of_3">

        <h1><?php echo get_the_title(); ?><span> <?php echo get_the_date(); ?></span></h1>
        <hr>
        <?php
        if (have_posts()):
            while (have_posts()) : the_post();
            the_post_thumbnail('large');
                ?>
                <p>Autor: <?php the_author();?></p>
                <p><?php the_content(); ?></p>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
    
