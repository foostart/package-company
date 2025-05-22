$(document).ready(function () {         
    equalize();
    $(".about").css({"width":"100%","height":"100%","position":"absolute","background":"#fff"});
    $("body").css("position","relative");
    $(".type-1244").css({"position":"fixed","z-index":"-2"});
});           
$(window).resize(function () {      
    $(".about").css("margin-bottom","unset");    
    equalize();
});     
function equalize() {       
    $(".about").css("margin-bottom",$(".type-1244").height() + "px");    
} 