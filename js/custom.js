
$(document).ready(function() {
	
	//showQuotationSheet();
	
	mobileNavigation();
	
	$('.equal-height').matchHeight();
	
	$('.btn-vertical-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#homepageCarousel').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#homepageCarousel').carousel('prev')
        }

    });
	
	$('.btn-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#blogpostCarousel').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#blogpostCarousel').carousel('prev')
        }

    });
	
	$(".pop-up-btn").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: 'auto',
		height		: 'auto',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	
	$('select').select2();
	
	showNavigationMenu();
});
/*
function showQuotationSheet() {
	$('.quotation-btn').hoverIntent(function() {
		$('div.quotation-sheet-hidden').show('fast');
		$('div.quotation-btn').addClass('active-quotation-btn');
		$('div.quotations-number').addClass('active-quotations-number');
		$('i.fa.fa-list-alt.header-quotation-btn').addClass('active-i');
	}, function() {
		$('div.quotation-sheet-hidden').hide('fast');
		$('div.quotation-btn').removeClass('active-quotation-btn');
		$('div.quotations-number').removeClass('active-quotations-number');
		$('i.fa.fa-list-alt.header-quotation-btn').removeClass('active-i');
	});
}
*/
function showNavigationMenu() {
	$('.navigation-mobile-btn').click(function() {
		$('.navigation-menu').toggleClass('active-menu');
	});
}
// Mobile Navigation	
function mobileNavigation() {
	$('body').on('click', '#mobileheader .mobilebtn',function() {
		$('html,body').toggleClass('noscroll');
		$('#mobileheader ul').toggle();
		mobileNavigationResize();
	});
	$(window).resize(mobileNavigationResize);
}

function mobileNavigationResize() {
	if($('#mobileheader ul').is(":visible")) {
		var mobile_nav_height = $(window).height()-$('#mobileheader .mobilelogo').height();
		$('#mobileheader ul').css('height',mobile_nav_height+'px');
	}
}
