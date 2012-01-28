<footer>
                    
                    
<div id="footer-floater">
<a href="/" class="buttonize"><span>Jump To The Front Page</span></a><br />
<a href="http://wiki.apogaea.com" class="buttonize"><span>Ignition Wiki (auth required)</span></a>
</div>


	<ul id="footer-site-map">
<?php 

$my_pages = wp_list_pages('echo=0&title_li=&depth=2&exclude=2008');
$var1 = '<a';
$var2 = '<span class="footer"><a';
$var3 = '</a>';
$var4 = '</a></span>';
$my_pages = str_replace($var1, $var2, $my_pages);
$my_pages = str_replace($var3, $var4, $my_pages);
echo $my_pages;

?> 
<li>Find Us Online<ul>
<li><a target="_blank" href="https://www.facebook.com/groups/apogaea/" class=" " alt="Facebook" title="Facebook"><span>Join our Facebook Group</span></a></li>
<li><a target="_blank" href="http://groups.yahoo.com/group/apogaea/" class=" " alt="Yahoo!" title="Yahoo!"><span>Subscribe to our Yahoo! Mailing List</span></a></li>
<li><a target="_blank" href="http://twitter.com/#!/apogaea" class=" " alt="Twitter" title="Twitter"><span>Follow us on Twitter</span></a></li>
<li><a target="_blank" href="http://feeds.feedburner.com/Apogaea" class=" " alt="RSS" title="RSS"><span>Subscribe to our RSS Feed</span></a></li>
<li><a href="http://www.flickr.com/groups/apogaea/" class=" " alt="Flickr" title="Flickr"><span>Join Our Flickr Group</span></a></li>
<li><a target="_blank" href="http://apogaea.tribe.net/" class=" " alt="Tribe" title="Tribe"><span>Join Our Tribe</span></a></li>
<li><a target="_blank" href="/apo-org/contact-us/" class=" " alt="Email US Directly" title="Email US Directly"><span>Email Us</span></a></li>
</ul></li>
<li>Other Useful Stuff <ul> <?php
wp_list_bookmarks(array('title_li' => '', 'categorize' => false));
?>
  </ul></li>
  
</ul>


<p style="text-align: center;" class="fancy"><small>&copy; <?= date('Y'); ?> Apogaea &bull; Graphic design by <a href="/apo-org/ignition/jason-kemo-santiago/">Kemo</a> &bull; Special thanks to all our volunteers!</small></p>


		<?php wp_footer(); ?>

    </footer>
  </body>
</html>
