<!DOCTYPE! html>


<html lang="en">
   <head>

       <link rel="stylesheet" href="css/style.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Gloobus </title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet">

   </head>

  <body>
    <nav>
      <div>
          <i class="fa fa-bars"></i>

      </div>
       <ul>
           <li><a href="#">Home</a></li>
           <li><a href="#">Products <i class="fa fa-sort-desc"></i></a>
              <ul>
                  <li><a href="pages/produkt1.php">Product 1</a></li>
                  <li><a href="pages/produkt2.php">Product 2</a></li>
                  <li><a href="pages/produkt3.php">Product 3</a></li>
              </ul>

           </li>
           <li><a href="pages/contact.php">Contact</a></li>
           <li><a href="pages/impressum.php">Impressum</a></li>

       </ul>





    </nav>

    <div class="container">


<div class="slideshow-container">


  <div class="bannerSlides fade">
    <div class="numbertext">1 / 3</div><a href="pages/produkt1.php" target="_blank">
    <img src="img/wohnmobil2.jpg" style="width:100%;"></a>
    <div class="text">Gloobus Server</div>
  </div>

  <div class="bannerSlides fade">
    <div class="numbertext">2 / 3</div><a href="pages/produkt2.php" target="_blank">
    <img src="img/wohnmobil6.jpg" style="width:100%"></a>
    <div class="text">Gloobus Rental</div>
  </div>

  <div class="bannerSlides fade">
    <div class="numbertext">3 / 3</div><a href="pages/produkt3.php" target="_blank">
      <img src="img/wohnmobil3.jpg" style="width:100%"></a>
    <div class="text">Gloobus Customer Service</div>
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


        <article>
            <p>

               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc
            </p>
            <button id="btnCustom">Click to see our customers</button>
              <div id="customers"></div>



        </article>


    </div>

     <footer class="footer">
      <div class="container">
          <p class="text-muted"><a href="pages/impressum.php" style="text-decoration:none;">Impressum</a><span>||</span><a href="pages/contact.php" style="text-decoration:none;">Contact</a></p>
      </div>
     </footer>
     <script src="js/script.js"></script>
  </body>

</html>
