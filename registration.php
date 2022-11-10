<?php

session_start();

//add this later
// header('location:login.php');
//the above line of code


include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['user_email'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $confirmpass = $_POST['conf_password'];

    $insertquery = "insert into usersei(name, user_email, user_name, password) values ('$name', '$email', '$username', '$password')";
    $result = mysqli_query($con, $insertquery);

    if ($result) {
?>
        <script>
            alert("data inserted successfully");
        </script>

    <?php
    } else {
    ?>
        <script>
            alert("data not inserted");
        </script>
<?php
    }
}

// mysqli_select_db($con, 'loginei');
// $name = $_POST['name'];
// $email = $_POST['user_email'];
// $username = $_POST['user_name'];
// $password = $_POST['password'];
// $confirmpass = $_POST['conf_password'];

// $q = "select * from userei where name = '$name' && password = '$pass'";
// $result = mysqli_query($con, $q);
// $num = mysqli_num_rows($result);
// if ($num == 1) {
//     echo "duplicate data";
// } else {
//     $qy = "insert into signin(name, password) values('$name','$pass')";
//     mysqli_query($con, $qy);
// }
// 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/login.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>registration</title>
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
            <div class="test-part">
                <div class="headings">
                    <h1>Please Register here</h1>
                </div>
                <hr class="hr_tag">

                <div class="container">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="user_email" class="form-control" id="exampleInputEmail1">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="user_name" class="form-control" id="exampleInputEmail1">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                            <input type="password" name="conf_password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Signin</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
    </div>

    <!-- --------- Footer---------- -->

    <div class="footer">
        <p>@Copyright 2022 - Emotional Intelligence</p>
    </div>

    <!-- <script src="script.js"></script> -->
    <!-- <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->
</body>

</html>