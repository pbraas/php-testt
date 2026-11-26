$(document).ready(function() {
  $('.trigger-responsive-menu').click(function() {
		$('.headerbar .inner').toggleClass('is-active');
    $('.main-site-top-menu').toggleClass('is-active');
		$(this).toggleClass('is-active');
	});
});
