
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Dentego
 */

get_header(); ?>
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
					<?php the_field('traitements');?>
				</li>
				<li class="quality">
					<?php the_field('quality');?>
				</li>
				<li class="ajournement">
					<?php the_field('ajournement');?>
				</li>
				<li class="urgence">
					<?php the_field('urgence');?>
				</li>
			</ul>
		</div>
			<?php}else{?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		<?php }?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>