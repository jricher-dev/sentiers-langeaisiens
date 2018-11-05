
$('.dropdown-trigger').dropdown({
  hover:true,
  coverTrigger:false,
  constrainWidth: false
});

$('input[type=radio]').change( function() {
   if ($("#identique").prop('checked')) {
      $('#newAdresse').hide();
      $('#memeAdresse').show();
    }
    if ($("#autreAdresse").prop('checked')) {
      $('#memeAdresse').hide();  
      $('#newAdresse').show();

    }
});

/* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 102) {
        $('#navbar-fixed').addClass('navbar-fixed');
    }
    else {
        $('#navbar-fixed').removeClass('navbar-fixed');
    }
});
$(document).ready(function(){
    if ($(window).scrollTop() >= 102) {
        $('#navbar-fixed').addClass('navbar-fixed');
    }
    else {
        $('#navbar-fixed').removeClass('navbar-fixed');
    }
});



$(document).ready(function() {
 $('.slider').slider();
});
$(document).ready(function() {
 $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '50%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        alert("Ready");
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
    }
    );

});

 // Initialize collapse button
 $(document).ready(function() {
   $(".button-collapse").sideNav();
 });

 // Initialize collapsible (uncomment the line below if you use the dropdown variation)
 //$('.collapsible').collapsible();
 $(document).ready(function() {
   $('.datepicker').pickadate({
     format: 'mm/dd/yyyy',
         selectMonths: true, // Creates a dropdown to control month
         selectYears: 15 // Creates a dropdown of 15 years to control year
       });
 });

 $(document).ready(function() {
   $('.modal').modal();

 });
 
 $(document).ready(function() {
   $(".dropdown-button").dropdown({
     inDuration: 300,
     outDuration: 225,
         hover: true, // Activate on hover
         belowOrigin: true, // Displays dropdown below the button
         stopPropagation: true // Stops event propagation
       });
 });
 $(document).ready(function(){
  $('.parallax').parallax();

});
 
//fonction executer a l'ajout d'un articlle au panier
 (function($){

  $('.addPanier').click(function(event){
    event.preventDefault();
    $.get($(this).attr('href'),{},function(data){
      if(data.error){
        alert(data.message);
      }else{
        if(confirm(data.message + '. Voulez vous consulter votre panier ?')){
          location.href = '/gaming-store-mvc/panier';
        }else{
          $('#total').empty().append(data.total);
          $('#count').empty().append(data.count);
        }
      }
    },'json')
      .fail(function() {
    alert( "error" );
  });
    return false;
  });

})(jQuery);


