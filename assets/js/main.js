$(function () {
		var audio = $('audio');

		audio.mediaelementplayer({
				audioWidth: 500,
				audioHeight: 30,
				startVolume: .5,
				features: ['tracks','playpause','progress','current','volume'],
				enableKeyboard: true,
				pauseOtherPlayers: true
		});

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36620110-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
});