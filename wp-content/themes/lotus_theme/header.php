<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php bloginfo('name'); ?></title>
		<meta name="keywords" content="Lotus,美容院,美容室,ヘアサロン,横浜市,瀬谷区,三ツ境,ヘアスタイル">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slide.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
		<!--[if lt IE 9]>
			<div style='border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;'>
				<div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'>
					<a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'>
						<img src='http://www.ie6nomore.com/files/theme/ie6nomore-cornerx.jpg' style='border: none;' alt='Close this notice' />
					</a>
				</div>
				<div style='width: 640px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'>
					<div style='width: 75px; float: left;'>
						<img src='http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg' alt='Warning!' />
					</div>
					<div style='width: 275px; float: left; font-family: Arial, sans-serif;'>
						<div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>あなたは旧式ブラウザをご利用中です</div>
						<div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>このウェブサイトを快適に閲覧するにはブラウザをアップグレードしてください。</div>
					</div>
					<div style='width: 75px; float: left;'>
						<a href='http://www.firefox.com' target='_blank'>
							<img src='http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg' style='border: none;' alt='Get Firefox' />
						</a>
					</div>
					<div style='width: 75px; float: left;'>
						<a href='http://www.browserforthebetter.com/download.html' target='_blank'>
							<img src='http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg' style='border: none;' alt='Get Internet Explorer' />
						</a>
					</div>
					<div style='width: 73px; float: left;'>
						<a href='http://www.apple.com/safari/download/' target='_blank'>
							<img src='http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg' style='border: none;' alt='Get Safari' />
						</a>
					</div>
					<div style='float: left;'>
						<a href='http://www.google.com/chrome' target='_blank'>
							<img src='http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg' style='border: none;' alt='Get Google Chrome' />
						</a>
					</div>
				</div>
			</div>
		<![endif]-->
		<div id="page" class="hfeed site">
			
			<!--ヘッダー-->
			<header class="clearfix">
				<div id="head">
					<h1 id="logo"><a href="<?php echo home_url(); ?>">Lotus</a></h1>
					<ul id="sNav" class="pcBlock">
						<li id="sNav_reserve"><a href="http://tbqm.jp/lotus0411/" target="_blank">ご予約</a></li>
						<li id="sNav_fb"><a href="https://www.facebook.com/pages/Lotus-Hair-Design-ロータスヘアーデザイン/276695315685285?fref=ts" target="_blank">fecebook</a></li>
					</ul>
					<ul id="spNav" class="spBlock">
					<?php if ( is_home() || is_front_page() ) : ?>
						<li id="spNav_access"><a href="#access_Top">ACCESS</a></li>
					<?php else: ?>
						<li id="spNav_access"><a href="<?php echo home_url(); ?>#access_Top">ACCESS</a></li>
					<?php endif; ?>
						<li id="spNav_reserve"><a href="http://tbqm.jp/lotus0411/" target="_blank">ご予約</a></li>
						<li id="spNav_tell"><a href="tel:0454449353">お電話でのお問い合わせ</a></li>
						<li id="spNav_menu">MENU</li>
					</ul>

					<?php if ( is_home() || is_front_page() ) : ?>
					<nav id="gNav_pc" class="clearfix pcBlock">
						<ul>
							<li id="gNav_news"><a href="#news_Top">NEWS</a></li>
							<li id="gNav_about"><a href="#about_Top">ABOUT LOTUS</a></li>
							<li id="gNav_menu"><a href="#menu_Top">MENU</a></li>
							<li id="gNav_catalog"><a href="#catalog_Top">HAIR CATALOG</a></li>
							<li id="gNav_goods"><a href="#goods_Top">GOODS</a></li>
							<li id="gNav_access"><a href="#access_Top">ACCESS</a></li>
							<li id="gNav_blog"><a href="http://ameblo.jp/lotus-hairdesing/">BLOG</a></li>
							<li id="gNav_recommend"><a href="#recommend_Top">RECOMMEND</a></li>
							<li id="gNav_recruit"><a href="#recruit_Top">RECRUIT</a></li>
						</ul>
					</nav>

					<?php else: ?>
					<nav id="gNav_pc" class="clearfix pcBlock">
						<ul>
							<li id="gNav_news"><a href="<?php echo home_url(); ?>/#news_Top">NEWS</a></li>
							<li id="gNav_about"><a href="<?php echo home_url(); ?>/#about_Top">ABOUT LOTUS</a></li>
							<li id="gNav_menu"><a href="<?php echo home_url(); ?>/#menu_Top">MENU</a></li>
							<li id="gNav_catalog"><a href="<?php echo home_url(); ?>/#catalog_Top">HAIR CATALOG</a></li>
							<li id="gNav_goods"><a href="<?php echo home_url(); ?>/#goods_Top">GOODS</a></li>
							<li id="gNav_access"><a href="<?php echo home_url(); ?>/#access_Top">ACCESS</a></li>
							<li id="gNav_blog"><a href="http://ameblo.jp/lotus-hairdesing/">BLOG</a></li>
							<li id="gNav_recommend"><a href="<?php echo home_url(); ?>/#recommend_Top">RECOMMEND</a></li>
							<li id="gNav_recruit"><a href="<?php echo home_url(); ?>/#recruit_Top">RECRUIT</a></li>
						</ul>
					</nav>
					<?php endif; ?>
					
					<!--スマホ用--><div id="spNavhead" class="">
					<?php if ( is_home() || is_front_page() ) : ?>
					<nav id="gNav" class="clearfix">
						<ul>
							<li id="spNav_menu_op" class="spBlock"><span>close</span>MENU</li>
							<li id="gNav_home spBlock"><a href="<?php echo home_url(); ?>">HOME</a></li>
							<li id="gNav_news"><a href="#news_Top">NEWS</a></li>
							<li id="gNav_about"><a href="#about_Top">ABOUT LOTUS</a></li>
							<li id="gNav_menu"><a href="#menu_Top">MENU</a></li>
							<li id="gNav_catalog"><a href="#catalog_Top">HAIR CATALOG</a></li>
							<li id="gNav_goods"><a href="#goods_Top">GOODS</a></li>
							<li id="gNav_access"><a href="#access_Top">ACCESS</a></li>
							<li id="gNav_blog"><a href="http://ameblo.jp/lotus-hairdesing/">BLOG</a></li>
							<li id="gNav_recommend"><a href="#recommend_Top">RECOMMEND</a></li>
							<li id="gNav_recruit"><a href="#recruit_Top">RECRUIT</a></li>
						</ul>
					</nav>

					<?php else: ?>
					<nav id="gNav" class="clearfix">
						<ul>
							<li id="spNav_menu_op" class="spBlock"><span>close</span>MENU</li>
							<li id="gNav_home spBlock"><a href="<?php echo home_url(); ?>">HOME</a></li>
							<li id="gNav_news"><a href="<?php echo home_url(); ?>/#news_Top">NEWS</a></li>
							<li id="gNav_about"><a href="<?php echo home_url(); ?>/#about_Top">ABOUT LOTUS</a></li>
							<li id="gNav_menu"><a href="<?php echo home_url(); ?>/#menu_Top">MENU</a></li>
							<li id="gNav_catalog"><a href="<?php echo home_url(); ?>/#catalog_Top">HAIR CATALOG</a></li>
							<li id="gNav_goods"><a href="<?php echo home_url(); ?>/#goods_Top">GOODS</a></li>
							<li id="gNav_access"><a href="<?php echo home_url(); ?>/#access_Top">ACCESS</a></li>
							<li id="gNav_blog"><a href="http://ameblo.jp/lotus-hairdesing/">BLOG</a></li>
							<li id="gNav_recommend"><a href="<?php echo home_url(); ?>/#recommend_Top">RECOMMEND</a></li>
							<li id="gNav_recruit"><a href="<?php echo home_url(); ?>/#recruit_Top">RECRUIT</a></li>
						</ul>
					</nav>
					<?php endif; ?>
				 </div><!--//スマホ用-->

				</div>
			</header>
