$(document).ready(function(){

  if(window.location.pathname === '/tesla/src/view/index.php' || window.location.pathname === '/tesla/src/view/'){
    let modelNav = `
    <a class="modelTexts" id="modelS">MODEL S</a>
    <a class="modelTexts" id="model3">MODEL 3</a>
    <a class="modelTexts" id="modelX">MODEL X</a>
    <a class="modelTexts" id="modelY">MODEL Y</a>`  
    $("#modelsDiv").html(modelNav);
  }


    //Navbar fadein
    $(".modelTexts").fadeIn(2500);

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

    

    //Ha eléri a Model S szekciót betölti (fadeli) az domokat azon a részen.
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


    $(window).on("scroll", function(){
        if($("html").scrollTop() >= $('#homepage-3').offset().top){
          $("#model3Text").fadeIn(1000);
          $("#order3").fadeIn(1000);
        }
      });
    
    //modell X

    $("#modelX").click(function(){
      $('html, body').animate({      
          scrollTop: ($('#homepage-X').offset().top)
      },500);       
      $("#modelXText").fadeIn(1000);
        $("#orderX").fadeIn(1000);
  });


  $(window).on("scroll", function(){
      if($("html").scrollTop() >= $('#homepage-X').offset().top){
        $("#modelXText").fadeIn(1000);
        $("#orderX").fadeIn(1000);
      }
    });

    // modell Y

    $("#modelY").click(function(){
      $('html, body').animate({      
          scrollTop: ($('#homepage-Y').offset().top)
      },500);       
      $("#modelYText").fadeIn(1000);
        $("#orderY").fadeIn(1000);
  });

  $(window).on("scroll", function(){
      if($("html").scrollTop() >= $('#homepage-Y').offset().top){
        $("#modelYText").fadeIn(1000);
        $("#orderY").fadeIn(1000);
      }
    });

    
});


