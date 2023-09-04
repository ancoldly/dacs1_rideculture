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
            $emailUser = $rows["email"];
            $telephone = $rows["telephone"];
            $birth = $rows["birth"];
            $gender = $rows["gender"];
            $birthDate = date("d-m-Y", strtotime($birth));
            $address = $rows["address"];
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
    <link rel="stylesheet" href="../css/pay.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>RideCulture Moto</title>
</head>
<body>
    <a href="#">    <button class="next-top"><i class='bx bx-chevrons-up'></i></button></a>
    <header class="header">
        <div class="logo-header">
            <a href="../index.php"><span><i class='bx bxl-flutter'></i>RideCulture <br> <p>Moto<i class='bx bx-paper-plane' ></i></p></span></a>
        </div>

        <nav class="nav">
            <a href="../index.php" class="active-mark">HOME</a>
            <a href="../html/news.php" class="active-mark">NEWS</a>
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

    <section class="pay-home">
        <div class="pay-index">
            <div class="title-pay-index">
                <span>
                    <a href="../html/shop.php">Shop</a>
                    <p>/</p>
                    <p class="pay">Payment</p>
                </span>
            </div>

            <div class="shiping">
                <div class="title-ship">
                    <h1>Shipment Details</h1>


                    <form action="" method="post">
                        <span>Do you already have an account ?
                        <button type="submit" name="acc">
                            Login
                        </button>
                    </form>
                </div>

                <form class="shiping-content">
                    <div class="ip-email">
                        <span>EMAIL</span>
                        <input type="email" placeholder="Email" value="<?php echo isset($emailUser) ? $emailUser : ''; ?>">
                    </div>

                    <div class="check-gif">
                        <input type="checkbox" name="check-gif">
                        <label for="check-gif">I'd like to receive discounts and promotions by email</label>
                    </div>

                    <div class="ip-name">
                        <span>NAME</span>
                        <div><input type="text" placeholder="First and last name" value="<?php echo isset($userName) ? $userName : ''; ?>"></div>
                    </div>

                    <div class="ip-phone">
                        <span>PHONE</span>
                        <div><input type="tel" placeholder="Phone number" value="<?php echo isset($telephone) ? $telephone : ''; ?>"></div>
                    </div>

                    <div class="ip-address">
                        <span>ADDRESS</span>
                        <div><input type="tel" placeholder="Address" value="<?php echo isset($address) ? $address : ''; ?>"></div>
                    </div>

                    <div class="btn-order">
                        <button class="order">Order confirmation</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="pay-cart">
            <div class="listCart">
        
            </div>

            <div class="check-out">
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
                    <div class="shipping-code">
                        <p>
                            Shipping code : 
                        </p>

                        <span>FREE</span>
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

            <div class="code-out">
                <button class="btn-code">Promo Code?</button>
                <button><a href="../html/shop.php"><i class='bx bx-rotate-left'></i>Back to shopping</a></button>
            </div>

            <div class="code">
                <div class="code-box">  
                    <div class="code-content">
                        <input type="checkbox" class="check-code code501" data-key="501" name="option" value="Option 1">
                        <h3><i class='bx bxs-purchase-tag' ></i>10% Sale off for orders from $200</h3>
                    </div>
                </div>

                <div class="code-box">
                    <div class="code-content">
                    <input type="checkbox" class="check-code code502" data-key="502" name="option" value="Option 2">
                        <h3><i class='bx bxs-purchase-tag' ></i>15% Sale off for orders from $400</h3>
                    </div>
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
    <script src="../js/pay.js"></script>
</body>
</html>