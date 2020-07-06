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
    <title>INVESTARO | H.A.C.</title>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Font Awesome icons-->


    <!--External javascript-->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--Form styling-->
    <style>
        .inp-style {
            width: 75%;
            line-height: 1.8rem;
            border-radius: 4px;
            border-style: solid;
            border-width: 1px;
            border-color: #cccccc padding-left: 2%;
            font-size: 15px;
            font-family: 'Montserrat', sans-serif;
            color: darkgray;

        }

        .form-submit {
            padding: 0.5%;
            width: 70%;
            border-radius: 20px;
            background: none;
            border: 2px solid #FAB87F;
            color: #FAB87F;
            font-weight: bold;
            transition: all .5s;
            font-family: 'Poppins', sans-serif;
        }

        .form-submit:hover {
            background: #FED136;
            color: #fff;
        }

        /* turn off number arrows*/
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

    </style>

    <!--Logout modal styling-->
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


    <!--Form result script-->
    <script>
        function afford() {
            It = document.getElementById("inc").value;
            Im = It / 12;
            D = document.getElementById("debt").value;
            Ia = Im - D;
            if (Ia < 0) {
                alert("Please enter valid details.Estimate can't be negative");
                return false;
            }
            M = Ia * 0.28;
            Dp = document.getElementById("dwn").value;
            T = document.getElementById("time").value;
            if(It<=0){alert("Invalid income entered!"); return false;}
            if(D<=0){alert("Invalid debt value entered!"); return false;}
            if(Dp<=0){alert("Invalid downpayment entered!"); return false;}
            if(T<=0){alert("Invalid time entered!"); return false;}
            result = (M * 12 * T) + (1 * Dp);
            check1 = (1 * D) + (1 * M);
            check2 = 0.36 * Im;
            document.getElementById("ans").innerHTML = result;
            document.getElementById("c1").innerHTML = It;
            document.getElementById("c2").innerHTML = D;
            document.getElementById("c3").innerHTML = Dp;
            document.getElementById("c4").innerHTML = T;

            if (result < 600000) {
                document.getElementById("note1").innerHTML = "<p> *Your estimated budget seems to be less than the average house pricing in India.<br> We suggest you to start saving more so that you can buy your ideal house.</p> ";
            }
            if (check1 > check2) {
                document.getElementById("note2").innerHTML = "<p>*Your total monthly debts violate the 28/36 rule.<br> Please try to reduce your expenses.</p>"
            }

        };

    </script>

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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="main.php" id="menu1">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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

    <!--Home affordability form-->
    <section style="background-image: url(img/affordbg.jpg);margin-top:0;padding-top: 10rem; background-size: 100% 95%;background-repeat: no-repeat">

        <h1 class="w3-center w3-animate-left" style="font-family: 'Raleway', sans-serif;text-align: center;font-size: 90px;color:bisque;padding-bottom: 5rem;">Home Affordability Calculator</h1>

        <h2 style="font-family: 'Oswald', sans-serif;padding-left: 5%;font-size: 60px;color: white;padding-bottom: 1rem">Know how much you can afford</h2>
        <h3 style="color: white;font-family: 'Poppins', sans-serif;padding-left: 5%;font-size: 20px">We’ll help you estimate how much you can afford to spend <br> on a home &amp; monthly payment</h3>
        <br>

        <div style="background-color: white;padding: 3%;width: 38%;box-shadow: 5px 5px 13px -1px rgba(0, 0, 0, 0.55);border-radius: 10px;margin-left: 5rem" formtarget="#affordresult" onsubmit="return afford();">

            <h4 style="font-family: 'Roboto', sans-serif;padding-left: 5%">Provide details for a price &amp; monthly payment</h4><br>
            <div style="padding-left: 2rem;font-size: 20px;font-family: 'Montserrat', sans-serif;line-height: 2rem">

                Annual Income:<br>
                <input type="number" id="inc" class="inp-style" placeholder=" &#8377 0.00" required> <br><br>
                Monthly Debts: <br>
                <input type="number" id="debt" class="inp-style" placeholder=" &#8377 0.00" required> <br><br>
                Down-Payment: <br>
                <input type="number" id="dwn" class="inp-style" placeholder=" &#8377 0.00" required> <br><br>
                Mortgage Duration: <br>
                <input type="number" id="time" class="inp-style" placeholder=" 00" required> <br><br>
            </div> <br>

            <a href="#result" style="padding-left: 6rem"><input class="form-submit" type="submit" value="Submit" onClick="afford();"></a><br><br>


        </div>
 

    </section>

    <!-- RESULT-->
    <section style="background: linear-gradient(to bottom, rgba(250, 253, 255, 1) 20%, rgba(216, 240, 255, 1) 50%, rgba(184, 227, 255, 1) 79%, rgba(156, 214, 255, 1) 100%);margin-top: 3%;padding: 5%" id="result">

        <h1 style="font-family: 'Staatliches', cursive;padding-left: 2%;font-size: 70px;padding-bottom: 2rem;margin-top: 5rem;">Your Dream Home Affordation</h1>


        <div class="row" style="font-family: 'Montserrat', sans-serif;margin-left: 3.5%;font-size: 35px;font-weight: 500">
            <div class="col-md-6">Annual Income: &#8377; <span id="c1">0.00</span></div>
            <div class="col-md-6">Monthly Debts: &#8377; <span id="c2">0.00</span></div>
        </div>
        <br>

        <div class="row" style="font-family: 'Montserrat', sans-serif;margin-left: 3.5%;font-size: 35px;font-weight: 500">
            <div class="col-md-6">Down-Payment: &#8377; <span id="c3">0.00</span></div>
            <div class="col-md-6">Mortgage Duration: <span id="c4">00</span> years</div>
        </div>
        <br><br>
        <h3 style="font-family: 'Poppins', sans-serif;padding-left: 2%;font-size: 30px"> Based on your input details:</h3>
        <h1 style="text-align: center;border-style: solid;width:30%;margin-left: 30%;border-radius: 6px;padding: 2%;margin-top: 1%;margin-bottom: 1%">&#8377; <span id="ans">0.00</span></h1>
        <h3 style="font-family: 'Poppins', sans-serif;padding-left: 2%;font-size: 30px"> Seems to be the budget of an affordable house.</h3>
        <br><br>
        <span style="font-family: 'Poppins', sans-serif;padding-left: 2%;font-size: 30px" id="note1"></span><br>
        <span style="font-family: 'Poppins', sans-serif;padding-left: 2%;font-size: 30px" id="note2"></span>




  
</body>

</html>
