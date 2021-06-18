///////////////////////////////////////////////////////////////////////////////////////
//                              --  JavaScript  --                                   //
///////////////////////////////////////////////////////////////////////////////////////
document.addEventListener("DOMContentLoaded", function() {
  el_autohide = document.querySelector('.autohide');
  
  // add padding-top to body (if necessary)
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