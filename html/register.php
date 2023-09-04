<?php
    require('../connectDB/connect.php');
    $err = [];
    if(isset($_POST['submit-register']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $password = $_POST['password'];

        $select = "SELECT * FROM `account` WHERE `email` = '$email'";
        $result = $conn->query($select);

        while($rows = mysqli_fetch_assoc($result)) {
            $checkEmail = $rows["email"];
        }

        $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $patternPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/';
        $patternTel = '/^0[0-9]{9}$/';

        if(empty($username) || empty($email) || empty($tel) || empty($password))
        {
            $err['empty'] = 'Please enter full information!';
        }
        else if(preg_match($patternEmail, $email)==0)
        {
            $err['email'] = 'Please enter correct email format!';
        }
        else if(preg_match($patternTel, $tel)==0)
        {
            $err['tel'] = 'Please enter the correct phone number format!';
        }
        else if(preg_match($patternPassword, $password)==0)
        {
            $err['password'] = 'Password must be between 8 and 16 characters (with one special character, one uppercase letter, and one number)';
        }
        else if($checkEmail == $email) 
        {
            $err['empty'] = 'Account already in use!';
        }
        else{
            if(empty($err))
            {
                $sql = "INSERT INTO `account` (`username`, `email`, `telephone`, `password`) VALUES ('$username', '$email', '$tel', '$password')";
                $conn->query($sql);
                header("Location: ../html/login.php");
            }
        }   
    }
?>

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
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>RideCulture Moto</title>
</head>
<body>
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
            <i class='bx bx-x'></i>
            <input type="text" placeholder="Enter Search...">
            <i class='bx bx-search'></i type="submit">
        </form>
    </div>

    <div class="form-2">
        <div class="register-content">
            <div class="register-box">
                <div class="title-register">
                    <h1>Register</h1>

                    <p>If you already have an account.<button class="btnlogin"><a href="../html/login.php">Login</a></p>
                </div>

                <form class="form-register" action="" method="post">
                    <div class="username">
                        <i class='bx bx-user'></i>
                        <input type="text" placeholder="Username" name="username" id="username">
                    </div>
                    <div class="email">
                        <i class='bx bx-envelope'></i>
                        <input type="text" placeholder="Email" name="email" id="email">
                    </div>
    
                    <div class="sdt">
                        <i class='bx bx-phone'></i>
                        <input type="text" placeholder="Telephone" name="tel" id="tel">
                    </div>
                    
                    <div class="password">
                        <i class='bx bx-low-vision'></i>
                        <input type="password" placeholder="Password" name="password" id="password">
                    </div>

                    <div class="has-error">
                        <span><?php echo(isset($err['email']))?$err['email']:'' ?></span>
                        <span><?php echo(isset($err['tel']))?$err['tel']:'' ?></span>
                        <span><?php echo(isset($err['password']))?$err['password']:'' ?></span>
                        <span><?php echo(isset($err['empty']))?$err['empty']:'' ?></span>
                    </div>

                    <div class="btn-register">
                        <button type="submit" name="submit-register">REGISTER</button>

                        <span>
                            <div></div> Register with social accounts <div></div>
                        </span>

                        <div class="social-register">
                            <button href=""><i class='bx bxl-facebook'></i></button>
                            <button href=""><i class='bx bxl-google'></i></button>
                            <button href=""><i class='bx bxl-twitter'></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-menu">
            <ul class="office">
                <li>
                    <div class="logo-footer">
                        <a href="#"><span><i class='bx bxl-flutter'></i>RideCulture<p>Moto<i
                                        class='bx bx-paper-plane'></i></p></span></a>
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
                <h3>Office <div class="under-line"><span></span></div>
                </h3>
                <li>
                    <p><i class='bx bx-right-arrow-alt'></i> <span><i class='bx bxl-medium-old'></i></span> RideCulture
                        Moto</p>
                </li>
                <li>
                    <p><i class='bx bx-right-arrow-alt'></i> <span><i class='bx bx-map'></i></span> Urban Area, Ngu Hanh
                        Son District, Da Nang</p>
                </li>
                <li>
                    <p><i class='bx bx-right-arrow-alt'></i> <span><i class='bx bx-envelope'></i></span>
                        rideculturemoto@gmail.com</p>
                </li>
                <li>
                    <p><i class='bx bx-right-arrow-alt'></i> <span><i class='bx bxs-phone'></i></span> +84779503454</p>
                </li>
            </ul>

            <ul class="office">
                <h3>Links <div class="under-line"><span></span></div>
                </h3>
                <li><a href="../index.php">
                        <p><i class='bx bx-right-arrow-alt'></i> Home</p>
                    </a></li>
                <li><a href="../html/news.php">
                        <p><i class='bx bx-right-arrow-alt'></i> News</p>
                    </a></li>
                <li><a href="../html/shop.php">
                        <p><i class='bx bx-right-arrow-alt'></i> Shop</p>
                    </a></li>
                <li><a href="../html/blog.php">
                        <p><i class='bx bx-right-arrow-alt'></i> Blog</p>
                    </a></li>
            </ul>

            <ul class="office">
                <h3>Newsletter <div class="under-line"><span></span></div>
                </h3>
                <li>
                    <form action="" class="contact">
                        <button><i class='bx bx-envelope'></i></button>
                        <input type="email" name="email" id="email" placeholder="Enter email...">
                        <button type="submit"><i class='bx bx-send'></i></button>
                    </form>
                </li>

                <li class="social-footer">
                    <button><i class='bx bxl-facebook'></i></button>
                    <button><i class='bx bxl-instagram'></i></button>
                    <button><i class='bx bxl-twitter'></i></button>
                    <button><i class='bx bxl-youtube'></i></button>
                </li>
            </ul>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/js/login.js"></script>
</body>

</html>
