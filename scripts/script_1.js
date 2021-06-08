// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
/*
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
*/
// Add slideDown animation to Bootstrap dropdown when expanding.
//var drop_1 = document.getElementById('drop1');

/*
$('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // Add slideUp animation to Bootstrap dropdown when collapsing.
  $('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });*/
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
document.addEventListener("DOMContentLoaded", function() {
  el_autohide = document.querySelector('.autohide');
  
  // add padding-top to bady (if necessary)
  navbar_height = document.querySelector('.navbar').offsetHeight;
  document.body.style.paddingTop = navbar_height + 'px';

  if(el_autohide) {
    var last_scroll_top = 80;
    window.addEventListener('scroll', function() {
          let scroll_top = window.scrollY;
         if(scroll_top < last_scroll_top) {
              el_autohide.classList.remove('scrolled-down');
              el_autohide.classList.add('scrolled-up');
          }
          else if (scroll_top > 280) {
              el_autohide.classList.remove('scrolled-up');
              el_autohide.classList.add('scrolled-down');
          }
          last_scroll_top = scroll_top;
    });
    // window.addEventListener
  }
  // if

});
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
weekday();

function weekday() {
  var d = new Date();
  if(getDay() == 0) { document.getElementById("Lunes").classList.add('OpeningDay'); }
  if(getDay() == 1) { document.getElementById("Martes").classList.add('OpeningDay'); }
  if(getDay() == 2) { document.getElementById("Miercoles").classList.add('OpeningDay'); }
  if(getDay() == 3) { document.getElementById("Jueves").classList.add('OpeningDay'); }
  if(getDay() == 4) { document.getElementById("Viernes").classList.add('OpeningDay'); }
  if(getDay() == 5) { document.getElementById("Sabado").classList.add('OpeningDay'); }
}