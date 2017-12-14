<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--logo-->
    <link rel="shortcut icon" href="logo-emas.ico" />
    <title>Kitab - Beyond Legacy</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/scrollbar.css" rel="stylesheet">

    <link rel="stylesheet" href="css/data-pemesanan.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/shopping-indicator.css">
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">KITAB</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index2.html">Buy Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index6.html">Partners</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="steps row">
        <div class="line"></div>
        <div class="step">
            <div class="circle active">1</div>
            <div class="label">Customer<span class="responsive_hide"> Information</span>
            </div>
        </div>
        <!-- end "step" -->
        <div class="step">
            <div class="circle">2</div>
            <div class="label"><span class="responsive_hide">Choose</span> Products</div>
        </div>
        <!-- end "step" -->
        <div class="step">
            <div class="circle">3</div>
            <div class="label">Customize<span class="responsive_hide"> Products</span>
            </div>
        </div>
        <!-- end "step" -->
        <div class="step">
            <div class="circle">4</div>
            <div class="label">Finish</div>
        </div>
        <!-- end "step" -->
    </div>
    <!-- end "steps" -->


    <form method="post" action="index2Aksi.php">

        <div class="contentform">

            <div class="leftcontact">
                <div class="form-group">
                    <p>First Name<span>*</span>
                    </p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input type="text" name="nama_depan" id="nama-depan" required data-validation-required-message="Please enter your name." autocomplete="off">
                </div>

                <div class="form-group">
                    <p>Last Name</p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input type="text" name="nama_belakang" id="nama-belakang" autocomplete="off">
                </div>

                <div class="form-group">
                    <p>E-mail<span>*</span>
                    </p>
                    <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="email" id="email" required data-validation-required-message="Please enter your email." autocomplete="off">
                </div>

                <div class="form-group">
                    <p>Alamat<span>*</span>
                    </p>
                    <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="alamat" id="alamat" required data-validation-required-message="Please enter your address." autocomplete="off">
                </div>

                <div class="form-group">
                    <p>Phone Number<span>*</span>
                    </p>
                    <span class="icon-case"><i class="fa fa-phone"></i></span>
                    <input type="text" name="telepon" id="telepon" required data-validation-required-message="Please enter your phone number." autocomplete="off">
                </div>
            </div>

            <div class="rightcontact">
                <div class="form-group">
                    <p>Province<span>*</span>
                    </p>
                    <span class="icon-case"><i class="fa fa-building-o"></i></span>
                    <input type="text" name="propinsi" id="propinsi" required data-validation-required-message="Please enter your province." autocomplete="off">
                </div>

                <div class="form-group">
                    <p>City<span>*</span>
                    </p>
                    <span class="icon-case"><i class="fa fa-building-o"></i></span>
                    <input type="text" name="kota" id="kota" required data-validation-required-message="Please enter your city." autocomplete="off">
                </div>

                <div class="form-group">
                    <p>Distinct<span>*</span>
                    </p>
                    <span class="icon-case"><i class="fa fa-building-o"></i></span>
                    <input type="text" name="kecamatan" id="kecamatan" required data-validation-required-message="Please enter your district." autocomplete="off">
                </div>

                <div class="form-group">
                    <p>Postal Code<span>*</span>
                    </p>
                    <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                    <input type="text" name="kodepos" id="kodepos" required data-validation-required-message="Please enter your postcode." autocomplete="off">
                </div>

                <div class="form-group">
                    <p>Additional Information</p>
                    <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                    <textarea name="info_tambahan" rows="14" autocomplete="off"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="bouton-contact">Save &amp; Continue to Buy</button>
    </form>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.js"></script>

    <!-- jQuery Version 2.1.1 -->
    <script src="js1/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js1/jquery.easing.1.3.js"></script>
    <script src="js1/classie.js"></script>
    <script src="js1/count-to.js"></script>
    <script src="js1/jquery.appear.js"></script>
    <script src="js1/cbpAnimatedHeader.js"></script>
    <script src="js1/owl.carousel.min.js"></script>
    <script src="js1/jquery.fitvids.js"></script>
    <script src="js1/styleswitcher.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js1/script.js"></script>

</body>

</html>
