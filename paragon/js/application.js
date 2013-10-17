
if (typeof jQuery !== 'undefined') {
	(function($) {
		$('#spinner').ajaxStart(function() {
			$(this).fadeIn();
			loading('show','');
		}).ajaxStop(function() {
			$(this).fadeOut();
		});
	})(jQuery);
}



function loading(status,message) {
	message = 'waiting...';
    var holder = 'body';
    var holderLoading = $('<div class="waiting"></div>');
    var holderOverlay = $('<div class="overlay"></div>');
    var loadingImage = $('<div style="padding: 6px;width: auto;border: 1px solid #b7b7b7;background: #FFFFFF;vertical-align: middle;"><img src="images/spinner.gif" title="loading" style="display: inline-block;float: left;"/><span style="vertical-align: middle;margin: 1px 10px;display: inline-block;">'+message+'</span></div>');

    $(holder).append(holderLoading);
    $(holder).append(holderOverlay);

    holderLoading.css('position', 'fixed');
    holderLoading.css('top', '50%');
    holderLoading.css('left', '50%');
    holderLoading.css('width', '100%');
    holderLoading.css('height', '100%');
    holderLoading.css('cursor', 'pointer');
    holderLoading.css('overflow', 'hidden');
    holderLoading.css('z-index', '2147000002');
    holderLoading.css('display', 'block');

    holderLoading.append(loadingImage);
    holderLoading.find('div').css('position', 'absolute');
    holderLoading.find('div').css('top', '0');
    holderLoading.find('div').css('left', '0');

    holderOverlay.css('position', 'fixed');
    holderOverlay.css('top', '0');
    holderOverlay.css('left', '0');
    holderOverlay.css('width', '100%');
    holderOverlay.css('z-index', '2147000001');
    holderOverlay.css('background-color', '#262626');
    holderOverlay.css('opacity', '0.2');
    holderOverlay.css('height', '100%');
    holderOverlay.css('display', 'block');

    if(status == "hide") {
        $('.waiting, .overlay').fadeOut('slow');
    }
}