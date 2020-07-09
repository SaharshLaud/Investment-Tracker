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
    <title>INVESTARO | TRACKER</title>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">




    <!--External javascript-->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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

    <!--Expense calculator form styling-->
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
            color: #cccccc;

        }


        .form-submit {
            padding: 3%;
            width: 50%;
            border-radius: 20px;
            background: none;
            border: 2px solid #FAB87F;
            color: #FAB87F;
            font-weight: bold;
            transition: all .5s;
            margin-left: 25%;
            font-family: 'Poppins', sans-serif;
        }

        .form-submit:hover {
            background: #FED136;
            color: #fff;
        }

        p {
            padding: inherit;
        }
        
                /* turn off number arrows*/
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

    </style>


    <!--Expense calculator scripting-->
    <script>
        //define the chart package
        google.charts.load('current', {
            'packages': ['corechart']
        });
        //set what is supposed to happen when the page loads. You typically want a state of the chart to show on load, but in this case, there is no data on load.
        //google.charts.setOnLoadCallback(drawChart);

        //submit requires text inputs to use parseInt to work as numbers
        function drawChart() {
            inc = parseInt(document.getElementById('incvar').value);
            need = parseInt(document.getElementById('needvar').value);
            want = parseInt(document.getElementById('wantvar').value);
            incm = 1 * (inc / 12);
            save = 1 * (incm - need - want);

            //replace data with variable names
            var data = google.visualization.arrayToDataTable([
                ['Expenses and Savings', 'Amount'],
                ['Essential expenses', need],
                ['Non essential expenses', want],
                ['Savings', save]
            ]);
            var options = {
                title: 'Expenses and Savings:'
            };
            //the id is the DOM location to draw the chart    
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }

        function details() {
            inc = parseInt(document.getElementById('incvar').value);
            need = parseInt(document.getElementById('needvar').value);
            want = parseInt(document.getElementById('wantvar').value);
            incm = 1 * (inc / 12);
            save = 1 * (incm - need - want);
            saveperc = (save / incm) * 100;
            needperc = (need / incm) * 100;
            wantperc = (want / incm) * 100;
            document.getElementById('c1').innerHTML = inc;
            document.getElementById('c2').innerHTML = incm;
            document.getElementById('c3').innerHTML = need;
            document.getElementById('c4').innerHTML = want;
            document.getElementById('c5').innerHTML = save;
            document.getElementById('c6').innerHTML = saveperc;

            if(inc<=0){alert("Invalid income entered!"); return false;}
            if(need<=0){alert("Invalid essential expenses entered!"); return false;}
            if(want<=0){alert("Invalid non essential expenses entered!"); return false;}
            
            if (saveperc < 20) {
                document.getElementById('note1').innerHTML = "<p>*Your monthly savings are less than 20%.Seems like someone is spending more than saving. Please start saving more for future.</p>";
            } else {
                document.getElementById('note1').innerHTML = "";
            }

            if (needperc > 50) {
                document.getElementById('note2').innerHTML = "<p>*You are presently spending  more than 50% on your essential needs. Please try budgeting and holding onto some expenses.</p>";
            } else {
                document.getElementById('note1').innerHTML = "";
            }

            if (wantperc > 30) {
                document.getElementById('note3').innerHTML = "<p>*You are currently spending more than 30% on non essential things. Please try to cut out some unwanted expenses and save more.</p>";
            } else {
                document.getElementById('note1').innerHTML = "";
            }
            
            
            if(inc<=0){alert("Invalid income entered!"); return false;}
            if(need<=0){alert("Invalid essential expenses entered!"); return false;}
            if(want<=0){alert("Invalid non essential expenses entered!"); return false;}


        }

    </script>




    <!--Printing expense report-->
    <script>
        function printExpense() {
            var prtContent = document.getElementById("expense");
            var WinPrint = window.open('', '', 'left=0,top=0,width=384,height=900,toolbar=0,scrollbars=0,status=0');
            WinPrint.document.write('<html><head>');
            WinPrint.document.write('<title>INVESTARO | TRACKER </title>');
            WinPrint.document.write('<link rel="stylesheet" href="css/styles.css">');
            WinPrint.document.write('</head><body onload="print();close();"><h1 style="text-align:center;"><u>EXPENSE REPORT</u></h1>');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.write('</body></html>');
            WinPrint.document.close();
            WinPrint.focus();
        }

    </script>
