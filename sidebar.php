		<aside>
			<ul class="widgetsbar">


			<?php if (is_404()) { ?>
			  <li class="widget">
			    <p>They say the only constant is change. We must have changed something.</p>
			  </li>
			<?php } ?>


            <?php if (function_exists('dynamic_sidebar')) !dynamic_sidebar('sidebar_top'); ?>

            <?php if(is_page('the-apogaea-festival')) {
            !dynamic_sidebar('sidebar_about_festival'); } ?>

            <?php if(is_front_page()) {
            !dynamic_sidebar('sidebar_front_page'); } ?>

			<?php if (is_home()) { ?>
			<?php } ?>
            
            <?php if (is_page('about')) {
            echo "yes";
            } ?>
            
            <?php if(!is_page('the-apogaea-festival')) { ?>
			<li class="widget">
				<h2 class="widgettitle">Apogaea Outpost</h2>
                                
                <?php
                global $post;
                if ($all_events = tribe_get_events(array( 'eventDisplay'=>'all', 'posts_per_page'=> 8 ))) {
                  ?><strong class="fancy">Upcoming Events</strong><ul><?php
                  foreach($all_events as $post) { setup_postdata($post); ?>
                  
                  <li><b><?php echo(date('M d',strtotime($post->EventStartDate))); ?></b>: <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li> 
                  <?php }
                  ?></ul><?php 
                }
                ?>
                
				<strong class="fancy">Highlighted News</strong>
				<ul>				
				    <?php
					$sticky = get_option( 'sticky_posts' );rsort( $sticky ); 
					$recent_posts = wp_get_recent_posts(array('post__in' => $sticky,'numberposts' => 10)); 
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
					}
				    ?>
				    </ul>				
				<strong class="fancy">Recent Outposts</strong>
				<ul>				
				    <?php
					$recent_posts = wp_get_recent_posts('category=80&numberposts=10'); 
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
					}
				    ?>
                </ul>
			</li>
            <?php } ?>

            <?php if (function_exists('dynamic_sidebar')) !dynamic_sidebar('sidebar_bottom'); ?>


			</ul>
		</aside>
