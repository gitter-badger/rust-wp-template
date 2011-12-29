<?php get_header(); ?>

<?php 

function the_excerpt_max_charlength($charlength) {
	$excerpt = strip_tags(get_the_excerpt());
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
	} else {
		echo $excerpt;
	}
}

?>



		<section>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
                        <?php 
                        if ($disp_month != "") { $skip_close = true; } 
                        if ($dm_cache != ($disp_month = get_the_date('F'))) {
                            if (!$skipclose) { echo "</article>";$skipclose = false;}
                            echo '<article id="month-'.$disp_month.'"><header><h1 class="month">'.$disp_month.'<span>, '.get_the_date('Y').'</span></h1></header>';
                            $dm_cache = $disp_month;
                        }
                        ?> 
			<article id="post-<?php the_ID(); ?>">
				<header>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Read: <?php the_title_attribute(); ?>"><span class="day""><?php the_time('j'); ?><sup><?php the_time('S'); ?></sup></span><?php the_title(); ?></a></h2>					
				</header>
                                <section>
                                    
                                <p class="small""><?php the_excerpt_max_charlength(80); ?> <a href="<?php the_permalink() ?>" rel="bookmark" title="Read: <?php the_title_attribute(); ?>">&#8230;</a></p>
                                </section>
				<footer>
					<p class="small"">Posted in <?php the_category(', '); ?> by <?php the_author(); ?> &bull; <?php the_tags('Tagged: ', ', ', '&bull;'); ?> <?php edit_post_link('Edit', '', ' &bull; '); ?> <?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
				</footer>
			</article>

			<?php endwhile; ?>
			</article>
                
			<nav>
                                <p class="pageturn"><span><?php previous_posts_link(); ?></span><?php next_posts_link(); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<h1>Not Found</h1>
				<p>Sorry, but the requested resource was not found on this site.</p>
				<?php get_search_form(); ?>
			</article>

			<?php endif; ?>
                        
		</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>