<?php
	//バージョンの出力禁止
	remove_action('wp_head', 'wp_generator');
	//フィードのリンク無効
	remove_action('wp_head', 'feed_links_extra', 3);

	//フォーマット非表示
	function remove_post_metaboxes() {
		remove_meta_box('formatdiv', 'post', 'normal');
	}
	add_action('admin_menu', 'remove_post_metaboxes');

	//jqueryの設定
	add_action('wp_footer' , 'myscript' , '1');
	function myScript(){
	// WordPress 付属している jQuery の読み込みを停止。
	wp_deregister_script('jquery');
	//wp_enqueue_script('jquery', get_template_directory_uri() . 'js/vendor/jquery-1.10.2.min.js');
	//その他jquery
	wp_enqueue_script('plugins' , get_template_directory_uri() . '/js/plugins.js');
	wp_enqueue_script('film_roll' , get_template_directory_uri() . '/js/film_roll/js/jquery.film_roll.js');
	wp_enqueue_script('heightLine' , get_template_directory_uri() . '/js/heightLine.js');
	wp_enqueue_script('main.js' , get_template_directory_uri() . '/js/main.js');
	}

	//抜粋設定
	function new_excerpt_mblength($length) {
		return 100;
	}
	add_filter('excerpt_mblength', 'new_excerpt_mblength');
	function new_excerpt_more($more) {
	return '…';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	// 画像パスをテーマディレクトに変更
	function replaceImagePath($arg) {
		$content = str_replace('"images/', '"' . get_template_directory_uri() . '/images/', $arg);
		return $content;
	}
	add_action('the_content', 'replaceImagePath');

	//imgタグのwidth.height等を削除
	add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
	add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );

	function remove_image_attribute( $html ){
		$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
		$html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
		$html = preg_replace( '/title=[\'"]([^\'"]+)[\'"]/i', '', $html );
		$html = preg_replace( '/<a href=".+">/', '', $html );
		$html = preg_replace( '/<\/a>/', '', $html );
		return $html;
	}

	//アイキャッチ画像の設定
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 'large_thumb',525,325,true );
	add_image_size( 'small_thumb', 217,217, true );
	add_image_size( 'large_thumb', 525,325, true );

	//他画像の設定
	add_image_size( 'item', 270, 270, true );
	add_image_size( 'staff-pc', 271, 383, true );
	add_image_size( 'staff-sp', 162, 162, true );
	add_image_size( 'img-news', 525, 325, true );
	
	//メディア挿入時のサイズ選択肢に追加
	function add_custom_image_sizes() {
	global $my_custom_image_sizes;
	$my_custom_image_sizes = array(
	'item' => array(
		'name'       => 'グッズ・ヘアカタログ・レコメンド用', // 選択肢のラベル名
		'width'      => 270,    // 最大画像幅
		'height'     => 270,    // 最大画像高さ
		'crop'       => true,  // 切り抜きを行うかどうか
		'selectable' => true,   // 選択肢に含めるかどうか
	),
	'staff-pc' => array(
		'name'       => 'スタッフPC用',
		'width'      => 271,
		'height'     => 383,
		'crop'       => true,
		'selectable' => true,
	),
	'staff-sp' => array(
		'name'       => 'スタッフスマホ用',
		'width'      => 162,
		'height'     => 162,
		'crop'       => true,
		'selectable' => true,
	),
	'img-news' => array(
		'name'       => 'NEWS写真用',
		'width'      => 525,
		'height'     => 325,
		'crop'       => true,
		'selectable' => true,
	),
	);	foreach ( $my_custom_image_sizes as $slug => $size ) {
	add_image_size( $slug, $size['width'], $size['height'], $size['crop'] );
	}
	}
	add_action( 'after_setup_theme', 'add_custom_image_sizes' );

	function add_custom_image_size_select( $size_names ) {
	global $my_custom_image_sizes;
	$custom_sizes = get_intermediate_image_sizes();
	foreach ( $custom_sizes as $custom_size ) {
	if ( isset( $my_custom_image_sizes[$custom_size]['selectable'] ) && $my_custom_image_sizes[$custom_size]['selectable'] ) {
	$size_names[$custom_size] = $my_custom_image_sizes[$custom_size]['name'];
	}
	}
	return $size_names;
	}
	add_filter( 'image_size_names_choose', 'add_custom_image_size_select' );
	
	// サブカテゴリIDを取得する関数
	function get_subcat_id( $cat_id = null ) {
	global $wpdb;
	if($cat_id == null) return false;
	// サブカテゴリを取得
	$sub_cat = $wpdb->get_col($wpdb->prepare("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=%d", $cat_id));
	return $sub_cat;
	}

	//年アーカイブの表示
	function my_archives_link($html){
	if(preg_match('/[0-9]+?<\/a>/', $html))
	$html = preg_replace('/([0-9]+?)<\/a>/', '$1&gt;</a>', $html);
	if(preg_match('/title=[\'\"][0-9]+?[\'\"]/', $html))
	$html = preg_replace('/(title=[\'\"][0-9]+?)([\'\"])/', '$1&gt;$2', $html);
	return $html;
	}
	add_filter('get_archives_link', 'my_archives_link', 10);

	//ページネーション
	function pagination($pages = '', $range = 2)
	{
		$showitems = ($range * 2)+1;//表示するページ数（５ページを表示）
		global $paged;//現在のページ値
		if(empty($paged)) $paged = 1;//デフォルトのページ
		if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;//全ページ数を取得
		if(!$pages)//全ページ数が空の場合は、１とする
		{
		$pages = 1;
		}
	}
	if(1 != $pages)//全ページが１でない場合はページネーションを表示する
	{
		 echo "<div id=\"pager\">\n";
		 echo "<ul id=\"pager_li\">\n";
		 //Prev：現在のページ値が１より大きい場合は表示
	if($paged > 1) echo "<li id=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>&lt;</a></li>\n";

		for ($i=1; $i <= $pages; $i++)
		{
		if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
		{
		//三項演算子での条件分岐
		echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
		}
	}
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<li id=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">&gt;</a></li>\n";
		echo "</ul>\n";
		echo "</div>\n";
	}
	}

?>