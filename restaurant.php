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
    <div class="second-bg-cover">
        <div class="container restauDesign">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <i class="fa fa-search"></i> <input type="text" name="" class="searchInput" placeholder="RESTAURANT NAME">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <i class="fa fa-map-marker"></i> <select class="searchInput">
                            <option>ALL LOCATIONS</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="second-cont">
        <div class="container restauPad">
            <div class="col-md-3">
                <i class="fa fa-cutlery"></i> &nbsp &nbsp<b>Cuisines</b>
                <div class="restauList">
                    <br>
                    <div class="padList">
                        <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Apple Juice
                        <span class="pull-right font-bold">(4)</span>
                    </div>
                    <div class="padList">
                        <input type="checkbox" class="checkRestau" name="checkRestau" name=""> BBQ
                        <span class="pull-right font-bold">(3)</span>
                    </div>
                    <div class="padList">
                        <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Beef Roast
                        <span class="pull-right font-bold">(4)</span>
                    </div>
                    <div class="padList">
                        <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Carrot Juice
                        <span class="pull-right font-bold">(0)</span>
                    </div>
                    <div class="padList">
                        <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Cheese Burger
                        <span class="pull-right font-bold">(4)</span>
                    </div>
                    <div class="padList">
                        <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Chicken Salad
                        <span class="pull-right font-bold">(3)</span>
                    </div>
                    <div class="padList">
                        <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Chines Soup
                        <span class="pull-right font-bold">(4)</span>
                    </div>
                    <div class="padList">
                        <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Cold Coffee
                        <span class="pull-right font-bold">(3)</span>
                    </div>
                </div>
                <br>
                <b class="cuisineList">See more Cuisines</b>
                <br>
                <br>
                <i class="fa fa-clock-o"></i> &nbsp &nbsp<b>Opening Status</b>
                <br>
                <br>
                <div class="padList">
                    <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Open Now
                    <span class="pull-right font-bold">(15)</span>
                </div>
                <div class="padList">
                    <input type="checkbox" class="checkRestau" name="checkRestau" name=""> Closed Now
                    <span class="pull-right font-bold">(0)</span>
                </div>
            </div>
            <div class="col-md-6">
                <font class="restauFont">5 Restaurants Found</font>
                <br>
                <br>
                <div class="panel panel-default">
                    <div class="panel-body setCent">
                        <div class="col-md-3">
                            <img src="images/restauLogo1.png" width="100%">
                        </div>
                        <div class="col-md-6">
                            <b>Nature Healthy Food</b><br>
                            <font class="fontPanRestau"><b>Type of food: </b>Apple Juice, Beef Roast, Cheese Burger<br>
                            </font>
                            <i class="fa fa-map-marker"></i> Bristol, Bristol
                        </div>
                        <div class="col-md-3">
                            <button class="btn">View Menu</button>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body setCent">
                        <div class="col-md-3">
                            <img src="images/restauLogo2.png" width="100%">
                        </div>
                        <div class="col-md-6">
                            <b>Menu & Drinks</b><br>
                            <font class="fontPanRestau"><b>Type of food: </b>Chicken Roast, Chines Soup, Cold Coffee<br>
                            </font>
                            <i class="fa fa-map-marker"></i> Acle, Norfolk
                        </div>
                        <div class="col-md-3">
                            <button class="btn">View Menu</button>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body setCent">
                        <div class="col-md-3">
                            <img src="images/restauLogo3.png" width="100%">
                        </div>
                        <div class="col-md-6">
                            <b>Chefs</b><br>
                            <font class="fontPanRestau"><b>Type of food: </b>Egg Fry, Noodles, Pastry<br>
                            </font>
                            <i class="fa fa-map-marker"></i> Chester, Cheshire
                        </div>
                        <div class="col-md-3">
                            <button class="btn">View Menu</button>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body setCent">
                        <div class="col-md-3">
                            <img src="images/restauLogo4.png" width="100%">
                        </div>
                        <div class="col-md-6">
                            <b>Menu's</b><br>
                            <font class="fontPanRestau"><b>Type of food: </b>Fish Fry, Fresh Juice, Stakes<br>
                            </font>
                            <i class="fa fa-map-marker"></i> Aspatria, Cumbria
                        </div>
                        <div class="col-md-3">
                            <button class="btn">View Menu</button>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body setCent">
                        <div class="col-md-3">
                            <img src="images/restauLogo5.png" width="100%">
                        </div>
                        <div class="col-md-6">
                            <b>Food N&H</b><br>
                            <font class="fontPanRestau"><b>Type of food: </b>Beef Roast, Cheese Burger, Doughnut<br>
                            </font>
                            <i class="fa fa-map-marker"></i> Bridport, Dorset
                        </div>
                        <div class="col-md-3">
                            <button class="btn">View Menu</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h5 style="font-weight:bold">Sort By</h5>
                        <div class="linkMatch linkFocus"><i class="fa fa-thumbs-up"></i> Best Match</div>
                        <div class="linkMatch"><i class="fa fa-sort"></i>  Alphabetical</div>
                        <div class="linkMatch"><i class="fa fa-star"></i> Ratings</div>

                        
                    </div>
                </div>
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
            $(function(){
                $(".linkMatch").click(function(){
                    $(".linkMatch").removeClass("linkFocus");
                    $(this).addClass("linkFocus");
                });
            });
        </script>
</body>
</html>
