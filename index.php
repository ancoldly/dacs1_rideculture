<?php
    require('./connectDB/connect.php');
    $query = "SELECT * FROM `temporary`";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $email = $row["emailTemporary"];
        $select = "SELECT * FROM `account` WHERE `email` = '$email'";
        $data = $conn->query($select);
        while($rows = mysqli_fetch_assoc($data)) {
            $userName = $rows["username"];
        }
    }
    else{   
        
    }


    if (isset($_POST['acc']))
    {
        if(isset($userName))
        {
            header("Location: ./html/user.php");
        }
        else{
            header("Location: ./html/login.php");
        }
    }
?> 
<?php
    require('./connectDB/connect.php');
    $query = "SELECT * FROM `temporary`";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $email = $row["emailTemporary"];
        $select = "SELECT * FROM `account` WHERE `email` = '$email'";
        $data = $conn->query($select);
        while($rows = mysqli_fetch_assoc($data)) {
            $userName = $rows["username"];
        }
    }
    else{   
        
    }


    if (isset($_POST['acc']))
    {
        if(isset($userName))
        {
            header("Location: ./html/user.php");
        }
        else{
            header("Location: ./html/login.php");
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="path/to/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>RideCulture Moto</title>
</head>
<body>
    <div class="call-top">
        <div class="contact-social-top">
            <li class="social-top">
                <button class="fb"><i class='bx bxl-facebook' ></i></button>
                <button class="ins"><i class='bx bxl-instagram' ></i></button>
                <button class="tw"><i class='bx bxl-twitter' ></i></button>
                <button class="yt"><i class='bx bxl-youtube' ></i></button>
            </li>

            <div class="hot-line-top">
                <span>Hotline: 1807 2004</span>
            </div>

            <div class="btn-contact-top">
                <button class="cancel-top">Cancel</button>
                <button>Call Us</button>
            </div>
        </div>
    </div>
    <button class="next-call">
        <i class='bx bx-headphone bx-tada' ></i>
    </button>
    <a href="#">    <button class="next-top"><i class='bx bx-chevrons-up'></i></button></a>    
    <header class="header">
        <div class="logo-header">
            <a href="../index.php"><span><i class='bx bxl-flutter'></i>RideCulture <br> <p>Moto<i class='bx bx-paper-plane' ></i></p></span></a>
        </div>

        <nav class="nav">
            <a href="#" class="active-mark">HOME</a>
            <a href="./html/news.php" class="active-mark">NEWS</a>
            <a href="./html/shop.php" class="active-mark">SHOP</a>
            <a href="./html/blog.php">BLOG</a>
        </nav>

        <div class="social-media">
            <button type="button" class="search__btn">
                <i class='bx bx-search'></i>
            </button>
            <form action="" method="post">
                <button type="submit" name="acc">
                    <a href='/html/.php' class='x' target='_blank'><i class='bx bx-user' ></i></a>
                </button>
            </form>
            <button class="bx bx-moon" id="darkMode-icon">
                
            </button>
        </div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <div class="search-header">
        <form action="" class="search">
            <i class='bx bx-x' ></i>
            <input type="text" placeholder="Enter Search..">
            <i class='bx bx-search' ></i type="submit">
        </form>
    </div>

    <section class="home" id="home">
        <div class="home-content swiper mySwiper">
            <div class="box-content swiper-wrapper">
                <div class="slide-content swiper-slide">
                    <video autoplay muted loop> 
                        <source src="https://drive.google.com/uc?export=view&id=1oWXITtd5esRkJ3XX0gyXW6bvo2qnMC-m">
                    </video>

                    <div class="text-slide">
                        <h4>"MOTO" IS A WAY OF LIFE</h4>
                        <p class="texttitle-home">Moto is a passion for many people, it is considered as a flame that ignites their enthusiasm.</p>
                        <a href="./news/lifemoto.php" target="_blank"><button><p>EXPLORE MORE</p><i class='bx bx-chevron-right'></i></button></a>
                    </div>
                </div>

                <div class="slide-content swiper-slide">
                    <img src="../img/Awesome Kawasaki Ninja Live Wallpaper.jpg" alt="">

                    <div class="text-slide">
                        <h4>THE SPEED GOD NAMED "KAWASAKI NINJA H2R"</h4>
                        <p class="texttitle-home">A REAL RACING BEAST ON THE TRACK, POSSESSING A SUPERB SPEED AND AN EXTREMELY COOL APPEARANCE.</p>
                        <a href="./news/h2r.php" target="_blank"><button><p>EXPLORE MORE</p><i class='bx bx-chevron-right'></i></button></a>
                    </div>
                </div>

                <div class="slide-content swiper-slide">
                    <img src="../img/v4.jpg" alt="">

                    <div class="text-slide">
                        <h4>DUCATI PANIGALE V4 R - THE NEW GENERATION SPEED KING</h4>
                        <p class="texttitle-home">ONE OF THE HIGH HORSEPOWER MOTORCYCLES WITH AN UNBEATABLE APPEARANCE, DUCATI PANIGALE V4 R IS A LEGEND OF THE MOTO WORLD.</p>
                        <a href="./news/ducativ4.php" target="_blank"><button><p>EXPLORE MORE</p><i class='bx bx-chevron-right'></i></button></a>
                    </div>
                </div>

                <div class="slide-content swiper-slide">
                    <img src="../img/bwm2.jpg" alt="">

                    <div class="text-slide">
                        <h4>"THE ULTIMATE RIDING MACHINE" - BMW S 1000 RR</h4>
                        <p class="texttitle-home>">BWM S 1000 RR BOASTS SUPERIOR SPEED. ON THE RACE TRACK, BMW S 1000 RR IS A FORMIDABLE OPPONENT, NOT ONLY FOR ITS SPEED BUT ALSO FOR ITS EXTREMELY COOL APPEARANCE.</p>
                        <a href="./news/bwms1000rr.php" target="_blank"><button><p>EXPLORE MORE</p><i class='bx bx-chevron-right'></i></button></a>
                    </div>
                </div>
            </div>

            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="shop">
        <div class="title-shop">
            <h2 >Let's explore the greatest <br> masterpieces together</h2>
            <div></div>
            <p>The motorcycles listed below are incredibly beautiful and powerful <br> attracting everyone's attention from the first sight.</p>
        </div>

        <div class="container-shop">
            <input type="radio" name="slider" class="d-none" id="s1" checked>
            <input type="radio" name="slider" class="d-none" id="s2">
            <input type="radio" name="slider" class="d-none" id="s3">
            <input type="radio" name="slider" class="d-none" id="s4">
            <input type="radio" name="slider" class="d-none" id="s5">
        
            <div class="cards-shop">
                <label for="s1" id="slide1">
                    <div class="card-shop">
                        <div class="image-shop">
                            <img src="./img/Awesome Kawasaki Ninja Live Wallpaper.jpg" alt="">
                            <div class="dots-shop">
                                <button class="xam"></button>
                                <button class="xanh"></button>
                                <button class="red"></button>
                            </div>
                        </div>
                        <div class="infos-shop">
                            <span class="name">Kawasaki Ninja H2R</span>
                            <span class="lorem">Kawasaki H2R is a super moto using supercharger technology, suitable for racing on the track.</span>
                        </div>
                        <a href="./news/h2r.php" class="btn-contact" target="_blank">READ MORE</a>
                        <div class="socials-shop">
                            <a href=""><i class='bx bxs-cart' ></i></a>
                            <a href=""><i class='bx bx-heart' ></i></a>
                            <a href=""><i class='bx bxs-bookmarks' ></i></a>
                            <a href=""><i class='bx bx-share-alt' ></i></a>
                        </div>
                    </div>
                </label>

                <label for="s2" id="slide2">
                    <div class="card-shop">
                        <div class="image-shop">
                            <img src="./img/v4.jpg" alt="">
                            <div class="dots-shop">
                                <button class="xam"></button>
                                <button class="xanh"></button>
                                <button class="red"></button>
                            </div>
                        </div>
                        <div class="infos-shop">
                            <span class="name">DUCATI PANIGALE V4 R</span>
                            <span class="lorem">Ducati Panigale V4 R is a high-end sports motorcycle equipped with a powerful V4 engine and advanced technology.</span>
                        </div>
                        <a href="./news/ducativ4.php" class="btn-contact" target="_blank">READ MORE</a>
                        <div class="socials-shop">
                            <a href=""><i class='bx bxs-cart' ></i></a>
                            <a href=""><i class='bx bx-heart' ></i></a>
                            <a href=""><i class='bx bxs-bookmarks' ></i></a>
                            <a href=""><i class='bx bx-share-alt' ></i></a>
                        </div>
                    </div>
                </label>

                <label for="s3" id="slide3">
                    <div class="card-shop">
                        <div class="image-shop">
                            <img src="./img/bwm2.jpg" alt="">
                            <div class="dots-shop">
                                <button class="xam"></button>
                                <button class="xanh"></button>
                                <button class="red"></button>
                            </div>
                        </div>
                        <div class="infos-shop">
                            <span class="name">Bwm s1000 RR</span>
                            <span class="lorem">BMW S1000RR: High-end sportbike with modern design and exceptional on-road and on-track performance.</span>
                        </div>
                        <a href="./news/bwms1000rr.php" class="btn-contact" target="_blank">READ MORE</a>
                        <div class="socials-shop">
                            <a href=""><i class='bx bxs-cart' ></i></a>
                            <a href=""><i class='bx bx-heart' ></i></a>
                            <a href=""><i class='bx bxs-bookmarks' ></i></a>
                            <a href=""><i class='bx bx-share-alt' ></i></a>
                        </div>
                    </div>
                </label>

                <label for="s4" id="slide4">
                    <div class="card-shop">
                        <div class="image-shop">
                            <img src="./img/r7.jpg" alt="">
                            <div class="dots-shop">
                                <button class="xam"></button>
                                <button class="xanh"></button>
                                <button class="red"></button>
                            </div>
                        </div>
                        <div class="infos-shop">
                            <span class="name">Yamaha R7</span>
                            <span class="lorem">Yamaha R7 is a new street sports motorcycle with modern design and excellent performance.</span>
                        </div>
                        <a href="./news/yamahar7.php" class="btn-contact" target="_blank">READ MORE</a>
                        <div class="socials-shop">
                            <a href=""><i class='bx bxs-cart' ></i></a>
                            <a href=""><i class='bx bx-heart' ></i></a>
                            <a href=""><i class='bx bxs-bookmarks' ></i></a>
                            <a href=""><i class='bx bx-share-alt' ></i></a>
                        </div>
                    </div>
                </label>

                <label for="s5" id="slide5">
                    <div class="card-shop">
                        <div class="image-shop">
                            <img src="./img/r6.jpg" alt="">
                            <div class="dots-shop">
                                <button class="xam"></button>
                                <button class="xanh"></button>
                                <button class="red"></button>
                            </div>
                        </div>
                        <div class="infos-shop">
                            <span class="name">Yamaha R6</span>
                            <span class="lorem">Yamaha R6: Sleek sports bike with high-speed performance on both the racetrack and the road.</span>
                        </div>
                        <a href="./news/yamahar6.php" class="btn-contact" target="_blank">READ MORE</a>
                        <div class="socials-shop">
                            <a href=""><i class='bx bxs-cart' ></i></a>
                            <a href=""><i class='bx bx-heart' ></i></a>
                            <a href=""><i class='bx bxs-bookmarks' ></i></a>
                            <a href=""><i class='bx bx-share-alt' ></i></a>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </section>

    <section class="news news-card">
        <div class="title-news">
            <h1>The world of Moto always has exciting events <i class='bx bxs-hot' ></i></h1>
            <div></div>
            <p>Exciting and unique news and events from the motorcycle community bring overflowing emotions to motorcycle enthusiasts.</p>
        </div>
        <div class="news-content swiper mySwiper-news">
            <div class="news-box swiper-wrapper">
                <div class="news-slide swiper-slide">
                    <div class="cards-slide">
                        <img src="./img/news1.jpg" alt="">

                        <div class="text-cards">
                            <h3><span>"MotoGP"</span> - This is a premier international motorcycle racing championship international organization that manages and oversees activities related to motorcycles worldwide.</h3>
                            <button><a href="./news/motogp.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="news-slide swiper-slide">
                    <div class="cards-slide">
                        <img src="./img/wsbk.jpg" alt="">

                        <div class="text-cards">
                            <h3><span>"WSBK"</span> - which is the world's top-level sport motorcycle racing championship that takes place annually with the participation of many riders and teams from countries around the world.</h3>
                            <button><a href="./news/wsbk.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="news-slide swiper-slide">
                    <div class="cards-slide">
                        <img src="./img/news3.jpg" alt="">

                        <div class="text-cards">
                            <h3><span>"2021 MotoGP"</span> - Fabio Quartararo won his first 2021 MotoGP race in Qatar, leading from start to finish with an impressive performance.</h3>
                            <button><a href="./html/news.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="news-slide swiper-slide">
                    <div class="cards-slide">
                        <img src="./img/news4.jpg" alt="">

                        <div class="text-cards">
                            <h3><span>"Multistrada V4"</span> -  is the new Ducati's versatile motorcycle model, equipped with a powerful V4 engine and advanced technology, suitable for various types of terrain.</h3>
                            <button><a href="./news/mv4.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="news-slide swiper-slide">
                    <div class="cards-slide">
                        <img src="./img/r7.jpg" alt="">

                        <div class="text-cards">
                            <h3><span>"Yamaha R7"</span> - Yamaha has just introduced the new mid-range sports bike, R7, with a 2-cylinder engine designed for performance and good handling on both highways and race tracks.</h3>
                            <button><a href="./news/yamahar7.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="news-slide swiper-slide">
                    <div class="cards-slide">
                        <img src="./img/news6.jpg" alt="">

                        <div class="text-cards">
                            <h3><span>"The 2021 MotoGP race"</span> - is taking place with exciting competition among top riders such as Marc Marquez, Joan Mir, and Fabio Quartararo.</h3>
                            <button><a href="./html/news.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="news-slide swiper-slide">
                    <div class="cards-slide">
                        <img src="./img/news7.jpg" alt="">

                        <div class="text-cards">
                            <h3><span>"KTM RC 8C"</span> - KTM has just launched a new limited edition motorcycle model, RC 8C, with only 100 units produced worldwide, designed for speed enthusiasts and professional racers.</h3>
                            <button><a href="./news/ktm8c.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="news-slide swiper-slide">
                    <div class="cards-slide">
                        <img src="./img/news8.jpg" alt="">

                        <div class="text-cards">
                            <h3><span>"Marc Marquez"</span> - is a Spanish motorcycle racer, 6-time consecutive MotoGP world champion from 2013 to 2018, and considered one of the greatest riders in the history of motorcycle racing.</h3>
                            <button><a href="./html/news.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="shop-card shop-card-top-2">
        <div class="title-shop-card">
            <h1>Essential motorcycle accessories.</h1>
            <div></div>
            <p>A variety of protective accessories when playing motorcycles.</p>
        </div>

        <div class="shop-card-content swiper mySwiper-shop-card">
            <div class="shop-card-box swiper-wrapper">
                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phukien1.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Helmets</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Motorcycle helmets are an important part of a motorcycle rider's protective clothing. It helps to protect the driver's head and face from injury in the event of an accident or unexpected collision.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phukien2.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Gloves</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Motorcycle gloves are an integral part of a driver's protective clothing. Gloves are designed to protect the user's hands and wrists in the event of an accident or collision.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phukien3.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Jackets</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Motorcycle jackets are one of the important parts of protective clothing for riders. They are designed to protect the user from wind, rain and impacts in the event of an accident.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phukien4.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Boots</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Motorcycle shoes are an important part of a rider's protective clothing. They are designed to protect the user's legs and feet in the event of an accident or collision.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phukien5.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Pants</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Motorcycle pants are an integral part of a rider's protective clothing. They are designed to protect the user's feet and table legs in the event of an accident or collision.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phukien6.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Protection</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Motorcycle protection refers to the gear and equipment used to protect the rider and passenger from potential hazards while riding a motorcycle.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="shop-card shop-card-top">
        <div class="title-shop-card">
            <h1>necessary motorcycle components and parts</h1>
            <div></div>
            <p>"The important spare parts and components for your motorcycle that you need to have on hand.</p>
        </div>

        <div class="shop-card-content content-top swiper mySwiper-shop-card">
            <div class="shop-card-box swiper-wrapper">
                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phutung1.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Tires</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Motorcycle tires are important to the driving system and directly affect driving performance and safety, providing good grip and minimizing the risk of loss of control.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phutung2.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Drive</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>The powertrain is crucial in motorcycles, transferring power from the engine to the wheels. It includes chain drives, belt drives, and gear drives.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phutung3.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Electrical</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>The electrical system on a motorcycle includes components such as the starter motor, charging system, headlights, turn signals, taillights and other electronic controls.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phutung4.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Oils & Fluids</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Oils and fluids are vital to the performance and longevity of your motorcycle. Includes a variety of oils such as engine oils, transmission oils, brake fluids and coolants.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phutung5.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Handlebars</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>The motorcycle handlebars are a critical component of the motorcycle that allow the rider to control the direction and movement of the motorcycle.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>

                <div class="shop-card-slide swiper-slide">
                    <div class="card-content">
                        <img src="./img/phutung6.png" alt="">

                        <div class="text-card-contnet">
                            <h1>Motorcycle Seats</h1>
                            <div class="star-card">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <p>Motorcycle saddles made of foam and covered with leather or synthetic fabric offer comfort, reduce the risk of losing control, and keep the driver and passenger in place.</p>
                            <button class="buy"><a href="./html/shop.php">Buy Now <i class='bx bxs-cart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="banner">
        <div class="title-banner">
            <h1>The life is really wonderful with a motorcycle</h1>
            <div></div>
            <p>Let's share some interesting moments together.</p>
        </div>
        <div class="banner-content">
            <div class="content-1">

                <video id="player" muted controls loop autoplay>
                    <source src="https://drive.google.com/uc?export=view&id=1C092IgrrIv9eLrxDLMh8p0-gCJqCFKp-" type="video/mp4" />
                  
                    <!-- Captions are optional -->
                    <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
                </video>
            </div>

            <div class="content-2 swiper mySwiper-content-2">
                <div class="box-content-2 swiper-wrapper">
                    <div class="slide-content-2 swiper-slide">
                        <img src="./img/login.jpg" alt="">
                        <div class="text-slide-content-2">
                            <p>
                                Sports motorcycles are a popular type of vehicle
                                known for their speed and excitement, featuring a
                                sporty design, powerful engine, and efficient braking
                                system. It is also a thrilling sport with a large following
                                all over the world.
                            </p>
                        </div>
                    </div>

                    <div class="slide-content-2 swiper-slide">
                        <img src="./img/bw4.jpg" alt="">
                        <div class="text-slide-content-2">
                            <p>
                                "Riding sports motorcycles is an exciting and thrilling hobby.
                                With their speed and sporty design, sports motorcycles are a popular
                                type of vehicle worldwide. Riding a sports motorcycle requires skill
                                and high levels of concentration, but it also gives riders a sense of
                                excitement and challenges themselves.
                            </p>
                        </div>
                    </div>

                    <div class="slide-content-2 swiper-slide">
                        <img src="./img-news/motogp.jpg" alt="">
                        <div class="text-slide-content-2">
                            <p>
                                Sports motorcycle races are always thrilling and exciting events.
                                With the speed and driving skills of the riders, sports motorcycle
                                races around the world always attract the attention of a large number
                                of fans.
                            </p>
                        </div>
                    </div>

                    <div class="slide-content-2 swiper-slide">
                        <img src="./img/r1.jpg" alt="">
                        <div class="text-slide-content-2">
                            <p>
                                Riding sports motorcycles is not just about driving fast and challenging oneself
                                , but also a lifestyle. Sports motorcycle enthusiasts often have unique fashion styles
                                and personalities, showcasing their individuality and confidence.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                      <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
            </div>
        </div>
    </section>

    <section class="tour">
        <div class="title-tour">
            <h1>Great organizations in the moto community</h1>
            <div></div>
            <p>The large organizations in the motorcycle community play an important role in promoting the development of the motorcycle industry, ensuring safety, and creating a community for riders and enthusiasts around the world to connect and share their passion for motorcycles.</p>
        </div>
        <div class="tour-box">
            <div class="tour-content">
                <div class="text-tour">
                    <h1><span>"</span>Fédération Internationale <br> de Motocyclisme<span>"</span></h1>
                    <p>Fédération Internationale de Motocyclisme (FIM) is an international organization that manages and oversees activities related to motorcycles worldwide. It was founded in 1904 br in Paris, France, and has its headquarters in Mies, Switzerland.</p>
                    <button><a href="./news/fim.php" target="_blank">READ MORE <i class='bx bx-right-arrow-alt'></i></a></button>
                </div>
            </div>
    
            <div class="tour-img">
                <img src="./img/tour-2.png" alt="">
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="title-blog">
            <h1>The life is really wonderful with a motorcycle</h1>
            <div></div>
            <p>Let's share some interesting moments together.</p>
        </div>
        <div class="blog-content">
            <div class="card-blog card-top">
                <div class="img-cards-blog">
                    <a href="./news/exploring.php" target="_blank"><img src="./img/blog-2.jpg" alt=""></a>
                </div>

                <div class="text-cards-blog">
                    <a href="./news/exploring.php" target="_blank"><h1>"Thrilling Sports Motorcycles"</h1></a>
                    <p>Moto Racing: The high-speed sport for motorcycle enthusiasts with diverse races and a passionate community. Safety is crucial, but the thrill is worth it.</p>
                    <div class="cmt-blog">
                        <img src="./img/avt-1.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Hong An<i class='bx bxs-check-circle' ></i></h3>
                        <div class="item-blog">
                            <button><i class='bx bx-heart' ></i></button>
                            <button><i class='bx bx-chat' ></i></button>
                            <button><i class='bx bx-share' ></i></button>
                        </div>
                    </div>
                    <span><i class='bx bx-time-five' ></i> November 29th, 2022</span>
                </div>
            </div>

            <div class="card-blog card-bot">
                <div class="img-cards-blog">
                    <a href="./news/riding.php" target="_blank"><img src="./img-news/life1.jpg" alt=""></a>
                </div>

                <div class="text-cards-blog">
                    <a href="./news/riding.php" target="_blank"><h1>The Thrill of Riding Sports Motorcycles</h1></a>
                    <p>Sports motorcycles offer a thrilling and challenging experience, with their high speed and sleek design making them a popular choice globally.</p>
                    <div class="cmt-blog">
                        <img src="./img/avt-2.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Van Hoa<i class='bx bxs-check-circle' ></i></h3>
                        <div class="item-blog">
                            <button><i class='bx bx-heart' ></i></button>
                            <button><i class='bx bx-chat' ></i></button>
                            <button><i class='bx bx-share' ></i></button>
                        </div>
                    </div>
                    <span><i class='bx bx-time-five' ></i> November 8th, 2019</span>
                </div>
            </div>

            <div class="card-blog card-top">
                <div class="img-cards-blog">
                    <a href="./news/h2r=.php"><img src="./img-news/bg-4.jpeg" alt=""></a>
                </div>

                <div class="text-cards-blog">
                    <a href="./news/h2r.php" target="_blank"><h1>Kawasaki H2R: Technology and Speed</h1></a>
                    <p>Kawasaki H2R by Kawasaki Motors is a supercharg high-performance motorcycle with a sleek design, and is among the world's fastest.</p>
                    <div class="cmt-blog">
                        <img src="./img/avt-3.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Ba Hai<i class='bx bxs-check-circle' ></i></h3>
                        <div class="item-blog">
                            <button><i class='bx bx-heart' ></i></button>
                            <button><i class='bx bx-chat' ></i></button>
                            <button><i class='bx bx-share' ></i></button>
                        </div>
                    </div>
                    <span><i class='bx bx-time-five' ></i> November 3th, 2020</span>
                </div>
            </div>

            <div class="card-blog card-bot">
                <div class="img-cards-blog">
                    <a href="./news/racing.php"><img src="./img-news/wsbk2.jpg" alt=""></a>
                </div>

                <div class="text-cards-blog">
                    <a href="./news/racing.php"><h1>Top Sports Motorcycle Racing Events</h1></a>
                    <p>Sports motorcycle races are thrilling and challeng events that captivate global audiences with high speeds and technical driving skills.</p>
                    <div class="cmt-blog">
                        <img src="./img/avt-4.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Thang<i class='bx bxs-check-circle' ></i></h3>
                        <div class="item-blog">
                            <button><i class='bx bx-heart' ></i></button>
                            <button><i class='bx bx-chat' ></i></button>
                            <button><i class='bx bx-share' ></i></button>
                        </div>
                    </div>
                    <span><i class='bx bx-time-five' ></i> November 18th, 2021</span>
                </div>
            </div>  
        </div>
    </section>
    
    <footer class="footer">
        <div class="footer-menu">
            <ul class="office">
                <li>
                    <div class="logo-footer">
                        <a href="#"><span><i class='bx bxl-flutter'></i>RideCulture<p>Moto<i class='bx bx-paper-plane' ></i></p></span></a>
                    </div>
                </li>

                <li class="text-footer">
                    RideCulture Moto is a website specializing in information on sports motorcycles,
                    notable news, and events in the Moto world. It provides essential accessories
                    for motorcycle enthusiasts and is a place to share wonderful moments with motorcycles
                    to showcase their passion.
                </li>
            </ul>

            <ul class="office">
                <h3>Office <div class="under-line"><span></span></div></h3>
                <li><p><i class='bx bx-right-arrow-alt' ></i> <span><i class='bx bxl-medium-old'></i></span> RideCulture Moto</p></li>
                <li><p><i class='bx bx-right-arrow-alt' ></i> <span><i class='bx bx-map' ></i></span> Urban Area, Ngu Hanh Son District, Da Nang</p></li>
                <li><p><i class='bx bx-right-arrow-alt' ></i> <span><i class='bx bx-envelope' ></i></span> rideculturemoto@gmail.com</p></li>
                <li><p><i class='bx bx-right-arrow-alt' ></i> <span><i class='bx bxs-phone' ></i></span> +84779503454</p></li>
            </ul>

            <ul class="office">
                <h3>Links <div class="under-line"><span></span></div></h3>
                <li><a href="./index.php"><p><i class='bx bx-right-arrow-alt' ></i> Home</p></a></li>
                <li><a href="./html/news.php"><p><i class='bx bx-right-arrow-alt' ></i> News</p></a></li>
                <li><a href="./html/shop.php"><p><i class='bx bx-right-arrow-alt' ></i> Shop</p></a></li>
                <li><a href="./html/blog.php"><p><i class='bx bx-right-arrow-alt' ></i> Blog</p></a></li>
            </ul>

            <ul class="office">
                <h3>Newsletter <div class="under-line"><span></span></div></h3>
                <li>
                    <form action="" class="contact">
                        <button><i class='bx bx-envelope' ></i></button>
                        <input type="email" name="email" id="email" placeholder="Enter email..">
                        <button type="submit"><i class='bx bx-send' ></i></button>
                    </form>
                </li>

                <li class="social-footer">
                    <button><i class='bx bxl-facebook' ></i></button>
                    <button><i class='bx bxl-instagram' ></i></button>
                    <button><i class='bx bxl-twitter' ></i></button>
                    <button><i class='bx bxl-youtube' ></i></button>
                </li>
            </ul>
        </div>
    </footer>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./js/js.js"></script>
</body>
</html>