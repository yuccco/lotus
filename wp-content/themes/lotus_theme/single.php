<?php
/*
Template Name: 通常記事
*/
?>
<!--single-->
<?php get_header(); ?>

			<?php if(in_category('news')): ?>
			<!--NEWS-->
			<article id="news_Top" class="wrapper">
				<h2 class="box_tit">NEWS</h2>
				<section class="container">
					<?php if(have_posts()):while(have_posts()):the_post(); ?>
						<div class="entry-content-page">
							<h3 class="news_tit txt_link"><span class="txt_date"><?php the_time("Y.n.j"); ?></span><?php the_title(); ?></h3>
							<?php echo get_the_post_thumbnail($post->ID, 'large_thumb'); ?>
							<?php the_content(); ?>
						</div>
					<?php endwhile;endif; ?>
				</section>
				<?php get_template_part(sp_menu_page); ?>
			</article>
			<?php endif; ?>

<?php get_footer(); ?>