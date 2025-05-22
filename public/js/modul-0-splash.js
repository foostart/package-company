// khai bao 
$(document).ready(function(){
    
   
   setTimeout(function(){
       
       $('.m-splash-screen-progress').addClass('active100');
   }, 2000);
   setTimeout(function(){
       $('.type-1267').addClass('loaded');
       
   }, 1000);
   
   setTimeout(function(){
       $('.type-1267').removeClass('loaded');
       
   }, 3500);
   
    $(function () {
                $("#datepicker").datepicker();
            });
});
       $(document).ready(function () {
                $("#text-require").click(function () {
                    $(".error-mes1").css('color', 'red');
                    $(".error-mes1").show();
                });

            });
       