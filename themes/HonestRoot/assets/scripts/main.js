jQuery(document).ready(function() {
  jQuery(".owl-carousel").owlCarousel({
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
});
