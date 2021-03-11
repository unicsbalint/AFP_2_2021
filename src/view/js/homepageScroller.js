$(document).ready(function(){
    //Navbar fadein
    $(".navContainer").fadeIn(2500);

    //Az oldal be/újratöltésénél visszaugrik a tetejére
    $('html, body').animate({      
        scrollTop: ($('html').offset().top)
    },500);

    //ModelS gomb
    $("#modelS").click(function(){
        $('html, body').animate({      
            scrollTop: ($('#homepage-S').offset().top)
        },500);       
    });

    $("#orderS").click(function(){
        $('html, body').animate({      
            scrollTop: ($('#homepageHeader').offset().top)
        },500);    
        // itt majd átirányítjük őket egy másik oldalra webpage/modelS , egyenlőre csak visszavisz a tetejére
    });

    //Ha eléri a model S szekciót betölti (fadeli) az domokat azon a részen.
    $(window).on("scroll", function(){
        if($("html").scrollTop() >= $('#homepage-S').offset().top){
          $("#modelSText").fadeIn(1000);
          $("#orderS").fadeIn(1000);
        }
      });


    //Ugyan ez a működés a többi modellre:

    //modell 3

      $("#model3").click(function(){
        $('html, body').animate({      
            scrollTop: ($('#homepage-3').offset().top)
        },500);       
        $("#model3Text").fadeIn(1000);
          $("#order3").fadeIn(1000);
    });

    $("#order3").click(function(){
        $('html, body').animate({      
            scrollTop: ($('#homepageHeader').offset().top)
        },500);    
        
    });

    $(window).on("scroll", function(){
        if($("html").scrollTop() >= $('#homepage-3').offset().top){
          $("#model3Text").fadeIn(1000);
          $("#order3").fadeIn(1000);
        }
      });
    
    
});


