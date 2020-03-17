$(document).ready(function(){

    let myAge = moment().diff('1998-07-19', 'years');

    if($("#wiek").length > 0) {
        if(myAge%10 == 2 || myAge%10 == 3 || myAge%10 == 4 && myAge > 21)
            $("#wiek").html(myAge+"&nbsplata");
        else
            $("#wiek").html(myAge+"&nbsplat");
    }
    else {
            $("#wiek-en").html(myAge+"&nbspyears ago");
    }
    
    $("#languages-carousel").slick({
        slidesToShow: 5,
        responsive:[
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $("#technology-carousel").slick({
        slidesToShow: 5,
        responsive:[
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $("#scroll-top").click(function(){
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });
});


$(window).on("scroll", function(){
    let yOffset = $('body').scrollTop();
    $("#title-banner h1").css("bottom", yOffset*0.3);
    let calculatedOpacity = 1-(yOffset*0.0045);
    if(calculatedOpacity < 0)
        $("#title-banner h1").css("opacity", 0);
    else
        $("#title-banner h1").css("opacity", calculatedOpacity);
    
        var mainArticleOffset = $("#main-article").offset().top;

    if(yOffset > mainArticleOffset)
        $("#scroll-top").fadeIn();
    else
        $("#scroll-top").fadeOut();
});