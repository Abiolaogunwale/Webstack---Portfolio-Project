<!-- login_signup.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function toggleForm(form) {
            document.getElementById('login-form').style.display = form === 'login' ? 'block' : 'none';
            document.getElementById('signup-form').style.display = form === 'signup' ? 'block' : 'none';
        }
    </script>
</head>
<body>
    <header>
    <nav>
        <div class="menubar">
          <ul>
            <li><a href="index.html"><img src="images/k9k_logo.png"></a></li>
            <li><a href="about-us.html">about</a></li>
            <li><a href="#">services</a>
              <div class="menubar1">
                <ul>
                  <li><a href="ads.php">trading</a></li>
                  <li><a href="ads.php">mating</a></li>
                </ul>
              </div>
            </li>
            <li><a href="contact.html">contact</a></li>
          </ul>
        </div>
      </nav>
        <!--<h1>Classified Ads</h1>-->
    </header>
    <main>
        <div class="toggle-buttons">
            <button class="toggle-button" onclick="toggleForm('login')">Login</button>
            <button class="toggle-button" onclick="toggleForm('signup')">Signup</button>
        </div>

        <div id="login-form" style="display: block;">
            <form action="login.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button class="login-button" type="submit">Login</button>
            </form>
        </div>

        <div id="signup-form" style="display: none;">
            <form action="signup.php" method="post">
                <label for="firstname">Firstname:</label>
                <input type="text" id="firstname" name="firstname" required>
                <label for="lastname">Lastname:</label>
                <input type="text" id="lastname" name="lastname" required>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="verify_password">Verify Password:</label>
                <input type="password" id="verify_password" name="verify_password" required>
                <button class="signup-button" type="submit">Signup</button>
            </form>
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
