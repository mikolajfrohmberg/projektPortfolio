$(window).on("scroll", function(){
    let yOffset = $('body').scrollTop();
    $("#title-banner h1").css("bottom", 30+yOffset*0.3);
    $("#title-banner h1").css("opacity", 1-(yOffset*0.0035));
});