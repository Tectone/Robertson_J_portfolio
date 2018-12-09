<?php include 'includes/header.html';?>


    <body class="animated fadeIn">
     <h1 class="hidden">Tectone | Home</h1>

     <div id="container">    


      <header class="navigationHeader">
    <div class="navigationLogo"><a href="index.php"><img class="hvr-bob" alt="logo" src="images/logo.png"></a></div>
          <ul class="nav">
              <li><a href="index.php" >Home</a></li>
              <li><a href="portfolio.php">Portfolio</a></li>
              <li><a href="contact.php" class="is-active">Contact</a></li>
          </ul>
    </header>




    <div class="row contact">
        <h2 class="title">Contact Me</h2>
        <p class="subTitle">Interested in working with me? <br>Send me an email and we can work something out!</p>

         <div class="columns large-centered contactDiv large-6 ">
          <form method="post" action="includes/contactengine.php">
            <input type="text" name="Name" placeholder="Name" maxlength="40" required="required" />
            <input type="email" name="Email" placeholder="Email" maxlength="40" required="required" />
            <textarea name="Message" rows="8" cols="20" placeholder="Message.." required="required" ></textarea>
            <input type="submit"  name="submit" value="Send" class="submit-button hvr-wobble-horizontal" />
          </form>
        </div>
   </div>

<?php include 'includes/footer.html';?>


</div>

 <?php include 'includes/endPage.html';?>