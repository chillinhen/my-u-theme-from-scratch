<form action="<?php home_url('/');?>"method="get">
Stichwortsuche: <input type="text" name="s" value="<?php echo the_search_query(); ?>"/>
<br/>
<select name="search_category">
<option value="keine">Bitte wählen</option>
<?php 
$categories = get_categories();
foreach ($categories as $cat) {
	$val=$cat->category_nicename;
	$name=$cat->cat_name;
	$count=$cat->category_count;
	
	printf("<option value='$val'>$name($count)</option>");
}
?>
</select>
<input type="submit" value="Los!"/>
</form>