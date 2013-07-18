<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		<?php if(is_page(2)){?>
		<div id="accueil">
			<div class="video">
				<img src="<?php bloginfo('template_url'); ?>/images/video.jpg" />
			</div>
			<div class="description">
				<?php the_field('description');?>
			</div>
			<ul id="traitement">
				<li class="traitements">
					<span class="traitements"></span>
					<?php the_field('traitements');?>
				</li>
				<li class="quality">
					<span class="quality"></span>
					<?php the_field('quality');?>
				</li>
				<li class="ajournement">
					<span class="ajournement"></span>
					<?php the_field('ajournement');?>
				</li>
				<li class="urgence">
					<span class="urgence"></span>
					<?php the_field('urgence');?>
				</li>
			</ul>
		</div>
		<?php}else{?>
			
			<?php } ?>
	</article><!-- #post -->
