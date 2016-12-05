<?php if ( is_home() || is_front_page() ) : ?>

						<ul class="news_li">
							<?php 
							$lastposts = get_posts('numberposts=5&orderby=post_date&cat=1');
							foreach($lastposts as $post) :
							setup_postdata($post);
							?>
							<li>
								<span class="txt_date"><?php the_time('Y.n.j'); ?></span>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</li>
							<?php endforeach; ?>
						</ul>
						<ul class="news_archive_li">
							<?php wp_get_archives('limit=1&type=yearly&cat=1'); ?>
						</ul>

<?php endif; ?>