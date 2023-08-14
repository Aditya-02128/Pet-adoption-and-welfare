<?php
session_start();
?>
<html>
    <head>
        
        <title>Welcome to the PAWS</title>
        <?php include 'dependencies.php'; ?>
        
    </head>
    <body>
	 <?php
            require 'header.php';
           ?> 
        <div id="dynamic_content">
            
        </div>
          
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Greatness of a Nation Be Judged by How It Treats Its Animals .</h1>
                       <p>Adopting a pet or finding a new house for the pet</p>
                       <a href="displaypets.php?search=" class="btn btn-primary">Click here to see all the cute pets</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container  ">
               <div class="row">
                   <div class="col-xs-4 ">
                       <div  class="thumbnail category_card">
                           <a href="displaypets.php?search=dog">
                                <img src="img/dog.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Dogs</p>
                                        <p>Choose dog pet.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4 ">
                       <div class="thumbnail category_card">
                           <a href="displaypets.php?search=cat">
                               <img src="img/pus.webp" alt="Cats">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Cats</p>
                                    <p>A family of Meawwwww</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4 ">
                       <div class="thumbnail category_card">
                           <a href="displaypets.php?search=fish">
                               <img src="img/bd.jpeg" alt="Fishes">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Birds</p>
                                   <p>Cutes Birds.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
               
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
			   <center>
               <p> Looking for a pet or finding a new home for a pet. PAWS is here for you</P>
			   </center>
               </div>
           </footer>
           
        
         <?php include 'post-ad-part-1.php';?>
    </body>
</html>