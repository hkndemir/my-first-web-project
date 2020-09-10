<?php
$conn = mysqli_connect("localhost", "root", "", "hulorix");
include("../engine/Database.php");
if (isset($_GET['ide'])) {
    $sql = $database->row("select * from urunler where ide=:id", array("id" => $_GET['ide']));
    if ($sql) {
        $name = $sql['isim'];
        $aciklama = $sql['aciklama'];
        $kategori = $sql['kategori'];
        $alis = $sql['alis'];
        $satis = $sql['satis'];
        $stok = $sql['stok'];
        $resim = $sql['resim'];
    }
}
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
    <title>ÜRÜN GÜNCELLE</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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

                        <li class="">
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg">
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>ÜRÜN GÜNCELLE</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <form action="g.php" method="POST" class="form-horizontal" id="form1" enctype="multipart/form-data">
                                                <input type="hidden" name="ide" value="<?php echo $_GET['ide']; ?>">
                                                <input type="hidden" name="isset" value="urunGuncelle">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label"> <strong>ÜRÜN ADI</strong></label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="isim" name="isim" placeholder="Ürün Adını Giriniz" class="form-control" value="<?= $name ?>">

                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="multiple-select" class=" form-control-label"><strong>ÜRÜN KATEGORİ</strong></label>
                                                    </div>
                                                    <div class="col col-md-9">
                                                        <select name="kategori" id="multiple-select" multiple="" class="form-control">
                                                            <?php
                                                            $data = $database->query("Select * From kategoriler");
                                                            for ($j = 0; $j < count($data); $j++) {
                                                                if ($kategori == $data[$j]['id']) {
                                                            ?><option selected value="<?= $data[$j]['id'] ?>"><?= $data[$j]['adi'] ?></option><?php
                                                                                                                                                } else {
                                                                                                                                                    ?><option value="<?= $data[$j]['id'] ?>"><?= $data[$j]['adi'] ?></option><?php
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                            ?>



                                                        </select>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="textarea-input" class=" form-control-label pl-3"><strong>AÇIKLAMA</strong></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="aciklama" id="textarea-input" rows="9" placeholder="Content..." class="form-control"> <?= $aciklama ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label pl-3"> <strong>ÜRÜN STOK</strong></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="text-input" name="stok" placeholder="Ürün Stoğunu Giriniz" class="form-control" value="<?= $stok ?>">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label pl-3"> <strong>ÜRÜN ALIŞ FİYAT</strong></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="text-input" name="alis" placeholder="Ürün Alış Fiyatını Giriniz" class="form-control" value="<?= $alis ?>">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label pl-3"> <strong>ÜRÜN SATIŞ FİYAT</strong></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="text-input" name="satis" placeholder="Ürün Satış Fiyatını Giriniz" class="form-control" value="<?= $satis ?>">

                                            </div>
                                        </div>
                                        <div class="row form-group ml-1">
                                            <div class="col col-md-3 ">
                                                <label for="file-input" class=" form-control-label"> <strong>ÜRÜN RESMİ</strong></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <img src="<?= $resim ?>" style="width: 5rem;"><input style="display: inline;" type="file" id="resim" name="resim" placeholder="Ürün Resmi Yükleyiniz" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm" onclick="temizleme();">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                        </form>

                                        <div class="row">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <script>
                        function temizleme() {
                            document.getElementById("form1").reset();
                            console.log("askdns");


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