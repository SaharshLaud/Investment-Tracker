<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Investment Tracker-FAQ" />
    <meta name="author" content="Saharsh" />

    <!--Title-->
    <link rel="icon" href="img/title.png" type="image/x-icon">
    <title>INVESTARO | HOME</title>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <!-- Font Awesome icons-->


    <!--External javascript-->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .close {
            color: #fff;
            transform: scale(1.2)
        }

        .modal-content {
            font-weight: bold;
            background: rgb(20, 147, 206);
            background: linear-gradient(143deg, rgba(20, 147, 206, 1) 24%, rgba(11, 46, 99, 1) 91%, rgba(6, 29, 63, 1) 100%);
            margin-bottom: 10%;
        }

        .logout {
            padding: 6px 30px;
            border-radius: 20px;
            background: none;
            border: 2px solid #FAB87F;
            color: #FAB87F;
            font-weight: bold;
            transition: all .5s;
            margin-top: 1em;
            margin-left: 35%;
            font-family: 'Poppins', sans-serif;
        }

        .logout:hover {
            background: #FED136;
            color: #fff;
        }

    </style>


</head>

<body class="animate-in">
    <nav class="navbar  navbar-expand-lg navbar-light fixed-top navbar-custom " id="#nav1">
        <div class="container" id="navbar">
            <!--LOGO-->
            <a class="navbar-brand  js-scroll-trigger" href="index.html" id="logo"><img src="img/logo.png" alt="INVESTARO" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!--Toggler Button-->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="bt-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--Menu-->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top" id="menu1">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="inves.php" id="menu2">INVESTMENT <br>&nbsp;&nbsp;TRACKER</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="homecalc.php" id="menu3">Home Affordability calculator</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <li class="nav-item" style="padding-top:2%;"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#" id="sign-in-icon" data-target="#logout" data-toggle="modal"> LOGOUT </a></li>


                </ul>
            </div>
        </div>
    </nav>


    <!--Logout-->
    <div name="sign-in" id="logout" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-body">
                    <button data-dismiss="modal" class="close">&times;</button>

                    <h2 style="font-family: Montserrat;color:#fed136;">Do you really want to logout?</h2>
                    <?php  if (isset($_SESSION['username'])) : ?> <a href="main.php?logout='1'">
                        &nbsp;<input class="btn logout" type="submit" value="Yes Logout !" name="logout_user" style="margin-left:33%" /><?php endif ?>
                    </a><input class="btn logout" type="submit" value="No take me back !" data-dismiss="modal" style="margin-left:30%" />
                </div>
            </div>
        </div>
    </div>


    <!--Page top-->
    <section class="page-section masthead" id="page-top" name="page-top">
        <div style="font-size: 50px;font-style: italic;margin-bottom:1%;margin-top: 2%;font-family: Droid Serif">
            Welcome Home !
            <?php  if (isset($_SESSION['username'])) : ?>
            <h3 class="text-uppercase" style="font-size: 50px;
    font-weight: 500;margin-top:2%;
    margin-bottom: 5%;
    font-family: Montserrat;"><?php echo $_SESSION['username']; ?>
                <?php endif ?></h3>


            <h3 style="font-size: 80%;margin-bottom:1%;margin-top: 5%;font-family: Droid Serif"> You are now logged into Investaro the <h2 style="font-family: 'Bowlby One SC', cursive;margin-bottom:2.8%;">"INVESTMENT TRACKER"!</h2>
            </h3>
        </div>
        <h2 style="color:#fed136;margin-bottom:5%;font-family: 'Sulphur Point', sans-serif;">Continue your journey by clicking links above or scroll down to know more.</h2>

       
    </section>

    <!--Investment Tracker-->
    <section style="background-image: url(img/homebg.png);background-repeat: no-repeat;background-size: cover;">
        <div style="font-family: 'Orbitron', sans-serif;padding-left:3%;padding-top:5%;font-size: 75px;color: #990099;font-weight: 200;"><a href="inves.php" style="text-decoration:underline;">INVESTMENT TRACKER</a></div>
        <div style="font-size: 50px;margin-bottom:1%;margin-top: 5%;font-family: Droid Serif;color:green;padding-left:3%;font-weight:500;"><i>"You must plant a tree today if you want to sit in the shade tommorow." </i></div>
        <div class="row" style="padding:3%">
            <div class="col-md-8" style="color:#000066;font-family: 'Varela Round', sans-serif;">

                <h1>If you are looking for a place to manage and track all your investments, then you have come to the perfect platform.Investaro's investment tracker does more than just track your investments. It tells you about the better investment options.It also shows a detailed report of your investments. To sum up it works best for your growth. </h1>
            </div>
            <div class="col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="img-shadow" src="img/about%202.jpg" height="auto" width="100%"></div>
        </div>

    </section>

    <!--Home Affordability Calculator-->

    <section style="background-image: url(img/gb.jpg);background-size: cover;">
        <div style="font-family: 'Anton', sans-serif;padding-left:3%;padding-top:5%;font-size: 60px;color: #990099;font-weight: 200;"><a href="homecalc.php" style="text-decoration:underline;">HOME AFFORDABILITY CALCULATOR</a></div>
        <div style="font-size: 65px;margin-bottom:1%;margin-top: 5%;font-family: Droid Serif;color:yellow;padding-left:3%;font-weight:500;"><i>"There is no place like home !" </i></div>
        <div class="row" style="padding:3%">
            <div class="col-md-8" style="color:#00ffff;font-family: 'Varela Round', sans-serif;">

                <h1>One of the four basic necessities of humans is a home but buying a house these days is more of a hectic job because of the large multitudes of other responsibilities. Well Investaro's here to aid you in this task. With the home affordability calculator you can easily identify your ideal house budget by just entering a few basic details so that you can plan and invest your money efficiently. </h1>
            </div>
            <div class="col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img class="img-shadow" src="img/hacex.JPG" height="60%" width="95%"></div>
        </div>

    </section>
</body>

</html>
