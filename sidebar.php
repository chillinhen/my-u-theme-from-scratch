<div class="col span_1_of_3">
    <?php
    	//Search Form
    	get_search_form();
    	echo '<hr/>';
        //Random Post Type
        $args = array(
            'post_type' => 'post',
            'orderby' => 'rand',
            'posts_per_page' => 1,
        );
        $post_data=  get_posts($args);
        // loop
        foreach($post_data as $post){
            $link = get_permalink();
            echo '<h4>Random Post: '.get_the_title() . '</h4>';
            echo '<a href="'.$link.'">weiter lesen</a>';
        }
        ?>
    <hr>
    The current year is <?php echo the_current_date(); ?>
</div>