<?php get_header();?>

<div class="section group">
	<div class="col span_1_of_3">
	This is column 1
	</div>
	<div class="col span_1_of_3">
		<h2>Suchergebnisse: <em><?php echo get_search_query();?></em></h2>
		<hr>
		<?php 
		while (have_posts()) : the_post();
		echo '<a href="' . get_the_permalink() . '">' .get_the_post_thumbnail(get_the_ID(),'thumbnail') .'</a><br/>';
		echo '<h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
		echo '<em>veröffentlicht am ' .get_the_date().', von '.get_the_author().' ('.get_the_author_posts().')</em> - ';
		$content = substr(strip_tags(get_the_content()), 0,100) . ' [...] ';
		echo $content;
		echo '<a href="' . get_the_permalink() . '">weiterlesen</a>';
		echo '<hr/>';
		endwhile;
		?>
	</div>
	<?php get_sidebar();?>
</div>

<?php get_footer();?>
    
