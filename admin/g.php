<?php
// error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "hulorix");
switch ($_POST['isset']) {
    case "statusGuncele":
        $id = $_POST['id'];
        $cek = mysqli_query($conn, "Select status from kategoriler where id=" . $id);
        $status = mysqli_fetch_array($cek);
        if ($status["status"] == 0) {
            mysqli_query($conn, "Update kategoriler SET status = 1 where id=" . $id);
        } else {
            mysqli_query($conn, "Update kategoriler SET status = 0 where id=" . $id);
        }
        echo "true";
        break;
    case "urunGuncelle":
       
        if (isset($_FILES['resim'])) {
            $kaynak = $_FILES["resim"]["tmp_name"]; // tempdeki adı
            $ad =  $_FILES["resim"]["name"]; // dosya adı 
            $hedef = "images/products"; // başta açtıgımız klasör adımız..
            $yol = $hedef . "/" . $ad;
            $kaydet = move_uploaded_file($kaynak, $yol); // resmimizi klasöre kayıt ettiriyoruz.
            if ($kaydet) {
                $id = $_POST['ide'];
                $isim = $_POST['isim'];
                $kategori = $_POST['kategori'];
                $aciklama = $_POST['aciklama'];
                $stok = $_POST['stok'];
                $alis = $_POST['alis'];
                $satis = $_POST['satis'];
                $ad1 = base64_encode($ad);
                $gunc = "update urunler set resim='" . $ad1 . "', isim='" . $isim . "',kategori=" . $kategori . ",aciklama='" . $aciklama . "',stok=" . $stok . ",alis=" . $alis . ",satis=" . $satis . " where ide=" . $id . "";
               
                $kont = mysqli_query($conn, $gunc);
                if ($kont) {
                    header("refresh:1;url=table.php");
                } else {
                    echo "<br>" . "olmadı" . "<br>";
                }
            }
        }else {
            $id = $_POST['ide'];
            $isim = $_POST['isim'];
            $kategori = $_POST['kategori'];
            $aciklama = $_POST['aciklama'];
            $stok = $_POST['stok'];
            $alis = $_POST['alis'];
            $satis = $_POST['satis'];
            $gunc = "update urunler set isim='" . $isim . "',kategori=" . $kategori . ",aciklama='" . $aciklama . "',stok=" . $stok . ",alis=" . $alis . ",satis=" . $satis . " where ide=" . $id . "";
            $kont = mysqli_query($conn, $gunc);
            echo $gunc;
            if ($kont) {
                header("refresh:1;url=table.php");
            } else {
                echo "<br>" . "olmadıt" . "<br>";
            }
        }
        break;
    case "kategori1":
        $id = $_POST['id'];
        $isim = $_POST['isim'];
        $gunc = "update kategoriler set adi='" . $isim . "' where id=" . $id . "";
        $kont = mysqli_query($conn, $gunc);
        if ($kont) {
            header("refresh:1;url=kategorilist.php");
        } else {
            echo "<br>" . "olmadı" . "<br>";
        }
}
