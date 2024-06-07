<!-- ads.php -->
<?php
// Start session and check for user login
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login_signup.php");
    exit();
}

require 'db.php';
$query = "SELECT * FROM ads";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ads</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <header>
        <!--<h1>Dog Ads</h1>-->
        <div class="menubar">
          <ul>
            <li><a href="index.html"><img src="images/k9k_logo.png"></a></li>
            <li><a href="post_ad.php">post ad</a></li>
            <li><a href="profile.php">my profile</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </div>
    </header>
    <main>
        <button onclick="window.location.href='search.php'">Search Ads</button>
        <div class="ads-list">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="ad-item">
                    <a href="view_ad.php?id=<?php echo $row['id']; ?>">
                        <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                        <h3><?php echo $row['name']; ?></h3>
                    </a>
                </div>
            <?php } ?>
        </div>
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
