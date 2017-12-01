/* owl carousel prdouits */
jQuery(document).ready(function() {
  jQuery(".owl-carousel").owlCarousel({
    nav:true,
    loop:true,
    center: true,
    margin:5,
    responsive:{
       0:{
           items:1
       },
       600:{
           items:3
       },
       1000:{
           items:5
       }
   }
  });
  $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
  $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
});
/* Scrool Home */
console.log('couocu')
var checkScroll = true;
var lethargy = new Lethargy();
  function lethargyScroll(e) {
    if (window.innerWidth > 768) {
        e.preventDefault()
        e.stopPropagation()
        if (lethargy.check(e) === -1) {

            if(checkScroll === true) {
                document.location.href="/honestroot/concept/"
                checkScroll = false;
            }
        }
      }
  }

  function scrollEvent() {
      console.log('scroll')
    var content = document.querySelector('#content');
    content.addEventListener('mousewheel', function(e) { lethargyScroll(e) })
    content.addEventListener('DOMMouseScroll', function(e) { lethargyScroll(e) })
    content.addEventListener('wheel', function(e) { lethargyScroll(e) })
    content.addEventListener('MozMousePixelScroll', function(e) { lethargyScroll(e) })
  }
  scrollEvent();

