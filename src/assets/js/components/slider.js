import { Swiper, EffectFade, Navigation, Pagination, Scrollbar, Controller, Parallax, Mousewheel } from 'swiper'
Swiper.use([EffectFade, Navigation, Pagination, Scrollbar, Controller, Parallax, Mousewheel])


  new Swiper('.slider-project', {
		slidesPerView: 'auto',
		spaceBetween: 30,
		observer: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		scrollbar: {
			el: '.swiper-scrollbar',
			draggable: true,
		},

		breakpoints: {
			// when window width is >= 320px
			320: {
				spaceBetween: 20
			},
		}
  });

  new Swiper('.slider-services-filter', {
		slidesPerView: 'auto',
		spaceBetween: 10,
  });

  
  new Swiper('.slider-gallery', {
	// Optional parameters
	//direction: 'vertical',
	loop: false,
	slidesPerView: 'auto',
	spaceBetween: 30,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	scrollbar: {
		el: '.swiper-scrollbar',
		draggable: true,
	}
});


const galleryThumbs = new Swiper('.slider-gallery-min', {
	spaceBetween: 10,
	slidesPerView: 'auto',
	slideToClickedSlide: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	scrollbar: {
		el: '.swiper-scrollbar',
		draggable: true,
	}
	// loop: true,
	// loopedSlides: 4
});

// const galleryMain = new Swiper('.slider-gallery-main', {
// 	spaceBetween: 10,
// 	navigation: {
// 		nextEl: ".swiper-button-next",
// 		prevEl: ".swiper-button-prev",
// 	},
// 	loop: true,
// 	loopedSlides: 4
// })


// galleryMain[0].controller.control = galleryThumbs;
// galleryThumbs[1].controller.control = galleryMain;


//galleryMain.controller.control = galleryThumbs;
//galleryThumbs.controller.control = galleryMain;



new Swiper('.slider-camera', {
	loop: false,
	slidesPerView: '1',
	spaceBetween: 10,
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


	new Swiper('.slider-service', {
		slidesPerView: 'auto',
		spaceBetween: 30,
		pagination: {
			el: ".swiper-pagination",
			clickable: true
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		scrollbar: {
			el: '.swiper-scrollbar',
			draggable: true,
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 'auto',
				spaceBetween: 20
			},
			// when window width is >= 640px
			1140: {
				slidesPerView: 'auto',
				spaceBetween: 30
			}
		}
  });

  new Swiper('.slider-project-single', {

	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},

});

