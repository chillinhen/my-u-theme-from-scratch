<?php get_header();?>

<div class="section group">
	<div class="col span_1_of_3">
	This is column 1
	</div>
	<div class="col span_1_of_3">
	<!-- get Posts -->
        <?php 
        //Custom Post Type
        echo '<h2>Countries</h2>';
        $args = array(
            'post_type' => 'countries',
            'posts_per_page' => 5,
        );
        $post_data=  get_posts($args);
        // loop
        foreach($post_data as $post){
            $link = get_permalink();
            echo '<h3>'.get_the_title() . '</h3>';
            echo 'Published on: ' . get_the_date() . '<br>';
            echo 'hier lesen: <a href="'.$link.'">'.$link.'</a>';
            echo '<hr/>';
        }
        //Post
        echo '<h2>Latest Posts</h2>';
        $args = array(
            'post_type'         => array('post'),
            'orderby'           => 'date',
            'order'             => 'DESC',
            'posts_per_page'    => 3,
        );
        $post_data=  get_posts($args);
        // loop
        foreach($post_data as $post){
            $link = get_permalink();
            echo '<h3><a href="'.$link.'">'.get_the_title() . '</a><span> ' . get_the_date() .'</span></h3>';
            echo '<hr/>';
        }
      	echo '<hr/>';
      	//Post and Pages
      	echo '<h2>Random Pages</h2>';
      	$args = array(
      	    'post_type'         => array('page'),
      	    'orderby'           => 'rand',
      	    'posts_per_page'    => 3,
      	);
      	$post_data=  get_posts($args);
      	// loop
      	foreach($post_data as $post){
      	    $link = get_permalink();
      	    echo '<h3><a href="'.$link.'">'.get_the_title() . '</a><span> ' . get_the_date() .'</span></h3>';
      	    echo '<hr/>';
      	}
        ?>
	</div>
        <?php get_sidebar();?>
</div>

<?php get_footer();?>
    
