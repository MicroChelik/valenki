$(document).ready(function(){
	$('.slider-main').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots",
	})
	$('.slider-production').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots",
	})
	$('.slider-letters').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		swipeToSlide: true,
		dotsClass: "my-dots",
	})
	$('.slider-partners').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		swipeToSlide: true,
		dotsClass: "my-dots",
	})
});
