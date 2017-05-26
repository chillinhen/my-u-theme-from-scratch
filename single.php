<?php get_header(); ?>

<div class="section group">
    <div class="col span_1_of_3">
        This is column 1
    </div>
    <div class="col span_1_of_3">
		<?php the_post_thumbnail('large');?>
        <h1><?php echo get_the_title(); ?><span> <?php echo get_the_date(); ?></span></h1>
        <hr>
        <section>
            <?php
            //add categories and tags
            echo 'Categories: ';
            the_category('| ');
            echo '<hr/>';
            echo the_tags('<div style="background:cyan;padding:20px;">verschlagwortet mit: ','/','</div>');
            ?>
        </section>
        <?php
        if (have_posts()):
            while (have_posts()) : the_post();
                ?>
                <p><?php the_content(); ?></p>
                <?php
            endwhile;
        endif;
        comments_template();
        ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
    
