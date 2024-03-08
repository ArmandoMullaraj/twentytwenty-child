jQuery(document).ready(function($)
{
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find("#menu-toggle").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 991;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
     //  return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});

});
})(jQuery);

//*******************mob menu btn*************************************//
$('#menu-toggle').click(function(){
  $(this).toggleClass('open');
})
  $('.homeSec1').slick({
    draggable: true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    fade: true,
    speed: 2000,
    infinite: true,
    cssEase: 'ease-in-out',
   	     })//.slickAnimation();
  $('.testimonial-slider').slick({
    draggable: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    dots: false,
    fade: true,
    speed: 4000,
    infinite: true,
    cssEase: 'ease-in-out',
   	     })
		   $('.gallery-featured-img').slick({
    draggable: true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    dots: false,
    fade: true,
    speed: 2000,
    infinite: true,
    cssEase: 'ease-in-out',
   	     })
		 $(window).width(function(){

       if ($(window).width() >= 991) {   
		 
		 jQuery(window).scroll(function() {
         var scroll = jQuery(window).scrollTop();
         if (scroll >= 160) {
          jQuery(".header-cover").addClass("fadeInDown");
         } else {
          jQuery(".header-cover").removeClass("fadeInDown");
         }
        });
      }
        });
      
	  });