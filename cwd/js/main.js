/* Home Page */
$(document).ready(function () {
    $('.home-service-box').equalHeights();
    $('.home-service-box p').equalHeights();
});

$(window).resize(function () {
   if($(window).width() > 769){
       $('.home-service-box,.home-service-box p').removeAttr('style');
       setTimeout(function () {
           $('.home-service-box').equalHeights();
           $('.home-service-box p').equalHeights();
       },600);
   }
});