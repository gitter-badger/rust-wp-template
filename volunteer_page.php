<?php
/*
Template Name: volunteer_page
*/
?>


<?php
get_header();
?>

<?php if (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="meta"><?php edit_post_link(__('Edit This'),''); ?></div>

	<div class="entry">
		<?php the_content(__('(more...)')); ?>

	<?php
		$pages = get_pages('child_of='.get_the_ID());
		foreach($pages as $page)  {
        	?>
		<hr />
		<h2><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?>:</a></h2>
		<p>
		<?php echo $page->post_content ?>
		</p>
	       	<?php
		}
	?>

	</div>
</div>
<?php endif; ?>



<?php get_footer(); ?>
