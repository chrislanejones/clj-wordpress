// Skills Bar
$(document).ready(function($){
$(function () {
  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip("show")
});

// $( window ).scroll(function() {
 // if($( window ).scrollTop() > 10){  // scroll down abit and get the action
  $(".progress-bar").each(function(){
    each_bar_width = $(this).attr('aria-valuenow');
    $(this).width(each_bar_width + '%');
  });
});

// Skills Bar End

$(document).ready(function(){


  $("#clock").hide(0)
             .delay(1000)
             .slideDown(2500);

});
$(document).ready(function(){
  var deadline = new Date("2017/05/20");

  function updateClock(){
  var today = Date();
  var diff = Date.parse(deadline) - Date.parse(today);
    if(diff<=0){
      clearInterval(interval);
    }
    else{
  var seconds = Math.floor((diff/1000)%60);
  var minutes = Math.floor((diff/1000/60)%60);
  var hours = Math.floor((diff/1000/60/60)%24);
  var days = Math.floor(diff/(1000*60*60*24)%30.5);
  var months = Math.floor(diff/(1000*60*60*24*30.5)%12);

     $("#months").text(('0'+months).slice(-2));
     $("#days").text(('0'+days).slice(-2));
     $("#hours").text(('0'+hours).slice(-2));
     $("#minutes").text(('0'+minutes).slice(-2));
     $("#seconds").text(('0'+seconds).slice(-2));

    }//EOF ELSE

  }//EOF FUNCTION

 var interval = setInterval(updateClock,1000);

});//EOF DOCUMENT.READY
