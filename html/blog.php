<?php
    require('../connectDB/connect.php');
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
            header("Location: ../html/user.php");
        }
        else{
            header("Location: ../html/login.php");
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/blog.css">
    <script src="path/to/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
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
            <a href="../index.php" class="active-mark">HOME</a>
            <a href="../html/news.php" class="active-mark">NEWS</a>
            <a href="../html/shop.php" class="active-mark">SHOP</a>
            <a href="#">BLOG</a>
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
            <input type="text" placeholder="Enter Search...">
            <i class='bx bx-search' ></i type="submit">
        </form>
    </div>

    <section class="blog-home">
        <div class="blog-home-content swiper mySwiper-blog">
            <div class="blog-home-box swiper-wrapper">
                <div class="blog-home-slide swiper-slide">
                    <img src="../img/blog-2.jpg" alt="">

                    <div class="text-blog-home">
                        <h1>Thrilling Sports Motorcycles</h1>
                        <p>Moto Racing: The high-speed sport for motorcycle enthusiasts with diverse races and a passionate community. Safety is crucial, but the thrill is worth it.</p>
                        <a href="../news/exploring.php"><button>Read More<i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
    
                <div class="blog-home-slide swiper-slide">
                    <img src="../img-news/life1.jpg" alt="">

                    <div class="text-blog-home">
                        <h1>The Thrill of Riding Sports Motorcycles</h1>
                        <p>Sports motorcycles offer a thrilling and challenging experience, with their high speed and sleek design making them a popular choice globally.</p>
                        <a href="../news/riding.php"><button>Read More<i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
    
                <div class="blog-home-slide swiper-slide">
                    <img src="../img/Awesome Kawasaki Ninja Live Wallpaper.jpg" alt="">

                    <div class="text-blog-home">
                        <h1>Kawasaki H2R: Technology and Speed</h1>
                        <p>The Kawasaki H2R by Kawasaki Motors is a supercharg highperformance motorcycle with a sleek design, and is among the world's fastest.</p>
                        <a href="../news/h2r.php"><button>Read More<i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
    
                <div class="blog-home-slide swiper-slide">
                    <img src="../img-news/wsbk2.jpg" alt="">

                    <div class="text-blog-home">
                        <h1>Top Sports Motorcycle Racing Events</h1>
                        <p>Sports motorcycle races are thrilling and challenging events that captivate global audiences with high speeds and technical driving skills.</p>
                        <a href="../news/racing.php"><button>Read More<i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
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
                    <img src="../img/blog-2.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>Thrilling Sports Motorcycles</h1>
                    <p>Moto Racing: The high-speed sport for motorcycle enthusiasts with diverse races and a passionate community. Safety is crucial, but the thrill is worth it.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-1.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">An<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img-news/life1.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>The Thrill of Riding Sports Motorcycles</h1>
                    <p>Sports motorcycles offer a thrilling and challenging experience, with their high speed and sleek design making them a popular choice globally.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-2.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Hoa<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img/Awesome Kawasaki Ninja Live Wallpaper.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>Kawasaki H2R: Technology and Speed</h1>
                    <p>The Kawasaki H2R by Kawasaki Motors is a supercharged high-performance motorcycle with a sleek design, and is among the world's fastest.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-3.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Hai<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img-news/wsbk2.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>Top Sports Motorcycle Racing Events</h1>
                    <p>Sports motorcycle races are thrilling and challenging events that captivate global audiences with high speeds and technical driving skills.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-4.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Dat<i class='bx bxs-check-circle' ></i></h3>
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
    
    <section class="review">
        <div class="title-review">
            <h1>interesting blog about moto sport<div></div></h1>
            <p>Read blogs, news, car reviews, share experiences and interesting moments quickly.</p>
        </div>
        <div class="review-content">
            <div class="review-box left">
                <div class="text-review">
                    <h1>Twitch Stenberg’s Custom Indian Sport Chief</h1>
                    <p>
                        Twitch Stenberg's Custom Indian Sport Chief is a unique motorcycle built based on the Indian Sport Chief model by Indian Motorcycle. The bike features an S&S T143 engine, doubling the power to 170 horsepower and 150 ft-lbs of torque. The bike has a custom stainless steel frame, painted blue, and a sporty appearance with a 21-inch front and 18-inch rear wheel. Other upgrades include Ohlins suspension, Brembo brakes, Vance & Hines exhaust, and a Bluetooth sound system. This bike showcases Twitch Stenberg's creativity and adventurous spirit, delivering a one-of-a-kind motorcycle with both exceptional performance and aesthetics. It's highly regarded for its distinctive style and superior performance and is a standout in the custom motorcycle community.
                    </p>

                    <div class="info-review">
                        <div class="avt">
                            <img src="../img/avt-4.jpg" alt="" class="img-review">
                            <h3 class="name-review">Dat<i class='bx bxs-check-circle' ></i></h3>
                        </div>
                        <div class="item-review">
                            <button><i class='bx bx-heart' ></i></button>
                            <button><i class='bx bx-chat' ></i></button>
                            <button><i class='bx bx-share' ></i></button>
                        </div>
                    </div>
                    <span><i class="bx bx-time-five"></i>November 18th, 2021</span>
                </div>

                <img src="../img-news/review1.jpg" alt="">
            </div>

            <div class="review-box right">
                <img src="../img-news/review2.jpg" alt="">

                <div class="text-review right">
                    <h1>Hydrogen Power for Motorcycles?</h1>
                    <p>
                        The transition from internal combustion to battery electric power for motorcycles faces several challenges, including the weight and recharge time of batteries. Four Japanese motorcycle manufacturers are collaborating to explore the possibility of powering motorcycles with hydrogen as an internal combustion piston engine fuel. Hydrogen could offer a carbon-neutral alternative to internal combustion engines, with the exhaust being water. However, the lack of large-scale hydrogen production and distribution facilities is a significant challenge. Hydrogen is also challenging to store, requiring large volumes or high-pressure tanks. Motorcycle manufacturers are exploring solid materials and reversible chemical means of storing hydrogen.
                    </p>

                    <div class="info-review">
                        <div class="avt">
                            <img src="../img/avt-1.jpg" alt="" class="img-review">
                            <h3 class="name-review">An<i class='bx bxs-check-circle' ></i></h3>
                        </div>
                        <div class="item-review">
                            <button><i class='bx bx-heart' ></i></button>
                            <button><i class='bx bx-chat' ></i></button>
                            <button><i class='bx bx-share' ></i></button>
                        </div>
                    </div>
                    <span><i class="bx bx-time-five"></i>November 18th, 2021</span>
                </div>
            </div>

            <div class="review-box left">
                <div class="text-review">
                    <h1>Eight Great Bikes With Low Seat Heights</h1>
                    <p>
                        The seat height of a motorcycle can be a determining factor for many smaller, shorter, or novice riders. While traditionally, cruisers, scooters, minibikes, or small-displacement machines were the only options for riders with inseam challenges, there are now a wider variety of bike styles with 30-inch-and-under seat heights to choose from. In this list of eight bikes with low seat heights, there are outliers like the 2023 Ducati Scrambler Icon with a 30.7-inch-high perch that can be achieved by ordering up the low accessory seat option, the 2023 Honda Gold Wing Automatic DCT with a 29.3-inch seat, and the 2023 Indian Scout with a 25.6-inch seat height. Other bikes on the list include the 2023 Harley-Davidson Nightster, 2023 Ducati Monster+, 2023 Triumph Speed Twin 900, 2023 Honda Shadow Phantom, and the 2023 Suzuki SV650.
                    </p>

                    <div class="info-review">
                        <div class="avt">
                            <img src="../img/avt-2.jpg" alt="" class="img-review">
                            <h3 class="name-review">Hoa<i class='bx bxs-check-circle' ></i></h3>
                        </div>
                        <div class="item-review">
                            <button><i class='bx bx-heart' ></i></button>
                            <button><i class='bx bx-chat' ></i></button>
                            <button><i class='bx bx-share' ></i></button>
                        </div>
                    </div>
                    <span><i class="bx bx-time-five"></i>November 18th, 2021</span>
                </div>

                <img src="../img-news/review3.jpg" alt="">
            </div>

            <div class="review-box right">
                <img src="../img-news/review4.jpg" alt="">

                <div class="text-review">
                    <h1>Vance & Hines Gen III Hayabusa Pro Stock Motorcycle</h1>
                    <p>
                        This article discusses the evolution of NHRA Pro Stock Motorcycle drag racing, which began as a modified production motorcycle class in the 1970s. As the performance of the motorcycles increased, the need for specialized parts grew as well. Vance & Hines, a leading manufacturer of high-performance motorcycle parts, developed a new engine designed specifically for drag racing, based on the Harley-Davidson V-twin but with a much larger displacement and CNC-milled from solid billet. This engine was so successful that NHRA approved a complete billet Suzuki engine with four valves per cylinder to compete with the billet Harley engines. The article also discusses how the NHRA adjusts rules to maintain a level playing field and how experienced riders can still be competitive despite not having the latest and greatest technology.
                    </p>

                    <div class="info-review">
                        <div class="avt">
                            <img src="../img/avt-3.jpg" alt="" class="img-review">
                            <h3 class="name-review">Hai<i class='bx bxs-check-circle' ></i></h3>
                        </div>
                        <div class="item-review">
                            <button><i class='bx bx-heart' ></i></button>
                            <button><i class='bx bx-chat' ></i></button>
                            <button><i class='bx bx-share' ></i></button>
                        </div>
                    </div>
                    <span><i class="bx bx-time-five"></i>November 18th, 2021</span>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="title-blog">
            <h1>Latest Motorcycle Reviews</h1>
            <div></div>
            <p>Blog reviews sports motorcycles.</p>
        </div>
        <div class="blog-content">
            <div class="card-blog card-top">
                <div class="img-cards-blog">
                    <img src="../img-news/blog-1.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>2023 Ducati Multistrada V4 Rally First Ride</h1>
                    <p>The Ducati Multistrada V4 Rally is a formidable adventure bike with advanced features that make it a worthy contender against the BMW 1250 GS Adventure.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-1.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">An<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img-news/blog-2.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>2023 Suzuki GSX-8S First Ride</h1>
                    <p>Suzuki's Stop-On-Start switch has three positions and features the Easy Start System, allowing the engine to fire with just one press of the starter button, without the need to hold it down.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-2.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Hoa<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img-news/blog-3.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>2023 Ducati Streetfighter V4 S First Ride</h1>
                    <p>2023 Ducati Streetfighter V4 S offers new riding modes, configurable options, and improved Engine Brake Control (EBC) EVO 2 software for enhanced braking stability and cornering control.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-3.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Hai<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img-news/blog-5.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>2023 Kawasaki KLR650 S First Ride</h1>
                    <p>The 2023 Kawasaki KLR650 S offers an exciting first ride with its impressive performance and features, making it a top contender in its class.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-4.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Dat<i class='bx bxs-check-circle' ></i></h3>
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

    <section class="blog">
        <div class="title-blog">
            <h1>Motorcycle Comparisons</h1>
            <div></div>
            <p>Comparing motorcycles head-to-head.</p>
        </div>

        <div class="blog-content">
            <div class="card-blog card-top">
                <div class="img-cards-blog">
                    <img src="../img-news/blog-4.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>Aprilia vs BMW vs Ducati superbikes.</h1>
                    <p>Top superbikes: Aprilia RSV4 Factory, BMW M 1000 RR, Ducati Panigale V4 SP2, modern design, immense power, perfect for speed enthusiasts on the racetrack.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-1.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">An<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img-news/blog-6.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>How Much Better Is the 2022 Ducati Panigale V4 S?</h1>
                    <p>The 2022 Ducati Panigale V4 S boasts significant improvements over its predecessor, with enhanced performance, updated features, and improved rider comfort.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-2.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Hoa<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img-news/blog-7.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>2021 Big-Bore Adventure Shootout</h1>
                    <p>2021 Big-Bore Adventure Shootout compares BMW R 1250 GS, KTM 1290 Super Adventure R, and Yamaha Super Ténéré ES to determine the best adventure bike.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-3.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Hai<i class='bx bxs-check-circle' ></i></h3>
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
                    <img src="../img-news/blogr12.jpg" alt="">
                </div>

                <div class="text-cards-blog">
                    <h1>Open-Class Adventure Comparison Test</h1>
                    <p>Open-class adventure bike test compares KTM 1290 Super Adventure R, BMW R 1250 GS Adventure, and Yamaha Super Ténéré ES for the top performer.</p>
                    <div class="cmt-blog">
                        <img src="../img/avt-4.jpg" alt="" class="img-blog">
                        <h3 class="name-blog">Dat<i class='bx bxs-check-circle' ></i></h3>
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
                <li><a href="../index.php"><p><i class='bx bx-right-arrow-alt' ></i> Home</p></a></li>
                <li><a href="../html/news.php"><p><i class='bx bx-right-arrow-alt' ></i> News</p></a></li>
                <li><a href="../html/shop.php"><p><i class='bx bx-right-arrow-alt' ></i> Shop</p></a></li>
                <li><a href="../html/blog.php"><p><i class='bx bx-right-arrow-alt' ></i> Blog</p></a></li>
            </ul>

            <ul class="office">
                <h3>Newsletter <div class="under-line"><span></span></div></h3>
                <li>
                    <form action="" class="contact">
                        <button><i class='bx bx-envelope' ></i></button>
                        <input type="email" name="email" id="email" placeholder="Enter email...">
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

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../js/blog.js"></script>
</body>
</html>