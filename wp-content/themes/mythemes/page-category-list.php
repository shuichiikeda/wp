<?php get_header(); ?>
<style>
  .cat-item a {
    display: inline-block;
    padding: 0.5em 1em;
    text-decoration: none;
    color: #FFF;
    background-image: -webkit-linear-gradient(#6795fd 0%, #67ceff 100%);
    background-image: linear-gradient(#6795fd 0%, #67ceff 100%);
    transition: .4s;
  }
  .cat-item a:hover {
    background-image: -webkit-linear-gradient(#6795fd 0%, #67ceff 70%);
    background-image: linear-gradient(#6795fd 0%, #67ceff 70%);
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