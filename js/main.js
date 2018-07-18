$(document).ready(function(){
	$('.table').DataTable();
	img_home();
	img_genres();
	img_search();
});

function img_home(){
		$('#home img').mouseover(function(){
			$(this).css({'opacity':'0.6'});
		});
		$('#home img').mouseout(function(){
			$(this).css({'opacity': ''});
		});
	}

function img_genres(){
		$('.genres img').mouseover(function(){
			$(this).css({'opacity':'0.6'});
		});
		$('.genres img').mouseout(function(){
			$(this).css({'opacity':''});
		});
}

function img_search(){
	$('#search img').mouseover(function(){
		$(this).css('opacity', '0.6');
	});
	$('#search img').mouseout(function(){
		$(this).css('opacity', '');
	});

}
