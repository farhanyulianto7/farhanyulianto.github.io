<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="icon" href="img/icon.png">

    <!-- CSS Skin File -->
    <link href="css/skins/green.css" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="about light">
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="img/styleswitcher/red.png" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="img/styleswitcher/green.png" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="yellow" /></a>
                </li>
            </ul>

            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box">
                <i class="fa fa-home"></i>
                <a href="index.php">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box active">
                <i class="fa fa-user"></i>
                <a href="about.php">
                    <h2>About</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="portfolio.php">
                    <h2>Portfolio</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-envelope-open"></i>
                <a href="contact.php">
                    <h2>Contact</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-comments"></i>
                <a href="blog.php">
                    <h2>Blog</h2>
                </a>
            </li>
        </ul>
        <!-- Fixed Navigation Ends -->
        <!-- Mobile Menu Starts -->
        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li class="active"><a href="about.php"><i class="fa fa-user"></i><span>About</span></a></li>
                    <li><a href="portfolio.php"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                    <li><a href="contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                    <li><a href="blog.php"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>ABOUT <span>ME</span></h1>
        <span class="title-bg">Resume</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <!-- Personal Info Starts -->
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                        </div>
                        <div class="col-12 d-block d-sm-none">
                            <img src="img/img-mobile-light.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">first name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Farhan</span> </li>
                                <li> <span class="title">last name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Yulianto</span> </li>
                                <li> <span class="title">Age :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">18 Years</span> </li>
                                <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Indonesia</span> </li>
                                <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span> </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Tegal</span> </li>
                                <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+62 896 3581 5088</span> </li>
                                <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Hanfarhanyou19@mail.com</span> </li>
                                <li> <span class="title">languages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Indonesian, English, Arabic</span> </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-3">
                            <a href="#" class="btn btn-download">Download CV</a>
                        </div>
                    </div>
                </div>
                <!-- Personal Info Ends -->
                <!-- Boxes Starts -->
                <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">2</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">15</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats">
                                <h3 class="poppins-font position-relative">13</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span class="d-block">customers</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats">
                                <h3 class="poppins-font position-relative">10</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">awards <span class="d-block">won</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boxes Ends -->
            </div>
            <hr class="separator">
            <!-- Skills Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p94">
                        <span>94%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p45">
                        <span>45%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p70">
                        <span>70%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p66">
                        <span>66%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p60">
                        <span>60%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">MYSQL</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p85">
                        <span>85%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">bootstrap</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p50">
                        <span>50%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p15">
                        <span>15%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Java</h6>
                </div>
            </div>
            <!-- Skills Ends -->
            <hr class="separator mt-1">
            <!-- Experience & Education Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">January 2020 - March 2020</span>
                                <h5 class="poppins-font text-uppercase">INTERNSHIP at PT. Max Samsta Grup</span></h5>
                                <p class="open-sans-font"></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2018-Now</span>
                                <h5 class="poppins-font text-uppercase">DARUSSA'ADAH Vocational High School</span></h5>
                                <p class="open-sans-font">Currently running the school from 10th grade and currently 12th grade</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2015-2018</span>
                                <h5 class="poppins-font text-uppercase">20 junior high schools in Bekasi</span></h5>
                                <p class="open-sans-font">School only from class 7 to class 9</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2013-2015</span>
                                <h5 class="poppins-font text-uppercase">New Jatibening 06 Elementary School</span></h5>
                                <p class="open-sans-font">School only from class 5 to class 6</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2009-2013</span>
                                <h5 class="poppins-font text-uppercase">BULAKPACING 01 Elementary School</h5>
                                <p class="open-sans-font">School only from class 1 to class 4</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Experience & Education Ends -->
            <!-- Experience & Education Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600"></h3>
                </div>
                <!-- Experience & Education Ends -->
            </div>
    </section>
    <!-- Main Content Ends -->

    <!-- Template JS Files -->
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/styleswitcher.js"></script>
    <script src="js/preloader.min.js"></script>
    <script src="js/fm.revealator.jquery.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpGridGallery.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>

</body>


</html>