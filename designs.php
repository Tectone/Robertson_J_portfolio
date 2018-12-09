<?php include 'includes/header.html';
require_once('includes/init.php');
	$tbl = "tbl_designs";
	$getDesigns = getAll($tbl);?>


    <body class="animated fadeIn">
     <h1 class="hidden">Tectone | Designs</h1>

     <div id="container">    


   <header class="navigationHeader">
    <div class="navigationLogo"><a href="index.php"><img class="hvr-bob" alt="logo" src="images/logo.png"></a></div>
          <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="portfolio.php" class="is-active">Portfolio</a></li>
              <li><a href="contact.php">Contact</a></li>
          </ul>
    </header>


    <div class="row recentWork">
        <h2 class="title"> Graphic Design</h2>
        <p class="subTitle"> Here's series of designs that I have worked on either completely myself or that I offered conceptualization. Each client reached out to me directly and inquired about branding from scratch.  </p>

   <div class="designWork">

<?php

	if(!is_string($getDesigns)) {
		while($row = mysqli_fetch_array($getDesigns)) {
            echo "<hr><br>";
            echo "<h3 class=\"hidden\">{$row['designs_title']}</h3>";
            echo "<p class=\"designTitle\">{$row['designs_title']}</p>";
            echo "<p>{$row['designs_text']}</p>";
            echo "<br><br>";
			echo "<img data-aos=\"fade-up\" src=\"images/{$row['designs_image']}\" alt=\"{$row['designs_title']}\">";
			echo "<br><br><br><br>";
		}
	}else{
		echo "<p>{$getDesigns}</p>";
    }
?>

</div>
      
   </div>

   <div class="goBack">
  <a href="portfolio.php">Go Back  to Portfolio</a>
</div><br><br>


<?php include 'includes/footer.html';?>
         
  </div>  

   <?php include 'includes/endPage.html';?>

 