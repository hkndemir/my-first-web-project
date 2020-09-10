<?php 
$conn = mysqli_connect("localhost", "root", "", "hulorix");
    switch($_POST['isset'])
    {
        case "form":

            $kaynak = $_FILES["resim"]["tmp_name"]; // tempdeki adı


            $ad =  $_FILES["resim"]["name"]; // dosya adı
    
    
            $hedef = "images/products"; // başta açtıgımız klasör adımız..
            $yol = $hedef."/".$ad;

            $kaydet = move_uploaded_file($kaynak,$yol); // resmimizi klasöre kayıt ettiriyoruz.
        if($kaydet) {
            $isim=$_POST['isim'];
            $kategori=$_POST['kategori'];
            $aciklama=$_POST['aciklama'];
            $stok=$_POST['stok'];
            $alis=$_POST['alis'];
            $satis=$_POST['satis'];
            $ad1 = base64_encode($ad);
            $gonder="insert into urunler(resim,isim,kategori,aciklama,stok,alis,satis) values('".$ad1."','".$isim."',".$kategori.",'".$aciklama."',".$stok.",".$alis.",".$satis.")";
            $kont=mysqli_query($conn,$gonder);
            echo $gonder."<br>";
            if($kont){
                header('Location: table.php ');
}
            else{

                echo "olmadı";
}      
        }
            
        break;
        case "kategori":
            $isim1=$_POST['isim'];
            $gonder1="insert into kategoriler(adi) values('".$isim1."')";
            $kont1= mysqli_query($conn,$gonder1);
            if($kont1){
              header('Location: kategorilist.php ');
          }
            else{
              echo "olmadı";
              echo $gonder1;
          }
        break;
           



    }


    ?>


