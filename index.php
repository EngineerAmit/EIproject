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
                <a href="quotes.php"><img src="images/quotes.png" alt="Quotes" />Quotes Earth</a>
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

        <div class="main-content">
            <div class="write-post-container">
                <div class="user-profile">
                    <img src="images/profile-pic.png" alt="profile-pic" />
                    <div>
                        <p><?php echo $_SESSION['user_name']; ?></p>
                        <small>Public <i class="fa-solid fa-caret-down"></i></small>
                    </div>
                </div>
                <div class="post-input-container">
                    <textarea rows="3" placeholder="Express Your Mental Issue <?php echo $_SESSION['user_name']; ?>"></textarea>
                    <div class="add-post-links">
                        <a href="#"><img src="images/attached.png" alt="video" />Documents</a>
                        <a href="#"><img src="images/photo.png" alt="photo" />Photo/Video</a>
                        <a href="#"><img src="images/feeling.png" alt="video" />Feeling/Activity</a>
                    </div>
                </div>
            </div>

            <div class="chat-container">
                <div class="chat-profile">
                    <a href="#"><img src="images/people.png" alt="video" /></a>
                    <p>people</p>
                </div>

                <div class="chat-profile">
                    <a href="#"><img src="images/groups.png" alt="video" /></a>
                    <p>Groups</p>
                </div>

                <div class="chat-profile">
                    <a href="#"><img src="images/chat.png" alt="video" /></a>
                    <p>Chat</p>
                </div>

                <div class="chat-profile">
                    <a href="#"><img src="images/video.gif" alt="video" /></a>
                    <p>Create</p>
                </div>

                <div class="chat-profile">
                    <a href="memes2.php"><img src="images/hashtag.png" alt="video" /></a>
                    <p>Memes</p>
                </div>

                <div class="chat-profile">
                    <a href="#"><img src="images/hashtag.png" alt="video" /></a>
                    <p>Happy</p>
                </div>
            </div>

            <!--Post Part-->

            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png" alt="profile-pic" />
                        <div>
                            <p><?php echo $_SESSION['user_name']; ?></p>
                            <span>June 21 2022, 12.40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                </div>
                <p class="post-text">
                    Emotional Intelligence is a online platform which provide user to
                    <span> Healing Material </span> such as e-books for mental health,
                    relaxing music, people with similar diomain, videos for fun and this
                    platform provide some other fun activity for user entirtenment
                    <a href="#">#Emotional Intelligence</a> <a href="#">#EI e-books</a>
                </p>
                <img src="images/fantasy1.jpg" alt="fantasy1" class="post-img" />

                <!--like and share part including post part-->

                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="images/like-blue.png" alt="like-blue" />247</div>
                        <div><img src="images/comments.png" alt="comments" />92</div>
                        <div><img src="images/share.png" alt="share" />24</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png" alt="profile-pic" /><i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>


            </div>


            <!--Post 2 Part-->
            <div class="chat-container">
                <div class="chat-profile">
                    <a href="#"><img src="images/happy.png" alt="video" /></a>
                    <p>Happy</p>
                </div>

                <div class="chat-profile">
                    <a href="#"><img src="images/worried.png" alt="video" /></a>
                    <p>Worried</p>
                </div>

                <div class="chat-profile">
                    <a href="#"><img src="images/sad.png" alt="video" /></a>
                    <p>Sad</p>
                </div>

                <div class="chat-profile">
                    <a href="#"><img src="images/angry.png" alt="video" /></a>
                    <p>Angry</p>
                </div>

                <div class="chat-profile">
                    <a href="memes2.php"><img src="images/fear.png" alt="Fear" /></a>
                    <p>Fear</p>
                </div>

                <div class="chat-profile">
                    <a href="#"><img src="images/tired.png" alt="Tired" /></a>
                    <p>Tired</p>
                </div>
                <div class="chat-profile">
                    <a href="#"><img src="images/sad.png" alt="video" /></a>
                    <p>Normal</p>
                </div>
            </div>

            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png" alt="profile-pic" />
                        <div>
                            <p><?php echo $_SESSION['user_name']; ?></p>
                            <span>June 21 2022, 12.40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                </div>
                <p class="post-text">
                    Hello everyone! My name is <?php echo $_SESSION['user_name']; ?> and I am a
                    <span>Full Talk Stak Android Developer</span> as well as a
                    <span>full stack web developer.</span> I am mastray in my feild and
                    i love to designing and development an android app and website
                    <a href="#">#Emotional Intelligence</a>
                    <a href="#">#EI e-books</a>
                </p>
                <img src="images/fantasy2.jpg" alt="fantasy2" class="post-img" />

                <!--like and share part 2 including post part-->

                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="images/like-blue.png" alt="like-blue" />247</div>
                        <div><img src="images/comments.png" alt="comments" />92</div>
                        <div><img src="images/share.png" alt="share" />24</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png" alt="profile-pic" /><i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>

                <!--Post 3 Part-->
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png" alt="profile-pic" />
                        <div>
                            <p><?php echo $_SESSION['user_name']; ?></p>
                            <span>June 21 2022, 12.40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                </div>
                <p class="post-text">
                    Hello everyone! My name is <?php echo $_SESSION['user_name']; ?> and I am a
                    <span>lets Talk Stak Android Developer</span> as well as a
                    <span>full stack web developer.</span> I am mastray in my feild and
                    i love to designing and development an android app and website
                    <a href="#">#Emotional Intelligence</a>
                    <a href="#">#EI e-books</a>
                </p>
                <img src="images/fantasy3.jpg" alt="fantasy3" class="post-img" />

                <!--like and share part 3 including post part-->

                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="images/like-blue.png" alt="like-blue" />247</div>
                        <div><img src="images/comments.png" alt="comments" />92</div>
                        <div><img src="images/share.png" alt="share" />24</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png" alt="profile-pic" /><i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>

                <!--Post 4 Part-->
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png" alt="profile-pic" />
                        <div>
                            <p><?php echo $_SESSION['user_name']; ?></p>
                            <span>June 21 2022, 12.40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                </div>
                <p class="post-text">
                    Hello everyone! My name is <?php echo $_SESSION['user_name']; ?> and I am a
                    <span>lets Talk Stak Android Developer</span> as well as a
                    <span>full stack web developer.</span> I am mastray in my feild and
                    i love to designing and development an android app and website
                    <a href="#">#Emotional Intelligence</a>
                    <a href="#">#EI e-books</a>
                </p>
                <img src="images/fantasy4.jpg" alt="fantasy4" class="post-img" />

                <!--like and share part 4 including post part-->

                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="images/like-blue.png" alt="like-blue" />247</div>
                        <div><img src="images/comments.png" alt="comments" />92</div>
                        <div><img src="images/share.png" alt="share" />24</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png" alt="profile-pic" /><i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>

                <!--Post 5 Part-->
            </div>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="images/profile-pic.png" alt="profile-pic" />
                        <div>
                            <p><?php echo $_SESSION['user_name']; ?></p>
                            <span>June 21 2022, 12.40 pm</span>
                        </div>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                </div>
                <p class="post-text">
                    Hello everyone! My name is <?php echo $_SESSION['user_name']; ?> and I am a
                    <span>lets Talk Stak Android Developer</span> as well as a
                    <span>full stack web developer.</span> I am mastray in my feild and
                    i love to designing and development an android app and website
                    <a href="#">#Emotional Intelligence</a>
                    <a href="#">#EI e-books</a>
                </p>
                <img src="images/fantasy5.jpg" alt="fantasy5" class="post-img" />

                <!--like and share part 5 including post part-->

                <div class="post-row">
                    <div class="activity-icon">
                        <div><img src="images/like-blue.png" alt="like-blue" />247</div>
                        <div><img src="images/comments.png" alt="comments" />92</div>
                        <div><img src="images/share.png" alt="share" />24</div>
                    </div>
                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png" alt="profile-pic" /><i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
            </div>

            <button type="button" class="load-more-button">Load More</button>
        </div>

        <!-- --------- right-sidebar---------- -->
        <div class="right-sidebar">
            <div>
                <h1>Task List</h1>
                <a href="indextask.php"><img src="images/add.png" alt="task" style="width: 65px;" /></a>
            </div>

            <!-- <div class="sidebar-title">
                <h4>Express Your Emotions</h4>
                <!-- <a href="#">Close</a> -->
            <!-- </div>
            <div class="express-emotions">
                <div class="emotions">
                    <a href="#"><img src="images/happy.png" alt="happy" />Happy</a>
                </div>
                <div class="emotions">
                    <a href="#"><img src="images/worried.png" alt="worried" />Worried</a>
                </div>
                <div class="emotions">
                    <a href="#"><img src="images/sad.png" alt="sad" />Sad</a>
                </div>
                <div class="emotions">
                    <a href="#"><img src="images/angry.png" alt="angry" />Angry</a>
                </div>
                <div class="emotions">
                    <a href="#"><img src="images/fear.png" alt="fear" />Fear</a>
                </div>
                <div class="emotions">
                    <a href="#"><img src="images/tired.png" alt="tired" />Tired</a>
                </div>
            </div> -->

            <div class="sidebar-title">
                <h4>Fun Zone </h4>
                <a href="#">Hide Zone</a>
            </div>
            <div class="shortcut-links">
                <a href="personality.php"><img src="images/laughing.gif" alt="Funny" />Check Your personality</a>
                <a href="#"><img src="images/LevelUP game.png" alt="Funny" />Level Up</a>
                <a href="#"><img src="images/playtime play.png" alt="Funny" />Playtime Play</a>
                <a href="#"><img src="images/onlineplays.png" alt="Funny" />Online Play</a>

                <div class="sidebar-title">
                    <h4>Your Work</h4>
                </div>
                <div class="shortcut-links">
                    <a href="#"><img src="images/cycling.png" alt="Funny" />Cycling</a>
                    <a href="#"><img src="images/exercising.png" alt="Funny" />Exercise</a>
                    <a href="#"><img src="images/swimming.png" alt="Funny" />Swimming</a>
                    <a href="#"><img src="images/dancing.png" alt="Funny" />Dancing</a>

                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>@Copyright 2022 - Emotional Intelligence</p>
    </div>

    <script src="script.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>