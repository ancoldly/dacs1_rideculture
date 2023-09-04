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
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="path/to/scrollreveal.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/news.css">
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
            <a href="#" class="active-mark">NEWS</a>
            <a href="../html/shop.php" class="active-mark">SHOP</a>
            <a href="../html/blog.php">BLOG</a>
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

    <seciton class="home-news">
        <div class="home-content swiper mySwiper-news">
            <div class="home-box swiper-wrapper">
                <div class="home-slide swiper-slide">
                    <img src="../img-news/bg-2.jpg" alt="">

                    <div class="text-slide">
                        <h4>Superbike World Championship</h4>
                        <p>This is the second-most prestigious international endurance motorcycle racing championship in the world, exclusively for large displacement
                        road racing motorcycles, and featuring races on tracks around the globe</p>
                        <a href="../news/wsbk.php" target="_blank"><button><p>EXPLORE MORE</p><i class='bx bx-chevron-right'></i></button></a>
                    </div>
                </div>

                <div class="home-slide swiper-slide">
                    <img src="../img-news/bg-1.jpg" alt="">

                    <div class="text-slide">
                        <h4>"MotoGP"</h4>
                        <p>This is the largest endurance motorcycle racing championship in the world, attracting top riders
                        and held on famous tracks such as Mugello, Silverstone, and Phillip Island.</p>
                        <a href="../news/motogp.php" target="_blank"><button><p>EXPLORE MORE</p><i class='bx bx-chevron-right'></i></button></a>
                    </div>
                </div>

                <div class="home-slide swiper-slide">
                    <img src="../img-news/bg-3.jpg" alt="">

                    <div class="text-slide">
                        <h4>Yamaha R7</h4>
                        <p>This is a new large displacement motorcycle model from Yamaha, introduced in 2021 at the EICMA exhibition. This model replaces the R6, with a sporty design and
                        equipped with an engine similar to the MT-07 naked bike model.</p>
                        <a href="../news/yamahar7.php" target="_blank"><button><p>EXPLORE MORE</p><i class='bx bx-chevron-right'></i></button></a>
                    </div>
                </div>

                <div class="home-slide swiper-slide">
                    <img src="../img-news/bg-4.jpeg" alt="">

                    <div class="text-slide">
                        <h4>KAWASAKI NINJA H2R</h4>
                        <p>H2R is one of the notable high-performance sport motorcycle models from Kawasaki. Introduced
                        in 2015, H2R quickly became one of the most notable high-performance sport motorcycles on the market.</p>
                        <a href="../news/h2r.php" target="_blank"><button><p>EXPLORE MORE</p><i class='bx bx-chevron-right'></i></button></a>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </seciton>


    <section class="news-content">
        <div class="nav-news">
            <div class="title-news">
                <h1>NEWS<div></div></h1>
                <p>Update news, interesting facts about moto</p>
            </div>

            <li class="title-select">
                <button class="menu-select">Select news<i class='bx bxs-down-arrow'></i><div></div></button>
                <p>Summary of interesting news</p>
                <ul id="select-news" class="select-newscontent">
                    <li class="bgrli active">News hot</li>
                    <li>MotoGP</li>
                    <li>WSBK</li>
                    <li>Moto Profile</li>
                </ul>
            </li>
        </div>

        <div class="news-slide active">
            <div class="news-hot">
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/news1.jpg" alt="">

                        <div class="text-card">
                            <h1>MotoGP</h1>
                            <p>
                                MotoGP is a premier motorcycle racing championship featuring high-performance
                                bikes and skilled riders from across the world. The season is comprised of races
                                on circuits worldwide, with points accumulated to determine the champion.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/wsbk.jpg" alt="">

                        <div class="text-card">
                            <h1>WSBK</h1>
                            <p>
                                WSBK is a global sports motorcycle racing championship
                                featuring high-performance bikes and top riders. The championship is
                                contested over multiple rounds, with points earned to determine the winner.
                                The competition has seen some of the most intense moments in motorcycle racing history. 
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/news3.jpg" alt="">

                        <div class="text-card">
                            <h1>2021 MotoGP race</h1>
                            <p>
                                Fabio Quartararo led from start to finish in the 2021 MotoGP
                                race in Qatar, achieving an impressive victory. The Yamaha rider's
                                dominant performance marks a strong start to the season and sets the
                                stage for an exciting championship with tough competition from other top
                                riders and teams.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/news4.jpg" alt="">

                        <div class="text-card">
                            <h1>Multistrada V4</h1>
                            <p>
                                The Ducati Multistrada V4 is a highly anticipated motorcycle that
                                features a powerful V4 engine, advanced technology, and radar-based
                                adaptive cruise control. It is designed for adventure and touring, with
                                a comfortable ride and versatile performance capabilities.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="news-hot">
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/r7.jpg" alt="">

                        <div class="text-card">
                            <h1>Yamaha R7</h1>
                            <p>
                                The Yamaha R7 is a highly anticipated sports
                                bike with a 689cc engine, lightweight chassis, and advanced electronics.
                                It is designed for both street and track use and is set to be a top
                                contender in the middleweight sports bike category.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/news6.jpg" alt="">

                        <div class="text-card">
                            <h1>The 2021 MotoGP</h1>
                            <p>
                                Top riders like Marquez, Mir, and Quartararo are making this
                                season of motorcycle racing thrilling and competitive, with Marquez's
                                return after a long injury layoff adding to the excitement.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/news7.jpg" alt="">

                        <div class="text-card">
                            <h1>KTM RC 8C</h1>
                            <p>
                                KTM's limited edition RC 8C sports bike boasts a lightweight frame, powerful engine,
                                and top-of-the-line components, making it highly sought-after among racing enthusiasts.
                                With only 100 units available worldwide, it is an exclusive and rare motorcycle.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/news8.jpg" alt="">

                        <div class="text-card">
                            <h1>"Marc Marquez"</h1>
                            <p>
                                The racer in question is Marc Marquez, who has achieved numerous
                                records and accolades throughout his career. He is known for his
                                aggressive riding style, incredible speed, and exceptional skills on
                                the track. 
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-slide">
            <div class="news-hot">
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/news1.jpg" alt="">

                        <div class="text-card">
                            <h1>The MotoGP 2023</h1>
                            <p>
                                The MotoGP 2023 season is currently underway with many exciting races taking place. Teams and riders are pushing themselves to the limit to win races, creating thrilling and exciting moments in motorcycle racing. 
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/news8.jpg" alt="">

                        <div class="text-card">
                            <h1>"Marc Marquez"</h1>
                            <p>
                                The racer in question is Marc Marquez, who has achieved numerous
                                records and accolades throughout his career. He is known for his
                                aggressive riding style, incredible speed, and exceptional skills on
                                the track. 
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3.jpeg" alt="">

                        <div class="text-card">
                            <h1>The MotoGP 2023</h1>
                            <p>
                                Is about the fierce competition between Joan Mir and Fabio Quartararo for the MotoGP 2023 championship title. Both riders have shown impressive performances and are determined to win. Mir is the reigning MotoGP world champion, while Quartararo is a promising young rider in top form.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new4.jpg" alt="">

                        <div class="text-card">
                            <h1>Jorge Martin and Enea Bastianini</h1>
                            <p>
                                Jorge Martin and Enea Bastianini are two young and talented riders who are making a name for themselves in the MotoGP 2023 season, with impressive performances and promising potential for the future of the sport.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="news-hot">
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/r7.jpg" alt="">

                        <div class="text-card">
                            <h1>Yamaha R7</h1>
                            <p>
                                The Yamaha R7 is a highly anticipated sports
                                bike with a 689cc engine, lightweight chassis, and advanced electronics.
                                It is designed for both street and track use and is set to be a top
                                contender in the middleweight sports bike category.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new5.jpg" alt="">

                        <div class="text-card">
                            <h1>Suzuki Withdraws from MotoGP</h1>
                            <p>
                                Is about Suzuki's announcement to withdraw from MotoGP at the end of this season. Suzuki is a famous and long-standing team in MotoGP history, and their decision has surprised and disappointed fans worldwide.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new6.jpg" alt="">

                        <div class="text-card">
                            <h1>2023 MotoGP race -  GP Catalonia in Spain</h1>
                            <p>
                                MotoGP teams preparing for the iconic GP Catalonia in Spain, one of the most anticipated races in the 2023 season. The teams are working hard to deliver impressive performances in this thrilling and competitive race, featuring the world's top riders and attracting millions of fans worldwide.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img/news4.jpg" alt="">

                        <div class="text-card">
                            <h1>Multistrada V4</h1>
                            <p>
                                The Ducati Multistrada V4 is a highly anticipated motorcycle that
                                features a powerful V4 engine, advanced technology, and radar-based
                                adaptive cruise control. It is designed for adventure and touring, with
                                a comfortable ride and versatile performance capabilities.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-slide">
            <div class="news-hot">
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3-1.jpg" alt="">

                        <div class="text-card">
                            <h1>World Superbike 2023</h1>
                            <p>
                                World Superbike 2023 season has begun with the participation of many top riders. World Superbike is an international road racing motorcycle championship held annually, attracting the attention of fans around the world.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3-2.jpg" alt="">

                        <div class="text-card">
                            <h1>Rea dominates WSBK as top rider</h1>
                            <p>
                                Jonathan Rea, the 7-time consecutive World Superbike champion who is aiming for an 8th title in the 2023 season. Rea is considered one of the top riders in the sport and has set numerous world records, earning recognition and praise from fans and experts worldwide.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3-3.jpg" alt="">

                        <div class="text-card">
                            <h1>Toprak Razgatlıoğlu</h1>
                            <p>
                                Toprak Razgatlıoğlu, a Turkish rider who won his first victory in the opening race of the 2023 World Superbike season. Razgatlıoğlu is showing impressive form this season, consistently leading the championship standings.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3-4.jpg" alt="">

                        <div class="text-card">
                            <h1>Ducati renews contract with Redding</h1>
                            <p>
                                Ducati renews Scott Redding's contract for WSBK 2023, demonstrating trust in his impressive racing performances and their shared ambition for conquering new challenges in the upcoming season.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="news-hot">
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3-5.jpg" alt="">

                        <div class="text-card">
                            <h1>Yamaha returns to WSBK 2023</h1>
                            <p>
                                Yamaha has announced their return to World Superbike with the new YZF-R1 for the 2023 season. This marks Yamaha's comeback to the series since 2011, promising to bring in new competition.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3-6.jpg" alt="">

                        <div class="text-card">
                            <h1>Kawasaki introduces new ZX-10RR</h1>
                            <p>
                                Kawasaki unveils the ZX-10RR, a new bike for professional racers and enthusiasts. With a 998cc 4-cylinder engine, it delivers 204 horsepower and 114 Nm of torque, complemented by improved suspension and braking systems.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3-8.jpg" alt="">

                        <div class="text-card">
                            <h1>WSBK 2023: Top Riders and Developments</h1>
                            <p>
                                Top riders compete in WSBK 2023 with exciting developments, including Yamaha's return and Kawasaki's new ZX-10RR. COVID-19 cancels Phillip Island race, but fans are drawn to the season's intense competition and Rea's 7 consecutive world championships.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new3-7.jpg" alt="">

                        <div class="text-card">
                            <h1>Leon Haslam Joins Honda for WSBK 2023</h1>
                            <p>
                                Leon Haslam, a seasoned British rider with championship titles in European Superstock 1000 and British Superbike, joins Honda for WSBK 2023, bringing valuable experience and talent to the team's race for victory.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-slide">
            <div class="news-hot">
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new4-1.jpeg" alt="">

                        <div class="text-card">
                            <h1>Valentino Rossi</h1>
                            <p>
                                Valentino Rossi is a famous Italian motorcycle racer, born on February 16, 1979 in Urbino, Italy. He is considered one of the greatest motorcycle racers in history, with 7 MotoGP world championships and 9 world championships in all motorcycle racing categories.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new4-2.jpg" alt="">

                        <div class="text-card">
                            <h1>Marc Márquez</h1>
                            <p>
                                Marc Márquez is a Spanish motorcycle racer who has won 6 MotoGP world championships and 1 Moto2 world championship. He is one of the youngest and most successful racers in the history of MotoGP, with superior speed and skills on the race track.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new4-3.jpg" alt="">

                        <div class="text-card">
                            <h1>Mick Doohan</h1>
                            <p>
                                Mick Doohan is an Australian motorcycle racer who won 5 consecutive MotoGP world championships from 1994 to 1998 and is considered one of the greatest racers in the history of MotoGP. After retiring from racing, he became a racing team manager and was a judge on the show Top Gear Australia.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new48.jpg" alt="">

                        <div class="text-card">
                            <h1>Jorge Lorenzo</h1>
                            <p>
                                Jorge Lorenzo is a Spanish motorcycle racer who won 5 MotoGP world championships and is considered one of the most talented racers in MotoGP history. After retiring from racing, he became a racing commentator and also participates in charitable activities.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="news-hot">
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new4-4.jpg" alt="">

                        <div class="text-card">
                            <h1>Jonathan Rea</h1>
                            <p>
                                Jonathan Rea is a Northern Irish motorcycle racer who has won 7 consecutive Superbike world championships from 2015 to 2021 and is considered one of the greatest racers in the history of this competition.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new4-5.jpg" alt="">

                        <div class="text-card">
                            <h1>Carl Fogarty</h1>
                            <p>
                                Carl Fogarty is a British motorcycle racer who won 4 Superbike world championships and holds the record for the most victories in the history of the competition. In addition to racing, he has also appeared on television and is one of the most famous racers in the world.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new4-6.jpg" alt="">

                        <div class="text-card">
                            <h1>Troy Bayliss</h1>
                            <p>
                                Troy Bayliss is a retired Australian motorcycle racer. He won three World Superbike championships and also competed in MotoGP. Bayliss was known for his aggressive riding style and was inducted into the Australian Motorsport Hall of Fame in 2017.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
    
                <div class="news-item">
                    <div class="card-news">
                        <img src="../img-news/new47.jpg" alt="">

                        <div class="text-card">
                            <h1>Doug Polen</h1>
                            <p>
                                Doug Polen is an American motorcycle racer who won 2 Superbike world championships in 1991 and 1992. He is also a former AMA Superbike champion and is known for his aggressive racing style and consistency on the track.
                            </p>
                            <span><i class='bx bx-time'></i>April 1st, 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-news">
        <div class="title-banner">
            <h1>the introduction of hot sports motorcycles recently<div></div></h1> 
            <p>The emergence of recent hot sports motorcycles is an ongoing and exciting process in the world of motorcycling.</p>     
        </div>

        <div class="banner-content">
            <div class="video-banner">
                <!-- <video autoplay muted controls>
                    <source src="https://drive.google.com/uc?export=view&id=1e8u-hI-k31mqdWcFs9fVS90McPzf-ud_">
                </video> -->

                <div class="video-banner-content">
                    <video id="player" autoplay muted controls loop>
                        <source src="https://drive.google.com/uc?export=view&id=1e8u-hI-k31mqdWcFs9fVS90McPzf-ud_" type="video/mp4" />
                      
                        <!-- Captions are optional -->
                        <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
                    </video>
                </div>

                <div class="title-video">
                    <h1>9 Best New Sport Touring Bikes For 2023</h1>
                    <ul class="list-moto">
                        <li>Moto Guzzi V100 Mandello</li>
                        <li>Yamaha Tracer 9 GT</li>
                        <li>Triumph Tiger 1200 Rally</li>
                        <li>Kawasaki Ninja 650 Tourer</li>
                        <li>BMW R1250RT</li>
                        <li>Ducati Multistrada V4 Rally</li>
                        <li>Honda NC750X</li>
                        <li>BMW S1000XR</li>
                        <li>Agusta Turismo Veloce 800</li>
                    </ul>
                </div>
            </div>
    
            <div class="banner-news-content">
                <div class="title-banner-content">
                    <h1>Summary of the speed kings of the moto world</h1>
                </div>
                <div class="news-banner">
                    <div class="card-news-banner">
                        <a href="../news/ducativ4.php" target="_blank"><img src="../img-news/v42.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/ducativ4.php" target="_blank"><h1>The emergence of Ducati Panigale V4 SP</h1></a>
                            <p>
                                Ducati Panigale V4 SP is a limited edition
                                super sports motorcycle witha powerful V4 engine and attractive design, aimed at enhancing performance and speed for those who love high-performance and speed.
                            </p>
                        </div>
                    </div>
    
                    <div class="card-news-banner">
                        <a href="../news/h2r.php" target="_blank"><img src="../img/Awesome Kawasaki Ninja Live Wallpaper.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/h2r.php" target="_blank"><h1>Kawasaki H2R</h1></a>
                            <p>
                                Kawasaki H2R is a powerful super sport motorcycle made by Kawasaki, equipped with a 998cc supercharged 4-cylinder engine that produces up to 310 horsepower and 165 Nm of torque. With this engine, the H2R can reach a top speed of up to 400km/h and is designed for use on the racetrack.
                            </p>
                        </div>
                    </div>
    
                    <div class="card-news-banner">
                        <a href="../news/bwms1000rr.php" target="_blank"><img src="../img/bwm2.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="h../news/bwms1000rr.php" target="_blank"><h1>BWM S1000 RR</h1></a>
                            <p>
                                The BMW S1000 RR is a high-end sport motorcycle made by BMW, equipped with a 999cc 4-cylinder engine that produces up to 205 horsepower and 113 Nm of torque. With this engine, the S1000 RR can reach a top speed of up to 299km/h.
                            </p>
                        </div>
                    </div>
    
                    <div class="card-news-banner">
                        <a href="../news/yamahar7.php" target="_blank"><img src="../img/r7.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/yamahar7.php" target="_blank"><h1>YAMAHA R7</h1></a>
                            <p>
                                The Yamaha R7 is the latest sport motorcycle model from Yamaha, equipped with an engine similar to the R6 with a displacement of 689cc, producing up to 73 horsepower and 67 Nm of torque. With its sporty and powerful design, the R7 is designed to meet the needs of riders on both the street and the racetrack.
                            </p>
                        </div>
                    </div>
    
                    <div class="card-news-banner">
                        <a href="../news/yamahar6.php" target="_blank"><img src="../img/r6.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/yamahar6.php" target="_blank"><h1>YAMAHA R6</h1></a>
                            <p>
                                The Yamaha R6 is a high-performance sport motorcycle made by Yamaha, equipped with a 599cc liquid-cooled 4-cylinder engine that produces up to 117 horsepower and 61 Nm of torque. With its sleek and aerodynamic design, the R6 is designed to deliver exceptional handling and performance on the track.
                            </p>
                        </div>
                    </div>
    
                    <div class="card-news-banner">
                        <a href="../news/zx10rr.php" target="_blank"><img src="../img-news/new3-6.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/zx10rr.php" target="_blank"><h1>Kawasaki ZX-10RR</h1></a>
                            <p>
                                Kawasaki unveils the ZX-10RR, a new bike for professional racers and enthusiasts. With a 998cc 4-cylinder engine, it delivers 204 horsepower and 114 Nm of torque, complemented by improved suspension and braking systems.
                            </p>
                        </div>
                    </div>
    
                    <div class="card-news-banner">
                        <a href="../news/cbr1000rr.php" target="_blank"><img src="../img-news/news-2.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/cbr1000rr.php" target="_blank"><h1>CBR1000RR-R Fireblade SP</h1></a>
                            <p>
                                Honda CBR1000RR-R Fireblade SP is a powerful sport bike used in both MotoGP and WSBK. It has a 1000cc 4-cylinder engine producing 215 horsepower, advanced features like electronic fuel injection, traction control, and premium Ohlins suspension system.
                            </p>
                        </div>
                    </div>
    
                    <div class="card-news-banner">
                        <a href="../news/mv4.php" target="_blank"><img src="../img/news4.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/mv4.php" target="_blank"><h1>Ducati Multistrada V4</h1></a>
                            <p>
                                The Ducati Multistrada V4 is a highly anticipated motorcycle that features a powerful V4 engine, advanced technology, and radar-based adaptive cruise control. It is designed for adventure and touring, with a comfortable ride and versatile performance capabilities.
                            </p>
                        </div>
                    </div>
    
                    <div class="card-news-banner">
                        <a href="../news/ktm8c.php" target="_blank"><img src="../img/news7.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/ktm8c.php" target="_blank"><h1>KTM RC 8C</h1></a>
                            <p>
                                KTM's RC 8C is a limited edition sports bike, equipped with a lightweight frame, powerful engine, and top-of-the-line components, making it a top choice among racing enthusiasts. With only 100 units produced worldwide, it is a unique and rare motorcycle.
                            </p>
                        </div>
                    </div>

                    <div class="card-news-banner">
                        <a href="../news/gsx.php" target="_blank"><img src="../img-news/suzuki.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/gsx.php" target="_blank"><h1>Suzuki GSX-R1000</h1></a>
                            <p>
                                Suzuki GSX-R1000 is a top-of-the-line sports motorcycle from Suzuki, equipped with a 999cc engine producing up to 202 horsepower, reliable suspension and brake systems, along with a modern and sporty design, delivering an exceptional riding experience on all terrains.
                            </p>
                        </div>
                    </div>

                    <div class="card-news-banner">
                        <a href="../news/rvs.php" target="_blank"><img src="../img/img-new11.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/rvs.php" target="_blank"><h1>Aprilia RSV4</h1></a>
                            <p>
                                The Aprilia RSV4 is a high-performance sports motorcycle with a 999cc V4 engine, advanced electronics, and lightweight frame and bodywork. It has exceptional handling and racing capabilities, making it a popular choice for sportbike enthusiasts and professional racers alike.
                            </p>
                        </div>
                    </div>

                    <div class="card-news-banner">
                        <a href="../news/mvf.php" target="_blank"><img src="../img/img-new10.jpg" alt=""></a>
    
                        <div class="text-news-banner">
                            <a href="../news/mvf.php" target="_blank"><h1>MV Agusta F4</h1></a>
                            <p>
                                The MV Agusta F4 is a high-performance sports motorcycle with a powerful 998cc engine, exceptional handling and racing capabilities, and a striking Italian design. It has been a popular choice among motorcycle enthusiasts and collectors since its launch in 1999.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-index">
        <div class="title-index-banner">
            <h1>Some famous sports motorcycle manufacturers<div></div></h1>
            <p>There are many options from famous car brands.</p>
        </div>
        <div class="banner-index-content">
            <div class="logo-banner-content">
                <img src="../img-news/ducati.png" alt="">
                <span class="logo-first">D</span>
                <span class="logo-first">U</span>
                <span class="logo-first">C</span>
                <span class="logo-first">A</span>
                <span class="logo-first">T</span>
                <span class="logo-first">I</span>
            </div>

            <div class="logo-banner-content">
                <img src="../img-news/yamaha.png" alt="">
                <span class="logo-first">Y</span>
                <span class="logo-first">A</span>
                <span class="logo-first">M</span>
                <span class="logo-first">A</span>
                <span class="logo-first">H</span>
                <span class="logo-first">A</span>
            </div>

            <div class="logo-banner-content">
                <img src="../img-news/kawasaki.png" alt="">
                <span class="logo-first">K</span>
                <span class="logo-first">A</span>
                <span class="logo-first">W</span>
                <span class="logo-first">A</span>
                <span class="logo-first">S</span>
                <span class="logo-first">A</span>
                <span class="logo-first">K</span>
                <span class="logo-first">I</span>
            </div>

            <div class="logo-banner-content">
                <img src="../img-news/triumph.png" alt="">
                <span class="logo-first">T</span>
                <span class="logo-first">R</span>
                <span class="logo-first">I</span>
                <span class="logo-first">U</span>
                <span class="logo-first">M</span>
                <span class="logo-first">P</span>
                <span class="logo-first">H</span>
            </div>
        </div>

        <div class="banner-index-content">
            <div class="logo-banner-content">
                <img src="../img-news/suzuki.png" alt="">
                <span class="logo-first">S</span>
                <span class="logo-first">U</span>
                <span class="logo-first">Z</span>
                <span class="logo-first">U</span>
                <span class="logo-first">K</span>
                <span class="logo-first">I</span>
            </div>

            <div class="logo-banner-content">
                <img src="../img-news/ktmm.png" alt="">
                <span class="logo-first">K</span>
                <span class="logo-first">T</span>
                <span class="logo-first">M</span>
            </div>

            <div class="logo-banner-content">
                <img src="../img-news/bwm.png" alt="">
                <span class="logo-first">B</span>
                <span class="logo-first">M</span>
                <span class="logo-first">W</span>
            </div>

            <div class="logo-banner-content">
                <img src="../img-news/honda.png" alt="">
                <span class="logo-first">H</span>
                <span class="logo-first">O</span>
                <span class="logo-first">N</span>
                <span class="logo-first">D</span>
                <span class="logo-first">A</span>
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
    <script src="../js/jsnews.js"></script>
</body>
</html>