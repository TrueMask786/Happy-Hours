<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Prince Jain">

    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title>Listed</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Hover Effects -->
    <link href="css/set1.css" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   
   <div class="nav-menu sticky-top">
    <div class="bg transition">
        <div class="container-fluid fixed">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href={{url}}>
                    </nav>
                </div>
            </div>

        </div>
        </div>
   </div>
    <!--============================= MAIN TITLE =============================-->
    <section class="hero-wrap home-bg d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="hero-title">
                    <h1>What’s your plan today?</h1>
                    <h3>Find out perfect place to hangout in your city from over 1258 listings </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form  method='GET' action="{{url('/search')}}">
                        {{csrf_field()}}
                        <div class="search-box">
                            <div class="row">
                                <div class="col-md-6 search-box_line">
                                    <div class="search-box1">
                                        <div class="search-box-title">
                                            <label>Which?</label><br>
                                            <input type="text" name="restaurant" class="search-form" placeholder="which restaurant you want to visit?">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="search-box2">
                                        <div class="search-box-title">
                                            <label>Where?</label><br>
                                            <input type="text" name="place" class="search-form" placeholder="Eg: Mumbai, Chennai">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-search">
                           <!-- <a href="#" class="btn btn-simple">Search →</a> -->
                         <button type="submit" class="btn btn-primary">
                                    Search →
                                </button>
                        </div>
                    </form>
                    <p class="search-bottom-title">By using this website, you are agreeing to our <a href="#"> terms and conditions</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--//END MAIN TITLE -->

  



    <!--============================= FOOTER =============================-->
    <footer class="main-block gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 responsive-wrap">
                    <div class="location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>503 Sylvan Ave, Mountain View<br> CA 94041, United States</p>
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="footer-logo_wrap">
                        <img src="images/footer-logo.png" alt="#" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2017 Listed Inc. All rights reserved</p>
                        <a href="#">Privacy</a>
                        <a href="#">Terms</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->





    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>