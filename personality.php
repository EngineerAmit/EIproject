<?php
include 'connection.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emotional Intelligence</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/personality.css">
    <script src="https://kit.fontawesome.com/75349259b8.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="nav-left">
            <img src="images/menu-bar.png" class="menu-bar" alt="menu-bar" onclick="navMenu()" />
            <img src="images/Team Emotional Intelligence.png" class="logo" alt="Emotional Intelligence logo" />
            <ul>
                <li><img src="images/bell.png" alt="notification" /></li>
                <li><img src="images/messenger.png" alt="inbox" /></li>
                <li><img src="images/video.gif" alt="video" /></li>
                <li><img src="images/surprised.gif" alt="video" /></li>
                <li><img src="images/happy logo.gif" alt="video" /></li>
                <li><img src="images/happy.gif" alt="video" /></li>
                <li><img src="images/kiss.gif" alt="video" /></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <img src="images/search.png" alt="search" />
                <input type="text" placeholder="Search" />
            </div>
            <h4 class="usernameei"><?php echo $_SESSION['user_name']; ?></h4>
            <div class="nav-user-icon online"">
        <img src=" images/profile-pic.png" alt="profile-pic" />
        </div>
    </nav>

    <header class="header-nav">
        <div class="container-nav">
            <nav class="nav-bar">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="aboutuspage.php">About </a></li>
                    <!-- <li><a>About</a></li> -->
                    <li><a href="contactus.php">Contact</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <!-- --------- left-sidebar---------- -->

        <div class="left-sidebar">
            <div class="imp-links">
                <a href="#"><img src="images/read blogs.png" alt="read blogs" />Read Blogs</a>
                <a href="#"><img src="images/quotes.png" alt="Quotes" />Quotes Earth</a>
                <a href="#"><img src="images/relaxing music.gif" alt="relaxing music" />Relaxing Music</a>
                <a href="#"><img src="images/listen podcast.png" alt="listen" />Listen
                    Podcast</a>
                <a href="#"><img src="images/buy e books.png" alt="e-Books" />Buy e-Books</a>
                <a href="#"><img src="images/buy courses.png" alt="buy courses" />Buy
                    Courses</a>
                <a href="#">See More</a>
            </div>
            <div class="shortcut-links">
                <p>Help Zone</p>
                <a href="chat.php"><img src="images/talk to expert.gif" alt="hey Amit" />ChatBot</a>
                <a href="#"><img src="images/Self levelup.png" alt="emotions coffie" />Selp LevelUP
                </a>
                <a href="#"><img src="images/consultant.png" alt="Consultant" />Consultant</a>
                <a href="#"><img src="images/advice.png" alt="Advice" />Advice</a>
            </div>
        </div>

        <!-- --------- main-content---------- -->

        <div class="main-content-personality">
            <div class="test-part">
                <section>
                    <h1 id="namepersonal">WHAT DOES YOUR NAME SAY ABOUT YOUR PERSONALITY ? </h1>
                    <div class="centerDiv">
                        <div class="details">
                            <label for="">ENTER YOUR NAME</label>
                            <br>
                            <input type="text" name="" id="nameid">
                        </div>
                        <div class="imgdiv">
                            <img src="images/personality.jpg" alt="personality" width="200" height="200" class="imgchange">
                        </div>
                        <button>Click Me </button>
                    </div>
                </section>
            </div>

        </div>

        <!-- --------- right-sidebar---------- -->

    </div>
    <div class="footer">
        <p>@Copyright 2022 - Emotional Intelligence</p>
    </div>

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('button').click(function() {
                const personalname = $('#nameid').val();
                alert(personalname);
                $('.imgchange').attr('src', `https://joeschmoe.io/api/v1/${personalname}`);
                const b = $('.imgchange');
                console.log(b);
            });
        });
    </script>
</body>

</html>