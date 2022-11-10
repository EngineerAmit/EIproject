<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <title>Contact Us</title>
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
        <a href="#"><img src="images/buy e books.png" alt="buy book" />Buy
          e-Books</a>
        <a href="#"><img src="images/buy courses.png" alt="buy courses" />Buy Courses</a>
        <a href="#">See More</a>
      </div>
      <div class="shortcut-links">
        <p>Your Shortcuts</p>
        <a href="#"><img src="images/fantasy1.jpg" alt="fantasy images" />EI Courses
          1</a>
        <a href="#"><img src="images/fantasy2.jpg" alt="fantasy images" />EI Courses
          2</a>
        <a href="#"><img src="images/fantasy3.jpg" alt="fantasy images" />EI Courses
          3</a>
        <a href="#"><img src="images/fantasy4.jpg" alt="fantasy images" />EI Courses
          4</a>
      </div>
    </div>

    <!-- --------- main-content---------- -->
    <div class="main-content-about-us">
      <div class="test-part">
        <h2 class="about">Contact Us</h2>

        <div class="container-contact">
          <form action="">
            <h1 class="main_heading">Fill This Form</h1>
            <hr />
            <h3>Contact Information</h3>
            <hr />
            <p>
              Name: *
              <input type="text-1" name="name" required placeholder="Amit Gujar" />
            </p>

            <fieldset>
              <legend>Gender</legend>
              <p>
                Gender: Male
                <input type="radio" name="gender" id="Male" /> Female
                <input type="radio" name="gender" id="Female" />
              </p>
            </fieldset>

            <p>
              Address:
              <textarea name="address" id="address" cols="100" rows="7" placeholder="Enter your address"></textarea>
            </p>
            <p>
              Email:
              <input type="email" name="email" id="email" placeholder="gujaramit2222@gmail.com" />
            </p>
            <p>
              Pin Code:
              <input type="number" name="pincode" id="pincode" placeholder="400021" />
            </p>
            <hr />

            <h3>Buy a Coffiee for us</h3>

            <hr />
            <p>
              Card type:
              <select name="card_type" id="card_type">
                <option value="">--Select A card Type--</option>
                <option value="Visa">Visa</option>
                <option value="Rupay">Rupay</option>
                <option value="MasterCard">MasterCard</option>
              </select>
            </p>
            <p>
              Card Number*
              <input type="number" name="card_number" id="card_number" required placeholder="1111-2222-3333-4444" />
            </p>
            <p>
              Expiration Date:*
              <input type="date" name="exp_date" id="exp_date" required />
            </p>
            <p>
              CVV: *
              <input type="password" name="cvv" id="cvv" required placeholder="123" />
            </p>
            <input type="submit" value="Buy Now" />
          </form>
        </div>
        <h2 class="map-text">Map To Reach Us</h2>
        <p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.7665055819457!2d72.83449331422764!3d18.94172658716502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d163c00b46bf%3A0xa4d34a77e047244b!2sCSMT!5e0!3m2!1sen!2sin!4v1663999501252!5m2!1sen!2sin" width="850" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </p>
      </div>
    </div>
  </div>

  <!-- --------- right-sidebar---------- -->

  <div class="footer">
    <p>@Copyright 2022 - Emotional Intelligence</p>
  </div>

  <!-- <script src="script.js"></script> -->
</body>

</html>