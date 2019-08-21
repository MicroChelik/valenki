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
			if($(this).scrollTop() >= 300) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},300);
		});
	});
	$('.delete-basket-product').click(function(){
		$(this).parent().parent().hide();
	});
	$('.clear-basket').click(function(){
		$('.basket-card').hide();
	});
	$('.delivery-way').click(function(){
		$('.delivery-way').removeClass('selected');
		$(this).addClass('selected');
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




	var placemarks = [
		{
			lat : 56.87187756682612,
			long : 53.29298687301625,
			iconContent: 'Ижевск',
			balloonContent: " отделы 'Авантаж' и 'Independence', 1 этаж тел: +7(950) 164-44-36",
			preset: 'islands#greenStretchyIcon',
		},
	];


    var myMap, myAction, geoObjects= [];

    ymaps.ready(init);

    function init(){ 
        // Создание карты.    
        var myMap = new ymaps.Map('myMap', {
	        center: [56.87187756682612, 53.29298687301625],
	        controls: ['largeMapDefaultSet'],
	        zoom: 8
    	});

        for (var i = 0; i < placemarks.length; i++) {
			geoObjects[i] = new ymaps.Placemark([placemarks[i].lat, placemarks[i].long], {
					balloonContent: placemarks[i].balloonContent,
					iconContent: placemarks[i].iconContent,
				},
				{
					preset: placemarks[i].preset
				}
			);
		}

		var clusterer = new ymaps.Clusterer({ preset: 'islands#icon' });
		myMap.geoObjects.add(clusterer);

		//myMap.geoObjects.add(myPlacemark);
		clusterer.add(geoObjects);

		myMap.behaviors.disable('scrollZoom');

var ctrlKey = false;
var ctrlMessVisible = false;
var timer;

// Отслеживаем скролл мыши на карте, чтобы показывать уведомление
myMap.events.add(['wheel', 'mousedown'], function(e) {
    if (e.get('type') == 'wheel') {
        if (!ctrlKey) { // Ctrl не нажат, показываем уведомление
            $('#ymap_ctrl_display').fadeIn(300);
            ctrlMessVisible = true;
            clearTimeout(timer); // Очищаем таймер, чтобы продолжать показывать уведомление
            timer = setTimeout(function() {
                $('#ymap_ctrl_display').fadeOut(300);
                ctrlMessVisible = false;
            }, 1500);
        }
        else { // Ctrl нажат, скрываем сообщение
            $('#ymap_ctrl_display').fadeOut(100);
        }
    }
    if (e.get('type') == 'mousedown' && ctrlMessVisible) { // Скрываем уведомление при клике на карте
        $('#ymap_ctrl_display').fadeOut(100);
    }
});

// Обрабатываем нажатие на Ctrl
$(document).keydown(function(e) {
    if (e.which === 17 && !ctrlKey) { // Ctrl нажат: включаем масштабирование мышью
        ctrlKey = true;
        myMap.behaviors.enable('scrollZoom');
    }
});
$(document).keyup(function(e) { // Ctrl не нажат: выключаем масштабирование мышью
    if (e.which === 17) {
        ctrlKey = false;
        myMap.behaviors.disable('scrollZoom');
    }
});
        
    };

});
