;(function($){
	$(document).ready(function() {
		
	/*
		NUMBER FIELD
	*/
	$(".custom-number-wrap .plus-btn").click(function() {
		var Wrap = $(this).closest('.custom-number-wrap');
		var number = Wrap.find('.number'); 
		var Input = Wrap.find('.input-num'); 
		var InputVal = Wrap.find('.input-num').val();
		var maxlength = number.data('maxlength'); 
		if(InputVal < maxlength){
			var Count = +InputVal + 1;
			Input.val(Count);
			number.text(Count);

		}

	});
	$(".custom-number-wrap .minus-btn").click(function() {
		var Wrap = $(this).closest('.custom-number-wrap');
		var number = Wrap.find('.number'); 
		var Input = Wrap.find('.input-num'); 
		var InputVal = Wrap.find('.input-num').val();
		if(InputVal > 1){
			var Count = InputVal - 1;
			Input.val(Count);
			number.text(Count);
		}
	});		


	// HERO SLIDE 
	var interleaveOffset = 0.5;
	var HeroSlide = new Swiper('.prod-slide-container', {
		loop: false,
		speed: 1200,
		grabCursor: true,
		watchSlidesProgress: true,
		mousewheelControl: true,
		keyboardControl: true,
		observer:true,
		observeParents:true,
		pagination: {
			el: '.prod-slid-nav', 
			clickable: true, 
		},
		on: {
			progress: function() {
				var swiper = this;
				for (var i = 0; i < swiper.slides.length; i++) {
				var slideProgress = swiper.slides[i].progress;
				var innerOffset = swiper.width * interleaveOffset;
				var innerTranslate = slideProgress * innerOffset;
				swiper.slides[i].querySelector(".prod-slide-wrap").style.transform =
				  "translate3d(" + innerTranslate + "px, 0, 0)";
				}      
			},
			touchStart: function() {
			var swiper = this;
			for (var i = 0; i < swiper.slides.length; i++) {
			swiper.slides[i].style.transition = "";
			}
			},
			setTransition: function(speed) {
			var swiper = this;
			for (var i = 0; i < swiper.slides.length; i++) {
			swiper.slides[i].style.transition = speed + "ms";
			swiper.slides[i].querySelector(".prod-slide-wrap").style.transition =
			  speed + "ms";
			}
			}
		}
    });

    // CAT SLIDE 
	new Swiper('.cat-slide-container', {
		slidesPerView: 8,
		spaceBetween: 30,
		loop:false, 
		observer:true,
		observeParents:true,
		scrollbar: { 
			el: '.cat-slide-scrollbar',
			hide: false,
		},
		navigation: {
			nextEl: '.cat-slide-nav-wrap .next',
			prevEl: '.cat-slide-nav-wrap .prev',
		},
		breakpoints: {
	    // when window width is >= 320px
	    200: { 
	      slidesPerView: 2,
	      spaceBetween: 20 
	    }, 
	    400: {
	      slidesPerView: 3,
	      spaceBetween: 20 
	    },
	    700: {
	      slidesPerView: 4,
	      spaceBetween: 20 
	    }, 
	    // when window width is >= 640px
	    1200: {
	      slidesPerView: 5,
	      spaceBetween: 30 
	    },
	    1400: {
	      slidesPerView: 6,
	      spaceBetween: 30 
	    },
	    1600: {
	      slidesPerView: 8,
	      spaceBetween: 30
	    }
	  }
    });



    $(".prod-card-wrapper").isotope({ 
	  itemSelector: ".product__item",
	});
	// filter items on button click
	$('.prod__section').on( 'click', '.cat-btn', function(event) {
	  var filterValue = $(this).attr('data-filter');
	  $('.prod-card-wrapper').isotope({ filter: filterValue });
	  $('.prod__section .cat-btn').removeClass('active');
	  $(this).addClass('active');
	  event.preventDefault();
	});

	$('.coupon-card .use-btn').on('click', function(event) {
		event.preventDefault();
		$(this).closest('.coupon-card').addClass('open-input'); 
	});

		
	$(".datepicker").flatpickr({
		enableTime: true,
		dateFormat: "Y-m-d H:i",
	});



	});
})(jQuery);