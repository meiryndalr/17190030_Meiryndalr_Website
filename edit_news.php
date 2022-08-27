<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All About Kpop | Edit News</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="bxslider/dist/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bxslider/dist/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sliderku').bxSlider({
                auto:true,
                mode:'fade',
            })
        })
    </script>
</head>
<body>
    
    <div class="box">
        <header>
            <!-- bagian header logo -->
            <div class="logo">
                <img src="https://png.pngtree.com/png-vector/20210803/ourlarge/pngtree-cute-korean-kpop-music-culture-font-logo-png-image_3772607.jpg" alt="header" width="100px" height="100px">
                <h1>Zona Fangirls</h1>
                <p>Mengenal lebih dalam Kpop..</p>
            </div>
            <div class="judul" >
                <h2>All About Kpop</h2>
                <p class="deskripsi">The world's most famous and popular languange is music - psy</p>
            </div>
      
    <!--akhir dari header-->
        <!---bagian menu-->
    <div class="taskbar">
        <nav class="menu">
            <ul>
                <li >
                    <a href="page1.php">Home</a>

                </li>
                <li >
                    <a href="page2.php">Collection</a>
                    
                </li>
                <li >
                    <a href="page3.php">Message</a>
                    
                </li>
                <li >
                    <a href="page4.php">News</a>
                    
                </li>
                <li class="active">
                    <a href="index.php">Admin</a>
                    
                </li>
            </ul>
        </nav>
    </div>
        <!-- slider -->
        <div class="sliderku">
                <div>
                    <center>
                    <img src ="https://assets.pikiran-rakyat.com/crop/3x377:719x755/x/photo/2021/05/26/71975585.jpg" height="250" width="450">
                    </center>
                </div>
            
                <div>
                    <center>
                    <img src ="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/08/10/3021364880.jpeg" height="250" width="450">
                    </center>
                </div>
                
                <div>
                    <center>
                    <img src ="https://pbs.twimg.com/media/FCjajr7UUAIr-PH?format=jpg&name=large" height="250" width="450">
                    </center>
                </div>

                 <div>
                    <center>
                    <img src ="https://editorial.femaledaily.com/wp-content/uploads/2021/10/NCT2020.png" height="250" width="450">
                    </center>
                </div>

                <div>
                    <center>
                    <img src ="https://sabilia.id/wp-content/uploads/2021/07/kapan-anniversary-treasure.jpg" height="250" width="450">
                    </center>
                </div>
        </div>

        <!---akhir dari menu-->
        <!--bagian sidebar website-->
        <aside class="sidebar">
            <div class="exo">
                <div>
                    <img src="https://imgsrv2.voi.id/5BPETXXmhWA31SN7DBFHoAEV-iebfh8KXXjD9dqxlpg/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy81NDA1MS8yMDIxMDUyNTE1NDItbWFpbi5jcm9wcGVkXzE2MjE5MzIxMzAuanBn.jpg" alt="pict" width="150" height="90">
                </div>
                    <h2>EXO</h2>
                    <p>EXO (엑소) adalah sebuah boy band Korea Selatan-Tiongkok berbasis di Seoul, dengan 9 anggota: Suho, Baekhyun, Chanyeol, D.O., Kai, Sehun, Xiumin, Lay, dan Chen. Grup ini dibentuk oleh SM Entertainment pada tahun 2011 dan debut pada tahun 2012.</p>
            </div>

            <div class="bts">
                <div>
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/945x630/photo/2022/01/26/bts-duduki-peringkat-kedua-sebag-20220126090623.jpg" alt="pict" width="150" height="90">
                    <h2>BTS</h2>
                    <p>BTS (방탄소년단) Bangtan Boys, adalah grup vokal pria asal Korea Selatan. Grup ini beranggotakan 7 orang, antara lain RM, J-Hope, SUGA, Jin, V, Jungkook, dan Jimin yang dibentuk oleh Hybe Corporation dan debut pada tahun 2013.. </p>
                </div>
            </div>
        </aside>
</html>
<?php
    include "koneksi2.php";
    
    $id = $_GET['id'];
    $ambilData = mysqli_query($db, "SELECT * FROM tb_news WHERE id='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="edit_news.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="editnews">
                <h2>Edit Berita ⬇</h2>
        
            <div >
                <table>
                <form action="" method="POST">

                    <div class="form_judul">
                    <tr>
                        <td for="judul">Judul</td>
                        <td><input type="text" name="judul" value="<?php echo $data['judul'] ?>" placeholder="Edit Judul"></td>
                    </tr>
                    </div>

                    <div class="form_tanggal">
                    <tr>
                        <td for="tanggal">Tanggal</td>
                        <td><input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>">
                        </td>
                    </tr>
                    </div>

                    <div class= "form_isi">
                    <tr>
                        <td for="berita">Berita</td>
                        <td><input type="text" name="berita" cols="20" rows="7" value="<?php echo $data ['isi'] ?>"></textarea></td>
                    </tr>
                    </div>


                    <tr>
                        <td><a href="prosessimpan3.php"><button type="submit" name="simpan">SIMPAN</button></a></td>
                        <td><button type="reset" name="batal">BATAL</button></td>
                </form>
            </table>
            </div>
        </div>
    </div>
    <div class="kembali">
            <a href="admin.php"><button>Kembali</button> </a>
    </div>

</body>

<?php

        if(isset($_POST['simpan']))
        {
            $judul = $_POST['judul'];
            $berita = $_POST['berita'];
            $tanggal = $_POST['tanggal'];
            $id = $_GET['id'];

            $baca= mysqli_query ($db, "UPDATE tb_news 
            SET judul='$judul', isi='$berita', tanggal='$tanggal'
            WHERE id='$id'") or die(mysqli_error($db));

            if ($baca) 
             {
              echo "<script>
                alert('Ur Edit Saved successfully^^');
                window.location='admin.php';
                </script>
                ";
              }
             else{
            echo "<script>
                alert('Ur Edit Failed to Saved!');
                window.location='edit_news.php';
                </script>";
             }
        }
?>





<footer>

    <center>
    <p>Copyright © 2022 Amel Meiryn</p>
    </center>
</footer>
</html>