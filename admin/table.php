    <?php 

$conn = mysqli_connect("localhost", "root", "", "hulorix");

$oku=mysqli_query($conn, "select * from urunler inner join kategoriler on kategoriler.id=urunler.kategori");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>ÜRÜN LİSTESİ</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                         <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>ANA SAYFA</a>
                         </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>ÜRÜN LİSTESİ</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>ÜRÜN EKLE</a>
                        </li>
                        <li>
                            <a href="kategorilist.php">
                                <i class="fas fa-table"></i>KATEGORİ LİSTELE</a>
                        </li>
                        <li>
                            <a href="kategoriekle.php">
                                <i class="far fa-check-square"></i>KATEGORİ EKLE</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>ANA SAYFA</a>
                         </li>

                        <li >
                            <a href="table.php">
                                <i class="fas fa-table"></i>ÜRÜN LİSTESİ</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>ÜRÜN EKLE</a>
                        </li>
                        <li>
                            <a href="kategorilist.php">
                                <i class="fas fa-table"></i>KATEGORİ LİSTELE</a>
                        </li>
                        <li>
                            <a href="kategoriekle.php">
                                <i class="far fa-check-square"></i>KATEGORİ EKLE</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        <form class="form-header" action="" method="POST">    
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">      
                                    <div class="noti__item js-item-menu">      
                                    <div class="noti__item js-item-menu">      
                                        </div>
                                    </div>
                                </div>
                                <div class="account">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">ÜRÜN LİSTESİ</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2 mt-5 pt-4">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Ürün Resmi</th>
                                                <th>isim</th>
                                                <th>kategori</th>
                                                <th>açıklama</th>
                                                <th>stok</th>
                                                <th>alış fiyatı</th>
                                                <th>satış fiyatı</th> 
                                                <th>işlem</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody1">
                                        <?php 
                                         while($listele=mysqli_fetch_array($oku)){
                                        ?>
                                            <tr class="tr-shadow" id="row_<?php echo $listele['ide']; ?>">
                                            <td><?php echo $listele['ide']; ?></td>
                                            <td><img src="images/products/<?php echo base64_decode($listele['resim']); ?>" style="width: 5rem;" class="img-fluid "  alt="resim"></td>
                                            <td><?php echo $listele['isim']; ?></td> 
                                            <td><?php echo $listele['adi']; ?></td>
                                            <td><?php echo $listele['aciklama']; ?></td>
                                            <td><?php echo $listele['stok']; ?></td>
                                            <td><?php echo $listele['alis']." TL"; ?></td>
                                            <td><?php echo $listele['satis']." TL"; ?></td>
                                                <td> 
                                                    <div class="table-data-feature">
                                                    <a href="guncelle.php?ide=<?php echo $listele['ide']; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>
                                                        <a href="javascript:Changedelete(<?php echo $listele['ide']; ?>)"> <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button> </a>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                         <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        function Changedelete(ad){
            $.ajax({
            url:"sil.php",
            method:"GET",
            data:{ide: ad},
            success: function(kont){
                if(kont == "true")
            {
                var satir = "#row_"+ad;
                $(satir).fadeOut("slow");
            }
            else
            {
                alert("Ürün Silinemedi");
            }
            }
        });
        }

    </script>





    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
