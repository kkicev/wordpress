<?php 
	global $post, $query_string, $SMTheme;
	
	$i=1;
	if (have_posts()) :  
	
	if (!isset($_GET['ajaxpage'])) {?>
 <div class='articles'>
	<?php }
	while (have_posts()) : the_post(); 
	?>
		<div class='one-post'>
		<div id="post-<?php the_ID(); ?>" <?php post_class("post-caption"); ?>>
			<?php if (!is_single()&&!is_page()) { ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php printf( $SMTheme->_( 'permalink' ), the_title_attribute( 'echo=0' ) ); ?>" class='post_ttl'><?php the_title(); ?></a><?php if(comments_open( get_the_ID() ))  {
                    ?><span class='post-comments'><?php comments_popup_link( 0, 1, '%' ); ?></span>
			<?php } ?></h2>
			<?php } else { ?>
				<h1><?php the_title(); ?><?php if(comments_open( get_the_ID() ))  {
                    ?><span class='post-comments'><?php comments_popup_link( 0, 1, '%' ); ?></span>
			<?php } ?></h1>
			<?php } ?>
			
			
		</div>
		<div class='post-body'>
			
			<?php
                if(has_post_thumbnail())  {
                    ?><?php if (!is_single()) { ?><a href="<?php the_permalink(); ?>" title="<?php printf( $SMTheme->_( 'permalink' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_post_thumbnail(
						array($SMTheme->get( 'layout', 'imgwidth' ), $SMTheme->get( 'layout', 'imgheight' )),
                        array("class" => $SMTheme->get( 'layout','imgpos' ) . " featured_image")
                    ); ?></a><?php } else { ?>
						<?php the_post_thumbnail(
						array(278, 173),
                        array("class" => $SMTheme->get( 'layout','imgpos' ) . " featured_image")
                    ); ?>
					<?php }
                }
				?>
				<?php if (!is_page()) {?><p class='post-meta'>
				<span class='post-date'><?php echo get_the_date(); ?></span> 
				<?php echo $SMTheme->_('before-category'); ?><?php the_category(', '); 
				edit_post_link( $SMTheme->_( 'edit' ), '     |     <span class="edit-link">', '</span>' );
				?>
				</p><?php } ?>
				<?php
				if (!is_single()&&!is_page()) {
					if ( ! post_password_required() ) { smtheme_excerpt('echo=1'); } else the_content('');
					?><a href='<?php the_permalink(); ?>' class='readmore'><?php echo $SMTheme->_( 'readmore' ); ?></a><?php
				} else {
					the_content('');
					
				}
            ?>
			<?php wp_link_pages(); ?>
		</div>
		</div>
	<?php endwhile; ?>
	
	<?php if (!isset($_GET['ajaxpage'])) {?>
 </div>
	<?php } ?>
	
	
<?php endif; ?>