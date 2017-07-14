$(window).scroll(function() {

    if ($(this).scrollTop()>0){
        $('#dropdown').slideUp();
     } else {
      $('#dropdown').slideDown();
     }
 });