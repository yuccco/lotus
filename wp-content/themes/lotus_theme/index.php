<?php
/*
Template Name: FrontPage
*/
?>
<?php get_header(); ?>

			<!--TOPページコンテンツ-->
			<article id="topcontent" class="wrapper">
				<h2 class="box_tit">Lotus HAIR DESIGN</h2>
				<div id="film_roll">
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/slide_01.jpg" alt="photo1"></div>
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/slide_02.jpg" alt="photo2"></div>
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/slide_03.jpg" alt="photo3"></div>
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/slide_04.jpg" alt="photo4"></div>
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/slide_05.jpg" alt="photo5"></div>
				</div>
				<div id="film_roll_arrow">
					<a class="btn_prev" id="film_roll_prev"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_prev.png" alt="prev"></a>
					<a class="btn_next" id="film_roll_next"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_next.png" alt="next"></a>
				</div>
				<p class="btn_reserve spBlock"><a href="http://tbqm.jp/lotus0411/" target="_blank">予約はこちら</a></p>
				<p class="btn_arrow"><a href="#news_Top">Next contents</a></p>
			</article>
			
			<!--NEWS-->
			<article id="news_Top" class="wrapper">
				<h2 class="box_tit">NEWS</h2>
				<section class="container">
					<aside>
						<?php get_sidebar(); ?>
					</aside>

					<?php query_posts('showposts=1&cat=1'); while(have_posts()) : the_post(); ?>
						<div class="entry-content">
						<?php echo get_the_post_thumbnail($post->ID, 'large_thumb'); ?>
						<h3 class="news_tit txt_link"><a href="<?php the_permalink() ?>"><span class="txt_date"><?php the_time("Y.n.j"); ?></span><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</div>
					<?php endwhile;?>
					<p class="btn_detail"><a href="<?php the_permaLink(); ?>">続きを読む&gt;</a></p>
				</section>
				<?php get_template_part(sp_menu); ?>
				<p class="btn_arrow"><a href="#about_Top">Next contents</a></p>
			</article>
			
			<!--ABOUT-->
			<article id="about_Top" class="wrapper">
				<h2 class="box_tit">ABOUT LOTUS</h2>
				<p id="txt_about">Lotus,Lovely,Lucky,Living,Library,Lifestyle</p>
				<p class="txt_mid txt_center">
					Lotusの“L”は、お客様への気持ちです。<br>
					人が集まるリビングのような空間で、時間を忘れる癒しを味わう。<br>
					豊富な知識と技術で、スタイルに幸運と愛を吹き込む。<br>
					いつでも、遊びにきてください。<br>
					そして、『Lotus』はお客様とともにいつまでも咲き続けたいと思っています。<br>
					<span>オーナー　城田 宗司</span>
				</p>
				<section class="container_col">
					<h3>STAFF</h3>
					<?php $posts = get_posts('posts_per_page=-1&cat=4&order=asc'); global $post; ?>
					<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
					<dl class="staff_li heightLine-group1">
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
					<p class="btn_detail spBlock"><a href="<?php echo home_url(); ?>/about/">Read More</a></p>
				</section>
				<?php get_template_part(sp_menu); ?>
				<p class="btn_arrow"><a href="#menu_Top">Next contents</a></p>
			</article>
			
			<!--MENU-->
			<article id="menu_Top" class="wrapper">
				<h2 class="box_tit">MENU</h2>
				<p class="txt_mid txt_center">
					Lotusの知識と技術は、お客様の魅力を<br>最大限に引き出すことを１番に考えます。
				</p>
				<section class="container_col">
					<div id="course_A" class="menu_table">
						<h4>Shampoo&amp;Cut</h4>
						<dl>
							<dt>オーナー・店長カット</dt>
							<dd>¥4,500</dd>
							<dt>学生（大学･専門）</dt>
							<dd>¥3,500</dd>
							<dt>学生（高校生）</dt>
							<dd>¥3,500</dd>
							<dt>学生（中学生）</dt>
							<dd>¥3,000</dd>
							<dt>学生（小学生）</dt>
							<dd>¥2,500</dd>
							<dt>子供・幼児</dt>
							<dd>¥2,000</dd>
						</dl>
					</div>

					<div id="course_B" class="menu_table">
						<h4>Color</h4>
						<dl>
							<dt>ブライトアップ</dt>
							<dd>¥5,500〜</dd>
							<dt>ブライトアップリタッチ</dt>
							<dd>¥5,000</dd>
							<dt>スーパーブリーチ</dt>
							<dd>¥8,000〜</dd>
							<dt>ハイライト</dt>
							<dd>¥6,000〜</dd>
							<dt>酸性カラー</dt>
							<dd>¥5,000</dd>
						</dl>
					</div>

					<div id="course_C" class="menu_table">
						<h4>Perm</h4>
						<dl>
							<dt>ウェーブ</dt>
							<dd>¥6,000〜</dd>
							<dt class="dt_clear">縮毛矯正</dt>
							<dd>¥10,000</dd>
							<dt class="dt_clear">学生（大学･専門）</dt>
							<dd>¥8,000</dd>
							<dt class="dt_clear">学生（高校生）</dt>
							<dd>¥6,000</dd>
							<dt class="dt_clear">縮毛矯正リタッチ</dt>
							<dd>¥8,000</dd>
						</dl>
					</div>

					<div id="course_D" class="menu_table">
						<h4>Treatment</h4>
						<dl>
							<dt>インフェノム</dt>
							<dd>¥3,500〜</dd>
							<dt>リンケージ</dt>
							<dd>¥2,000〜</dd>
						</dl>
					</div>

					<div id="course_E" class="menu_table">
						<h4>Head Spa</h4>
						<dl>
							<dt>Lotus Spa トップスパニスト</dt>
							<dd>¥4,500</dd>
							<dt class="dt_clear">Lotus Spa</dt>
							<dd>¥4,000</dd>
						</dl>
					</div>

					<div id="course_F" class="menu_table">
						<h4>TM sourse</h4>
						<dl>
							<dt>フルメイク</dt>
							<dd>¥5,000〜</dd>
							<dt class="dt_clear">ブロー</dt>
							<dd>¥3,000</dd>
							<dt class="dt_clear">セット</dt>
							<dd>¥3,500</dd>
							<dt class="dt_clear">アップ</dt>
							<dd>¥4,000</dd>
						</dl>
					</div>

					<aside><p>※全て税抜き価格です。</p></aside>
				</section>
				<?php get_template_part(sp_menu); ?>
				<p class="btn_arrow"><a href="#catalog_Top">Next contents</a></p>
			</article>

			<!--ヘアカタログ-->
			<article id="catalog_Top" class="wrapper">
				<h2 class="box_tit">HAIR CATALOG</h2>
				<p class="txt_mid txt_center">
					トレンドを意識した、<br>Lotusおすすめのデザインをご覧ください。
				</p>
				<section class="container_col">
					<?php $posts = get_posts('posts_per_page=3&cat=6'); global $post; ?>
					<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
					<dl class="catalog_li heightLine-group3">
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
					<?php endforeach; endif; ?>
					<p class="btn_detail spBlock"><a href="<?php echo home_url(); ?>/hair-catalog/">Read More</a></p>
				</section>
				<?php get_template_part(sp_menu); ?>
				<p class="btn_arrow"><a href="#goods_Top">Next contents</a></p>
			</article>

			<!--グッズ-->
			<article id="goods_Top" class="wrapper">
				<h2 class="box_tit">GOODS</h2>
				<p class="txt_mid txt_center">
					Lotusでは「頭皮環境」「髪質改善」「デザインの再現性」を大切にし、<br>
					お客様が安心して使いやすいグッズをご用意しております。
				</p>
				<section class="container_col">

					<?php $posts = get_posts('posts_per_page=-1&cat=7'); global $post; ?>
					<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
					<dl class="catalog_li heightLine-group4">
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
					<?php endforeach; endif; ?>

					<p class="btn_detail spBlock"><a href="<?php echo home_url(); ?>/goods/">Read More</a></p>
				</section>
				<?php get_template_part(sp_menu); ?>
				<p class="btn_arrow"><a href="#access_Top">Next contents</a></p>
			</article>

			<!--アクセス-->
			<article id="access_Top" class="wrapper">
				<h2 class="box_tit">ACCESS</h2>
				<section class="container">
					<div class="img_map"><img src="<?php echo get_template_directory_uri(); ?>/images/img_map.png" alt="Lotusマップ"></div>
					<p class="btn_googlemap"><a href="https://goo.gl/maps/0kRB5" target="_blank">Google Mapで見る</a></p>
					
					<p class="txt_center">
						〒246-0022  神奈川県横浜市瀬谷区三ツ境10-3  2F<br>
						TEL 045-444-9353<br>
						定休日：毎週火曜日・第1・3水曜日<br>
						営業時間：9:30~19:30（カット最終19：00）
					</p>
				</section>
				<?php get_template_part(sp_menu); ?>
				<p class="btn_arrow"><a href="#recommend_Top">Next contents</a></p>
			</article>

			<!--レコメンド-->
			<article id="recommend_Top" class="wrapper">
				<h2 class="box_tit">RECOMMEND</h2>
				<p class="txt_mid txt_center">
					三ツ境には、行きつけにしたくなる、おすすめのお店がたくさんあります。<br>
					LOTUSの帰りに、ぜひ一度足を運んでみてください。ここだけの特別特典もご用意しています。
				</p>
				<section class="container_col">
					<div class="img_map"><img src="<?php echo get_template_directory_uri(); ?>/images/img_map2.png" alt="各店舗マップ"></div>
					<p class="btn_googlemap"><a href="https://goo.gl/maps/0kRB5" target="_blank">Google Mapで見る</a></p>
					
					<?php $posts = get_posts('posts_per_page=-1&cat=8'); global $post; ?>
					<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
					<dl class="catalog_li heightLine-group5">
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
					<?php endforeach; endif; ?>
					<p class="btn_detail spBlock"><a href="<?php echo home_url(); ?>/recommend/">Read More</a></p>
				</section>
				<?php get_template_part(sp_menu); ?>
			</article>
			
			<!-- RECRUIT-->
			<article id="recruit_Top" class="wrapper">
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
					<p class="btn_detail spBlock"><a href="<?php echo home_url(); ?>/recruit/">Read More</a></p>
				</section>
				<?php get_template_part(sp_menu); ?>
			</article>


<?php get_footer(); ?>