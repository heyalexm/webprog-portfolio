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

    <?php foreach($query as $q){?>
            <h1 class="section__title"><?php echo $q['title'];?></h1>
            
            
            <div class="blog__card">
            <p style="font-weight:bold">Published on <?php echo $q['reg_date'];?></p>
                <div class="d-flex mt-2 justify-content-center align-items - center">
                    <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">Edit</a>

                    <form method="POST">
                        <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>
                
                <br>
                <br>
                <img class="blog__image" style="display: block;margin-left: auto;margin-right: auto;width: 50%;border-radius: 8px;padding-bottom :3rem;"   src='<?php echo $q['image']; ?>' />
            
                <div class="blog__card" style="display: block;margin-left: auto;margin-right: auto;border-radius: 8px;>
                        <p style ="text-indent: 70px;"><?php echo $q['info'];?></p>  
                </div>
        </div >
       <?php }?>
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