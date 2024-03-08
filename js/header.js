jQuery(document).ready(function ($) {

  var selectedUrl = ""; // This variable will store the URL to redirect to

  $('.investorOption').click(function () {
    selectedUrl = $(this).data('href'); // Store the URL
    $('#confirmationPopup').show(); // Show the confirmation popup
  });

  $('#confirmButton').click(function () {
    window.location.href = selectedUrl; // Redirect to the stored URL
  });

  $('#cancelButton').click(function () {
    $('#confirmationPopup').hide(); // Hide the confirmation popup
  });


  $(document).ready(function () {
    $('#menu-item-1659').click(function (event) {
      event.preventDefault();
      setTimeout(function () {
        $('#popupDiv').show();
        $('body').addClass('popup-active');
      }, 100);
    });

    $('#closePopup').click(function () {
      $('#popupDiv').hide();
      $('body').removeClass('popup-active');
    });

    $('.investorOption').click(function () {
      selectedUrl = $(this).data('href');
      $('#confirmationPopup').show();
    });

    $('#confirmButton').click(function () {
      window.location.href = selectedUrl;
    });

    $('#cancelButton').click(function () {
      $('#confirmationPopup').hide();
    });
  });

  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .not('.lightbox')
    .not('.arrow-right')
    .not('.arrow-left')
    .not('.close')


    .click(function (event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();

          $scrollOffset = target.offset().top - 108;

          $('html, body').animate({
            scrollTop: $scrollOffset
          }, 2000, function () {

          });
        }
      }
    });
});



