 $(document).ready(function(){ 
   setTimeout(function(){ 
       $('.m-splash-screen-progress').addClass('active100');
   }, 2000);
   setTimeout(function(){
       $('.type-1234').addClass('loaded');
       
   }, 1000);
   
   setTimeout(function(){
       $('.type-1234').removeClass('loaded');
       
   }, 3500);
});