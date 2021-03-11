$(document).ready(function(){
    $(".navContainer").fadeIn(2500);
    $("#modelS").click(function(){
        $('html, body').animate({      
            scrollTop: ($('#homepage-S').offset().top)
        },500);       
    });

    $("#orderS").click(function(){
        $('html, body').animate({      
            scrollTop: ($('#homepageHeader').offset().top)
        },500);    
        // itt majd átirányítjük őket egy másik oldalra webpage/modelS  
    });

    $(window).on("scroll", function(){
        if($("html").scrollTop() == $('#homepage-S').offset().top){
          $(window).off("scroll");
          $(".modelText").fadeIn(1000);
          $("#orderS").fadeIn(1000);
        }
      });
    
});


