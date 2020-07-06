<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Metadata-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Investment Tracker" />
    <meta name="author" content="Saharsh" />

    <!--Title-->
    <link rel="icon" href="img/title.png" type="image/x-icon">
    <title>INVESTARO</title>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <!-- Font Awesome icons-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--External javascript-->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!--Sign In styling-->
    <style>
        div {
            width: 100%;
            height: auto;
        }

        .close {
            color: #fff;
            transform: scale(1.2)
        }

        .modal-content {
            font-weight: bold;
            background: rgb(20, 147, 206);
            background: linear-gradient(143deg, rgba(20, 147, 206, 1) 24%, rgba(11, 46, 99, 1) 91%, rgba(6, 29, 63, 1) 100%);
        }

        .form-control {
            margin: 1em 0;
        }

        .form-control:hover,
        .form-control:focus {
            box-shadow: none;
            border-color: #fff;

        }

        .username,
        .password {
            border: none;
            border-radius: 0;
            box-shadow: none;
            border-bottom: 2px solid #eee;
            padding-left: 0;
            padding-bottom: 5px;
            margin-bottom: 30px;
            font-weight: normal;
            background: transparent;
            color: aliceblue;
        }

        .form-control::-webkit-input-placeholder {
            color: #fec301;
        }

        .form-control:focus::-webkit-input-placeholder {
            font-weight: bold;
            color: transparent;
        }

        .login {
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

        .login:hover {
            background: #FED136;
            color: #fff;
        }

        .sign-up:hover {
            background: #FED136;
            color: #fff;
        }

        input[type=text]:focus {
            background: transparent;
            color: aliceblue;
        }

        input[type=password]:focus {
            background: transparent;
            color: aliceblue;
        }


        input[type=email]:focus {
            background: transparent;
            color: aliceblue;
        }

        input[type=tel]:focus {
            background: transparent;
            color: aliceblue;
        }

        #sign-head {
            color: #fed100;
            font-family: 'Poppins', sans-serif;
            padding-bottom: 20px;
        }

        #passShow {
            background: transparent;
            border-color: aliceblue;
            height: 15px;
            width: 15px;
        }

        #passShowcontent {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            color: aliceblue;
        }

        .sign-up {
            padding: 6px 30px;
            border-radius: 20px;
            background: none;
            border: 2px solid #FAB87F;
            color: #FAB87F;
            font-weight: bold;
            transition: all .5s;
            margin-top: 1em;
            margin-left: 27%;
            font-family: 'Poppins', sans-serif;
        }

        #sign-subhead {
            padding-bottom: 15px;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            color: aliceblue;
        }
         .nav-link.active {
            background-color: #FFCA47 !important;
            border-radius: 5px;
        }

       

    </style>

</head>


