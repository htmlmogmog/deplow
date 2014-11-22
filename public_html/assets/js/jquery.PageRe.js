$(function(){
	var $speed = 1500; //スクロールのスピードを設定（ミリ秒）
	var targetOffset = $('#wrap_all').offset().top; //ターゲットとなるdivを設定

	//ページを読み込み0.8秒後にターゲットとなるdivまで自動スクロール
	setTimeout(function(){
		$("html,body").stop().animate({scrollTop:targetOffset},$speed, 'quart');
		return false;
	},800);
})