</head>

<body class="animate-in" style="background-image: url(img/invesbg.JPG);width:auto;height: auto;background-repeat: no-repeat;background-size: cover">
    <!--navbar-->
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

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="homecalc.php" id="menu3">Home Affordability <br>calculator</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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


    <!--Investment Tracker Top-->
    <section style="margin-top:0;padding-top: 10rem;">

        <h1 class="w3-center w3-animate-left" style="font-family: 'Raleway', sans-serif;text-align: center;font-size: 90px;color:bisque;padding-bottom: 3rem;">Investment Tracker</h1>

        <h2 style="font-family: 'Oswald', sans-serif;padding-left: 5%;font-size: 60px;color: white;padding-bottom: 1rem;width: auto">Keep a track of all your investments, <br>expenses and savings.</h2>

        <h3 style="color: white;font-family: 'Poppins', sans-serif;padding-left: 5%;font-size: 25px;padding-right: 40%">We believe that you should not save what is left after spending, rather spend what is left after saving. Money is like a lamp, the more fuel of investments you provide, the brighter is your light of future. With our investment tracker you can save all the details of your investments at a single place in order to track them simultaneously. You can also keep a track of all your expenses and savings to help you plan your investments. <br><br> <a href="display.php" style="color:#fed136;font-size:35px;">Click to move to tracker!</a></h3>
    </section>

    <!-- Live market feed-->

    <section style="margin-top:0;padding-top: 8rem;">
        <h2 style="font-family: 'Oswald', sans-serif;padding-left: 5%;font-size: 60px;color: white;padding-bottom: 1rem;width: auto">Live market feed :</h2>
        <h3 style="color: white;font-family: 'Poppins', sans-serif;padding-left: 5%;font-size: 25px;padding-right: 40%">Keep a track of the current market scenario.</h3>
        <div style=" padding: 1%; height: auto;width: auto">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div id="tradingview_f2b19"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget({
                        "width": 980,
                        "height": 600,
                        "symbol": "BSE:SENSEX",
                        "interval": "D",
                        "timezone": "Asia/Kolkata",
                        "theme": "dark",
                        "style": "3",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "save_image": false,
                        "watchlist": [
                            "BSE:SENSEX",
                            "NASDAQ:AAPL",
                            "NASDAQ:TSLA",
                            "NYSE:TWTR",
                            "NASDAQ:FB",
                            "BSE:SBIN",
                            "NYSE:TTM",
                            "BITSTAMP:BTCUSD",
                            "FX_IDC:INRUSD"
                        ],
                        "container_id": "tradingview_f2b19"
                    });

                </script>
            </div>
            <!-- TradingView Widget END -->

        </div>

    </section>

    <!-- Expense Calculator-->
     <section id="expense">
    <section style="margin-top:0;padding-top: 10rem;">

        <h2 style="font-family: 'Oswald', sans-serif;padding-left: 5%;font-size: 60px;color: white;padding-bottom: 1rem;width: auto">Expense Calculator:</h2>

        <h3 style="color: white;font-family: 'Poppins', sans-serif;padding-left: 5%;font-size: 25px;padding-right: 40%">Tracking your expenses is an important part of managing your investments because your investments are directly proportional to your expenses. The more you spend, the less you can invest. The expense calculator gives you a graphic view of your expenses and also helps you in saving more by pointing out where you can save and where you need to cut short.</h3>
       
            <div class="row" style="padding: 5%">
                <div class="col-lg-4">
                    <form id="form1" onsubmit="drawChart();details();return false;" style="background-color: white;padding: 0.5%;width: 100%;box-shadow: 5px 5px 13px -1px rgba(0, 0, 0, 0.55);border-radius: 10px;" onsubmit="return details();">

                        <h3 style="font-family: 'Roboto', sans-serif;padding-left: 5%">Provide details for a price &amp; monthly payment</h3><br>

                        <div style="padding-left: 2rem;font-size: 20px;font-family: 'Montserrat', sans-serif;line-height: 2rem">

                            <label for="incvar" style="width: inherit;">Annual Income:</label> <abbr title="Total yearly income." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr> <br>
                            <input type="number" id="incvar" class="inp-style" placeholder=" &#8377 0.00" required> <br><br>

                            <label for="needvar" style="width: inherit;"> Essential expenses(/month): </label> <abbr title="Monthly Expenses that can't be avoided such as groceries, rent etc.
