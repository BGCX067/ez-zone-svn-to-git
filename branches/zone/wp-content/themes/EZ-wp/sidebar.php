<div style="width:200px;float:left;">
	 
	 <div id="sidebar1" style="color:white;list-style-type:disc;">
            <ul >
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar1') ) : ?>
            <?php wp_list_categories('title_li=<h3>Categories</h3>'); ?>              
           <?php endif; // end of sidebar1 ?>
		    </ul>
			
           </div>
		
		<div id="sidebar2" style="color:white;">
            <ul>
           <li ><h3>Calendar</h3><?php get_calendar('title_li=<h3>Categories</h3>'); ?></li>
            </ul>
        </div>
		
		<div id="sidebar2" style="color:white;">
            <ul>
           <?php wp_list_pages('title_li=<h3>Pages</h3>' ); ?>
            </ul>
        </div>
		
</div>
</div> 
</div>	
