<?php get_header(); ?>

			<article class="wrapper">
				<section class="container">
					<?php if(have_posts()):while(have_posts()):the_post(); ?>
						<div class="entry-content">
							<?php echo get_the_post_thumbnail($post->ID, 'large_thumb'); ?>
						</div>
						<div class="entry-txt">
						<h3 class="news_tit txt_link"><span class="txt_date"><?php the_time("Y.n.j"); ?></span><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
					<?php endwhile;endif; ?>
				</section>
				<p class="btn_arrow"><a href="#about_Top">Next contents</a></p>
			</article>

<?php get_footer(); ?>