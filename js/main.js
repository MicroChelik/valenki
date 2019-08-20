$(document).ready(function(){


	$('.inc').click(function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
	$('.dec').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.buttons .greyBtn').click(function(){
		$('.buttons .greyBtn').removeClass("active");
		$(this).toggleClass("active");
	});
	$('.product-colors div').click(function(){
		$('.product-colors div').removeClass("active");
		$(this).toggleClass("active");
	});

	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		$('.men').toggleClass('active');
	});
	$('.redArrow').click(function(){
		$(this).toggleClass('redOpen');
		$(this).next('.submenu').slideToggle('200');
	});

	$(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},10);
		});
	});
	
	

	$('.slider-main').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots",
	});
	$('.slider-mobile-main').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots",
	});
	$('.slider-production').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots",
	});
	$('.slider-letters').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		swipeToSlide: true,
		dotsClass: "my-dots",
	});
	$('.slider-partners').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		swipeToSlide: true,
		dotsClass: "my-dots",
	});
	$('.slider-product').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '.slider-for-product-prev',
		nextArrow: '.slider-for-product-next',
		asNavFor: '.slider-for-product',
	});
	$('.slider-for-product').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		arrows: true,
		prevArrow: '.slider-for-product-prev',
		nextArrow: '.slider-for-product-next',
		asNavFor: '.slider-product',
	});

	$('.img-rounded').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots",
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick",
			},
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});
	$('.slider-product-targets').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick",
			},
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});
	$('.slider-our-products').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick",
			},
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});


});
