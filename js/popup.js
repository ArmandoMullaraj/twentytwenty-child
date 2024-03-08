// define(['jquery'], function ($) {

//     var accordion = {
//         init: function () {

//             $('.popup-trigger.active').click(function (e) {
//                 e.preventDefault();
//                 var popup = $(this).next();
//                 popup.show();
//                 var body = $('body');
//                 body.css('overflow', 'hidden');
//                 $('header').removeClass('nav-down');
//                 $('header').addClass('nav-up');
//                 // var popupId = $(this).data('popup-id');
//                 // $('#' + popupId).toggle(); // This will show/hide the popup
//             });
//             $('.close-popup').click(function () {
//                 $(this).parent('.popup-wrapper').parent('.popup-content').hide(); // Hide the parent popup
//                 var body = $('body');
//                 body.css('overflow', 'auto');
//                 $('header').removeClass('nav-up');
//                 $('header').addClass('nav-down');
//             });

//             $(".popup-content").on("click", function (event) {
//                 if (!$(event.target).is($(this).find('*'))) {
//                     var popup = $(this);
//                     popup.hide();
//                     var body = $('body');
//                     body.css('overflow', 'auto');
//                     $('header').removeClass('nav-up');
//                     $('header').addClass('nav-down');
//                 }
//             });
//         }

//     };
//     return accordion;
// });