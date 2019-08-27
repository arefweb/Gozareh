//General scripts

//Scroll to top button
$('body').append('<button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>');

window.addEventListener('scroll', function(){
  if( document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
    $("#topBtn").show();
  }else{
    $("#topBtn").hide();
  }
});

function topFunction(){
  $('html, body').animate({
    scrollTop: $('html, body').offset().top
  }, 500 );
}
