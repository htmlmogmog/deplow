<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Language" content="ja">
<title>デプロイ自動化サービス「Deplow」</title>
<meta property="og:title" content="デプロイ自動化サービス「Deplow」">
<meta property="og:type" content="website">
<meta property="og:description" content="今ある手順書をそのまま自動化！国内初のデプロイ自動化サービス「Deplow-でぷろう-」">
<meta property="og:url" content="http://deplow.jp/">
<meta property="og:image" content="http://deplow.jp/asset/img/deplow_logo.png">
<meta property="og:site_name" content="Web App Deplow">
<?php
if (preg_match('/Android/',$_SERVER['HTTP_USER_AGENT'])) {
// Android用
	echo ('<meta name="viewport" content="target-densitydpi=device-dpi,width=device-width,initial-scale=1" />
	');
}else if (preg_match('/iPhone/',$_SERVER['HTTP_USER_AGENT'])) {
// iPhone用
	echo('<meta name="viewport" content="width=device-width,initial-scale=0" />
	');
}else if (preg_match('/iPad/',$_SERVER['HTTP_USER_AGENT'])) {
	echo('<meta name="viewport" content="width=device-width,initial-scale=1" />
	');
}else {
	echo('<meta name="viewport" content="width=device-width,initial-scale=1" />
	');
}
?>
<link rel="stylesheet" href="./assets/css/reset.css">
<link rel="stylesheet" href="./assets/css/common.css" media="screen, print">
<link rel="stylesheet" href="./assets/css/lightbox.css">
<link rel="stylesheet" media="all and (orientation:portrait)" href="./assets/css/portrait.css">
<link rel="stylesheet" media="all and (orientation:landscape)" href="./assets/css/landscape.css">
<!--<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 1.5)" type="text/css" href="iphone.css" />-->
<script type="text/javascript" src="assets/js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="assets/js/jquery.mobile-1.4.2.js"></script>
<script type="text/javascript" src="assets/js/lightbox.js"></script>
<script type="text/javascript" src="assets/js/jquery.clickSubMenu.js"></script>
<script type="text/javascript" src="assets/js/jquery.PageTop.js"></script>

<!--
<script type="text/javascript">
	$(function(){
		$('.scroll').on('click', function(e){
			e.preventDefault();
			var url = this.href;
			var parts = url.split('#');
			var target = parts[1];
			var target_offset = $('#'+target).offset();
			var target_top = target_offset.top;
			$('html, body').animate({scrollTop:target_top}, 1000);
		});
	});
</script>-->
</head>
<body>
<div id="wrap_all">
	<div id="header" class="clearfix">
		<div id="header_inner_one" class="header_inner contents_wd">
			<h1 class="clearfix fl_left">
				<div id="brand_logo" class="fl_left">
					<a href="./index.html"><img src="assets/img/logo_brand.png" alt="NIFTY Cloud C4SA ENTERPRISE"></a>
				</div>
			</h1>
		    <div id="h_menu" class="fl_right">
		        <ul>
		        	<li class="h_section_one"><a href="#section1" target="blank">Dleplowとは</a></li>
		        	<li class="h_section_two"><a href="#price" target="blank">価格</a></li>
		        	<li class="btn_inquiry"><a href="#inqury"><span>お問い合わせ</span></a></li>
		        </ul>
			</div>
		</div>
	</div>
	<div id="top_view" class="bg_cover">
		<div id="top_view_inner">
            <div id="top_view_title" class="contents_wd top_view_title">
                <h2>
                    <img src="assets/img/title_topview_v2.png" alt="そろそろデプロイさぼりませんか？">
                </h2>
            </div>
            <div id="top_view_sub_title">
            	<div class="spring">
            		<img src="assets/img/deplow_spring.png" alt="2015年春正式リリース">
            	</div>
            	<div class="window"><img src="assets/img/bg_topview_window.png" alt="Deplow-でぷろう-"></div>
            	<div class="text">
            		<div>ベンダーを選ばない<br>国内初のデプロイ自動化サービス</div>
            		<img src="assets/img/deplow_logo.png" alt="Deplow-でぷろう-">
            	</div>
            </div>
		</div>
	</div>
	<div id="section1" class="scroll">
		<div class="content_title">
			たった2ステップで<br >素早くミスのないテスト&リリースが行えます
		</div>
	</div>
	<div id="section_nav">
		<div class="fl_left">
			<a href="#step1" target="blank" class="h_section_three">
				<h3>ステップ1</h3>
				<h2>手順書の自動化</h2>
			</a>
			<span>※自動化のオプションあり</span>
		</div>
		<div class="fl_left_add">
			<h2>+</h2>
		</div>
		<div class="fl_right">
			<a href="#step2" target="blank" class="h_section_four">
				<h3>ステップ2</h3>
				<h2>Deplowの実行</h2>
			</a>
		</div>
	</div>
	<div id="section_nav_text">
		<div class="section_text">
            <img src="assets/img/cursor.png" alt="矢印">
			今ある手順はそのままでOK!<br>
			自動化された手順書とDeplowを実行さえすれば、<br>
			素早くミスのないテスト＆リリースが可能に
		</div>
	</div>
	<div id="step1">
		<div class="content_title">
			<h3>ステップ1</h3>
			<h2>手順書の自動化</h2>
		</div>
		<div class="content">
			<div class="text">お持ちの手順書をAnsible（アンシブル）で自動化します。<br>Ruby、Pythonといったプログラミング知識は一切不要。<br>特定のエンジニアへの依存がないため、保守・管理が誰でも行えます。</div>
			<div class="img"><img src="assets/img/step_1.png"></div>
		</div>
	</div>
	<div id="step2">
		<div class="content_title">
			<h3>ステップ2</h3>
			<h2>Deplowの実行</h2>
		</div>
		<div class="content">
			<div class="text">プロジェクト毎に、サーバーと手順書をセットにして管理。<br>全てワンクリックで実行できます。</div>
			<div class="img"><img src="assets/img/step_2.png"></div>
		</div>
		<div class="content_three">
			<div class="inner">
				<div class="item_three">
					<div class="item_h1">タイマー機能</div>
					<div class="item_image"><img src="assets/img/step_2_1.png"></div>
					<div class="item_text">時間を指定し、<br>定期的な実行ができます</div>
				</div>
				<div class="item_three">
					<div class="item_h1">他ツールとの連携</div>
					<div class="item_image"><img src="assets/img/step_2_2.png"></div>
					<div class="item_text">GithubやJenkinsなど<br>外部ツールとの連携も可能です。</div>
				</div>
				<div class="item_three">
					<div class="item_h1">タイマー機能</div>
					<div class="item_image"><img src="assets/img/step_2_3.png"></div>
					<div class="item_text">操作可能なメンバーを<br>管理できます。</div>
				</div>
			</div>	
		</div>
	</div>
	<div id="price">
		<div class="content_title">
			<h2>
				価格
			</h2>
		</div>
		<div class="deplow_january">
            <img src="assets/img/deplow_january.png" alt="無料お試し版1月リリース">
        </div>
		<div id="price_area">
			<table class="contents_wd">
				<tr>
					<th class="price_title freemium">Freemium</th>
					<th class="price_title mini">Mini</th>
					<th class="price_title basic">Basic</th>
					<th class="price_title advance">Advance</th>
				</tr>
				<tr class="price_num">
					<td class="freemium">Free</td>
					<td class="mini">￥35,000/月</td>
					<td class="basic">￥55,000/月</td>
					<td class="advance">￥90,000/月</td>
				</tr>
				<tr class="price_server">
					<td class="freemium">～3<span class="size_mini">台まで</span><br >
						<span class="price_sub_title">デプロイ可能サーバー台数</span>
					</td>
					<td class="mini">4～20<span class="size_mini">台</span><br ><span class="price_sub_title">デプロイ可能サーバー台数</span></td>
					<td class="basic">21～50<span class="size_mini">台</span><br ><span class="price_sub_title">デプロイ可能サーバー台数</span></td>
					<td class="advance">51～100<span class="size_mini">台</span><br ><span class="price_sub_title">デプロイ可能サーバー台数</span></td>
				</tr>
			</table>
			<div class="attention">
				※料金体系に変更が生じる場合がございます。
			</div>
		</div>
	</div>
	<div id="inqury">
		<div class="content_title">
			<h2>
				お問い合わせ
			</h2>
		</div>
		<div class="content">
			お問い合わせはこちら！<br>
			TEL: <span>03-3868-2466</span>
		</div>
	<p id="page-top"><a href="#wrap">▲<br>TOP</a></p>

	<div id="footer">
		<ul id="outlink" class="clearfix">
			<li>
				<a href="http://realglobe.jp/" target="blank">株式会社リアルグローブ</a>
			</li>
			<li>
				<a href="/index.html" target="blank">Deplow</a>
			</li>
		</ul>
		<address>© 2014 REALGLOBE Inc. All Rights Reserved.</address>
	</div>
</div>
</body>
</html>