(Basically your needs)." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr><br>
                            <input type="number" id="needvar" class="inp-style" placeholder=" &#8377 0.00" required> <br><br>

                            <label for="wantvar" style="width: inherit;"> Non-Essential expenses(/month): </label> <abbr title="Monthly expenses that are avoidable like movies, shopping etc.
(Basically your wants)." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr><br>
                            <input type="number" id="wantvar" class="inp-style" placeholder=" &#8377 0.00" required> <br><br><br>

                        </div>

                        <button class="form-submit" type="submit" value="Submit">Submit</button><br><br><br>
                    </form>
                </div>

               
                <div class="col-lg-8" id="piechart" style="width: 100%;height: auto;"></div>
            </div>
        </section>        
    <!--Expense Details-->    
    <section style="padding: 5%;">

            <h2 style="font-family: 'Oswald', sans-serif;padding-left: 5%;font-size: 40px;color: white;padding-bottom: 1rem;width: auto">Expense Details:</h2>
            <div class="row" style="font-family: 'Montserrat', sans-serif;margin-left: 3.5%;font-size: 35px;color: white;font-weight: 500">
                <div class="col-md-6">Annual Income: <br>&#8377;<span id="c1" style="color:#fed136">0.00</span></div>
                <div class="col-md-6">Gross Monthly Income: <br>&#8377;<span id="c2" style="color:#fed136">0.00</span></div>
            </div>
            <br>

            <div class="row" style="font-family: 'Montserrat', sans-serif;margin-left: 3.5%;font-size: 35px;color: white;font-weight: 500">
                <div class="col-md-6">Essential expenses (/month): <br>&#8377; <span id="c3" style="color:#fed136">0.00</span></div>
                <div class="col-md-6"> Non-Essential expenses (/month): <br>&#8377; <span id="c4" style="color:#fed136">00</span></div>
            </div>
            <br>
            <div class="row" style="font-family: 'Montserrat', sans-serif;margin-left: 3.5%;font-size: 35px;color: white;font-weight: 500">
                <div class="col-md-6">Gross monthly savings: <br>&#8377; <span id="c5" style="color:#fed136">0.00</span></div>

            </div>
            <br>
            <h2 style="font-family: 'Montserrat', sans-serif;margin-left: 4%;font-size: 35px;color: white;font-weight: 500">You are currently saving <span id="c6" style="color:#fed136">00</span> % of your monthly income.</h2><br>
            <span id="note1" style="font-family: 'Montserrat', sans-serif;font-size: 35px;color: white;font-weight: 500"></span>
            <span id="note2" style="font-family: 'Montserrat', sans-serif;font-size: 35px;color: white;font-weight: 500"></span>
            <span id="note3" style="font-family: 'Montserrat', sans-serif;font-size: 35px;color: white;font-weight: 500"></span>

            <input class="logout" type="submit" value="Print report" style="margin-left:40%;font-size:30px;" onclick="printExpense();" />

        </section>

    </section>



</body>

</html>
