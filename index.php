<!--=============== PHP section ===============-->
<?php
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
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css" />

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
              <a href="#home" class="nav__link active-link">
                <i class="bx bx-home-smile"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#about" class="nav__link">
                <i class="bx bx-user"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#skills" class="nav__link">
                <i class="bx bx-book-reader"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#work" class="nav__link">
                <i class="bx bx-repost"></i>
              </a>
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link">
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

            <div class="home__buttons">
              <a
                download=""
                href="assets/pdf/Alexis-Cv.pdf"
                class="button button--ghost"
                >Download CV</a
              >
              <a href="#about" class="button">About Me</a>
            </div>
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
            <i class="bx bx-mouse-alt home__scroll-icon"></i>
            <span class="home__scroll-name">Scroll Down</span>
          </a>
        </div>
      </section>

      <!--=============== ABOUT ===============-->
      <section class="about section" id="about">
        <span class="section__subtitle"> My Intro </span>
        <h2 class="section__title">About Me</h2>
        <div class="about__container container grid">
          <img src="assets/img/about.jpg" alt="" class="about__img" />

          <div class="about__data">
            <div class="about__info">
              <div class="about__box">
                <i class="bx bx-award about__icon"></i>
                <h3 class="about__title">Experience</h3>
                <span class="about__subtitle">Almost 2 years in College</span>
              </div>

              <div class="about__box">
                <i class="bx bx-briefcase-alt about__icon"></i>
                <h3 class="about__title">Completed</h3>
                <span class="about__subtitle">4 Projects</span>
              </div>

              <div class="about__box">
              <i class='bx bxs-graduation about__icon'></i>
                <h3 class="about__title">School</h3>
                <span class="about__subtitle">Asia Pacific College</span>
              </div>
            </div>

            <p class="about__description">
              A sophomore with more than a year of basic to intermediate software
              development. I create applications that caters good
              quality design and logic.
            </p>
            <a href="#contact" class="button">Contact Me</a>
          </div>
        </div>
      </section>

      <!--=============== SKILLS ===============-->
      <section class="skills section" id="skills">
        <span class="section__subtitle">My Abilities</span>
        <h2 class="section__title">My Experience</h2>

        <div class="skills__container container grid">
          <div class="skills__content">
            <h3 class="skills__title">Frontend Developer</h3>

            <div class="skills__box">
              <div class="skills__group">
                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">HTML</h3>
                    <span class="skills__level">Basic</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">CSS</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">JavaScript</h3>
                    <span class="skills__level">Basic</span>
                  </div>
                </div>
              </div>

              <div class="skills__group">
                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Bootstrap</h3>
                    <span class="skills__level">Basic</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Github</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">React</h3>
                    <span class="skills__level">Basic</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="skills__content">
            <h3 class="skills__title">Backend Developer</h3>
            <div class="skills__box">
              <div class="skills__group">
                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">PHP</h3>
                    <span class="skills__level">Basic</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Python</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>
              </div>

              <div class="skills__group">
                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Java</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>

                <div class="skills__data">
                  <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">MySQL</h3>
                    <span class="skills__level">Intermediate</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="skills__content">
            <h3 class="skills__title">Hobbies</h3>
            <div class="skills__box">
              <div class="skills__group">
                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Basketball</h3>
                    <span class="skills__level">Playing with friends.</span>
                  </div>
                </div>

                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Playing</h3>
                    <span class="skills__level">Online and multiplayer games</span>
                  </div>
                </div>

                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Swimming</h3>
                    <span class="skills__level">As a vacation hobby</span>
                  </div>
                </div>
              </div>

              <div class="skills__group">
                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Gambling with card games</h3>
                    <span class="skills__level">When I'm bored</span>
                  </div>
                </div>

                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Drinking</h3>
                    <span class="skills__level">With friends</span>
                  </div>
                </div>

                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Watching</h3>
                    <span class="skills__level">Movies and Series</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="skills__content">
            <h3 class="skills__title">Interests</h3>
            <div class="skills__box">
              <div class="skills__group">
                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Reading</h3>
                    <span class="skills__level">Manga</span>
                  </div>
                </div>

                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Reading</h3>
                    <span class="skills__level">Financial books</span>
                  </div>
                </div>

                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Using</h3>
                    <span class="skills__level">Editing softwares</span>
                  </div>
                </div>
              </div>

              <div class="skills__group">
                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Crypto TA</h3>
                    <span class="skills__level">Analysis</span>
                  </div>
                </div>

                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Utilizing</h3>
                    <span class="skills__level">Development software</span>
                  </div>
                </div>

                <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                  <div>
                    <h3 class="skills__name">Spontaneous trips</h3>
                    <span class="skills__level">With my gf ;)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== SERVICES ===============-->
      <section class="services section">
        <span class="section__subtitle">My Services</span>
        <h2 class="section__title">What I currently do</h2>

        <div class="services__container container grid">
          <div class="services__card">
            <h3 class="services__title">
              Developing/<br />
              Coding programs
            </h3>
            <span class="services__button">
              See more <i class="bx bx-right-arrow-alt"></i
            ></span>

            <div class="services__modal">
              <div class="services__modal-content">
                <i class="bx bx-x services__modal-close"></i>

                <h3 class="services__modal-title">Developer/Coder</h3>
                <p class="services__modal-description">
                  As I entered college, we have been introduced with tasks such as doing website, coding with java, python, C# and C++. In my own time, I explore new related topics.
                </p>

                <ul class="services__modal-list">
                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I visualized how the logic of the program will work(What works and whatnot).
                    </p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">I use google as an added guide from other people who were experiencing the same problems as myself.</p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I juggle the completion of the development while learning it.
                    </p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I try to make it work and when it works I make sure the code is neat and compact.
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services__card">
            <h3 class="services__title">
              Ui/Ux <br />
              Designing
            </h3>
            <span class="services__button">
              See more <i class="bx bx-right-arrow-alt"></i
            ></span>

            <div class="services__modal">
              <div class="services__modal-content">
                <i class="bx bx-x services__modal-close"></i>

                <h3 class="services__modal-title">Ui/Ux Designer</h3>
                <p class="services__modal-description">
                  I just had fun on my first term of 2nd year since designing a website was one of our task.
                </p>

                <ul class="services__modal-list">
                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I develop the user interface.
                    </p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">I see how a website will interact with the users.</p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I create nice ux element interactions.
                    </p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I am learning while practicing how designs should be made.
                    </p>
                  </li>

                </ul>
              </div>
            </div>
          </div>

          <div class="services__card">
            <h3 class="services__title">
              Visual <br />
              Designing
            </h3>
            <span class="services__button">
              See more <i class="bx bx-right-arrow-alt"></i
            ></span>

            <div class="services__modal">
              <div class="services__modal-content">
                <i class="bx bx-x services__modal-close"></i>

                <h3 class="services__modal-title">Visual Designer</h3>
                <p class="services__modal-description">
                  I do quality edits so that the end product looks nice.
                </p>

                <ul class="services__modal-list">
                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I usually analyze how a product sells through their unique/eye catching advertisements.
                    </p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">I usually take them as a guide in doing my own picture or video edits.</p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I am learning from every skilled designers on social media and designing platforms.
                    </p>
                  </li>

                  <li class="services__modal-item">
                    <i class="bx bx-check-circle services__modal-icon"></i>
                    <p class="services__modal-info">
                      I usually edit the picture or video and make sure it will look nice and good.
                    </p>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== WORK ===============-->
      <section class="work section" id="work">
        <span class="section__subtitle">My Portfolio</span>
        <h2 class="section__title">Recent Works</h2>

        <div class="work__filters">
          <span class="work__item active-work" data-filter="all">All</span>
          <span class="work__item" data-filter=".web">Website/App</span>
          <span class="work__item" data-filter=".games">Games</span>
          <span class="work__item" data-filter=".design">Design</span>
        </div>

        <div class="work__container container grid">
          <div class="work__card mix web">
            <img src="assets/img/Website.png" alt="" class="work__img" />

            <h3 class="work__title">Website</h3>

            <a href="https://hustle-fit-ph-v1.netlify.app/" class="work__button" target="_blank">
              Demo <i class="bx bx-right-arrow-alt work__icon"></i>
            </a>
          </div>

          <div class="work__card mix games">
            <img src="assets/img/covid-dash.png" alt="" class="work__img" />

            <h3 class="work__title">COVID-DASH Game</h3>

            <a href="assets/img/CovidDashGame.exe" class="work__button" target="_blank">
              Download <i class="bx bx-right-arrow-alt work__icon"></i>
            </a>
          </div>

          <div class="work__card mix design">
            <img src="assets/img/sampleBG.png" alt="" class="work__img" />

            <h3 class="work__title">ALTERATION Game Design</h3>

            <a href="assets/img/CompleteBG.png" class="work__button" target="_blank">
              View <i class="bx bx-right-arrow-alt work__icon"></i>
            </a>
          </div>

          <div class="work__card mix design">
            <img src="assets/img/art.jpeg" alt="" class="work__img" />

            <h3 class="work__title">ARTS PHOTOSHOP Design</h3>

            <a href="assets/img/art.jpeg" class="work__button" target="_blank">
              View <i class="bx bx-right-arrow-alt work__icon"></i>
            </a>
          </div>

          <div class="work__card mix design">
            <img src="assets/img/LowFi DESKTOP WIREFRAMES.png" alt="" class="work__img" />

            <h3 class="work__title">HUSTLE FIT DESKTOP wireframes</h3>

            <a href="assets/img/LowFi DESKTOP WIREFRAMES.pdf" class="work__button" target="_blank">
              View <i class="bx bx-right-arrow-alt work__icon"></i>
            </a>
          </div>

          <div class="work__card mix design">
            <img src="assets/img/LowFi MOBILE WIREFRAMES.png" alt="" class="work__img" />

            <h3 class="work__title">HUSTLE FIT MOBILE wireframes</h3>

            <a href="assets/img/LowFi MOBILE WIREFRAMES.pdf" class="work__button" target="_blank">
              View <i class="bx bx-right-arrow-alt work__icon"></i>
            </a>
          </div>

          <div class="work__card mix web">
            <img src="assets/img/loanservicesapp.png" alt="" class="work__img" />

            <h3 class="work__title">LOAN SERVICES app</h3>

            <a href="https://personal-nnx5rz9d.outsystemscloud.com/PreviewInDevices/ShareMobileApp.aspx?URL=/LoanServices/&_ts=92161" class="work__button" target="_blank">
              Demo <i class="bx bx-right-arrow-alt work__icon"></i>
            </a>
          </div>
        </div>
      </section>

       <!--=============== BLOG ===============-->
       <section class="blog section">
        <span class="section__subtitle"> My Blogs </span>
        <h2 class="section__title">About Experiences</h2>
        <div class="about__container container grid">
          <img src="assets/img/quote.png" alt="" class="about__img" />

          <div class="about__data">
            <div class="about__info">
              <div class="about__box">
                <i class="bx bx-award about__icon"></i>
                <h3 class="about__title">Dynamic</h3>
              </div>

              <div class="about__box">
                <i class="bx bx-briefcase-alt about__icon"></i>
                <h3 class="about__title">Founded on personal touch</h3>
              </div>

              <div class="about__box">
              <i class='bx bxs-graduation about__icon'></i>
                <h3 class="about__title">About communication</h3>
              </div>
            </div>

            <p class="about__description">
            “There’s a lot of information out there for free, so you’ve got to figure out what makes your information different.” <br>– Matt Wolfe
            </p>
            <a href="/website/portfolio.php" class="button">Go to Blogs</a>
          </div>
        </div>
      </section>

      <!--=============== TESTIMONIALS ===============-->
    <section class="testimonial section">
    <span class="section__subtitle">What my Audience say</span>
    <h2 class="section__title">View Comments</h2>
    
    <?php foreach($query1 as $q1){?>
      <div class="testimonial__container container swiper">
        <div class="swiper-wrapper">
            <div class="testimonial__card">
              <h3 class="testimonial__name"><?php echo $q1['fullname'];?></h3>
              <p class="testimonial__description">
              Nickname : <?php echo $q1['nickname'];?><br>
              Birthdate [y-m-d] : <?php echo $q1['birthdate'];?><br>
              Email : <?php echo $q1['emailfrom'];?><br>
              Hobbies/Interests : <?php echo $q1['hobbies'];?> <br>
              Comments : <?php echo $q1['comments'];?>
              </p>
            </div>
      </div>
    </div>
    <?php }?>
    
  </section>

      <!--=============== CONTACT ===============-->
      <section class="contact section" id="contact">
        <span class="section__subtitle">Get in Touch</span>
        <h2 class="section__title">Contact Me</h2>

        <div class="contact__container contact grid">
          <div class="contact__content">
            <h3 class="contact__title">Talk to Me</h3>

            <div class="contact__info">
              <div class="contact__card">
                <i class="bx bx-message-rounded-edit contact__card-icon"></i>
                <h3 class="contact__card-title">Email</h3>
                <span class="contact__card-data"
                  >heyalexm.student<br>@gmail.com</span
                >

                <a
                  href="mailto:heyalexm.student@gmail.com"
                  target="_blank"
                  class="contact__button"
                >
                  Write me
                  <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                </a>
              </div>

              <div class="contact__card">
                <i class="bx bxl-messenger contact__card-icon"></i>
                <h3 class="contact__card-title">Messenger</h3>
                <span class="contact__card-data">user.alexis.martin</span>

                <a
                  href="https://m.me/itsonlyaleex.slash.bolt"
                  target="_blank"
                  class="contact__button"
                >
                  Write me
                  <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                </a>
              </div>

              <div class="contact__card">
                <i class="bx bxl-telegram contact__card-icon"></i>
                <h3 class="contact__card-title">Telegram</h3>
                <span class="contact__card-data">@emperor_atlas</span>

                <a href="https://t.me/emperor_atlas" target="_blank" class="contact__button">
                  Write me
                  <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                </a>
              </div>
            </div>
          </div>
  <?php
    if($message_sent):
  ?>

    <h3>Thanks, we'll be in touch</h3>

  <?php
  else:
  ?>
          <div class="contact__content">
            <h3 class="contact__title">Hey, write me something will you?</h3>

            <form
              action="mail.php"
              method="POST"
              id="myForm"
              class="contact__form"
            >
              <div class="contact__form-div">
                <label for="" class="contact__form-tag">Name</label>
                <input
                  type="text"
                  name="name"
                  placeholder="Firstname - Middle I. - Lastname"
                  class="contact__form-input"
                  required  
                />
              </div>

                <div class="contact__form-div">
                  <label for="" class="contact__form-tag">Nickname</label>
                  <input
                    type="text"
                    name="nickname"
                    placeholder="Insert your nickname"
                    class="contact__form-input"
                  />
                </div>

                <div class="contact__form-div">
                  <label for="" class="contact__form-tag">BirthDate</label>
                  <input
                    type="date"
                    name="date"
                    placeholder="Insert your birthdate"
                    class="contact__form-input"
                  />
                </div>

                <div class="contact__form-div">
                  <label for="" class="contact__form-tag">Email</label>
                  <input
                    type="email"
                    name="email"
                    placeholder="Insert your Email"
                    class="contact__form-input"
                  />
                </div>

              <div class="contact__form-div contact__form-area">
                <label for="" class="contact__form-tag"
                  >Hobbies or Interest</label
                >
                <textarea
                  name="hobbies"
                  id=""
                  cols="30"
                  rows="5"
                  placeholder="Write your hobbies or interests"
                  class="contact__form-input"
                ></textarea>
              </div>

              <div class="contact__form-div contact__form-area">
                <label for="" class="contact__form-tag">Comments</label>
                <textarea
                  name="comment"
                  id=""
                  cols="30"
                  rows="5"
                  placeholder="Write your comment :>"
                  class="contact__form-input"
                ></textarea>
              </div>

              <button class="button" id="send-button" value="submit">Send Message</button>
            </form>
          </div>
          <?php
          endif;
        ?>
        </div>
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer">
      <div class="footer__container container">
        <h1 class="footer__title">HeyAlexM</h1>
        <ul class="footer__list">
          <li>
            <a href="#about" class="footer__link">About</a>
          </li>
          <li>
            <a href="#work" class="footer__link">Projects</a>
          </li>
          <li>
            <a href="/website/portfolio.php#blog" class="footer__link">Blogs</a>
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
                  <?php } else if ($_REQUEST['info'] == "mailadded"){?>
                    alert("Mail has been added successfully.");
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
    <script src="assets/js/main.js"></script>

    <script>alert("welcome to heyalexm website.");</script>
  </body>
</html>
