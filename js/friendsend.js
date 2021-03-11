$(function() {
	$(".accordion").click(function() {
		$(this).toggleClass("close").next().slideToggle();
    });
    
});

$(function () {
	$('[id=btn]').on('click', function () {
		if ($(this).text() === '▼選択する') {
			$(this).text('▲閉じる');
		}

		else {
			$(this).text('▼選択する');
		}
	});
});
