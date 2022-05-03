<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
      nav{
        background-color:rgb(255, 175, 188);
      }
      #footer{
        background-color:rgba(79,91,102,255);
        color: white;
      }
      #sell{
        color: white;
        border: solid white 2px;
      }
      </style>
    <title>Hello, world!</title>
    <link rel="stylesheet" href="hello.css">
  </head>
  <body>
    <h1></h1>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg fixed-top navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="helllo.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="makeup.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MakeUp
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="makeup.html#w">Step by Step Guide</a></li>
                  <li><a class="dropdown-item" href="makeup.html#x">Makeup product</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="makeup.html#y">Long lasting makeup</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="haircare.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Haircare
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="haircare.html#hfall">Hair Fall</a></li>
                  <li><a class="dropdown-item" href="haircare.html#dhair">Dandruff</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="haircare.html#shair">Silky and smooth hair</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="skincare.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Skincare
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="skincare.html#acne">Acne</a></li>
                  <li><a class="dropdown-item" href="skincare.html#oily">Oily Skin</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="skincare.html#dspot">DarkSpots</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  HairStyle
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="hs.html#s">Short Hair</a></li>
                  <li><a class="dropdown-item" href="hs.html#lo">Long Hair</a></li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex" action="slogin.php">
              
              <button class="btn btn-outline-success" type="submit">
                Log In</button>
            </form>
            <form class="d-flex" action="quiz2.php">
              
              <button class="btn btn-outline-success" type="submit">
                Play Quiz</button>
            </form>
          
          </div>
        </div>
      </nav> 
    </div>
    <div class="container" >
    <img src="gwithbag.jpg" class="img-fluid" alt="" width="100%" height="50%">
    <h2 class=" bg-light mt-5 display-2 " >Style :</h2>
        <h2 class="lh-3 p-3"> The way in which something is done good or bad style. The manner in which something is expressed or performed, considered as separate from its intrinsic content, meaning, etc.
            Style is a particular of doing or saying something, or refers to a unique form of clothing or way of arranging your appearance.
             So how you will style it firstly depends on your comfort and it will suits on you or not.
           We should style everything depends on the occasion and you should know to manage it.
        </h2>
        <img src="makeup.jpg" alt="" width="100%" height="50%">
        <h2 class=" bg-light mt-5  display-2 ">Makeup</h2>
          <h2 class="lh-3 p-3"> Makeup is meant to enhance outer beauty without harming the skin. The skin is the largest organ of the body.
            Makeup consists of things such as lipstick, eye shadow, and powder which some women put on their faces to make themselves look more attractive or which actors use to change or improve their appearance.
            Your makeup is the sum of what makes you who you are, or the sum of what you smear on your face! You could say that your makeup is a combination of your parents' genes. Or, 
            you could wear cosmetic makeup to accentuate those physical traits.</h2>
          <img src="skin care.jpg" alt="" width="100%" height="20%">

          <h2 class=" bg-light mt-5 display-2 ">SkinCare</h2>
            <div >
            <h2 class="lh-3 p-3">Here are some brilliant skin care
              tips for face to get that glow you've always wanted. Browse through our beauty secrets, tackle your skincare issues and follow our tricks regularly to get beautiful skin naturally.</p>
                      </h2>
            
    </div>
    
<div id="footer" class="container-fluid">
   <div class="text-center">
     <h3>
      Copyright © 2011 - 2021. All rights reserved. </h3>

      <h6>We participates in various affiliate marketing programs,  means we may get 
        paid commissions on editorially </h6><h6>chosen products purchased through our links to retailer sites.
        ©2021.
        </h6>
        <h4 ><a  href="https://optout.hearstmags.com/servlet/OrdersGateway?cds_mag_code=A99&amp;cds_page_id=246801&amp;
        client_id=6l4fkr0k2en3n3pjmuu7kfl6o3">Do Not Sell My Personal Information</a>
      </h4>
      </div>
</div>
  </body>
</html>