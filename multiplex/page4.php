<!DOCTYPE html>
<head>
}
</head>

<?php
$hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "multiplex";

  // connect to mysql database

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);

  // mysql select query
  $query = "SELECT name FROM movie";

  // for method 1

  $result1 = mysqli_query($connect, $query);
?>
<html>
<body>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="Web Page Builder Description">
  
  <title>Booking</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="features8 cid-rHrrctO38Q mbr-parallax-background" id="features8-w">

    

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-img">
                    <span class="mbr-iconfont mbrib-star"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-2">PREMIUM</h4>
                    <p class="mbr-text mbr-fonts-style display-2">RS.450</p>
                    
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-img">
                    <span class="mbr-iconfont mbrib-star"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-2">GOLD</h4>
                    <p class="mbr-text mbr-fonts-style display-2">RS.350</p>
                    
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-4">
                <div class="card-img">
                    <span class="mbr-iconfont mbrib-star"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-2">SILVER</h4>
                    <p class="mbr-text mbr-fonts-style display-2">RS.270</p>
                    
                </div>
            
<head>


  <!-- Site made with Mobirise Website Builder v4.11.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="movie2.jpeg" type="image/x-icon">
  <meta name="description" content="">

  <title>Page 3</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="Istyle" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
    <div class="container align-center">
      <div class="row justify-content-md-center">
        <div class="mbr-black col-md-10">
          <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
          </h1>
          <form action="page4back.php" method="POST" class="form-horizontal"> >
            <p class="mbr-text pb-3 mbr-fonts-style display-5">
<style>
            form,label, p {
    color: white !important;
}
</style>
            <div class="form-group col-lg-12">
              <label class="col-sm-4 control-label text-right">
              <label >Movie</label>

              <select name="Movie">
                <option value=""> Select Movie </option>
                <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                  <option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
                <?php endwhile; ?>
              </select>

              <label>Timings</label>
              <select name="Timings">
                <option value="15:00">3:00p.m.</option>
                <option value="18:00">6:00p.m.</option>
                <option value="21:00">9:00p.m.</option>
              </select>
            </p>
            
              <label>Class</label>
              <select name="Class">
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
                <option value="Premium">Premium</option>
              </select>
</div>

              <label for="No. of seats">No. of seats</label>
              <input type="text" id="Nos" name="Nos" value="" />
            </p>

            <div class="col-md-12 input-group-btn">
      <button type="submit" name="Book now" class="btn btn-secondary btn-form display-4">Proceed</button>
  </div>
	<?php
		if(isset($_POST["Book now"]))
			include 'page4back.php';
		
	?>
          </form>

         
        </div>
      </div>
    </div>
  
      </a>
    </div>
  </section>

  <section class="engine"><a href="https://mobirise.info/u">bootstrap responsive templates</a></section>
  <section class="cid-rFJPdj69Mh" id="footer1-6">





  </section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  </div>

            
</div>
</div>
</section>

<section class="engine"><a href="https://mobirise.info/g">build a site</a></section><section class="features6 cid-rHrrmxSKHm" id="features6-x">


</body>

</html>