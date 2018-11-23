<?php include 'includes/header.html';?>


    <body class="animated fadeIn">
     <h1 class="hidden">Tectone | Home</h1>

     <div id="container">    


    <header class="navigationHeader">
    <h1 class="navigationLogo"><img src="images/logo.png"></h1>
          <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="portfolio.php">Portfolio</a></li>
              <li><a href="about.php" class="is-active">About</a></li>
              <li><a href="contact.php">Contact</a></li>
          </ul>
    </header>


    <div class="row  fullWidth">
    <h2 class="hidden">Banner Image</h2>
        <img src="images/john.png" class="banner" alt="fullBanner">
    </div> 

    <div class="row recentWork">
        <h2 class="title">Hey There!</h2>
        <p class="subTitle"> My name is John Robertson. 
            I'm a freelance graphic designer & front-end developer. 
            I have a background in philosophy, psychology, sociology, and theater.
            Bring that alltogether and you have yourself the powerhouse that is called Tectone</p>

         
   </div>


<?php include 'includes/footer.html';?>

         
  </div>  

    <script src="js/app.js"></script>                  
    <script src="js/foundation.min.js"></script>

    <script>
		$(document).foundation();
    </script>
  </body></html>
