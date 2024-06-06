<!-- post_ad.php -->
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login_signup.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post Ad</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <h1>Post a New Ad</h1>
        <nav>
        <div class="menubar">
          <ul>
            <li><a href="index.html"><img src="images/k9k_logo.png"></a></li>
            <li><a href="profile.php">my profile</a></li>
            <li><a href="ads.php">view ads</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </div>
        </nav>
    </header>
    <main>
        <form action="save_ad.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="breed">Breed:</label>
            <input type="text" id="breed" name="breed" required>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="sex">Sex:</label>
            <select id="sex" name="sex" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
            <label for="purpose">Purpose:</label>
            <select id="purpose" name="purpose" required>
                <option value="Breeding">Breeding</option>
                <option value="Sale">Sale</option>
            </select>
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" required>
            <button class="post-ads-button" type="submit">Post Ad</button>
        </form>
    </main>
    <footer class="content">
        <div class="section">
          <div class="quicklinks">
            <h4>QUICKLINKS</h4>
            <a href="index.html"><li>Home</li></a>
            <a href="about-us.html"><li>About Us</li></a>
            <a href="contact.html"><li>Contact</li></a>
          </div>
        </div>
        <div class="section">
          <div class="services">
            <h4>SERVICES</h4>
            <a href="ads.php"><li>Trading</li></a>
            <a href="ads.php"><li>Mating</li></a>
          </div>
        </div>
        <div class="section">
          <div class="follow">
            <h4>CONNECT</h4>
            <a href="#" target="_blank"><img src="icons/facebook.png"></a>
            <a href="#" target="_blank"><img src="icons/instagram.png"></a><br>
            <a href="#" target="_blank"><img src="icons/x.png"></a>
            <a href="#" target="_blank"><img src="icons/tiktok.png"></a>
          </div>
    
    
    <button onclick="topFunction()" id="myBtn" title="Back to top"><img src="arrow-up.png">
    </button>
    <script>
      var mybutton= document.getElementById("myBtn");
      window.onscroll= function () {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton,style.display = "block";
      } else {
        mybutton.style.display = "block";
      }
    }
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
        </div>
      </footer>
      <footer class="bottom">
        k9kounty.com &copy; | Designed by ac3k33d.
      </footer>
</body>
</html>
