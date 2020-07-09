<?php 
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
require 'server.php';
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


    <!--External javascript-->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


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


    <!--Details table styling-->
    <style>
        table,
        tr,
        th,
        td {
            border: 3px solid #fed136;
            font-size: 20px;
            padding: 15px;
            height: auto;
            width: auto;
            border-collapse: collapse;
            color: aliceblue;
            font-family: 'Montserrat', sans-serif;
            margin-left: 6%;
            margin-right: 2%;

        }

    </style>
</head>

<body class="animate-in" style="background-color: darkgray;background-image: url(img/investdatabg.jpg);width:auto;height: auto;background-repeat: no-repeat;background-size: cover;">

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



    <h1 style="text-align: center;padding-top:10%;color:aliceblue;font-family: 'Poppins', sans-serif;padding-bottom:0.5%;padding-left:5%;padding-right:5%;">Current Investments </h1>

    <?php  if (isset($_SESSION['username'])) : ?>
    <h3 class="text-uppercase" style="font-weight: 500;font-family: Montserrat;color:bisque;float:left;padding-left:6%;
font-size:25px;"> Username:
        <?php echo $_SESSION['username']; ?><?php endif ?></h3>

    <a href="add.php" style="color:bisque;float:right;padding-right:16%;font-family: 'Poppins', sans-serif;font-size:25px;"> Add Investment</a>
    <br><br>
    <table>
        <tr>
            <th>Title</th>
            <th>Investment Type</th>
            <th>Amount</th>
            <th>Investment year</th>
            <th>Annual rate</th>
            <th>Duration</th>
            <th>Record Date</th>
            
        </tr>
        <?php 
    if (isset($_SESSION['username'])){
    $us= $_SESSION['username'];
        
        
        $sql = "SELECT * FROM assets where usernameid='$us'";
        $result = $db->query($sql);
        
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo "<td style='text-align: center'>" . $row["company"] . "</td>";
        echo "<td style='text-align: center'>" . $row["invtype"] . "</td>";
        echo "<td style='text-align: center'>&#8377; " . $row["invamount"] . "</td>";
        echo "<td style='text-align: center'>" . $row["invstartyear"] . "</td>";
        echo "<td style='text-align: center'>" . $row["invrate"] . "%</td>";
        echo "<td style='text-align: center'>" . $row["invduration"] . " years</td>";
        echo "<td style='text-align: center'>". $row["date"] ."</td>";
        echo "<td style='text-align: center; '><a href=\"delete.php?id=".$row['invest_id']."\" style='color:inherit;' >Delete</a></td>";   echo "<td style='text-align: center; '><a href=\"update.php?id=".$row['invest_id']."\" style='color:inherit;'>Update</a></td>";   
        echo '</tr>';
  }
    }
        else {
  echo "<td style='text-align: center'>No investment record inserted yet!</td>";
}
} ?>
    </table>

    <input class="logout" type="submit" value="Print report" style="margin-left:45%;margin-top:10%;margin-bottom:2%" onclick="window.print()" />


</body>

</html>
