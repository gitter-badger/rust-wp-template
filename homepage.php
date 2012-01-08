<?php
/*
Template Name: HomePage
*/
?>

<?php get_header(); ?>


<section>
<article>
<header>
<h1>Featured Outpost Editorials</h1>
</header>
       
<?include (ABSPATH . '/wp-content/plugins/coin-slider-4-wp/coinslider.php'); ?>    
    
<?php /*    
    
<div id='coin-slider'>
<a href='http://apogaea.dreamhosters.com/?p=1812'>	
  <img src='http://apogaea.dreamhosters.com/wp-content/uploads/2011/12/ApogaeaSplash2.jpg' />
  <span><strong class="fancy">Open Ignition Positions</strong><br />testtest</span>
</a>

<a href='http://apogaea.dreamhosters.com/?p=1801'>	
  <img src='http://apogaea.dreamhosters.com/wp-content/uploads/2011/12/3615353222_fe2ed6bf65_b.jpg' />
  <span><strong>Interviewing Art</strong><br /></span>
</a>

<a href='http://apogaea.dreamhosters.com/?p=1724'>	
  <img src='http://apogaea.dreamhosters.com/wp-content/uploads/2011/11/2261744322_70b7070a50_b.jpg' />
  <span><strong>Interview with Tommy Tommy Tommy, Your New Art Grant Committee Lead</strong><br /></span>
</a>
</div>

<script type="text/javascript">
	$("#coin-slider").coinslider({
		width  		: 528,
		height 		: 290,
		spw		: 7,
		sph		: 5,
		delay		: 3000,
		sDelay		: 15,
		navigation	: true,
		effect		: ''
	}); 

</script>

*/ ?>
</article>

<article>

<header><h1>About Apogaea</h1></header>
<blockquote class="fancy">Apogaea is a collaborative outdoor arts and music festival held in beautiful mountains of Colorado.</blockquote>
<div >
<?php
	function title($string) {
	  return str_replace("_"," ",$string);
	}
	$grid_buttons = array (
	  "the_festival" => "/the-apogaea-festival/",
	  "community" => "http://",
	  "participate" => "http://",
	  "prepare" => "http://",
	  "people" => "http://",
	  "archives" => "http://",
	);

	foreach ($grid_buttons as $name => $link) { ?>

		<a class="gridbutton" id="gridbutton_<?php echo $name; ?>" href="<?php echo $link ?>"><img src="<?php bloginfo('template_directory'); ?>/images/gridbutton_<?php echo $name; ?>.jpg" alt="<?php echo title($name); ?>" title="<?php echo title($name); ?>" /><span><?php echo title($name); ?></span></a>

	<?php } ?>
<div style="clear: left"></div>
</div>
</article>

<article>
<header><h1>Find us around the Internet...</h1></header>
<div id="home-social">
<a target="_blank" href="https://www.facebook.com/groups/apogaea/" class="home-social-button" id="home-social-facebook" alt="Facebook" title="Facebook"><span>Facebook</span></a>
<a target="_blank" href="http://groups.yahoo.com/group/apogaea/" class="home-social-button" id="home-social-yahoo" alt="Yahoo!" title="Yahoo!"><span>Yahoo!</span></a>
<a target="_blank" href="http://twitter.com/#!/apogaea" class="home-social-button" id="home-social-twitter" alt="Twitter" title="Twitter"><span>Twitter</span></a>
<a target="_blank" href="<?php bloginfo('comments_rss2_url'); ?>" class="home-social-button" id="home-social-rss" alt="RSS" title="RSS"><span>RSS</span></a>
<a target="_blank" href="http://www.flickr.com/groups/apogaea/" class="home-social-button" id="home-social-flickr" alt="Flickr" title="Flickr"><span>Flickr</span></a>
<a target="_blank" href="http://apogaea.tribe.net/" class="home-social-button" id="home-social-tribe" alt="Tribe" title="Tribe"><span>Tribe</span></a>
<div style="clear: left"></div>
</div>
</article>


</section>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
