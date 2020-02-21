$(document).ready(function(){
    $("#technologie-carousel").slick();
});


$(window).on("scroll", function(){
    let yOffset = $('body').scrollTop();
    $("#title-banner h1").css("bottom", yOffset*0.3);
    let calculatedOpacity = 1-(yOffset*0.0045);
    if(calculatedOpacity < 0)
        $("#title-banner h1").css("opacity", 0);
    else
        $("#title-banner h1").css("opacity", calculatedOpacity);
    
    $("#title-banner .banner-icons").css("top",100+yOffset*1.8);
});
