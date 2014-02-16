$( document ).ready(function() {

	var sidebar = $('#sidebar')
		overlay = $('#overlay');

	// Trigger video animation on homepage 
    $('.section').on("mouseenter", hoverHome);

	// set overlay to hidden
	TweenLite.set(overlay, {opacity:0,display:'none'});
	TweenLite.set($('#preview .wrap'), {opacity:0});

	// Set content size to window dimensions (also on resize)
	contentSize();
	$(window).on('resize', contentSize);
	
	// Open the sidebar
	$('.menu-btn').on('click', openSidebar);
	
	// animate the list of names
	animateList();		

	// loader preview + animation
	previewLoading();	

	// Show or hide the overlay
	$('footer ul li a').on('click', showPopin);
	$('#popin a.closePopin').on('click', closePopin);


    function hoverHome() {
        var _this = $(this),
        	video = _this.find('video'),
        	videoWrap = video.parent('.video-container');
        videoWrap.css('opacity', '1');
        video[0].play();
        _this.removeClass('bgOn');	

        _this.on("mouseout", function(){
        	video[0].pause();
        	_this.addClass('bgOn');	
        	videoWrap.css('opacity', '0');

        });
    }

	// function to set #content size to window size - header
	function contentSize() {
		var $window = $(window);

		// var contentSize = $(window).height() - 70;
		// $('body').height($window.height()).width($window.width());
		$('#content').width($window.width()).height($window.height() - 70);

	}

	function openSidebar(e) {
		e.preventDefault();
		if(sidebar.hasClass('close')) {
			TweenLite.to(sidebar, 0.4, {transform:"translateX(100%)",ease:Power2.easeInOut});
			sidebar.removeClass('close');
			$('a.menu-btn').empty();
			$('a.menu-btn').html('<i class="icon-cross_mark">');
		} else {
			TweenLite.to(sidebar, 0.4, {transform:"translateX(-100%)",ease:Power2.easeInOut});
			sidebar.addClass('close');
			$('a.menu-btn').empty();
			$('a.menu-btn').html('<i class="icon-reorder">');
		}
	}

	function animateList() {
		var item = $('#list ul li');
		TweenLite.set(item, {transform:"translateX(-50px) translateY(-20px)", opacity:0});
		TweenMax.staggerTo(item, 0.25,
			{transform:"translateX(0px) translateY(0px)",opacity:1}, 0.15);
	}

	function showPopin(e) {
		e.preventDefault();
		TweenLite.to(overlay, 0.3, {opacity:1,display:'block',ease:Power4.easeInOut});
	}
	function closePopin(e) {
		e.preventDefault();
		TweenLite.to(overlay, 0.3, {opacity:0,display:'none',ease:Power4.easeInOut});
	}

	function previewLoading() {
		var previewContent = $('#preview .wrap'),
			loader = $('#preview .loading');
		TweenLite.to(loader, 0.25, {opacity:0,display:'none',ease:Power1.easeInOut,delay:1.5});
		TweenLite.to(previewContent, 0.4, {opacity:1,ease:Power1.easeInOut,delay:1.5});
	}

});