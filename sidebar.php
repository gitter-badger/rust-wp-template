		<aside>
			<ul class="widgetsbar">

			<?php if (is_404()) { ?>
			  <li class="widget">
			    <p>They say the only constant is change. We must have changed something, because what you're looking for is not here.</p>
			  </li>
			<?php } ?>


            <?php if (function_exists('dynamic_sidebar')) {
            
            !dynamic_sidebar('sidebar_top');

            if(is_front_page()) {
              !dynamic_sidebar('sidebar_front_page');
              
            } else if(is_page('the-apogaea-festival')) {
              !dynamic_sidebar('sidebar_about_festival');
               
            } else if(is_page('ignition')) {
              !dynamic_sidebar('sidebar_ignition_page');
                
            } else {!dynamic_sidebar('sidebar_default'); }
            
            !dynamic_sidebar('sidebar_bottom');
            
            } ?>
			</ul>
		</aside>
