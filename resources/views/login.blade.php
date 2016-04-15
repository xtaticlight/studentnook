<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log In</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<img src="img/nook.jpg" width="15%" height="auto" hspace="125">

<!--Navbar-->
<nav class="navbar navbar-inverse navbar-default">
<div class="container">
    <div class="row">
    <button type="button" class="navbar-toggle"
    data-toggle="collapse"
    data-target=".navbar-collapse">
        <span class="sr-only">Toogle Navigation Bar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
        <div class="navbar-collapse collapse">
            <div class="col-lg-10">
                <input type="text" placeholder="Search Material..." class="textox">
                <button id="search" type="button" class="btn glyphicon glyphicon-search"></button></div>
            <div class="col-lg-2">
               <!--<a class="btn1" type="button" href="#signInCollapse"> Sign In |</a>
                <a class="btn2" type="button" href="#signUpCollapse"> |Sign Up </a>-->
                <button type="button" class="btn" data-toggle="modal" data-target="#signIn">Sign In</button>
                <button type="button" class="btn" data-toggle="modal" data-target="#signUp">Sign Up</button></div>
    </div>
        <!--Sign In modal-->
        <div id="signIn" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Login</h2>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <br><input class="info" id="userName" type="text" placeholder="Username..." ></br>
                                    <br><input class="info" id="passWord" type="password" placeholder="password..." ></br>
                                    <br><button type="submit" class="btn">Submit</button></br>
                                </div>
                                <div class="col-sm-3">
                                    <br><p class="info">Not yet a member? Sign up for free!
                                    Earn Money with school stuff you don't use anymore</p></br>
                                    <button type="submit" class="btn">Sign Up</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        <!--Sign In modal-->

        <!--Sign Up Modal-->
        <div id="signUp" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Sign Up</h2>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <br><input class="info" id="userName" type="text" placeholder="Username..." ></br>
                                    <br><input class="info" id="passWord" type="password" placeholder="Password..." ></br>
                                    <br><input class="info" id="passWord2" type="password" placeholder="Confirm password..." ></br>
                                    <br><input class="info" id="email" type="text" placeholder="Email Address..." ></br>
                                    <select class="info" placeholder="School">
                                        <option value="MUST">MUST</option>
                                        <option value="XU">XU</option>
                                        <option value="COC">COC</option>
                                        <option value="LDCU">LDCU</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <br><input class="info" id="firstName" type="text" placeholder="First Name..." ></br>
                                    <br><input class="info" id="lastName" type="text" placeholder="Last Name..." ></br>
                                    <br><input class="info" id="age" type="text" placeholder="Age..." ></br>
                                    <select class="info" placeholder="Year Level">
                                        <option value="1st">1st year</option>
                                        <option value="2nd">2nd Year</option>
                                        <option value="3rd">3rd Year</option>
                                        <option value="4th">4th Year</option>
                                        <option value="5th">5th Year</option>
                                    </select>
                                    <br><button type="submit" class="btn">Submit</button></br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Sign Up Modal-->


    </div>
    </div>
</nav>
<!-- Navbar -->

<!--Image Carousel-->
<div class="container">
    <div id="infoCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#infoCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#infoCarousel" data-slide-to="1"></li>
            <li data-target="#infoCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="item active">
            <img src="img/bk.jpg" width="150%" height="auto">
            </div>
            <div class="item">
                <img src="img/one_person_website.png" width="150%" height="auto">
            </div>
            <div class="item">
                <img src="img/earn-more-money-this-year-800x453.jpg" width="150%" height="auto">
            </div>

        </div>

        <a class="left carousel-control" href="#infoCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#infoCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <!--Image Carousel-->
    <!--Steps-->
    <div class="container">
        <div class="row">
            <h1> Steps: </h1>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="img/1.png" class="img-responsive" width="50%" height="auto" align="center" hspace="80">
                <p class="text-justify">Look for any school materials that you don't need anymore but can still be useful to anybody
                    Example: uniforms, books, drawing materials or even notes.
                </p>
                </div>
            <div class="col-sm-4">
                <img src="img/2.png" class="img-responsive" width="50%" height="auto" align="center" hspace="80">
                <p class="text-justify">Take a picture of it and post it in this site. And wait for someone to have interest on your post.
                    There are so many students that needs a cheap yet still usable school materials.
                </p>
            </div>
            <div class="col-sm-4">
                <img src="img/3.png" class="img-responsive" width="50%" height="auto" align="center" hspace="80">
                <p id="copyRight" class="text-justify">If someone get's interested in your post, with the use of our built-in messenger, you can talk
                    about your deal. Get money from your old stuffs and you can also help co-students.
                </p>
            </div>
        </div>

    </div>
    <!--Steps-->
        <div class="container">
            <div class="row">
                <h1>Programmers: </h1>
            </div>
                <div class="col-sm-4">
                    <img src="img/kim.jpg" class="img-responsive img-circle" width="50%" height="auto" align="center" hspace="80">
                    <p class="text-center">I am The Flash</p>
                    </div>
                <div class="col-sm-4">
                    <img src="img/aldrin.jpg" class="img-responsive img-circle" width="50%" height="auto" align="center" hspace="80">
                    <p class="text-center">With Great Power Comes Great Responsibility</p>
                    </div>
                <div class="col-sm-4">
                    <img src="img/eman.JPG" class="img-responsive img-circle" width="50%" height="auto" align="center" hspace="80">
                    <p class="text-center text-uppercase">
                    <p class="text-center">Winners never Quit, Quitters never Win</p>
                </div>
        </div>
<div class="navbar navbar-inverse navbar-static-bottom">
    <div class="container">
        <div class="col-sm-6">
        <div class="navbar-text pull-left">
        <p>Copy Right Protected 2016</p>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="navbar-text pull-right">
            <a href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
            </div>
            </div>
    </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>