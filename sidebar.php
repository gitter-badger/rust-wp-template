		<aside>
			<ul class="widgetsbar">

			<?php if (is_404()) { ?>
			  <li class="widget">
			    <p>They say the only constant is change. We must have changed something.</p>
			  </li>
			<?php } ?>

			<?php if (is_home()) { ?>                
			<?php } ?>
            
		


			<li class="widget">
				<h2 class="widgettitle">Recent Outposts</h2>
				<strong class="fancy">Highlighted News Posts</strong>
                <ul>
				    <?php
					$sticky = get_option( 'sticky_posts' );rsort( $sticky ); 
					$recent_posts = wp_get_recent_posts(array('post__in' => $sticky,'numberposts' => 10)); 
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
					}
				    ?>
                 </ul>
				<strong class="fancy">Recent Editorial Posts</strong>
                 <ul>
				    <?php
					$recent_posts = wp_get_recent_posts('category=80&numberposts=10'); 
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
					}
				    ?>
                </ul>
			</li>

            <?php if (function_exists('dynamic_sidebar')) !dynamic_sidebar(); ?>


			</ul>
		</aside>
