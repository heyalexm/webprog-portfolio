<!--=============== PHP section ===============-->
<?php
    include 'logic.php';
    include 'mail.php';
?>

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
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Portfolio | Alexis</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
      <nav class="nav container">
      <h1><a href="#" class="nav__logo">HeyAlexM</a></h1>
        <div class="nav__menu">
          <ul class="nav__list">
            
          <li class="nav__item">
              <a href="index.php" class="nav__link">
              <i class='bx bx-arrow-back'></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="bx bx-home-smile"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#blog" class="nav__link">
              <i class='bx bxl-blogger'></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#comment" class="nav__link">
              <i class='bx bx-comment-detail'></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="index.php#contact" class="nav__link">
                <i class="bx bx-chat"></i>
              </a>
            </li>
          </ul>
        </div>

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
            <span class="home__greeting"> Hello I'm </span>
            <h1 class="home__name">Alexis Martin</h1>
            <h3 class="home__education">2nd Year College student</h3>
          </div>
          <div class="home__handle">
            <img src="assets/img/perfil.png" alt="" class="home__img" />
          </div>

          <div class="home__social">
            <a
              href="https://www.linkedin.com/in/alexis-martin-4213171b3/"
              target="_blank"
              class="home__social-link"
            >
              <i class="bx bxl-linkedin-square"></i>
            </a>
            <a
              href="https://github.com/heyalexm"
              target="_blank"
              class="home__social-link"
            >
              <i class="bx bxl-github"></i>
            </a>
            <a
              href="https://www.youtube.com/channel/UCKJHN2hBil8FLFgHBFOUjjg"
              target="_blank"
              class="home__social-link"
            >
              <i class="bx bxl-youtube"></i>
            </a>
          </div>
          <a href="#about" class="home__scroll">
            <i class="bx bx-mouse-alt"></i>
            <span class="home__scroll-name">Scroll Down</span>
          </a>
        </div>
      </section>

       <!--=============== BLOG===============-->
    <section class="blog section" id="blog">
        <span class="section__subtitle">My Blogs</span>
        <h2 class="section__title">My Experiences</h2>
        <br>
        <div class="blog__group">
          <div class="text-center">
                  <a href="create.php" class="button blogbutton">+ Create a new post</a>
              </div>
          <?php foreach($query as $q){?>
                  <div class="blog__card">
                  <h1 class="blog__card-title" ><i class='bx bxl-blogger'></i>  <?php echo $q['title'];?></h1>
                      <br>
                      <br>
                      <img class="blog__image" style="display: block;margin-left: auto;margin-right: auto;width: 50%;border-radius: 8px;padding-bottom :3rem;"   src='<?php echo $q['image']; ?>' />
                      <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-light"><br>Read More<span class="text-danger">&rarr;</span></a>
              </div > 
            <?php }?>
        </div>
    </section>
    

 <!--=============== TESTIMONIALS ===============-->
 <section class="testimonial section" id="comment">
    <span class="section__subtitle">What my Audience say</span>
    <h2 class="section__title">View Comments</h2>

    <?php foreach($query1 as $q1){?>
      <div class="testimonial__container container swiper">
      <div class="swiper-wrapper">
        <div class="testimonial__card swiper-slide">
          <img
            src="/assets/img/testimonial1.png"
            alt=""
            class="testimonial__img"
          />
          <h3 class="testimonial__name"><?php echo $q1['fullname'];?></h3>
          <p class="testimonial__description">
          Nickname : <?php echo $q1['nickname'];?><br>
          Birthdate : <?php echo $q1['birthdate'];?><br>
          Email : <?php echo $q1['emailfrom'];?><br>
          Hobbies/Interests : <?php echo $q1['hobbies'];?> <br>
          Comments : <?php echo $q1['comments'];?>
          </p>
        </div>
      <div class="swiper-pagination"></div>
    </div>
    <?php }?>
    
  </section>

    <!--=============== FOOTER ===============-->
    <footer class="footer">
      <div class="footer__container container">
        <h1 class="footer__title">HeyAlexM</h1>
        <ul class="footer__list">
          <li>
            <a href="index.php#about" class="footer__link">About</a>
          </li>
          <li>
            <a href="#blog" class="footer__link">Blogs</a>
          </li>
          <li>
            <a href="#comment" class="footer__link">Comments</a>
          </li>
        </ul>

        <ul class="footer__social">
          <a
            href="https://www.facebook.com/itsonlyaleex.slash.bolt"
            target="_blank"
            class="footer__social-link"
          >
            <i class="bx bxl-facebook-square"></i>
          </a>
          <a
            href="https://www.instagram.com/heyalexm/?hl=en"
            target="_blank"
            class="footer__social-link"
          >
            <i class="bx bxl-instagram"></i>
          </a>
          <a
            href="https://twitter.com/its_onlyaleeeex"
            target="_blank"
            class="footer__social-link"
          >
            <i class="bx bxl-twitter"></i>
          </a>
        </ul>

        <span class="footer__copy">
          &#169;By HeyAlexM | 2022 <br />All rights reserved.
        </span>
      </div>
    </footer>

    
    <!--=============== SCRIPTING ===============-->
    <script>
      function updateStatus() {
          <?php if(isset($_REQUEST['info'])){?>
              <?php }else if($_REQUEST['info'] == "added"){?>
                alert("Post has been added successfully.");
              <?php }else if ($_REQUEST['info'] == "updated"){?>
                alert("Post has been updated successfully.");
              <?php } else if ($_REQUEST['info'] == "deleted"){?>
                alert("Post has been deleted successfully.");
              <?php }?>
      }
    </script>
    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/mainportfolio.js"></script>

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@l.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>updateStatus();</script>
  </body>
</html>
