<?php get_header(); ?>
<div style="float:left;  background:#f2dcaa; width:100%; height:0 auto px; display:block;background-color:#4C4C4E; ">
<div id="leftside"style="padding-left:60px;">

 <?php if (is_page('resources')) { ?>  
   <div id="sidebar-resources"><?php wp_list_bookmarks(); ?></div>  
  <?php } else { ?>  
  <?php } ?>  
  
 <div class=<?php if($post->post_parent)  
#   $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); else  
#   $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");  
 if ($children) { ?>"narrowcolumn"<?php } else { ?>"widecolumn"<?php } ?>>  
   
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
   <h2><?php the_title(); ?></h2>  
  <div  style="color:white;"class="entry"> 
  <?php the_content(); ?>  
  </div>  
  </div>  
   <?php endwhile; endif; ?>  
 <div style="color:green;><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?> </div> 
   </div>  
   
 <?php if ($children) { ?>  
   <div id="sidebar">  
   In this section:  
   <ul><?php echo $children; ?></ul>  
   </div>  
   <?php } else { ?>  
   <?php } ?>  
</div>


<?php //get_sidebar();?>
</div>
<?php get_footer();?>