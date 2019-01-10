<?php
$image = $_GET['image'];
$name = $_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Open+Sans+Condensed:300|Roboto|Arvo" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <title>Let's Eat Pare</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include 'nav.php'; ?>
    <br>
    <div style="clear:both"></div>
    <?php
    echo "
    <div class='first-bg-cover' style='background: url(images/$image);height: 600px; background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;'>";
    ?>
    
       <div class="panel panel-transparent">
           <div class="panel-body ">
                <h3 class="firstTextPanel">Stores and Restaurants in</h3>
               <b class="initiatorFont"><?php echo "$name"?></b></font>
           </div>
       </div>
    </div>
    <!-- Page Content -->
        <div class="text-center second-cont">
            <div class="container">
                
                <img src="images/lineBreak.png" class="lineBreak">
                <br><br>
                <div class="col-md-4 col-sm-6 hero-feature slideanim">
                    <img src="images/food1.jpg" width="100%">
                    <div class="col-md-12 hero-feature ">
                        <div class="belowImage">
                           Mexican Cusine
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 hero-feature slideanim">
                    <img src="images/food2.jpg" width="100%">
                    <div class="col-md-12 hero-feature ">
                        <div class="belowImage">
                           Japanese Cuisine
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 hero-feature slideanim">
                    <img src="images/food3.jpg" width="100%">
                    <div class="col-md-12 hero-feature ">
                        <div class="belowImage">
                           Italian Cusine
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 hero-feature slideanim">
                    <img src="images/food4.jpg" width="100%">
                    <div class="col-md-12 hero-feature ">
                        <div class="belowImage">
                           Chinese Cusine
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 hero-feature slideanim">
                    <img src="images/food5.jpg" width="100%">
                    <div class="col-md-12 hero-feature ">
                        <div class="belowImage">
                           American Cuisine
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 hero-feature slideanim">
                    <img src="images/food6.jpg" width="100%">
                    <div class="col-md-12 hero-feature ">
                        <div class="belowImage">
                           European Cuisine
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
                <br>
                <div class="pull-right pagination-size">
                    <a href=""><i class="fa fa-chevron-left"></i></a>
                     <b> 1 </b> of 6
                    <a href=""><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="col-md-6">
                    Copyright © 2018 letseatpare.com 
                </div>
                <div class="col-md-6 text-right">
                    <a class="socialLogo logoFacebook" href=""><i class="fa fa-facebook"></i></a>
                    &nbsp
                    <a class="socialLogo logoTwitter" href=""><i class="fa fa-twitter"></i></a>
                    &nbsp
                    <a class="socialLogo logoInstagram" href=""><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(window).scroll(function() {
                $(".slideanim").each(function(){
                  var pos = $(this).offset().top;
                  var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                      $(this).addClass("slide");
                    }
                });
              });
        </script>
</body>
</html>
