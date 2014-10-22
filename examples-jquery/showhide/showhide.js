$(document).ready(function () {
    $(".showlink a").click(function () {
       // hide parent div
       $(this).parent().hide(); 
       // go two levels up, find the element with the "text" class and show it
       $(this).parent().parent().find(".text").show();
    });
    
    $(".hidelink a").click(function () {
       // hide the element two levels up
       $(this).parent().parent().hide(); 
       // show the link three levels up
       $(this).parent().parent().parent().find(".showlink").show();
    });
});

