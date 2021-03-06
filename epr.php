<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>The procurement Procss</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
<!--<link href="css/stolen.min.css" rel="stylesheet"> -->
    <link href="css/charts.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) 
    <link href="css/style.css" rel="stylesheet"> -->
<style>
    /* YOUR CUSTOM STYLES */

html,
body,
.view {
    height: 100%;
}

/*Intro*/

.view {
    background: url("slide/blue.png")no-repeat center center fixed;
        -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

@media (max-width: 768px) {
    .full-bg-img,
    .view {
        height: auto;
        position: relative;
    }
}

/* Navigation*/

.navbar {
    background-color: transparent;
}

.top-nav-collapse {
    background-color: #1C2331;
}

@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #1C2331;
    }
}

.description {
    padding-top: 25%;
    padding-bottom: 3rem;
    color: #fff
}

@media (max-width: 992px) {
    .description {
        padding-top: 7rem;
        text-align: center;
    }
}

.fa-check {
    color: green;
}
</style>
</head>

<body>


    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark scrolling-navbar fixed-top" >
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="https://mdbootstrap.com/img/logo/mdb-transparent-sm-shadows.png" class="d-inline-block align-top z-depth-0" alt="MDBootstrap">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <!--Links-->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home" >Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#examples-of-use">Examples</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
    <!--/.Navbar-->
<div id="top-section"></div>
    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-lg-6">
                        <div class="description">
                            <h2 class="h2-responsive wow fadeInLeft" >Michael Malonza </h2>
                            <hr class="hr-dark">
                            <p class="wow fadeInLeft" data-wow-delay="0.4s">UI/UX designer, entrepreneur, web developer, marketing analyst. In love with javascript, material design, big data and marketing automation. In one pack we have various websites for different purposes.</p>
                            <br>
                            <a href="#best-features" class="btn btn-primary wow fadeInLeft" data-wow-delay="0.7s">Learn more</a>
                        </div>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-lg-6">
                        <!--Form-->
                        <div class="card wow fadeInRight">
                            <div class="card-block">
                                <!--Header-->
                                <div class="text-center">
                                    <h3><i class="fa fa-user"></i> Register with:</h3>
                                    <a href="" class="btn-floating btn-fb btn-small"><i class="fa fa-facebook"></i></a>
                                    <a href="" class="btn-floating btn-tw btn-small"><i class="fa fa-twitter"></i></a>
                                    <a href="" class="btn-floating btn-gplus btn-small"><i class="fa fa-google-plus"></i></a>
                                    <a href="" class="btn-floating btn-li btn-small"><i class="fa fa-linkedin"></i></a>
                                    <a href="" class="btn-floating btn-git btn-small"><i class="fa fa-github"></i></a>
                                    <hr>
                                    <h3>or:</h3>
                                </div>

                                <!--Body-->
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Your email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="form4" class="form-control">
                                    <label for="form4">Repeat password</label>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg">Sign up</button>
                                    <hr>
                                    <fieldset class="form-group">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1">Subscribe me to the newsletter</label>
                                    </fieldset>
                                </div>

                            </div>
                        </div>
                        <!--/.Form-->
                    </div>
                    <!--/Second column-->
                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

    <!--Main container-->
    <div class="container">



        <div class="divider-new">
            <h2 class="h2-responsive wow fadeInDown">Testimonials</h2>
        </div>

        <!--Section: Testimonials-->
        <section id="testimonials">
            <div class="row">

                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="btn-floating btn-small mdb-color" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example" data-slide-to="1"></li>
                        <li data-target="#multi-item-example" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="col-md-4">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up green lighten-1">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="img/coffee-on-blue-ron-magnes.jpg" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                            <div class="col-md-4 hidden-sm-down">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up green darken-2">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="https://mdbootstrap.com/wp-content/uploads/2015/10/avatar-2.jpg" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                            <div class="col-md-4 hidden-sm-down">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up  green darken-4">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="img/nature-stickers-for-wall-250x250.jpg" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-4">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up blue lighten-1">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="img/44771f7c1c39b9831eb00ee9cc72dbea.jpg" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                            <div class="col-md-4 hidden-sm-down">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up blue darken-2">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="img/coffee-on-blue-ron-magnes.jpg" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                            <div class="col-md-4 hidden-sm-down">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up blue darken-4">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="img/coffee_dining_250px.png" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                            <div class="col-md-4">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up indigo lighten-1">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="img/904340710-tea-coffee-icon-sign-symbol-on-the-Round-and-square-buttons-with-frame-Vector.jpg" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                            <div class="col-md-4 hidden-sm-down">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up indigo darken-1">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="img/ls.jpg" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                            <div class="col-md-4 hidden-sm-down">
                                <!--Card-->
                                <div class="card testimonial-card">

                                    <!--Bacground color-->
                                    <div class="card-up indigo darken-4">
                                    </div>

                                    <!--Avatar-->
                                    <div class="avatar"><img src="img/tr.png" class="img-circle img-responsive">
                                    </div>

                                    <div class="card-block">
                                        <!--Name-->
                                        <h4 class="card-title">Anna Doe</h4>
                                        <hr>
                                        <!--Quotation-->
                                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                                    </div>

                                </div>
                                <!--/.Card-->
                            </div>

                        </div>
                        <!--/.Third slide-->

                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->

            </div>
        </section>
        <!--/Section: Testimonials-->
        
    </div>
    <!--/Main container-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only">
 <div class="container">
       <div class="row" style="padding-top:10px;">
        <div  class="col-sm-3"><img src="media/map25-redish.png" height="20" ><p>CIB House,</p> 
           <p>Moi Avenue, 7th Street</p>
            <p>Nairobi</p>
            <p>Kenya</p></div>
        <div  class="col-sm-3"><img src="media/envelope4-green.png" height="20" ><p>info@cib.co.ke</p><p>P.O. Box 42656 - 00100</p> </div>  
        <div  class="col-sm-3"> <img src="media/telephone65-blue.png"  height="20" ><p><a href="tel://+254710533607"> +254710533607</a></p></div> 
           
           <div  class="col-sm-3" style="background-color:#083B4C;height:150px;">
            <p>
                <i class="fa fa-facebook" aria-hidden="true"  style="font-size:15px;"></i>
                <i class="fa fa-twitter" aria-hidden="true" style="font-size:15px; padding-left:10px;"></i>
                <i class="fa fa-linkedIn" aria-hidden="true" style="font-size:15px; padding-left:10px;"></i>
            </p>
            <p>&copy; <?php echo " ".date("Y"); ?> CIB</p>
           <footer class="pull-right" style="padding-top:100px;">By &copy;Mickemlyn & Yowmy</footer>
           </div>
        </div>
        </div>

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jqueryingine.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

     <script type="text/javascript" src="js/compiled.min.js"></script>

</body>

</html>