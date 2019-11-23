
<!DOCTYPE html>

<html>
<head>
    <title>Home</title>
    <link rel = "stylesheet" href = "carousel.css">
    <link rel = "stylesheet" href = "cards.css">
    <link rel = "stylesheet" href = "cardsGrid.css">
    <link rel = "stylesheet" href = "css/all.css">
    <link rel = "stylesheet" href = "jumbotron.css">
    <link rel="stylesheet" href="button.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300i|Open+Sans|Oswald:400,500|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css"> <!-- For the navigation bar-->
    <link rel="stylesheet" href="footer/footer.css">
    <style>
    *{ /* For everything by default */
        
        font-family: 'Ubuntu', sans-serif;
    }
    h1{
        color:black;
        cursor:pointer;
    }
    #heading{
        color:#BA1200;
        font-size: 40px;
        width:100%;
        align-content: center;
        text-align: center;
        cursor:pointer; /* To make it hand-like pointer */
    }
    #navBarList {
        height: 2em;
        margin-left: 2em;
        padding-top: 0.35em;
    }
    #head_space{
        height:100px;
    }
    footer {
        font-family: 'Open Sans', sans-serif;
        position: absolute;
        left: 0em;
        bottom: -110em;
        width: 100%;
        background-color: #2C365E;
        color: white;
        border: 0.1em solid #2C365E;
        border-radius: 1em 1em 0em 0em;
    }
    #box{
        height:30px;
    }
    #home_content{
        color: #2C365E;
        margin-top: 20px;
        width:70%;
        margin-left: 15%;
        font-size: 150%;
    }
    span.bigHead {
        color:#26A5A5;
        font-weight:300;
        font-family: 'Lato', sans-serif;
        font-style: italic;
    }
    </style>
</head>
<body>
    <div id = "navBarDiv"> 
        <img alt = "GoalKeeperLogo" src="gk_logo.png" id="logo"></img>
        <ul id = "navBarList">
            <!--<li class = "navBarItem altSize"><img alt = "GoalKeeperLogo"></img></li>-->
            <span class = "vl"><li class = "navBarItem element"><a href = "#" id="active">Home</a></li></span>
            <span class = "vl"><li class = "navBarItem element" ><a href = "about_us.html">About Us</a></li></span>
            <li class = "navBarItem element"><a href = "faq.html">FAQ</a></li>
            <span class = "rightSide">
                <li class = "navBarItem sign"><a href = "signup.html">Sign Up</a></li>
            </span>
        </ul>
    </div> <!-- Component Code-->
    <div id="head_space"></div>
    <?php
