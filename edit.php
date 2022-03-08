<?php
    
    include "logic.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <! -- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <title>Blog using PHP and MYSQL</title>
</head>
<body>

  <!--=============== HEADER ===============-->
  <header class="header" id="header">
      <nav class="nav container">
      <h1><a href="#" class="nav__logo"></a></h1>
        <!-- Theme Change button -->
        <i class="bx bx-moon change-theme" id="theme-button"></i>
      </nav>
    </header>

<!--=============== BLOG===============-->
<section class="blog section" id="blog">
<span class="section__subtitle">My Blogs</span>
<h2 class="section__title">My Experiences</h2>
    <div class="containerblog mt-5">
    <?php foreach($query as $q){?>
            <form action= "logic.php" method="POST" enctype="multipart/form-data">
                <input type="text" hidden name="id" value="<?php echo $q["id"];?>">

                <input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center" value="<?php echo $q["title"];?>">

                <textarea name="info" cols="30" rows="8"class="form-control bg-dark text-white my-3"><?php echo $q["info"];?></textarea>
                <img src='<?php echo $q['image']; ?>' style="width: 80%;display: block;margin-left: auto;margin-right: auto;width: 50%;border-radius: 8px;" class="blog__card-data" />

                <input type="file" name="file" placeholder="" class="form-control bg-dark text-white my-3 text-center" required>
                <input type="hidden" name="file_old" placeholder="" class="form-control bg-dark text-white my-3 text-center" value="<?php echo $q['file']; ?>">
                <button name="update" class="btn btn-dark">Update</button>
            </form>
        <?php }?>
    </div>
</section>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@l.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="/assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="/assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="/assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/crud.js"></script>

    <!--=============== BOOTSTRAP JS ===============-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@l.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>