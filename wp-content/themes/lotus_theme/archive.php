<?php
/*
Template Name: アーカイブ
*/
?>
<!--archive-->

<?php get_header(); ?>

			<!--common-->
			<article class="wrapper">
				<section class="container">
					<?php if ( have_posts() ) : query_posts($query_string.'&posts_per_page=-1'); ?>
					<h3 class="txt_year"><?php the_time("Y"); ?></h3>
					<ul class="news_year_li">
						<?php while (have_posts()) : the_post(); ?>
						<li>
						<span class="txt_date"><?php the_time("Y.n.j"); ?></span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php else: ?>
							<p>指定された投稿はありません。</p>
					<?php endif; ?>
				</section>
				<?php $maxpage = $wp_query->max_num_pages;
					$current = $paged;
					if(!$current){$current = 1;}
				?>
				<?php if(!($maxpage==1)): ?>
					<p class="btn_arrow"><?php next_posts_link('次へ'); ?></p>
				<?php endif; ?>
				<?php get_template_part(sp_menu_page); ?>
			</article>

<?php get_footer(); ?>