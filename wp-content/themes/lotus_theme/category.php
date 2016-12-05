<?php
/*
Template Name: カテゴリ
*/
?>
<!--category-->
<?php get_header(); ?>
			<?php if(is_category('about')): ?>
			<!--ABOUT-->
			<article id="about_Page" class="wrapper">
				<h2 class="box_tit">ABOUT LOTUS</h2>
				<p id="txt_about">Lotus,Lovely,Lucky,Living,Library,Lifestyle</p>
				<p class="txt_mid txt_center">
					Lotusの“L”は、お客様への気持ちです。<br>
					人が集まるリビングのような空間で、<br>
					時間を忘れる癒しを味わう。<br>
					豊富な知識と技術で、<br>
					スタイルに幸運と愛を吹き込む。<br>
					いつでも、遊びにきてください。<br>
					そして、『Lotus』はお客様とともに<br>
					いつまでも咲き続けたいと思っています。<br>
					<span>オーナー　城田 宗司</span>
				</p>
				<section class="container_col">
					<h3>STAFF</h3>
					<?php $posts = get_posts('posts_per_page=-1&cat=4&order=asc'); global $post; ?>
					<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
					<dl class="staff_li">
						<dt>
							<?php
								$attachment_id = get_field('staff_img_pc');
								$size = "staff-pc";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$attachment = get_post( get_field('staff_img_pc') );
								$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
								$image_title = $attachment->post_title;
							?>
							<img src="<?php echo $image[0]; ?>" class="pcBlock" alt="<?php the_field('staff_name'); ?>">
							<?php
								$attachment_id = get_field('staff_img_sp');
								$size = "staff-sp";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$attachment = get_post( get_field('staff_img_sp') );
								$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
								$image_title = $attachment->post_title;
							?>
							<img src="<?php echo $image[0]; ?>" class="spBlock" alt="<?php the_field('staff_name'); ?>">
							<p>
								<?php the_field('staff_position'); ?><br>
								<span class="txt_min"><?php the_field('staff_name'); ?></span>
							</p>
						</dt>
						<dd>
							<?php the_field('staff_text'); ?>
						</dd>
					</dl>
					<?php endforeach; endif; ?>
				</section>
				<?php get_template_part(sp_menu_page); ?>
			</article>

			<?php elseif(is_category('hair-catalog')): ?>
			<!--ヘアカタログ-->
			<article id="catalog_Page" class="wrapper">
				<h2 class="box_tit">HAIR CATALOG</h2>
				<p class="txt_mid txt_center">
					トレンドを意識した、<br>Lotusおすすめのデザインをご覧ください。
				</p>
				<section class="container_col">
				<?php query_posts('cat=6&posts_per_page=3&paged='.$paged); ?>
					<?php if(have_posts()): ?>
					<?php while ( have_posts() ) : the_post(); ?>
					
					<dl class="catalog_li">
						<dt>
							<?php
								$attachment_id = get_field('catalog_img');
								$size = "item";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$attachment = get_post( get_field('catalog_img') );
								$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
								$image_title = $attachment->post_title;
							?>
							<img src="<?php echo $image[0]; ?>" alt="<?php the_field('catalog_name'); ?>" class="pcBlock">
							<?php
								$attachment_id = get_field('catalog_img');
								$size = "small_thumb";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$attachment = get_post( get_field('catalog_img') );
								$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
								$image_title = $attachment->post_title;
							?>
							<img src="<?php echo $image[0]; ?>" alt="<?php the_field('catalog_name'); ?>" class="spBlock">
							<p class="common_tit txt_center txt_link"><?php the_field('catalog_name'); ?></p>
						</dt>
						<dd>
							<?php the_field('catalog_txt'); ?>
							<p>Designer：<?php the_field('catalog_designer'); ?></p>
						</dd>
					</dl>
					<?php endwhile; ?>
					<?php else: ?>
						<p class="txt_center">指定された投稿はありません。</p>
					<?php endif; ?>
				</section>
				<?php get_template_part(sp_menu_page); ?>
			</article>

			<?php elseif(is_category('goods')): ?>
			<!--グッズ-->
			<article id="goods_Page" class="wrapper">
				<h2 class="box_tit">GOODS</h2>
				<p class="txt_mid txt_center">
					Lotusでは「頭皮環境」「髪質改善」「デザインの再現性」を大切にし、<br>
					お客様が安心して使いやすいグッズをご用意しております。
				</p>
				<section class="container_col">
				<?php query_posts('cat=7&posts_per_page=10&paged='.$paged); ?>
					<?php if(have_posts()): ?>
					<?php while ( have_posts() ) : the_post(); ?>

					<dl class="catalog_li">
						<dt>
							<?php
								$attachment_id = get_field('goods_img');
								$size = "item";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$attachment = get_post( get_field('goods_img') );
								$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
								$image_title = $attachment->post_title;
							?>
							<img src="<?php echo $image[0]; ?>" alt="<?php the_field('goods_name'); ?>" class="pcBlock">
							<?php
								$attachment_id = get_field('goods_img');
								$size = "small_thumb";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$attachment = get_post( get_field('goods_img') );
								$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
								$image_title = $attachment->post_title;
							?>
							<img src="<?php echo $image[0]; ?>" alt="<?php the_field('goods_name'); ?>" class="spBlock">
							<p class="common_tit txt_center txt_link"><?php the_field('goods_name'); ?></p>
						</dt>
						<dd>
							<?php the_field('goods_txt'); ?>
							<p>URL：<a href="http://<?php the_field('goods_link'); ?>" target="_blank"><?php the_field('goods_link'); ?></a></p>
						</dd>
					</dl>
					<?php endwhile; ?>
					<?php else: ?>
						<p class="txt_center">指定された投稿はありません。</p>
					<?php endif; ?>
				</section>
				<?php get_template_part(pager); ?>
				<?php get_template_part(sp_menu_page); ?>
			</article>

			<?php elseif(is_category('news')): ?>
			<!--NEWS-->
			<article id="news_Top" class="wrapper">
				<h2 class="box_tit">NEWS</h2>
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
							<p>指定された年度の投稿はありません。</p>
					<?php endif; ?>
				</section>
				<?php get_template_part(sp_menu_page); ?>
			</article>

			<?php elseif(is_category('recommend')): ?>
			<!--レコメンド-->
			<article id="recommend_Page" class="wrapper">
				<h2 class="box_tit">RECOMMEND</h2>
				<p class="txt_mid txt_center">
					三ツ境には、行きつけにしたくなる、おすすめのお店がたくさんあります。<br>
					LOTUSの帰りに、ぜひ一度足を運んでみてください。ここだけの特別特典もご用意しています。
				</p>
				<section class="container_col">
					<div class="img_map"><img src="<?php echo get_template_directory_uri(); ?>/images/img_map2.png" alt="各店舗マップ"></div>
					<p class="btn_googlemap"><a href="https://goo.gl/maps/0kRB5" target="_blank">Google Mapで見る</a></p>
					<?php query_posts('cat=8&posts_per_page=1&paged='.$paged); ?>
					<?php if(have_posts()): ?>
					<?php while ( have_posts() ) : the_post(); ?>

					<dl class="catalog_li">
						<dt>
							<?php
								$attachment_id = get_field('reco_img');
								$size = "item";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$attachment = get_post( get_field('reco_img') );
								$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
								$image_title = $attachment->post_title;
							?>
							<img src="<?php echo $image[0]; ?>" alt="<?php the_field('reco_title'); ?>" class="pcBlock">
							<?php
								$attachment_id = get_field('reco_img');
								$size = "small_thumb";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$attachment = get_post( get_field('reco_img') );
								$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
								$image_title = $attachment->post_title;
							?>
							<img src="<?php echo $image[0]; ?>" alt="<?php the_field('reco_title'); ?>" class="spBlock">
							<p class="common_tit txt_center txt_link"><?php the_field('reco_title'); ?></p>
						</dt>
						<dd>
							<?php the_field('reco_txt'); ?>
						</dd>
					</dl>
					<?php endwhile; ?>
					<?php else: ?>
						<p class="txt_center">指定された投稿はありません。</p>
					<?php endif; ?>
					<?php get_template_part(pager); ?>
				</section>
				<?php get_template_part(sp_menu_page); ?>
			</article>
			
			<?php elseif(is_category('recruit')): ?>
			<!--レコメンド-->
			<article id="recruit_Page" class="wrapper">
				<h2 class="box_tit">RECRUIT</h2>
				<p class="txt_mid txt_center">
					Lotusでは、現在スタッフの募集を行っています。<br />
					一緒にLotusを盛り上げてくれる人の応募をお待ちしています。
				</p>
				<section class="container_col recruit_table">
					<table>
						<tr>
							<th>募集内容</th>
							<td>スタイリスト・アシスタント・パート</td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td>三ツ境</td>
						</tr>
						<tr>
							<th>休　日</th>
							<td>月6日休制（定休：毎週火曜日第1.3水曜日）<br />
								※夏期・冬期休暇あり<br />
								※他の休暇に関してはオーナーとの相談のもと可</td>
						</tr>
						<tr>
							<th>待　遇</th>
							<td>随時昇給(技術レベルにより)／賞与あり<br />
								交通費支給（月／1万円迄）<br />
								社会保険完備 店販歩合 教育手当 社員旅行<br />
								※社会保険は研修期間（試用期間）経過後の加入となります。</td>
						</tr>
						<tr>
							<th>給　与</th>
							<td>■ スタイリスト<br />
								基本給20万＋指名歩合＋店販歩合+通勤手当<br />
								■ アシスタント<br />
								基本給17万(随時昇給)＋指名歩合＋店販歩合+通勤手当<br />
								■ スタイリスト・パート<br />
								時給950円＋指名歩合＋店販歩合＋通勤手当<br />
								</td>
						</tr>
					</table>
					<table>
						<tr>
							<th>応募方法</th>
							<td>応募希望の方は、履歴書（必ず写真貼付）に必要事項を記入の上、下記履歴書送付先に送付してください。<br />
			応募書類を確認後、面接を実施しますが、面接日については担当よりご連絡します。</td>
						</tr>
						<tr>
							<th>応募締切</th>
							<td>随時募集</td>
						</tr>
						<tr>
							<th>履歴書送付先</th>
							<td>LotusHairDesign<br />
								〒246-0022<br />
								神奈川県横浜市瀬谷区三ツ境10番地3.2階<br />
								担当 小山 亮<br />
								TEL 045-444-8523</td>
						</tr>
					</table>
				</section>
				<?php get_template_part(sp_menu_page); ?>
			</article>

			<?php else: ?>
			<article id="goods_Page" class="wrapper">
				<section class="container_col">
					<p class="txt_center">指定された投稿はありません。</p>
				</section>
			</article> 
			<?php endif; ?>

<?php get_footer(); ?>
		
