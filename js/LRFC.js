$(window).scroll(function() {

    if ($(this).scrollTop()>0){
        $('#dropdown').slideUp();
     } else {
      $('#dropdown').slideDown();
     }
 });
var i=0;

$("#testButton").click(function(){
	i++
	$('#contentSpacer').append("<div class='lottoRaffle'>Lotto " + i +"</div>") ;
});

$("#testButton2").click(function(){
	$('#contentSpacer').children().first().remove();
});