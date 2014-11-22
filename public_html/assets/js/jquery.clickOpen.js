//さらに詳しくをクリックで開閉
//下部「閉じる」ボタンで閉じる

//section1
$(function() {
	var openBtn = $('.button_one');
	var openText = $('.text_one');
	var closeBtn = $('.button_one_close');
	var scSec = $('#section1');	
	
	openText.hide();
	openBtn.click(function(){
		$(this).next().toggle("1000");
	});
	
	$(window).load(function() {
		// 下部の閉じるボタンクリックで閉じる
		closeBtn.click(function(){
			openBtn.click();
			var headerHight = 140;
			var i = openBtn.index(this)
			var p = $("#section1").eq(i).offset().top-headerHight;
			$('body,html').animate({scrollTop: p}, 500, "swing");
			return false;

		});
	});
});	

//section2
$(function() {
	var openBtn = $('.button_two');
	var openText = $('.text_two');
	var closeBtn = $('.button_two_close');
	var scSec = $('#section2');	
	
	openText.hide();
	openBtn.click(function(){
		$(this).next().toggle("1000");
	});
	
	$(window).load(function() {
		// 下部の閉じるボタンクリックで閉じる
		closeBtn.click(function(){
			openBtn.click();
			var headerHight = 140;
			var i = openBtn.index(this)
			var p = $("#section2").eq(i).offset().top-headerHight;
			$('body,html').animate({scrollTop: p}, 500, "swing");
			return false;

		});
	});
});	

//section3
$(function() {
	var openBtn = $('.button_three');
	var openText = $('.text_three');
	var closeBtn = $('.button_three_close');
	var scSec = $('#section3');	
	
	openText.hide();
	openBtn.click(function(){
		$(this).next().toggle("1000");
	});
	
	$(window).load(function() {
		// 下部の閉じるボタンクリックで閉じる
		closeBtn.click(function(){
			openBtn.click();
			var headerHight = 140;
			var i = openBtn.index(this)
			var p = $("#section3").eq(i).offset().top-headerHight;
			$('body,html').animate({scrollTop: p}, 500, "swing");
			return false;

		});
	});
});	
