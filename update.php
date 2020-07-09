<?php 
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
    <title>INVESTARO | UPDATE</title>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!--Form styling-->
    <style>
        .inp-style {
            width: 75%;
            line-height: 1.8rem;
            border-radius: 4px;
            border-style: solid;
            border-width: 1px;
            border-color: #cccccc;
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

        div.sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: #021132;
            width: 100%;
            margin-left: -10px;
            padding: 2%;
            margin-top: -10px;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>

   <script type="text/javascript">
        function validupdate(){
            var y=document.getElementById("year").value;
            var r=document.getElementById("rate").value;
            var d=document.getElementById("duration").value;
            var a=document.getElementById("amount").value;
            
            if(isNaN(a)==true || a<0 || a==0)
            {alert("Invalid amount entered!");
             return false;}
            }
    
            
            if(y<0|| y==0 || y<1900 || y>2100 || isNaN(y)==true)
            { alert("Invalid year entered!"); 
              return false;}
            if(r<0 || r>999 || r==0 || isNaN(r)==true)
            {alert("Invalid rate entered!");
             return false;}
            if(d<0 || d>100 || d==0 || isNaN(d)==true)
            {alert("Invalid duration entered!");
             return false;}
            
            
    
    </script>

</head>

<body class="animate-in" style="background-color: darkgray;background-image: url(img/investdatabg.jpg);width:auto;height: auto;background-repeat: no-repeat;background-size: cover;">

    <div class="sticky"><a href="main.php"><img src="img/logo.png" alt="INVESTARO" /></a></div>


    <h1 style="padding-top:4%;color:aliceblue;font-family: 'Poppins', sans-serif;padding-bottom:1%;padding-left:5%;padding-right:5%;"><a href="display.php" style="color:aliceblue;font-size:30px;color: #fed136;">&larr;Results</a><br><br>Update Investment</h1>


    <?php $id=$_GET['id'];
    $asset_data=asset_data($db,$id);

    if (isset($_SESSION['username'])){
    
    if(isset($_POST['updt-val'])){
        $us= $_SESSION['username'];
        $inscompany=$_POST['updtcompany'];
        $instype=$_POST['updttype'];
        $insamount=$_POST['updtamount'];
        $insstartyear=$_POST['updtstartyear'];
        $insrate=$_POST['updtrate'];
        $insduration=$_POST['updtduration'];
        

        
        $query = "insert into assets(usernameid,company,invtype,invamount,invstartyear,invrate,invduration,date) values ('$us', '$inscompany', '$instype', '$insamount', '$insstartyear', '$insrate', '$insduration',now())";
        $result=mysqli_query($db, $query);
        
        if($result==true){
        header('Location:display.php');}
        
        else{echo '<script>alert("Could not insert updated record!")</script>';}

    }
    }
        
    ?>


    <form name="update-val" method='POST' action='' style="background-color: white;padding: 3%;width: 38%;box-shadow: 5px 5px 13px -1px rgba(0, 0, 0, 0.55);border-radius: 10px;margin-left: 5rem" onsubmit="return validupdate();">

        <h2 style="font-family: 'Roboto', sans-serif;padding-left: 5%">Provide new details for your previous investment</h2><br>
        <div style="padding-left: 2rem;font-size: 20px;font-family: 'Montserrat', sans-serif;line-height: 2rem">

            Company/Title of investment: <abbr title="Investment title or company title." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr><br>
            <input type="text" name="updtcompany" class="inp-style" value="<?php echo $asset_data['company'];?>"> <br><br>
            Investment type: <abbr title="Type of investment eg: Stocks, Bonds, Real Estate etc." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr> <br>
            <input type="text" name="updttype" class="inp-style" value="<?php echo $asset_data['invtype'];?>"> <br><br>
            Amount: (&#8377;) <abbr title="Total investment amount." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr><br>
            <input type="text" id="amount" name="updtamount" class="inp-style" value=" <?php echo $asset_data['invamount'];?>" placeholder=" &#8377; "> <br><br>
            Investment year: <abbr title="Year in which investment was done." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr><br>
            <input id="year" type="text" name="updtstartyear" class="inp-style" value=" <?php echo $asset_data['invstartyear'];?>"> <br><br>
            Annual Rate of return interest on investment: (%) <abbr title="Return rate on amount invested per annum." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr><br>
            <input id="rate" type="text" name="updtrate" class="inp-style" value=" <?php echo $asset_data['invrate'];?> "> <br><br>
            Investment Duration: (years) <abbr title="Time period of investment." style="text-decoration:none;font-size:18px;color:gray;">&#x24D8;</abbr><br>
            <input id="duration" type="text" name="updtduration" class="inp-style" value=" <?php echo $asset_data['invduration'];?> "> <br><br>
        </div> <br>

        <input class="form-submit" style="padding: 1rem;margin-left:10%;font-size:25px;" type="submit" value="Update" name='updt-val' onClick="validupdate();"><br><br>
    </form>


</body>

</html>
