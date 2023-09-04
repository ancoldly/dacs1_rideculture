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
            $avatar = $rows["avatar"];
            $avatartemp = "../img-news/avt-removebg-preview.png";
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
    <script src="path/to/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/shop.css">
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
    <form class="chat-message">
        <div class="title-mess">
            <h3>RideCulture Moto <i class='bx bxs-badge-check' ></i></h3>

            <div class="social-mess">
                <i class='bx bxs-phone'></i>
                <i class='bx bxs-video' ></i>
                <i class='bx bxs-x-circle out-mess' ></i>
            </div>
        </div>

        <div class="listChat">
            <div class="mess-adm">
                <img src="../img-news/avt-adm.png" alt="">

                <div class="text-mess">
                    <p>Hello ! Thank you for contacting RideCulture Moto. Do you have something we can help you with?</p>
                </div>
            </div>

            <div class="mess-user">
                <div class="text-mess">
                    <p class="text-user"></p>
                </div>
                
                <img src="<?php echo(isset($avatar))? $avatar : $avatartemp?>" alt="">
            </div>

            <div class="mess-adm adm-1">
                <img src="../img-news/avt-adm.png" alt="">

                <div class="text-mess">
                    <p>Please wait a moment, we will soon respond to your message and advise you what you need!</p>
                </div>
            </div>
        </div>

        <div class="input-chat">
            <input type="text" placeholder="Enter message..." id="input-user" autocomplete="off">
            <i class='bx bxs-send send-chat' ></i>
        </div>
    </form>
    <button class="next-mess">
        <i class='bx bx-message-rounded-detail bx-tada' ></i>
    </button>
    <a href="#"><button class="next-top"><i class='bx bx-chevrons-up'></i></button></a>
    <div class="cart" id="cart">
        <div class="close-cart">
            <i class='bx bx-exit'></i>
        </div>

        <div class="name">
            <p class="number-item">0 Item</p>
        </div>

        <div class="listCart">
            
        </div>

        <div class="check-out">
            <button class="btn-checkout">
                <a href="../html/pay.php">checkout</a>
            </button>
            <div class="item-price">
                <div class="items">
                    <p class="number-item-cart">
                        Items(0):
                    </p>
                    
                    <div class="check-price">
                        <span>$</span>
                        <span class="number-price"></span>
                    </div>
                </div>
                <hr>
                <div class="total-items">
                    <span>
                        Total :
                    </span>
                    <div class="check-price">
                        <span>$</span>
                        <span class="total-price"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="logo-header">
            <a href="../index.php"><span><i class='bx bxl-flutter'></i>RideCulture <br> <p>Moto<i class='bx bx-paper-plane' ></i></p></span></a>
        </div>

        <nav class="nav">
            <a href="../index.php" class="active-mark">HOME</a>
            <a href="../html/news.php" class="active-mark">NEWS</a>
            <a href="#" class="active-mark">SHOP</a>
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
            <button class="cart-shop">
                <p class="number-item-header">0</p>
                <i class='bx bx-cart-alt add' >
            </i></button>
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

    <div class="shop-home">
        <div class="shop-home-content swiper mySwiper-shop-home">
            <div class="shop-home-box swiper-wrapper">
                <div class="shop-home-slide swiper-slide">
                    <img src="../img-news/shop1.jpg" alt="">
                </div>

                <div class="shop-home-slide swiper-slide">
                    <img src="../img-news/shop2.jpg" alt="">
                </div>

                <div class="shop-home-slide swiper-slide">
                    <img src="../img-news/shop3.jpg" alt="">
                </div>

                <div class="shop-home-slide swiper-slide">
                    <img src="../img-news/shop4.jpg" alt="">
                </div>

                <div class="shop-home-slide swiper-slide">
                    <img src="../img-news/shop5.jpg" alt="">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <section class="shop-content">
        <div class="title-trending">
            <h1><i class='bx bxs-hot' ></i> TRENDING NOW<div></div></h1>
            <p>Hot products are the current trend.</p>
        </div>

        <div class="shop-hot-content swiper mySwiper-shop-hot">
            <div class="shop-hot-box swiper-wrapper list-shop">
                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="171">
                        <button class="remove-item" onclick="Remove(171)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/pk612-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Paint</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="167">
                        <button class="remove-item" onclick="Remove(167)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/pk68-removebg-preview.png" alt="">

                        <div class="text-hot-shop">
                            <h4>Coating</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">17.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="124">
                        <button class="remove-item" onclick="Remove(124)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/pk31-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Batteries</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="118">
                        <button class="remove-item" onclick="Remove(118)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/pk27-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Chain Kits</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="101">
                        <button class="remove-item" onclick="Remove(101)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/pk12-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Dirt Bike Tires</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="27">
                        <button class="remove-item" onclick="Remove(27)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp2-2-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Adventure Jackets</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="65">
                        <button class="remove-item" onclick="Remove(65)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp5-10-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Textile Pants</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="51">
                        <button class="remove-item" onclick="Remove(51)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp4-5-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Tall Boots</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="80">
                        <button class="remove-item" onclick="Remove(80)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp4-11-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Footwear Acces</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="84">
                        <button class="remove-item" onclick="Remove(84)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp3-11-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>RR Leather Gloves</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="34">
                        <button class="remove-item" onclick="Remove(34)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp2-9-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Sportbike Jackets</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="79">
                        <button class="remove-item" onclick="Remove(79)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp2-12-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Touring Jackets</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="18">
                        <button class="remove-item" onclick="Remove(18)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp1-3-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Dirt Bike Helmets</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="25">
                        <button class="remove-item" onclick="Remove(25)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/sp1-10-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Dual Sport Helmets</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-hot-slide swiper-slide">
                    <div class="item-shop" data-key="111">
                        <button class="remove-item" onclick="Remove(111)">
                            <i class='bx bx-x'></i>
                        </button>
    
                        <img src="../img-news/pk112-removebg-preview.png" alt="">
    
                        <div class="text-hot-shop">
                            <h4>Vintage Tires</h4>
                            <div class="star">
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star' ></i>
                                <i class='bx bxs-star-half' ></i>
                            </div>
                            <div class="start-price">
                                <span>$</span>
                                <span class="price">15.99</span>
                            </div>
                            <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                            <button class="buy"><a href="">Buy Now</a></button>
                            <input type="number" class="ipnumber" min="1" name="number" value="1">
                            <div class="social-hot">
                                <i class='bx bx-heart' ></i>
                                <i class='bx bx-cart-alt add' ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="title-shop-content">
            <h1>moto sport outfit<div></div></h1>
            <p>There are many choices for your outfit when participating in moto sport.</p>
        </div>

        <div class="shop-box">
            <div class="shop-item active">
                <img src="../img-news/tp1.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Helmets</h3>
                </div>
            </div>

            <div class="shop-item">
                <img src="../img-news/tp2.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Jackets</h3>
                </div>
            </div>

            <div class="shop-item">
                <img src="../img-news/tp3.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Gloves</h3>
                </div>
            </div>

            <div class="shop-item">
                <img src="../img-news/tp4.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Boots</h3>
                </div>
            </div>

            <div class="shop-item">
                <img src="../img-news/tp5.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Pants</h3>
                </div>
            </div>

            <div class="shop-item">
                <img src="../img-news/tp6.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Protection</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="outfit-shop-helmets">
        <div class="helmets-content list-shop active">
            <div class="title-helmets">
                <h1>MOTORCYCLE HELMETS<div></div></h1>
                <p>There are various types of motorcycle helmets for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="16">
                    <button class="remove-item" onclick="Remove(16)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-1-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Full Face Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="17">
                    <button class="remove-item" onclick="Remove(17)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-2-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Modular Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="18">
                    <button class="remove-item" onclick="Remove(18)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-3-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Dirt Bike Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="19">
                    <button class="remove-item" onclick="Remove(19)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-4-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Adventure Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="20">
                    <button class="remove-item" onclick="Remove(20)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-5-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Half Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="21">
                    <button class="remove-item" onclick="Remove(21)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-6-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Women's</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="22">
                    <button class="remove-item" onclick="Remove(22)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-7-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Forced Air Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="23">
                    <button class="remove-item" onclick="Remove(23)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-8-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Bluetooth Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="24">
                    <button class="remove-item" onclick="Remove(24)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-9-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Cafe Racer Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="25">
                    <button class="remove-item" onclick="Remove(25)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-10-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Dual Sport Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="76">
                    <button class="remove-item" onclick="Remove(76)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-11-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Open Face Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="77">
                    <button class="remove-item" onclick="Remove(77)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp1-12-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Race Helmets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="helmets-box">
                
            </div> -->

            <!-- <div class="helmets-box">
                
            </div> -->
        </div>

        <div class="helmets-content list-shop">
            <div class="title-helmets">
                <h1>MOTORCYCLE JACKETS<div></div></h1>
                <p>Diverse motorcycle jacket products for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="26">
                    <button class="remove-item" onclick="Remove(26)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-1-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>4-Season Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="27">
                    <button class="remove-item" onclick="Remove(27)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-2-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Adventure Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="28">
                    <button class="remove-item" onclick="Remove(28)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-3-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>City Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="29">
                    <button class="remove-item" onclick="Remove(29)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-4-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Gore-Tex Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="30">
                    <button class="remove-item" onclick="Remove(30)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-5-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Leather Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="31">
                    <button class="remove-item" onclick="Remove(31)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-6-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Mesh Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="32">
                    <button class="remove-item" onclick="Remove(32)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-7-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Race Leather Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="33">
                    <button class="remove-item" onclick="Remove(33)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-8-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Riding Shirts</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="34">
                    <button class="remove-item" onclick="Remove(34)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-9-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Sportbike Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="35">
                    <button class="remove-item" onclick="Remove(35)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-10-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Summer Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="78">
                    <button class="remove-item" onclick="Remove(78)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-11-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Textile Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="79">
                    <button class="remove-item" onclick="Remove(79)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp2-12-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Touring Jackets</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="helmets-content list-shop">
            <div class="title-helmets">
                <h1>MOTORCYCLE GLOVES<div></div></h1>
                <p>Wide range of motorcycle gloves for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="36">
                    <button class="remove-item" onclick="Remove(36)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-1-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Gauntlet Gloves</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="37">
                    <button class="remove-item" onclick="Remove(37)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-2-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Race Gloves</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="38">
                    <button class="remove-item" onclick="Remove(38)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-3-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Short Cuff Gloves</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="39">
                    <button class="remove-item" onclick="Remove(39)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-4-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Waterproof Gloves</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="40">
                    <button class="remove-item" onclick="Remove(40)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-5-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Winter Gloves</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="41">
                    <button class="remove-item" onclick="Remove(41)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-6-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Women's Gloves</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="42">
                    <button class="remove-item" onclick="Remove(42)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-7-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Scorpion EXO SG3</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="43">
                    <button class="remove-item" onclick="Remove(43)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-8-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Alpinestars SP-1 V2</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="82">
                    <button class="remove-item" onclick="Remove(82)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-9-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Fly Racing Ignitor</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="83">
                    <button class="remove-item" onclick="Remove(83)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-10-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Fly Racing Xplore</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="84">
                    <button class="remove-item" onclick="Remove(84)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-11-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>RR Leather Gloves</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="85">
                    <button class="remove-item" onclick="Remove(85)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp3-12-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Leather/Textile Gloves</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="helmets-content list-shop">
            <div class="title-helmets">
                <h1>MOTORCYCLE BOOTS<div></div></h1>
                <p>Wide range of motorcycle boots for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="46">
                    <button class="remove-item" onclick="Remove(46)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-1-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Track & Race Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="47">
                    <button class="remove-item" onclick="Remove(47)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-2-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Dirt Bike Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="48">
                    <button class="remove-item" onclick="Remove(48)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-3-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Adventure Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="49">
                    <button class="remove-item" onclick="Remove(49)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-4-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Cruiser Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="51">
                    <button class="remove-item" onclick="Remove(51)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-5-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Tall Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="52">
                    <button class="remove-item" onclick="Remove(52)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-6-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Women's Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="53">
                    <button class="remove-item" onclick="Remove(53)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-7-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Summer Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="54">
                    <button class="remove-item" onclick="Remove(54)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-8-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Short Boots & Shoes</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="44">
                    <button class="remove-item" onclick="Remove(44)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-9-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Gore-Tex Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="45">
                    <button class="remove-item" onclick="Remove(45)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-10-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Waterproof Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="80">
                    <button class="remove-item" onclick="Remove(80)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-11-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Footwear Acces</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="81">
                    <button class="remove-item" onclick="Remove(81)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp4-12-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Sport Bike Boots</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="helmets-content list-shop">
            <div class="title-helmets">
                <h1>MOTORCYCLE PANTS<div></div></h1>
                <p>Wide range of motorcycle pants for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="56">
                    <button class="remove-item" onclick="Remove(56)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-1-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Adventure Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="57">
                    <button class="remove-item" onclick="Remove(57)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-2-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>All-Weather Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="58">
                    <button class="remove-item" onclick="Remove(58)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-3-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Chaps</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="59">
                    <button class="remove-item" onclick="Remove(59)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-4-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Gore-Tex Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="60">
                    <button class="remove-item" onclick="Remove(60)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-5-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Leather Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="61">
                    <button class="remove-item" onclick="Remove(61)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-6-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Mesh Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="62">
                    <button class="remove-item" onclick="Remove(62)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-7-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Overpants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="63">
                    <button class="remove-item" onclick="Remove(63)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-8-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Riding Jeans</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="64">
                    <button class="remove-item" onclick="Remove(64)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-9-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Summer Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="65">
                    <button class="remove-item" onclick="Remove(65)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-10-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Textile Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="90">
                    <button class="remove-item" onclick="Remove(90)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-11-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Women's Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="91">
                    <button class="remove-item" onclick="Remove(91)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp5-12-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Dirt Bike Pants</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="helmets-content list-shop">
            <div class="title-helmets">
                <h1>MOTORCYCLE PROTECTION GEAR<div></div></h1>
                <p>Wide range of adventure moto protection gear products for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="66">
                    <button class="remove-item" onclick="Remove(66)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-1-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Ankle Braces</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="67">
                    <button class="remove-item" onclick="Remove(67)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-2-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Armored Bottoms</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="68">
                    <button class="remove-item" onclick="Remove(68)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-3-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Armored Tops</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="69">
                    <button class="remove-item" onclick="Remove(69)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-4-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Armored Vests</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="70">
                    <button class="remove-item" onclick="Remove(70)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-5-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Back Protectors</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="71">
                    <button class="remove-item" onclick="Remove(71)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-6-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Chest Protection</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="72">
                    <button class="remove-item" onclick="Remove(72)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-7-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Elbow Guards</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="73">
                    <button class="remove-item" onclick="Remove(73)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-8-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Kidney Belts</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="74">
                    <button class="remove-item" onclick="Remove(74)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-9-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Knee Braces</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="75">
                    <button class="remove-item" onclick="Remove(75)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-10-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Knee Guards</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="96">
                    <button class="remove-item" onclick="Remove(96)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-11-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Shoulder Braces</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="97">
                    <button class="remove-item" onclick="Remove(97)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/sp6-12-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Air Bags</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-content-next">
        <div class="title-shop-content">
            <h1>motorcycle accessories and parts<div></div></h1>
            <p>Important motorcycle components and parts.</p>
        </div>

        <div class="shop-box">
            <div class="shop-item-next active">
                <img src="../img/phutung1.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Tires</h3>
                </div>
            </div>

            <div class="shop-item-next">
                <img src="../img/phutung2.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Drive</h3>
                </div>
            </div>

            <div class="shop-item-next">
                <img src="../img/phutung3.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Electrical</h3>
                </div>
            </div>

            <div class="shop-item-next">
                <img src="../img/phutung5.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Handlebars</h3>
                </div>
            </div>

            <div class="shop-item-next">
                <img src="../img/phutung6.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Seats</h3>
                </div>
            </div>

            <div class="shop-item-next">
                <img src="../img/phutung4.png" alt="">

                <div class="text-shop">
                    <h3>Motorcycle Oils & Fluids</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <section class="outfit-shop-helmets">
        <div class="helmets-content-next list-shop active">
            <div class="title-helmets">
                <h1>Motorcycle Tires<div></div></h1>
                <p>There are many types of motorcycle tires for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="100">
                    <button class="remove-item" onclick="Remove(100)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk11-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Sportbike Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="101">
                    <button class="remove-item" onclick="Remove(101)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk12-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Dirt Bike Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="102">
                    <button class="remove-item" onclick="Remove(102)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk13-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Sport Touring Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="103">
                    <button class="remove-item" onclick="Remove(103)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk14-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Dual Sport Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="104">
                    <button class="remove-item" onclick="Remove(104)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk15-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>V-Twin Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="105">
                    <button class="remove-item" onclick="Remove(105)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk16-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Cruiser Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="106">
                    <button class="remove-item" onclick="Remove(106)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk17-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Touring Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="107">
                    <button class="remove-item" onclick="Remove(107)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk18-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Scooter Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="108">
                    <button class="remove-item" onclick="Remove(108)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk19-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Dirt Track Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="109">
                    <button class="remove-item" onclick="Remove(109)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk110-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Race Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="110">
                    <button class="remove-item" onclick="Remove(110)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk111-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Supermoto Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="111">
                    <button class="remove-item" onclick="Remove(111)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk112-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Vintage Tires</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="helmets-box">
                
            </div> -->

            <!-- <div class="helmets-box">
                
            </div> -->
        </div>

        <div class="helmets-content-next list-shop">
            <div class="title-helmets">
                <h1>Motorcycle Drive<div></div></h1>
                <p>There are many types of motorcycle drive for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="112">
                    <button class="remove-item" onclick="Remove(112)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk21-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Axle Blocks</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="113">
                    <button class="remove-item" onclick="Remove(113)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk22-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Axle Components</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="114">
                    <button class="remove-item" onclick="Remove(114)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk23-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Axles</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="115">
                    <button class="remove-item" onclick="Remove(115)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk24-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Bearings, Seals</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="116">
                    <button class="remove-item" onclick="Remove(116)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk25-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Belt Guards</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="117">
                    <button class="remove-item" onclick="Remove(117)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk26-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Belt Pulleys</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="118">
                    <button class="remove-item" onclick="Remove(118)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk27-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Chain Kits</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="119">
                    <button class="remove-item" onclick="Remove(119)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk28-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Chain Rollers</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="120">
                    <button class="remove-item" onclick="Remove(120)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk29-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Chains</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="121">
                    <button class="remove-item" onclick="Remove(121)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk210-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Clutch</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="122">
                    <button class="remove-item" onclick="Remove(122)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk211-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Clutch Components</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="123">
                    <button class="remove-item" onclick="Remove(123)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk212-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Inspection Covers</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="helmets-content-next list-shop">
            <div class="title-helmets">
                <h1>Motorcycle Electrical<div></div></h1>
                <p>There are many types of motorcycle electrical for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="124">
                    <button class="remove-item" onclick="Remove(124)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk31-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Batteries</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="125">
                    <button class="remove-item" onclick="Remove(125)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk32-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Horns</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="126">
                    <button class="remove-item" onclick="Remove(126)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk33-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Ignition</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="127">
                    <button class="remove-item" onclick="Remove(127)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk34-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Regulators</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="128">
                    <button class="remove-item" onclick="Remove(128)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk35-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Spark Plugs</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="129">
                    <button class="remove-item" onclick="Remove(129)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk36-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Stators</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="130">
                    <button class="remove-item" onclick="Remove(130)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk37-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Maintenance Free Battery</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="131">
                    <button class="remove-item" onclick="Remove(131)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk38-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>BR8EG Spark Plug</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="132">
                    <button class="remove-item" onclick="Remove(132)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk39-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Electrics Stator</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="133">
                    <button class="remove-item" onclick="Remove(133)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk310-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Bikemaster Kill Switch</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="134">
                    <button class="remove-item" onclick="Remove(134)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk311-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Moose Engine Kill Switch</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="135">
                    <button class="remove-item" onclick="Remove(135)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk312-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Rectifier/Regulator</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="helmets-content-next list-shop">
            <div class="title-helmets">
                <h1>Motorcycle Handlebars<div></div></h1>
                <p>There are many types of motorcycle handlebars for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="136">
                    <button class="remove-item" onclick="Remove(136)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk41-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Bar Ends</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="137">
                    <button class="remove-item" onclick="Remove(137)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk42-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Cables</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="138">
                    <button class="remove-item" onclick="Remove(138)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk43-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Clip-ons</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="139">
                    <button class="remove-item" onclick="Remove(139)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk44-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Clutch</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="140">
                    <button class="remove-item" onclick="Remove(140)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk45-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Cruise Control</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="141">
                    <button class="remove-item" onclick="Remove(141)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk46-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Grips</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="142">
                    <button class="remove-item" onclick="Remove(142)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk47-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Handguards</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="143">
                    <button class="remove-item" onclick="Remove(143)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk48-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Handlebars</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="144">
                    <button class="remove-item" onclick="Remove(144)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk49-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Hot Stars</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="145">
                    <button class="remove-item" onclick="Remove(145)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk410-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Levers</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="146">
                    <button class="remove-item" onclick="Remove(146)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk411-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Risers</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="147">
                    <button class="remove-item" onclick="Remove(147)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk412-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Throttle</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="helmets-content-next list-shop">
            <div class="title-helmets">
                <h1>Motorcycle Seats<div></div></h1>
                <p>There are many types of motorcycle seats for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="148">
                    <button class="remove-item" onclick="Remove(148)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk51-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Armrests</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="149">
                    <button class="remove-item" onclick="Remove(149)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk52-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Backrests</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="150">
                    <button class="remove-item" onclick="Remove(150)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk53-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Offroad Seats</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="151">
                    <button class="remove-item" onclick="Remove(151)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk54-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Passenger Seats</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="152">
                    <button class="remove-item" onclick="Remove(152)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk55-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Pillion Pads</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="153">
                    <button class="remove-item" onclick="Remove(153)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk56-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Seat Accessories</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="154">
                    <button class="remove-item" onclick="Remove(154)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk57-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Seat Covers</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="155">
                    <button class="remove-item" onclick="Remove(155)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk58-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Seat Hardware</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="156">
                    <button class="remove-item" onclick="Remove(156)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk59-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Seat Pads</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="157">
                    <button class="remove-item" onclick="Remove(157)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk510-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Sissy Bar Pads</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="158">
                    <button class="remove-item" onclick="Remove(158)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk511-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Solo Seats</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="159">
                    <button class="remove-item" onclick="Remove(159)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk512-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Two Up Seats</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="helmets-content-next list-shop">
            <div class="title-helmets">
                <h1>Motorcycle Oils & Fluids<div></div></h1>
                <p>There are many types of motorcycle oils & fluids for you to choose from.</p>
            </div>
            <div class="helmets-box">
                <div class="item-shop" data-key="160">
                    <button class="remove-item" onclick="Remove(160)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk61-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>2-Stroke Oil</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="161">
                    <button class="remove-item" onclick="Remove(161)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk62-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>4-Stroke Oil</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="162">
                    <button class="remove-item" onclick="Remove(162)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk63-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Air Filter Oil</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="163">
                    <button class="remove-item" onclick="Remove(163)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk64-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Fork Oil</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="164">
                    <button class="remove-item" onclick="Remove(164)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk65-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Transmission Oil</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="165">
                    <button class="remove-item" onclick="Remove(165)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk66-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Brake Fluid</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="166">
                    <button class="remove-item" onclick="Remove(166)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk67-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Chain Lube</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="167">
                    <button class="remove-item" onclick="Remove(167)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk68-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Coating</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="helmets-box">
                <div class="item-shop" data-key="168">
                    <button class="remove-item" onclick="Remove(168)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk69-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Fuel Additives</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="169">
                    <button class="remove-item" onclick="Remove(169)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk610-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Grease</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="170">
                    <button class="remove-item" onclick="Remove(170)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk611-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Solvents</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>

                <div class="item-shop" data-key="171">
                    <button class="remove-item" onclick="Remove(171)">
                        <i class='bx bx-x'></i>
                    </button>

                    <img src="../img-news/pk612-removebg-preview.png" alt="">

                    <div class="text-hot-shop">
                        <h4>Paint</h4>
                        <div class="star">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <div class="start-price">
                            <span>$</span>
                            <span class="price">15.99</span>
                        </div>
                        <div class="sum-price-class">
                                <p class="sum-price">000</p>
                                <p class="sumx-price">000</p>
                            </div>
                        <button class="buy"><a href="">Buy Now</a></button>
                        <input type="number" class="ipnumber" min="1" name="number" value="1">
                        <div class="social-hot">
                            <i class='bx bx-heart' ></i>
                            <i class='bx bx-cart-alt add' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brands-top">
        <div class="title-brands">
            <h1>TOP MOTORCYCLE PANT BRANDS<div></div></h1>
            <p>Famous brands for top moto pants, beautiful and diverse products.</p>
        </div>

        <div class="brands-content">
            <div class="brands-box">
                <img src="../img-news/one.png" alt="">

                <span>O'Neal Racing</span>
            </div>

            <div class="brands-box">
                <img src="../img-news/alp.png" alt="">

                <span>Alpinestars</span>
            </div>

            <div class="brands-box">
                <img src="../img-news/kim.png" alt="">

                <span>Klim</span>
            </div>

            <div class="brands-box">
                <img src="../img-news/fox.png" alt="">

                <span>Fox Racing</span>
            </div>

            <div class="brands-box">
                <img src="../img-news/thor.png" alt="">

                <span>Thor</span>
            </div>

            <div class="brands-box">
                <img src="../img-news/troy.png" alt="">

                <span>Troy Lee Designs</span>
            </div>
        </div>
    </section>

    <section class="free">
        <div class="title-free">
            <h1>Sale motorcycle apparel and accessories at RideCulture Moto<div></div></h1>
            <p>A reputable and high-quality place to buy and sell, ensuring a great experience for customers.</p>
        </div>
        <div class="free-content">
            <div class="free-box">
                <img src="../img-news/free.png" alt="">

                <div class="text-free">
                    <h3>LOW PRICE</h3>
                    <h1>GUARANTEE</h1>
                    <p>If we can't beat their price, we'll match it.</p>
                </div>
            </div>
    
            <div class="free-box">
                <img src="../img-news/car.png" alt="">

                <div class="text-free">
                    <h3>FAST, FREE</h3>
                    <h1>SHIPPING</h1>
                    <p>Orders over $75 qualify for free shipping.</p>
                </div>
            </div>
    
            <div class="free-box">
                <img src="../img-news/star.png" alt="">

                <div class="text-free">
                    <h3>5-STAR</h3>
                    <h1>SERVICE</h1>
                    <p>A staple in the industry for more than 43 years.</p>
                </div>
            </div>
    
            <div class="free-box">
                <img src="../img-news/reset.png" alt="">

                <div class="text-free">
                    <h3>NO HASSLE</h3>
                    <h1>RETURNS</h1>
                    <p>Return any new, unused item within 30 days.</p>
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
                <li><a href="../index.html"><p><i class='bx bx-right-arrow-alt' ></i> Home</p></a></li>
                <li><a href="../html/news.html"><p><i class='bx bx-right-arrow-alt' ></i> News</p></a></li>
                <li><a href="../html/shop.html"><p><i class='bx bx-right-arrow-alt' ></i> Shop</p></a></li>
                <li><a href="../html/blog.html"><p><i class='bx bx-right-arrow-alt' ></i> Blog</p></a></li>
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
    <script src="../js/jsshop.js"></script>
</body>
</html>