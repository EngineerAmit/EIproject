<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/quotes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>About Us</title>
</head>

<body>
    <nav>
        <div class="nav-left">
            <img src="images/menu-bar.png" class="menu-bar" alt="menu-bar" onclick="navMenu()" />
            <img src="images/Team Emotional Intelligence.png" class="logo" alt="Social book logo" />
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
            <div class="nav-user-icon online">
                <img src="images/profile-pic.png" alt="profile-pic" />
            </div>
        </div>
    </nav>

    <header class="header-nav">
        <div class="container-nav">
            <nav class="nav-bar">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="aboutuspage.php">About</a></li>
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
                <a href="#"><img src="images/quotes.png" alt="quotes" />Quotes Earth</a>
                <a href="#"><img src="images/relaxing music.gif" alt="relaxing" />Relaxing
                    Music</a>
                <a href="#"><img src="images/listen podcast.png" alt="relaxing" />Listen
                    Podcast</a>
                <a href="#"><img src="images/buy e books.png" alt="buy books" />Buy
                    e-Books</a>
                <a href="#"><img src="images/buy courses.png" alt="buy courses" />Buy Courses</a>
                <a href="#">See More</a>
            </div>
            <div class="shortcut-links">
                <p>Your Shortcuts</p>
                <a href="#"><img src="images/fantasy1.jpg" alt="fantasy images" />Hello This
                    Title1</a>
                <a href="#"><img src="images/fantasy2.jpg" alt="fantasy images" />Hello This
                    Title2</a>
                <a href="#"><img src="images/fantasy3.jpg" alt="fantasy images" />Hello This
                    Title3</a>
                <a href="#"><img src="images/fantasy4.jpg" alt="fantasy images" />Hello This
                    Title4</a>
            </div>
        </div>

        <!-- --------- main-content---------- -->
        <div class="main-content-about-us">
            <!-- <div id="quotes"></div>
            <div id="author"></div>
            <button id="newQ">New Quotes</button>
            <button id="tweetMe"> Tweet</button> -->

            <div class="container-quotes">
                <div class="inner-quotes">
                    <div class="box-quotes">
                        <p class="number-quotes">
                            <img src="images/twiteerimg.png" alt="twiteer" title="TweetMe" id="tweetMe">
                        </p>
                        <div class="text-quotes">
                            <i class="start-quotes fas fa-quote-left"></i>
                            <p id="quotes" id="quotes"></p>
                            <p id="author" class="author"></p>
                        </div>
                        <label class="button">
                            <p id="newQ"> new Quotes</p>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- --------- Footer---------- -->

    <div class="footer">
        <p>@Copyright 2022 - Emotional Intelligence</p>
    </div>

    <script src="script.js"></script>
    <script>
        const quotes = document.getElementById("quotes");
        const author = document.getElementById("author");
        const newQ = document.getElementById("newQ");
        const tweeetMe = document.getElementById("tweetMe");
        let realData = "";
        let quotesData = "";

        const tweetNow = () => {
            let tweetPost = `https://twitter.com/intent/tweet?text=${quotesData.text}`;
            window.open(tweetPost);
        }

        const getNewQuotes = () => {
            let rnum = Math.floor(Math.random() * 20);
            quotesData = realData[rnum];
            // console.log(rnum)
            // console.log(realData[10].author);
            quotes.innerText = `${quotesData.text}`;
            quotesData.author == null ?
                (author.innerText = "unknown") :
                (author.innerText = `${quotesData.author}`);
        };
        const getQuotes = async () => {
            const api = "https://type.fit/api/quotes";
            try {
                let data = await fetch(api);
                realData = await data.json();
                getNewQuotes();
                // console.log(realData[10].length);
                // console.log(realData[10].author);
            } catch (error) {}
        };
        newQ.addEventListener("click", getNewQuotes);
        tweeetMe.addEventListener("click", tweetNow)
        getQuotes();
    </script>
</body>

</html>