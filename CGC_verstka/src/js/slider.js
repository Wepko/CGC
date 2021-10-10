import { Swiper, EffectFade, Navigation, Pagination, Scrollbar, Controller, Parallax, Mousewheel } from 'swiper'
Swiper.use([EffectFade, Navigation, Pagination, Scrollbar, Controller, Parallax, Mousewheel])




  new Swiper('.slider-project', {
		// Optional parameters
		//direction: 'vertical',
		loop: false,
		slidesPerView: 1,
		centeredSlides: true,
		spaceBetween: 30,
		slidesPerGroup: 3,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		scrollbar: {
			el: '.swiper-scrollbar',
			draggable: true,
		},
  });


  const headerSlider = new Swiper('.slider-header', {
		// Optional parameters
		//direction: 'vertical',
		loop: false,
		effect: "fade",
	});

  const thumbsSlider = new Swiper('.slider-thumbs', {
		loop: false,
		effect: "fade",
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		scrollbar: {
			el: '.swiper-scrollbar',
			draggable: true,
		},
  });

	headerSlider.controller.control = thumbsSlider
	thumbsSlider.controller.control = headerSlider

