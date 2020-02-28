<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  
  <title>Page 3</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  
<section class="engine"><a href="https://mobirise.info/e">how to make your own website</a></section><section class="header1 cid-rEvza8sMxV mbr-parallax-background" id="header16-f">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Scrumptious food on the way ...!</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Get fresh food served right at your seats for a hassle free viewing experience</p>
                
            </div>
        </div>
    </div>

</section>

<section class="pricing-table2 cid-rEvz8HYgmN" id="pricing-tables2-e">

    
 <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-black col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    
                </h1>
            <form action="foodback.php" method="POST">

            <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <label>Food Combo</label>
             <select name="combo">
               <option value = "0"> None</option>
               <option value = "FC001">Combo 1</option>
               <option value = "FC002">Combo 2</option>
               <option value = "FC003">Combo 3</option>
               <option value = "FC004">Combo 4</option>
             </select>
         </p>

         <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <label>Quantity</label>
             <select name = "quantity">
               <option value = "0"> 0</option>
               <option value = "1"> 1</option>
               <option value = "2"> 2</option>
               <option value = "3"> 3</option>
               <option value = "4"> 4</option>
             </select>
         </p>

         <div class="col-md-12 input-group-btn">
      <button type="submit" name="Book now" class="btn btn-secondary btn-form display-4">Book Now</button>
  </div>
	<?php
		if(isset($_POST["Book now"]))
			include 'page4back.php';
		
	?>
        </form>
     </div>
 </div>
</div>
    

    <div class="container">
        <div class="media-container-row">

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">Combo 1</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5"></span>
                        <span class="price-figure mbr-fonts-style display-1">Rs.600</span>
                        <small class="price-term mbr-fonts-style display-7"></small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">-&gt; 1 &nbsp;Large popcorn</li><br><li class="list-group-item">-&gt;600 ml Pepsi/Coke/Sprite</li><br><li class="list-group-item">-&gt;Mineral water</li><br><li class="list-group-item"><br></li>
                        </ul>
                    </div>
                    
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">Combo 2</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5"></span>
                        <span class="price-figure mbr-fonts-style display-1">Rs.450</span>
                        <small class="price-term mbr-fonts-style display-7"><br><br></small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">-&gt; Medium popcorn</li><br><li class="list-group-item">-&gt;300 ml coke/pepsi/sprite</li>
                        </ul>
                    </div>
                    
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">Combo 3</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5"></span>
                        <span class="price-figure mbr-fonts-style display-1">Rs.300</span>
                        <small class="price-term mbr-fonts-style display-7"><br><br></small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">-&gt; 1 small popcorn</li><br><li class="list-group-item">-&gt;200 ml coke/pepsi/sprite</li>
                        </ul>
                    </div>
                    
                </div> 
            </div>


            

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">Combo 4</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5"></span>
                        <span class="price-figure mbr-fonts-style display-1">Rs.150</span>
                        <small class="price-term mbr-fonts-style display-7"><br><br></small>
                    </div>
                </div>
                <div class="plan-body">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">-&gt; 1 Small bucket popcorn</li>
                        </ul>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cid-rEvCiF0CcW" id="social-buttons2-g">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    FOLLOW US!
                </h2>
                <div class="social-list pl-0 mb-0">
                    <a href="https://twitter.com/mobirise" target="_blank">
                        <span class="px-2 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                    </a>
                    <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                        <span class="px-2 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                    </a>
                    <a href="https://instagram.com/mobirise" target="_blank">
                        <span class="px-2 socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                    </a>
                    <a href="https://www.youtube.com/c/mobirise" target="_blank">
                        
                    </a>
                    <a href="https://www.behance.net/Mobirise" target="_blank">
                        
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>