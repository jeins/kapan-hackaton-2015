$(document).ready(function(){

  $('.button-collapse').sideNav();

  //smoothscroll
  $(".scroll_down").click(function() {
       $('html, body').animate({
           scrollTop: $("#proyek_wrapper").offset().top
       }, 1000);
   });

  $('.modal-login-trigger').leanModal();
  $('.modal-daftar-trigger').leanModal();
  $('.modal-komentar-trigger').leanModal();

  $('.modal-updateProyek-trigger').leanModal();
  $('.modal-updateProfile-trigger').leanModal();


  $('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15 // Creates a dropdown of 15 years to control year
});


}); // end of document ready
