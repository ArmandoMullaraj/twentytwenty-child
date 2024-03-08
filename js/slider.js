jQuery(document).ready(function($) {
    
    
            $('#our-team-home-slider-2').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                autoplay: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: "unslick"
                    }
                ]
            });

            //Reslick 
            $(window).on('resize', function() {
                if (!$('#our-team-home-slider-2').hasClass('slick-initialized')) {
                  return    $('#our-team-home-slider-2').slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: true,
                                dots: false,
                                autoplay: false,
                                mobileFirst: true,
                                responsive: [
                                    {
                                        breakpoint: 768,
                                        settings: "unslick"
                                    }
                                ]
                            });
                }
            });

            //ID's slider
            $('.id-row').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				dots: true,
				autoplay: false,
				mobileFirst: true,
				infinite: true,
				loop: false,
			});

			//Reslick Main Menu Mobile Slider
			$(window).on('resize', function () {
				if (!$('.id-row').hasClass('slick-initialized')) {
					return $('.id-row').slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false,
						dots: true,
						autoplay: false,
						mobileFirst: true,
						infinite: true,
						responsive: [
							{
								breakpoint: 480,
								settings: "unslick"
							}
						]
					});
				}
			});

            $('#homeSec3-refurbishment-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: "unslick"
                    }
                ]
            });

            //Reslick 
            $(window).on('resize', function() {
                if (!$('#homeSec3-refurbishment-slider').hasClass('slick-initialized')) {
                  return    $('#homeSec3-refurbishment-slider').slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: false,
                                dots: true,
                                autoplay: false,
                                mobileFirst: true,
                                responsive: [
                                    {
                                        breakpoint: 768,
                                        settings: "unslick"
                                    }
                                ]
                            });
                }
            });

            $('#usp-testimonials-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: "unslick"
                    }
                ]
            });

            //Reslick 
            $(window).on('resize', function() {
                if (!$('#usp-testimonials-slider').hasClass('slick-initialized')) {
                  return    $('#usp-testimonials-slider').slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: false,
                                dots: true,
                                autoplay: false,
                                mobileFirst: true,
                                responsive: [
                                    {
                                        breakpoint: 768,
                                        settings: "unslick"
                                    }
                                ]
                            });
                }
            });

            $('#newsec-home-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: "unslick"
                    }
                ]
            });

            //Reslick 
            $(window).on('resize', function() {
                if (!$('#newsec-home-slider').hasClass('slick-initialized')) {
                  return    $('#newsec-home-slider').slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: false,
                                dots: true,
                                autoplay: false,
                                mobileFirst: true,
                                responsive: [
                                    {
                                        breakpoint: 768,
                                        settings: "unslick"
                                    }
                                ]
                            });
                }
            });

            $('#usp-testimonials-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay: false,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: "unslick"
                    }
                ]
            });

            //Reslick 
            $(window).on('resize', function() {
                if (!$('#usp-testimonials-slider').hasClass('slick-initialized')) {
                  return    $('#usp-testimonials-slider').slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: false,
                                dots: true,
                                autoplay: false,
                                mobileFirst: true,
                                responsive: [
                                    {
                                        breakpoint: 768,
                                        settings: "unslick"
                                    }
                                ]
                            });
                }
            });
            
});