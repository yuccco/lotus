<?php get_header(); ?>
			<article id="news_Top" class="wrapper">
				<section class="container">
					<h3 class="txt_mid txt_center">指定されたページは存在しませんでした。</h3>
					<p class="txt_center">このページの URL：http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?></p>
					<p class="txt_center">現在表示する記事がありません。URLにお間違いないかお確かめ下さい。</p>
				</section>
			</article>
<?php get_footer(); ?>