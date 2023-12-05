(function($){
    $(function(){
    /************Navigace pro mobilní telefony***************/
        $(".jq--nav-icon").click(function(){
            $(".mobile-nav-back").slideToggle()
            $("nav ul").slideToggle()
        })

        $(".jq--image-hamburger").click(function(){
            
            if($(".jq--image-hamburger").attr("src") == "images/hamburgerMenu.png")    
                    
            {
                $($(".jq--image-hamburger").attr("src", "images/crossMenu.png"))
            }
            else 
            {
                $($(".jq--image-hamburger").attr("src", "images/hamburgerMenu.png"))
            }
        })
    
    /************Manipulace s menu po roztažení obrazovky se nav ul samo zavře*********************/    
    $(window).resize(function() {
        var wi = $(window).width();
        if (wi > 1200) {
            $('nav ul').css({'display':'inline-block'})
        } else {
            $('nav ul').css({'display':'none'})
            $(".mobile-nav-back").css({'display':'none'})
            $($(".jq--image-hamburger").attr("src", "images/hamburgerMenu.png"))
        } 
    })

    /*******Objevení hlavní fotky*********/
    $(".author-full-screen").hide(0).slideDown(2000)

    /*****Scrollování po kliknutí na položku v navigaci: SOCIÁLNÍ SÍTĚ*********/
    $(".jq--scroll-social-nets").click(function(){
        $("html, body").animate({scrollTop: $(".social-nets").offset().top}, 2000)
    })

    /*****Scrollování po kliknutí na položku v navigaci: O MNĚ - scrollování na začátek stránky*********/
    $(".jq--scroll-about-me").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 2000)
      })
})
})(jQuery)

