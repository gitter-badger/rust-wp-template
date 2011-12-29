<?php
/*
Template Name: Outpost-News
*/
?>

<?php get_header(); ?>


<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("posts_per_page=14&category_name=outpost-news&paged=$paged&showposts=0"); ?>`

<?php get_index(); ?>


<?php  get_sidebar();  ?>

<?php get_footer(); ?>