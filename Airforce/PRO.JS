$(document).ready(function(){
    
    $('header').show(500);
});

$(document).ready(function(){
   $('img.log').mouseenter(function(){
       
       $(this).css({
           'transform':'scale(1.2)',
           'transition':'0.3s ease'
       });
   });
});

$(document).ready(function(){
   $('.log').mouseout(function(){
       
       $(this).css({
           'transform':'scale(1.1)',
           'transition':'0.3s ease'
       });
   });
});


    