<body class="animate-in" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--Navigation Bar-->
    <nav class="navbar  navbar-expand-lg navbar-light fixed-top navbar-custom " id="#nav1">
        <div class="container" id="navbar">
            <!--LOGO-->
            <a class="navbar-brand  js-scroll-trigger" href="#page-top" id="logo"><img src="img/logo.png" alt="INVESTARO" /></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <!--Toggler Button-->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="bt-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--Menu-->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase mr-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about" id="menu1">About</a></li>&nbsp;&nbsp;&nbsp;

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#resources" id="menu2">Resources</a></li>&nbsp;&nbsp;&nbsp;

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team" id="menu3">Team</a></li>&nbsp;&nbsp;&nbsp;

                    <li class="nav-item"><a class="nav-link js-scroll-trigger " href="#contact" id="menu4">Contact</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger login-trigger" href="#" id="sign-in-icon" data-target="#login" data-toggle="modal"><i class="fa">&#xf023; </i> Sign-In </a></li>&nbsp;&nbsp;

                    <li class="nav-item"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger login-trigger" href="#" id="sign-out-icon" data-target="#sign-up" data-toggle="modal"><i class="fa">&#xf023; </i> Sign-Up</a></li>
                </ul>
            </div>
        </div>
    </nav>


 

    <!--Sign In-->
    <div name="sign-in" id="login" class="modal fade" role="dialog" data-backdrop="static">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-body">
                    <button data-dismiss="modal" class="close">&times;</button>

                    <h2 id="sign-head">SIGN-IN</h2>

                    <form method="post" action="index.php" >

                        <?php include('errors.php'); ?>
                        

                        <input type="text" name="username" class="username form-control" placeholder="Username" required /><br>

                        <input type="password" name="password" class="password form-control" placeholder="Password" id="mypass" required />

                        <input type="checkbox" onclick="myFunction()" id="passShow"><span id="passShowcontent"> Show Password</span><br><br>
                        <input class="btn login" type="submit" value="Let's Go!" name="login_user" /><br><br><br>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!--Sign Up-->
    <div name="sign-up" id="sign-up" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-body">
                    <button data-dismiss="modal" class="close">&times;</button>

                    <h2 id="sign-head">SIGN-UP</h2>
                    <h5 id="sign-subhead" style="">Please fill in this form to create an account.</h5>


                    <form action="index.php" method="post">

                        <?php include('errors.php'); ?>
                        <input type="text" name="username" class="username form-control" placeholder="Username*" value="<?php echo $username; ?>" required />

                        <input type="email" name="email" class="username form-control" placeholder="Email Address*" value="<?php echo $email; ?>" required />

                        <input type="password" name="password_1" class="password form-control" placeholder="Password*" id="mypsw" required />

                        <input type="password" name="password_2" class="password form-control" placeholder="Retype Password*" id="myrepass" required />

                        <input type="checkbox" onclick="myFunction1();" id="passShow"><span id="passShowcontent"> Show Password</span><br><br>

                        <input class="btn sign-up" type="submit" value="Let's Get Started!" name="reg_user" /><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--Page Top-->
    <section class="page-section masthead" id="page-top" name="page-top">

        <div class="container">
            <div class="masthead-subheading">Welcome To Investaro !</div>
            <div class="masthead-heading text-uppercase">Investing your money for a better tomorrow.</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about" id="tell-me">Tell Me More</a>
        </div>
    </section>

    <!--About-->
    <section class="page-section" id="about" name="about">
        <div class="container">
            <div class="text-center"><br><br>
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Small steps Big results.</h3><br>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h1 class="about1">Use portfolio tracking for investments</h1>
                    <h4 class="about1_desc">
                        Get the right tools for your investment style.
                        <br>Whether you’re hands off, active or
                        somewhere<br> in between, we can help you do
                        more with <br>your portfolio tracking.</h4>
                </div>
                <div class="col-md-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class="img-shadow" src="img/about1.jpg" height="auto" width="100%"> </div>
            </div>
            <br><br>

            <div class="row">
                <div class="col-md-6">
                    <h1 class="about1">Your portfolio and
                        finances together
                    </h1>
                    <h4 class="about1_desc">
                        Investments are a huge part of your financial life, and
                        <br>Investaro's investment tracker can help you stay on top <br>of
                        yours. Compare your portfolio to market
                        benchmarks,<br> and instantly see your asset allocation
                        across all your<br> investment accounts like 401(k),
                        mutual funds, brokerage<br> accounts, and even IRAs.</h4>
                </div>
                <div class="col-md-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class="img-shadow" src="img/about%202.jpg" height="auto" width="100%"></div>
            </div>
        </div>
    </section>

    <!--Resources-->
    <section class="page-section" id="resources" name="resources">
        <div class="container">
            <div class="text-center"><br><br>
                <h2 class="section-heading text-uppercase">Resources</h2>
                <h3 class="section-subheading text-muted">Utilities for your help.</h3><br>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="ml-auto">
                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fab fa-blogger" id="blogger"></i><br><br>
                        <a href="blog.html" id="blog-heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BLOGS</a>
                        <p class="rsc">A list of useful blogsites to help understand investments.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mx-auto">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-atlas" id="suggest"></i><br><br>
                        <a href="suggestion.html" id="suggest-heading">&nbsp;&nbsp;SUGGESTIONS</a>
                        <p class="rsc">A panel of suggested investment firms and companies to ensure better investments.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mr-auto">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-question-circle" id="freq"></i><br><br>
                        <a href="faq.html" id="freq-heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAQ</a>
                        <p class="rsc">Some frequently asked questions about this project. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Team-->
    <section class="page-section" id="team" name="team">
        <div class="container">
            <div class="text-center"><br><br>
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted" id="team-tag">In union there is strength.</h3><br>
            </div>

            <div class="row justify-content-center">

                <!--Member1-->
                <div class="col-md-3">
                    <div class="mx-auto">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="img/Saharsh.jpg" class="rounded-circle team-img">
                        <p class="member-name">Saharsh Laud</p>
                        <p class="member-pos">Lead Developer</p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://github.com/SaharshLaud/KingLucifer" class="ref-icon"><i class="fab fa-github-square"></i></a>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://www.facebook.com/profile.php?id=100009497464333" class="ref-icon"><i class="fab fa-facebook-square"></i></a>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://in.linkedin.com/in/saharsh-laud-653141196" class="ref-icon"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
               
    </section>
    
    
    
    
    
   <script>
    function submitalert(){
    alert("Your response has been submitted.Thank You!");}</script>  
    

    <!--Contact-->
    <section class="page-section contact-background" id="contact" name="contact">

        <div class="container">
            <div class="text-center"><br><br>
                <h2 class="contact-head">Contact Us</h2>
                <h3 class="section-subheading text-muted" id="contact-sub">You've got questions, we've got answers.</h3><br>
            </div>

            <!--Contact Form-->
            <form id="contactForm" name="sentMessage" novalidate="novalidate" action="index.php">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." name="contactname" />&nbsp;&nbsp;
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." name="contactmail" />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." name="contactnumber"/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message." cols="50" rows="7" name="contactmessage"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="contactsubmit" onClick="submitalert();">Send Message</button>
                    <p></p>
                    <h6 class="alice-clr">Made with love By me.</h6>
                    <footer class="alice-clr">&copy; Saharsh Laud</footer>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
