 <!--about-->
 	<div id="about">
   <?php query_posts('pagename=university'); ?>
   <?php while (have_posts()) : the_post();   /* if have posts */
       $myphoto = get_post_meta($post->ID, "myphoto", TRUE);
       /* define the custom field with key = myphoto */
       $mydesc = get_post_meta($post->ID, "mydesc", TRUE); ?>
     

   <h3>About Me</h3>
     <?php echo $mydesc; ?>
 	<a href="<?php bloginfo('url'); ?>/about"><img src="<?php echo $myphoto; ?>" alt="<?php bloginfo('blogname'); ?>" title="<?php bloginfo('blogname'); ?>" /></a><span><?php echo $mydesc; ?> ... <a href="<?php bloginfo('url'); ?>/about">more</a></span>
 	</div><!--about-end-->      

<?php endwhile; ?> 