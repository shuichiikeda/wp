<?php get_header(); ?>
<style>
  .cat-item {
    display: inline-block;
    padding: 0.3em 1em;
    text-decoration: none;
    color: #67c5ff;
    border: solid 2px #67c5ff;
    border-radius: 3px;
    transition: .4s;
    margin: 2px;
    width: 20em;
    background: #fff;
  }
  .cat-itemhover {
    background: #67c5ff;
    color: white;
  }

</style>
<div class="content section-inner">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div <?php post_class( 'post single' ); ?>>
      <diV>
        <ul>
<!--          カテゴリの呼び出し -->
            <?php wp_list_categories('title_li=&show_count=1&use_desc_for_title=1&depth=0'); //カテゴリの呼び出し?>
        </ul>
      </div>
		</div><!-- .post -->
		
	<?php 
	endwhile; 
	else: ?>
	
		<p><?php _e( "We couldn't find any posts that matched your query. Please try again.", "hitchcock" ); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
	
</div><!-- .content -->
								
<?php get_footer(); ?>