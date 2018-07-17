$(document).ready(function(){
	$('.table').DataTable();
	img_home();
	img_genres();
});

function img_home(){
		$('#home img').mouseover(function(){
			$(this).css({'width': '200', 'height': '270'});
			$(this).css({'opacity':'0.6'});
		});
		$('#home img').mouseout(function(){
			$(this).css({'width':'190', 'height': '260'});
			$(this).css({'opacity': ''});
		});
	}

function img_genres(){
		$('.genres img').mouseover(function(){
			$(this).css({'width': '210', 'height': '310'});
			$(this).css({'opacity':'0.6'});
		});
		$('.genres img').mouseout(function(){
			$(this).css({'width':'200', 'height': '300'});
			$(this).css({'opacity':''});
		});
}
