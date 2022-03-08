

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.png"
      type="image/x-icon"
    />

    <!--=============== BOXICONS ===============-->
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Portfolio | Alexis</title>

    <!--=============== SCRIPT ===============-->
    <script>
      function loginFunction(){
        var un = document.forms["form"]["username"].value;
        var pw = document.forms["form"]["password"].value;
        if(un=="admin" && pw=="adminpass")
        {
          alert("Redirecting you to Create blog form!");
          <?php header("Location: create.php");?>
        }else{
          alert("Invalid! Unmatching Username and Password");
          
        }
    </script>

  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">HeyAlexM</a>
        <!-- Theme Change button -->
        <i class="bx bx-moon change-theme" id="theme-button"></i>
      </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== HOME ===============-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__data">
            <span class="home__greeting">User Admin</span>
            <h1 class="home__name">Log-in Form</h1>
            <h3 class="home__education">for authentication</h3>
          </div>
        </div>
      </section>
    <!--=============== FORM ===============-->
    <div id="error">

    </div>
    <form name="form" action="/" class="box" method="GET">
      <h1>
          Login
      </h1>
      <input type="text" id="username" name="username" placeholder="Enter Username" required>
      <input type="password" id="password" name="password" placeholder="Enter Password" required>
      <button class="button" id="login-button" value="submit" onsubmit="loginFunction()">Submit</button>
    </form>
  
    <!--=============== SCROLLREVEAL ===============-->
    <script src="/assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="/assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="/assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
