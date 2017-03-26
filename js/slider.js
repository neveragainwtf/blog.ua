// slider!

var	$item = $('li');
	var	$next = $('.next');
	var	$prev = $('.prev');

	$item.first().addClass('active');

	$next.click(function(){
		var index = $item.filter('.active').index();		
		if (index == $item.length - 1) {
			index = -1
		}
		$item.eq(index + 1).addClass('active').siblings().removeClass('active');
	});

	$prev.click(function(){
		var index = $item.filter('.active').index();
		$item.eq(index - 1).addClass('active').siblings().removeClass('active');
	});