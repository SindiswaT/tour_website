<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>home</title>
</head>

<body>


    <!---------- Header Section ----------->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>


    <!---------- Home Section ----------->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>



    <!---------- Services Section ----------->
    <section class="services">
        <h1 class="heading-title">our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" style="width:50%; height:auto;">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" style="width:50%; height:auto;">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" style="width:50%; height:auto;">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" style="width:50%; height:auto;">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" style="width:50%; height:auto;">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" style="width:50%; height:auto;">
                <h3>camping</h3>
            </div>

        </div>

    </section>




     <!---------- Home About Section ----------->
     <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ipsam earum illum veritatis, eius perferendis placeat nemo sit fuga vitae in alias cum repudiandae a, aut laboriosam beatae libero amet.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
     </section>



     <!---------- Home Packages Section ----------->
     <section class="home-packages">
        <h1 class="heading-title">our packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, molestias.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, molestias.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, molestias.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
     </section>



     <!---------- Home Offer Section ----------->
     <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore sed a, eaque molestias dignissimos sint praesentium aliquid voluptatum possimus quaerat?</p>
            <a href="book.php" class="btn">book now</a>
        </div>
     </section>




    <!---------- Footer Section ----------->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +27 11 789 0981</a>
                <a href="#"><i class="fas fa-phone"></i> +27 12 890 9864</a>
                <a href="#"><i class="fas fa-envelope"></i> travelagency@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> pretoria, south africa</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit">created by <span>sindiswa toli</span> | all rights reserved</div>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
</body>

</html>