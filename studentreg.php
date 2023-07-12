
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Sri vasavi Bus Information System</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contact-page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="nav1.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a style="color:white;" href="index.php">Home</a> </li>
                                        <li> <a style="color:white;" href="driverregistration.php">Driver Entry</a> </li>
                                        <li class="active"> <a style="color:white;" href="studentreg.php"> Student Entry</a> </li>
                                        <li> <a  style="color:white;" href="busadd.php"> Bus</a> </li>
                                        <li> <a style="color:white;" href="route.html"> Route</a> </li>
                                        <li> <a style="color:white;" href="fee.html"> Fee Details</a> </li>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->

    <div class="contactbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contacttitlepage">
                        <h2>Student Registration</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class=" col-md-6 offset-md-3">
                <div class="address">

                    <form method="post" action="studreg.php">
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="USN" type="text" name="usn" required>
                            </div>
                             <div class="col-sm-12">
                                 <input class="textarea" placeholder="Name" type="text" name="name" required>
                            </div>
                            <div class="col-sm-12">
                                 <input class="textarea" placeholder="Branch" type="text" name="branch" required>
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Gender" type="text" name="gender" required>
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Stop Name" type="text" name="stopname" required>
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Route Number" type="number" name="routenumber" required>
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Phone" type="number" name="phone" required>
                            </div> 
                            <div class="col-sm-12">
                                <button class="send">Register</button><br></br>
                                <a style="color:white;" href="updatestudent.php"><button class="send">Update</a></button><br>
                                <a style="color:white;" href="displaystudents.php"><button class="send">See List</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  footer -->

    <div class="copyright">
        <div class="container">
           <p>© 2022 All Rights Reserved by sri vasavi engg college</p>
        </div>
    </div>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>