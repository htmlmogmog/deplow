//ヘッダーメニュー
//section1メニュー
$(function() {
	var subBtn = $('.h_section_one');
	
	subBtn.click(function () {
		var headerHightoo = 78;
		var n = subBtn.index(this)
		var poo = $("#section1").eq(n).offset().top-headerHightoo;
		$('body,html').animate({scrollTop: poo}, 500, "swing");
		return false;

	});
});

//section2メニュー
$(function() {
	var subBtn = $('.h_section_two');
	
	subBtn.click(function () {
		var headerHightoo = 78;
		var n = subBtn.index(this)
		var poo = $("#price").eq(n).offset().top-headerHightoo;
		$('body,html').animate({scrollTop: poo}, 500, "swing");
		return false;

	});
});

//step1メニュー
$(function() {
	var subBtn = $('.h_section_three');
	
	subBtn.click(function () {
		var headerHightoo = 78;
		var n = subBtn.index(this)
		var poo = $("#step1").eq(n).offset().top-headerHightoo;
		$('body,html').animate({scrollTop: poo}, 500, "swing");
		return false;

	});
});
//step2メニュー
$(function() {
	var subBtn = $('.h_section_four');
	
	subBtn.click(function () {
		var headerHightoo = 78;
		var n = subBtn.index(this)
		var poo = $("#step2").eq(n).offset().top-headerHightoo;
		$('body,html').animate({scrollTop: poo}, 500, "swing");
		return false;

	});
});

//問い合わせメニュー
$(function() {
	var subBtn = $('.btn_inquiry');
	
	subBtn.click(function () {
		var headerHightoo = 78;
		var n = subBtn.index(this)
		var poo = $("#inqury").eq(n).offset().top-headerHightoo;
		$('body,html').animate({scrollTop: poo}, 500, "swing");
		return false;

	});
});



