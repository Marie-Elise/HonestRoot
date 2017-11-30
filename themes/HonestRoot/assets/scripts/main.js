/* owl carousel prdouits */
jQuery(document).ready(function() {
  jQuery(".owl-carousel").owlCarousel({
    nav:true,
    navClass: ['owl-prev', 'owl-next'],
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
                document.location.href="/concept"
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

/* pop up  page recette */
var recette_articles = document.querySelectorAll('.recette article'),
recette_images = document.querySelectorAll('.recette-image'),
recette_nombre = document.querySelectorAll('.recette-nombre'),
boutons_recette_fermer = document.querySelectorAll('.recette-fermer'),
detail_recettes = document.querySelectorAll('.detail-recette');

var i=0;
var j=0;

while(i<recette_nombre.length){

var recette_article = recette_articles[i],
    recette_name = recette_article.querySelector('.recette-name'),
    recette_type_name = recette_article.querySelector('.recette-type-name').innerHTML;

if(recette_type_name === 'Force'){
    recette_name.classList.add('color-red');
    i++;
}

if(recette_type_name === 'Détox'){
    recette_name.classList.add('color-vert');
    i++;
}

if(recette_type_name === 'Energie'){
    recette_name.classList.add('color-jaune');
    i++;
}

if(recette_type_name === 'Esprit'){
    recette_name.classList.add('color-violet');
    i++;
}

};

while(j<recette_nombre.length){

var recette_image = recette_images[j];

recette_image.addEventListener('click', function (event){
    event.preventDefault();
    
    var key = parseInt(this.getAttribute('data-key'));
    
    var detail_recette = detail_recettes[key-1];
    
    detail_recette.classList.remove('close-recette');
    detail_recette.classList.add('open-recette');
    
    return j;
});

var detail_recette = detail_recettes[j],
    bouton_recette_fermer = boutons_recette_fermer[j];

bouton_recette_fermer.addEventListener('click', function(event){
    event.preventDefault();

    var key = parseInt(this.getAttribute('data-key')),
    detail_recette = detail_recettes[key-1];

    detail_recette.classList.remove('open-recette');
    detail_recette.classList.add('close-recette');
    return j;
});
    
j++;

if(j>recette_nombre.length){
    j=0;
}

}