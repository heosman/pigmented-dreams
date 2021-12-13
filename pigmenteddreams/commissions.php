<!DOCTYPE html>
<html lang="en">
 <head>
  <title>pigmented dreams</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/lightbox.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="includes/jquery-1.11.3.min.js" type="text/javascript"></script>
 </head>
 <body>

   <header>
      <div class="wrapper">
        <div class="nav-bar">
        <div id="nav-container">
          <a href="gallery.html" class="logo">pigmented dreams</a>
            <nav>
                <div class="openMenu">
                    <img src="images/down.png" class="menu-arrow">
                </div>
                <ul class="menu">
                 <li><a href="gallery.html"> gallery</a></li>
                 <li><a href="commissions.php" class="current">commissions</a></li>
                 <li><a href="about.html"> about</a></li>
                 <li><a href="contact.php"> contact me</a></li>
                 <div class="closeMenu"><i class="fa fa-times"></i></div>
               </ul>
              </nav>
              <div class="socials">
               <a href="https://saartification.tumblr.com/" target="_blank"> 
                  <i class="fab fa-tumblr"></i></a>
               <a href="https://www.instagram.com/twinsunss/" target="_blank"> 
                  <i class="fab fa-instagram"></i></a>
               <a href="https://twitter.com/sartification" target="_blank"> 
                  <i class="fab fa-twitter"></i></a>
               </div>
         </header> 
       
        <main class="halfwidth">
           <div id="wrapper">
            <h3 class="subheader">commissions</h3>
             <p>Here you can request a commission. Please be sure to specify the size, the type of the medium, and give details of what you are requesting.</p>
            <br>

       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hanaaneooo@gmail.com";  //place your/your client's email address here
        $toName = "Intisar Osman"; //place your client's name here
        $website = "Pigmented Dreams";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements
	   ?>
         </main>
       <footer>
            <p>&copy; 2021 by <a href="contact.php">pigmented dreams</a>, All Rights Reserved</p>
    </footer>
     
 </div> 
</div>  
 <script src="js/lightbox.js"></script>
 </body>
 <script src="js/menu.js"></script>
</html>