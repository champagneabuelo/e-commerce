<?php
session_start();
if(isset($_GET['id'])){
    session_destroy();
    header('Location: index.php');
exit;
}
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(isset($_SESSION["user"])){
    $user = $_SESSION["user"];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Background color for template --> 
    <style type="text/css"> 
    	body {
		background: #ffd699;
	}
    </style>
	
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">The Carpool Company</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                if(isset($user)){ 
                    $_SESSION["user"] = $user;
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php?id=logout">Log out</a>
                    </li>
		</ul>
                    <?php
                    }
                    else{
                    ?>
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="signin.php">Sign In</a>
                    </li>
                    <li>
                        <a href="signup.php">Sign Up</a>
                    </li>
		</ul>
                    <?php
                    }?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
		<p class="h3"><b>The Carpool Company </b></p>
                <?php
                if(!isset($user)){
                ?>
		<p class="h4">
Our job is to make finding a ride easy and convenient for you. So <i>Let's Play Pick-Up!</i> 
		</p>
		<br>
		<?php
		} 
		if (isset($user)) {
		?>
		<p class="h4">
		<?php echo "Logged in as " . $user; ?>
		</p>
                <?php
                } if(isset($user)) {
                    $_SESSION["user"] = $user;
                ?>
                <div class="list-group">
                    <a href="#" class="list-group-item">My Profile</a>
                    <a href="#" class="list-group-item">Calendar</a>
                    <a href="#" class="list-group-item">Recent Rider Requests</a>
                </div>
		<?php
		}
		?>

            </div>
	    
            <div class="col-md-9">
                <div class="row carousel-holder">
		    <?php
	            if (!isset($user)) {
	    	    ?>
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="carpool2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="rotunda1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="arizona-highway.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
		<?php
		} 
		?>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="profile.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$20</h4>
                                <h4><a href="ridePost.php?lastname=Yaremchuk">Room for 3 to Nova</a>
                                </h4>
                                <p>Hey! I'm going to Oakton on Friday and have 3 spots for anyone else who needs a ride! 20 bucks for gas needed, snacks appreciated!</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">9 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images-2.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$10</h4>
                                <h4><a href="ridePost.php?lastname=Bedsaul">Richmond Room 4 1</a>
                                </h4>
                                <p>Quick drive, but I'd love some company (and gas money!)</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">3 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="images.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$50</h4>
                                <h4><a href="ridePost.php?lastname=Familiant">South Carolina</a>
                                </h4>
                                <p>Leaving to visit some friends at College of Charleston. Longshot but wondering if anyone else wants to tag along. Music suggestions appreciated.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">7 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