// show potential errors / feedback (from login object)
    if (isset($login)) {
        if ($login->errors) {
            foreach ($login->errors as $error) {
                echo $error;
            }
        }
        if ($login->messages) {
            foreach ($login->messages as $message) {
                echo $message;
            }
        }
    }
    ?>

    <!-- login form box -->
    <form method="post" action="index.php" name="loginform">

        <label for="login_input_username">Username</label>
        <input id="login_input_username" class="login_input" type="text" name="user_name" required />

        <label for="login_input_password">Password</label>
        <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

        <input type="submit"  name="login" value="Log in" />

    </form>

    <a href="register.php">Register new account</a>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="home_1.jpg" class = "carouseImg">
            <div class="text">
                <span class = "carouselTitleText">Want to keep Track of your Goals?</span>
                <br/>
                <span class = "carouselContentText">You are in the right place!</span>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="home_2.jpg" class = "carouseImg">
            <div class="text">
                <span class = "carouselTitleText">Keep Track of habits as well</span>
                <br/>
                <span class = "carouselContentText">Now become regular with whatever habits you want!</span>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="home_3.jpg" class = "carouseImg">
            <div class="text">
                <span class = "carouselTitleText">Manage your schedule to perfection</span>
                <br/>
                <span class = "carouselContentText">Add goals and habits and never forget again!</span>
            </div>
        </div>


        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a> <!--For the previous and next arrow buttons at the side-->
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- The dots/circles -->
        <div class = "dots" style="text-align:center">
            <span class="dot p1" onclick="currentSlide(1)"></span>
            <span class="dot p2" onclick="currentSlide(2)"></span>
            <span class="dot p3" onclick="currentSlide(3)"></span>
        </div>
    </div>
    
    <br>
    <br>
    <div class="blockquote">
        <center><span class="bigHead" id = "fadeFirst">GOOD THINGS COME TO THOSE WHO WAIT..</span><br><span  class="bigHead" id = "fadeSecond">SIGN UP TO BEGIN YOUR JOURNEY!</span></center>
    </div>
    <br>

    <script src = "carousel.js"></script>

    <div class = "jumbotron img-left">
        <img src = "goal2.jpg" alt = "picture of a bulb">
        <center id="home_content"> First sign up and then begin adding your goals one by one.
            You can add goals, add habits and keep track of them by visiting the dashboard. Hence become more proficient at achieving your goals and habits.</center>
        </div>

        <div class = "jumbotron img-right">
            <img src = "medal_image.jpg" alt = "picture of a bulb">
            <center id="home_content"> Also get medals when you acheive your goals. This is an added motivation for you to track your goals and accomplish them. To know more visit our faq and about us page.</center>
        </div>
        <footer>
            <div class="footer__block">
                <h2>Social</h2>
                <ul>
                    <li>
                        <blockquote class="twitter-tweet"><p lang="en" dir="ltr">The future of managing your Goals and Habits is coming soon.... <a href="https://twitter.com/hashtag/GoalKeeper?src=hash&amp;ref_src=twsrc%5Etfw">#GoalKeeper</a></p>&mdash; Rishit Chs (@Rishit_C) <a href="https://twitter.com/Rishit_C/status/1193597000593207296?ref_src=twsrc%5Etfw">November 10, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </li>
                </ul>
            </div>
            <div class = "vl"></div>
            <div class="footer__block">
                <h2>Team</h2>
                <ul id="gap">
                    <li>
                        <a href="https://github.com/rishitc" target = "_blank">Rishit Chaudhary</a>
                    </li>
                    <li>
                        <a href="https://github.com/akhil-eppa" target = "_blank">Akhil Eppa</a>
                    </li>
                    <li>
                        <a href="https://github.com/varuntirthani" target = "_blank">Varun Tirthani</a>
                    </li>
                </ul>
            </div>
            <div class = "vl"></div>
            <div class="footer__block">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <span href="#">We would love to hear from you,<br/>Please enter your details below<br/>and we will get in touch with you at<br/>the earliest.</span>
                    </li>
                    <li>
                        <span class = "field">Email ID</span>
                        <div class="comboBtn">
                            <input type="email" class="rounded large" id="controlBox" name="emailId"></input>
                            <br/>
                            <p class="sideBorder clearText" id = "clearOptn">Clear</p>
                        </div>
                        <br/>
                    </li>
                    
                    <li>
                      <br/>
                      <form action = "" method="get">
                        <span class = "field">Message</span>
                        <div class="comboBtn">
                            <textarea rows = "5" cols = "25"class="rounded large" id="controlBoxTa" name="textArea"></textarea>
                            <br/>
                            <p class="sideBorder clearText" id = "clearOptnTextArea">Clear</p>
                        </div>
                    </form>
                </li>
                <li><input type="submit" id = "btn" value="Success button"  class = "success" value="Submit">
                    <div id="helper"></div></li>
                </ul>
            </div>
            <div class = "vl"></div>
            <div class="footer__block">
                <h2>Location</h2>
                <ul>
                    <li>
                        <img src="footer/pes_map.png" height="250" width="250">
                    </li>
                    <li>PES University,<br/>
                        100 Feet Ring Road,<br/>
                        BSK III Stage,<br/>
                        Bangalore-560085</li>
                    </ul>
                </div>
            </footer>
            <script src="footer/footer.js" type="text/javascript"></script>
        </body>
        </html>

