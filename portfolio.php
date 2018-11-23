<?php include 'includes/header.html';?>


    <body class="animated fadeIn">
     <h1 class="hidden">Tectone | Home</h1>

     <div id="container">    


    <header class="navigationHeader">
    <h1 class="navigationLogo"><img src="images/logo.png"></h1>
          <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="portfolio.php"  class="is-active">Portfolio</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
          </ul>
    </header>


    <div class="row recentWork">
        <h2 class="title"></h2>
        <p class="subTitle"></p>

          <a href="easymerchant.php"><div class="columns small-12 large-6">
              <img src="images/easymerchant_thumb.png" alt="easymerchant_thumb">
          </div></a>

            <a href="guacamole.php"><div class="columns small-12 large-6">
              <img src="images/gtc.png" alt="gtc_thumb">
          </div></a>

      
   </div>
<?php include 'includes/footer.html';?>
         
  </div>  

    <script src="js/app.js"></script>                  
    <script src="js/foundation.min.js"></script>

    <script>
		$(document).foundation();
    </script>
  </body></html>
