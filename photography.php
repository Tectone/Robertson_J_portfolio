<?php include 'includes/header.html';?>


    <body class="animated fadeIn">
     <h1 class="hidden">Tectone | Photography</h1>

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
        <h2 class="title">Photography</h2>
        <p class="subTitle">I enjoy doing a tad bit of photography. Specifically of my cats!</p>


<!-- Images used to open the lightbox -->
<div class="row modalImage">
  <ul class="large-block-grid-3  medium-block-grid-2 small-block-grid-2">
  <li>
    <img src="images/bunny1_thumb.jpg" alt="catPicture" onclick="openModal();currentSlide(1)" class="hvr-shrink">
 </li>
<li>
    <img src="images/bunny2_thumb.jpg" alt="catPicture" onclick="openModal();currentSlide(2)" class="hvr-shrink">
</li>
<li>
    <img src="images/krobus1_thumb.jpg" alt="catPicture" onclick="openModal();currentSlide(3)" class="hvr-shrink">
</li>
<li>
    <img src="images/krobus2_thumb.jpg" alt="catPicture" onclick="openModal();currentSlide(4)" class="hvr-shrink">
</li>
<li>
    <img src="images/krobus3_thumb.jpg" alt="catPicture" onclick="openModal();currentSlide(5)" class="hvr-shrink">
</li>

<li>
    <img src="images/bobus_thumb.jpg" alt="catPicture" onclick="openModal();currentSlide(6)" class="hvr-shrink">
</li>
</ul>

</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
         <h3 class="hidden">Bunny Image 01</h3>
      <div class="numbertext">1 / 6</div>
      <img src="images/bunny1.jpg" alt="catPicture" style="width:100%">
    </div>

    <div class="mySlides">
         <h3 class="hidden">Bunny Image 02</h3>
      <div class="numbertext">2 / 6</div>
      <img src="images/bunny2.jpg" alt="catPicture" style="width:100%">
    </div>

        <div class="mySlides">
             <h3 class="hidden">Krobus Image 01</h3>
      <div class="numbertext">3 / 6</div>
      <img src="images/krobus1.jpg" alt="catPicture" style="width:100%">
    </div>

        <div class="mySlides">
          <h3 class="hidden">Krobus Image 02</h3>
      <div class="numbertext">4 / 6</div>
      <img src="images/krobus2.jpg" alt="catPicture" style="width:100%">
    </div>

        <div class="mySlides">
          <h3 class="hidden">Krobus Image 03</h3>
      <div class="numbertext">5 / 6</div>
      <img src="images/krobus3.jpg" alt="catPicture" style="width:100%">
    </div>

          <div class="mySlides">
            <h3 class="hidden">Bobus Image 01</h3>
      <div class="numbertext">6 / 6</div>
      <img src="images/bobus.jpg" alt="catPicture" style="width:100%">
    </div>


    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->


  <ul class=" thumbnails large-block-grid-6  medium-block-grid-2 small-block-grid-3">
  <li>
    <img class="demo" src="images/bunny1_thumb.jpg" onclick="openModal();currentSlide(1)" alt="Bunny Close Up 01" >
 </li>
<li>
    <img class="demo" src="images/bunny2_thumb.jpg" onclick="openModal();currentSlide(2)" alt="Bunny Close Up 02" >
</li>
<li>
    <img class="demo" src="images/krobus1_thumb.jpg" onclick="openModal();currentSlide(3)" alt="Krobus Close up 01" >
</li>
<li>
    <img class="demo" src="images/krobus2_thumb.jpg" onclick="openModal();currentSlide(4)" alt="Krobus Close Up 02" >
</li>
<li>
    <img class="demo" src="images/krobus3_thumb.jpg" alt="Krobus Full Body" onclick="openModal();currentSlide(5)" >
</li>

<li>
    <img class="demo" src="images/bobus_thumb.jpg" alt="Bobus and her best friend Shoe" onclick="openModal();currentSlide(6)">
</li>
</ul>

  </div>
</div>

<div class="goBack">
  <a href="portfolio.php">Go Back  to Portfolio</a>
</div>


  <br>
      
  </div>

<?php include 'includes/footer.html';?>
         
 </div>

 <?php include 'includes/endPage.html';?>