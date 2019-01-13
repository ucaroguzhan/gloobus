        //toggle effect with jquery
        $("nav div").click(function(){
            $("ul").slideToggle();
            $("ul ul").css("display", "none");
        });


        $("ul li").click(function(){
            $("ul ul").slideUp();
            $(this).find('ul').slideToggle();

        });

        $(window).resize(function(){
            if($(window).width() > 768){
                $("ul").removeAttr('style');
            }
        })
        //banner slideshow
        var slideIndex = 1;
      showSlides(slideIndex);


       function plusSlides(n) {
       showSlides(slideIndex += n);
      }


       function currentSlide(n) {
       showSlides(slideIndex = n);
      }

     function showSlides(n) {
     var i;
     var slides = document.getElementsByClassName("bannerSlides");
     var dots = document.getElementsByClassName("dot");
     if (n > slides.length) {slideIndex = 1}
     if (n < 1) {slideIndex = slides.length}
     for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
     }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
     }
     slides[slideIndex-1].style.display = "block";
     dots[slideIndex-1].className += " active";
     }


    //AJAX request
    document.getElementById('btnCustom').addEventListener('click', loadCustomers);
    function loadCustomers(){
    var http = new XMLHttpRequest();
    http.open('GET','json/customers.json', true);
    http.onload = function(){
    if(this.status ==200){
    var customer = JSON.parse(this.responseText);
    var output= '';

    for(var i in customer){
      output += '<ul>' +
      '<li> Name: '+customer[i].name+' </li> ' +
      '<li> Adress: '+customer[i].adress+' </li> ' +
      '</ul>';
    }
    document.getElementById('customers').innerHTML = output;
      /*console.log(this.responseText);*/

    }
  }
  /*http.onerror(){
    console.log("Request failed");
  }*/
  http.send();
 }
