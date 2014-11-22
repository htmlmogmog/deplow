$(function(){
	$('.back-section').on('click', function(e){
		e.preventDefault();
		var headerHightoo = 140;
		var url = this.href;
		var parts = url.split('#');
		var target = parts[1];
		var target_offset = $('#'+target).offset();
		var target_top = target_offset.top-headerHightoo;
		$('html, body').animate({scrollTop:target_top}, 500,"swing");
	});
});
