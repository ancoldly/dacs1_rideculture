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
            $avatar = $rows["avatar"];
            $avatartemp = "../img-news/avt-removebg-preview.png";
        }
    }
    else{
        
    }
?>

<?php
require('../connectDB/connect.php');

// Kiểm tra xem người dùng đã bấm nút logout hay chưa
if (isset($_POST['logout'])) {
  // Lấy thông tin từ bảng temporary
  $query = "SELECT * FROM `temporary`";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $email = $row["emailTemporary"];

    // Xóa bản ghi trong bảng temporary
    $delete = "DELETE FROM `temporary` WHERE `emailTemporary` = '$email'";
    mysqli_query($conn, $delete);
  }
  
  header("Location: ../html/login.php");
  exit();
}
?>

<?php
require('../connectDB/connect.php');

if(isset($_POST['btn-save-info'])) {
    $emailupdate = $_POST['email'];
    $savename = $_POST['username'];
    $savedate = $_POST['date'];
    $mysql_date = date('Y-m-d', strtotime($savedate));
    $savegender = $_POST['gender'];
    $saveaddress = $_POST['address'];

    $update = "UPDATE `account` SET `username` = '$savename', `birth` = '$mysql_date', 
    `gender` = '$savegender', `address` = '$saveaddress ' WHERE `email` = '$emailupdate'";
    mysqli_query($conn, $update);

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
        header("Location: ../html/login.php");
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

<?php
require('../connectDB/connect.php');

if(isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == 0) {
    // Lấy thông tin về ảnh đại diện
    $avatar_name = $_FILES["avatar"]["name"];
    $avatar_size = $_FILES["avatar"]["size"];
    $avatar_tmp = $_FILES["avatar"]["tmp_name"];
    $avatar_type = $_FILES["avatar"]["type"];
  
    $avatar_path = "../avatar/" . $avatar_name;
    
    if(move_uploaded_file($avatar_tmp, $avatar_path)) {
        $email = mysqli_real_escape_string($conn, $_SESSION['email']);
        $sql = "UPDATE `account` SET `avatar` = '$avatar_path' WHERE `email` = '$emailUser'";
        $conn->query($sql);

        header("Location: ../html/user.php");

        $filename = $avatar;
        if (file_exists($filename)) {
            unlink($filename);
        }
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
            <button class="bx bx-moon" id="darkMode-icon"></button>
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

    <section class="user-home">
        <div class="user-index">
            <form class="info-user" method="post" enctype="multipart/form-data">
                <div class="avt">
                    <img src="<?php echo(isset($avatar))? $avatar : $avatartemp?>" id="avatar-preview" alt="">
                </div>

                <div class="text-info">
                    <span class="user-name">
                        <?php echo $userName ?> <i class='bx bxs-badge-check'></i>
                    </span>

                    <p class="user-email"><?php echo $emailUser ?></p>

                    <div class="btn-upload">
                        <input type="file" id="avatar" name="avatar" accept="image/*" style="display: none">
                        <label for="avatar">Upload your profile picture</label>
                        <br>
                        <button id="choose-avatar-btn" type="submit" name="submit">Save avatar</button>
                    </div>
                </div>
            </form>

            <div class="info-content">
                <span class="select-info active">Personal information</span>
                <span class="select-info">My order</span>
                <span class="select-info">Membership class</span>
                <span class="select-info">My Voucher</span>
                <form method="post">
                    <button type="submit" class="btn-logout" name="logout">Log out</button>
                </form>
            </div>
        </div>

        <div class="user-next active">
            <div class="info-next">
                <div class="title-info-next">
                    <h3>Personal information</h3>
                </div>

                <form class="info-next-content" method="post">
                    <div class="name-next top">
                        <h3>User Name</h3>
                        <div class="name-next-content border-bot">
                            <input type="text" name="username" value="<?php echo $userName ?>" readonly class="name-user-next">
                            <i class='bx bx-edit-alt edit-name' ></i>
                        </div>
                    </div>

                    <div class="email-next top">
                        <h3>Email</h3>
                        <div class="email-next-content border-bot">
                            <input type="email" name="email" value="<?php echo $emailUser ?>" readonly>
                        </div>
                    </div>

                    <div class="phone-next top">
                        <h3>Number Phone</h3>
                        <div class="phone-next-content border-bot">
                            <input type="tel" value="<?php echo $telephone ?>" readonly>
                        </div>
                    </div>

                    <div class="birth-next top">
                        <h3>Date of birth</h3>
                        <div class="birth-next-content border-bot">
                            <input type="text" name="date" value="<?php echo $birthDate ?>" class="date" readonly>
                            <input type="date" name="date-temp" style="display: none;" class="date-temp">
                            <i class='bx bx-edit-alt edit-date' ></i>
                        </div>
                    </div>

                    <div class="gender-next top">
                        <h3>Gender</h3>
                        <div class="gender-next-content border-bot">
                            <input type="text" name="gender" value="<?php echo $gender ?>" class="gender" readonly>
                            <select name="gender-save" id="gender">
                                <option value="1" disabled selected>Select Gender</option>
                                <option value="2">Male</option>
                                <option value="3">Female</option>
                                <option value="4">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="address-next top">
                        <h3>Address</h3>
                        <div class="address-next-content border-bot">
                            <input type="text" name="address" value="<?php echo $address ?>" readonly class="address-user-next">
                            <i class='bx bx-edit-alt edit-address' ></i>
                        </div>
                    </div>

                    <button type="submit" name="btn-save-info" class="btn-save-info">Save Information</button>
                </form>
            </div>
        </div>

        <div class="user-next">
            <div class="info-order">
                <div class="title-order">
                    <h3>my order</h3>
                </div>

                <div class="order-content">
                    <div class="top-order">
                        <div class="title-content-order">
                            <h4>There are no orders yet.</h4>
                        </div>
                    </div>

                    <div class="banner">
                        <a href="../html/shop.php"><img src="../img-news/banner-user.jpg" alt=""></a>
                    </div>

                    <div class="listCart">

                    </div>
                </div>
            </div>
        </div>
        
        <div class="user-next">
            <div class="info-member">
                <div class="title-member">
                    <h3>MEMBERSHIP CLASS</h3>

                    <div class="point">
                        <p>Rank Points : <span>0</span></p>
                        <p>Reward Points : <span>0</span></p>
                        <p>Total Money : <span>0</span> $</p>
                    </div>
                </div>

                <div class="member-content">
                    <div class="content-top">
                        <div></div>
                        <i class='bx bxs-circle child1' ></i>
                        <div></div>
                    </div>

                    <div class="content-next">
                        <div class="next-member">
                            <h3>MEMBER</h3>
                            <span>Shopping at RideCultureMoto</span>

                            <p><i class='bx bxs-chevrons-right' ></i> Total Spend : 0 - 450 $</p>
                            <p><i class='bx bxs-chevrons-right' ></i> Rank Points : Starting from 0 points</p>
                            <p><i class='bx bxs-chevrons-right' ></i> Free Shipping : You will get free shipping</p>
                        </div>

                        <div class="next-member">
                            <h3>RARE MEMBER</h3>
                            <span>500 Points</span>

                            <p><i class='bx bxs-chevrons-right' ></i> Total Spend : 500 - 1000 $</p>
                            <p><i class='bx bxs-chevrons-right' ></i> Rank Points : 500 to under 1000 points</p>
                            <p><i class='bx bxs-chevrons-right' ></i> For regular orders: a 7% discount is applied to the total value of the order</p>
                            <p><i class='bx bxs-chevrons-right' ></i> You will be downgraded one level after 93 days of inactivity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="user-next">
            <div class="info-voucher">
                <div class="title-voucher">
                    <h3>MY VOUCHER</h3>
                </div>
    
                <div class="voucher-content">
                    <div class="code-box">
                        <div class="code-content">
                            <h3><i class='bx bxs-purchase-tag' ></i>10% Sale off for orders from $200</h3>
                        </div>
                        <button><a href="../html/shop.php">Buy now</a></button>
                    </div>
    
                    <div class="code-box">
                        <div class="code-content">
                            <h3><i class='bx bxs-purchase-tag' ></i>15% Sale off for orders from $400</h3>   
                        </div>
                        <button><a href="../html/shop.php">Buy now</a></button> 
                    </div>
                </div>

                <div class="voucher-content">
                    <div class="code-box">
                        <div class="code-content">
                            <h3><i class='bx bxs-purchase-tag' ></i>Voucher for RARE MEMBER buy 3 get 1 free</h3>
                        </div>
                        <button><a href="../html/shop.php">Buy now</a></button>
                    </div>
    
                    <div class="code-box">
                        <div class="code-content">
                            <h3><i class='bx bxs-purchase-tag' ></i>Voucher for RARE MEMBER 30% off next order</h3>   
                        </div>
                        <button><a href="../html/shop.php">Buy now</a></button> 
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/user.js"></script>
</body>
</html>