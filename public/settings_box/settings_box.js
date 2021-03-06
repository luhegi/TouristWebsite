$(document).ready(function () {
	var ColorLink = $("#colors a"),
		oSettingsBox = $(".settings_box"),
		oSettingsBoxWidth = oSettingsBox.outerWidth();;

	oSettingsBox.css({left: -oSettingsBoxWidth});

	$("#panel_toggler").click(function (e) {
		e.preventDefault();

		if ( parseInt(oSettingsBox.css("left")) < 0) {
			oSettingsBox.animate({left: "0"}, 500);
		}
		else {
			oSettingsBox.animate({left: -oSettingsBoxWidth}, 500);
		}
	});

	ColorLink.click(function (e) {
		e.preventDefault();

		localStorage.setItem('ValueHref', $(this).attr("data-href"));
		localStorage.setItem('ColorButtonId', $(this).attr("id"));

		$("link.colors_style").attr("href" , $(this).attr("data-href"));

		oSettingsBox.animate({left: -oSettingsBoxWidth}, 500);

		if (!$(this).hasClass('current')) {
			ColorLink.filter('.current').removeClass('current');
			$(this).addClass('current');
		}
		else {
			$(this).removeClass('current');
		}
	});

	function isLocalStorageAvailable() {
		try {
			return 'localStorage' in window && window['localStorage'] !== null;
		} catch (e) {
			return false;
		}
	}

	var direct_locStorage = localStorage.getItem('ValueHref');

	if ( direct_locStorage !== null ) {
		$("link.colors_style").attr("href" , localStorage.getItem('ValueHref'));
		 ColorLink.removeClass('current');
		$('#' + localStorage.getItem('ColorButtonId')).addClass('current');
	};
});