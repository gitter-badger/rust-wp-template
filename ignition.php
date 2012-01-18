<?php
/*
Template Name: ignition_page
*/
?>

<?php
function get_people($category_name) {
    echo '<div class="ignition-members">';
	$recent_posts = wp_get_recent_posts('category_name='.$category_name.'&numberposts=1000'); 
	foreach( $recent_posts as $recent ){
		if ($pic = catch_that_image($recent["post_content"])) {
		  $pic_style = ' style="background: url(\''.$pic.'\') center center" ';  
		} else {  $pic_style = ""; }
		echo '<div class="ignition-member">';
		echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >';
		echo '<span class="outter"><span class="pic" '.$pic_style.'>';
		echo '</span>' .   str_replace(' ','<br />',$recent["post_title"]).'</span>';
		echo '</a> </div> ';
	}
    echo "</div>";
} 
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section>
			<article id="post-<?php the_ID(); ?>">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</header>
				<section>
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

<h1>Officers</h1>
	<?php get_people('board-officers'); ?>					

<h1>Board Members</h1>
	<?php get_people('board-members'); ?>					
					
<h1>Regional Burning Man Representatives</h1>
	<?php get_people('regional-burning-man-reps'); ?>					
					
<h1>Territorial Ambassadors</h1>
	<?php get_people('territorial-ambassadors'); ?>	
					
<h1>Event Leads</h1>
	<?php get_people('event-leads'); ?>					
					
					
				</section>
				<footer>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</footer>
			</article>
		</section>

	<?php endwhile; else: ?>

		<section>
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>