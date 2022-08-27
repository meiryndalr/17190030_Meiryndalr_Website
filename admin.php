<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All About Kpop | Admin</title>
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
                <h1>👑Zona Fangirls👑</h1>
                <p>🎶✨Mengenal lebih dalam Kpop ✨🎶 | Kpop isn't just a music genre🎆</p>
            </div>
            <div class="judul" >
                <h2>All About Kpop🎇</h2>
                <p class="deskripsi">The world's most famous and popular languange is music 🎵🎤- psy</p>
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
            <div class="ateez">
                <div>
                    <img src="https://pict-a.sindonews.net/dyn/360/pena/news/2021/12/17/700/630929/ateez-dan-kai-exo-kuasai-penjualan-album-fisik-di-gaon-chart-iks.jpg" alt="pict" width="150" height="90">
                </div>
                    <h2>Ateez</h2>
                    <p>Ateez (에이티즈) adalah sebuah grup vokal laki-laki 8 anggota asal Korea Selatan yang berada di bawah naungan KQ Entertainment. Grup tersebut terdiri dari delapan anggota, yakni Hongjoong, Seonghwa, Yunho, Yeosang, San, Mingi, Wooyoung, dan Jongho. Ateez melakukan debut pada tanggal 24 Oktober 2018</p>
            </div>

            <div class="seventeen">
                <div>
                    <img src="https://www.allkpop.com/upload/2021/07/content/121458/web_data/allkpop_1626116297_c47850005840a2526ec4664961bfa086.jpg" alt="pict" width="150" height="90">
                    <h2>Seventeen</h2>
                    <p>Seventeen (세븐틴) adalah sebuah boy band asal Korea Selatan yang dibentuk oleh Pledis Entertainment. Grup yang terdiri dari 13 anggota ini dibagi berdasarkan spesialisasi keahlian masing-masing ke dalam 3 sub-unit; hip-hop unit, vokal unit, dan performance unit. Kata "seventeen" yang berarti "tujuh belas" merupakan gabungan dari jumlah keseluruhan anggota mereka, jumlah sub-unit, dan angka 1 yang berarti "kesatuan tim". </p>
                </div>
            </div>
        </aside>
        <!---akhir dari sidebar-->
                
        <!--bagian konten blog-->
        <div class="blog">
            <div class="updated">
                    Updated, 11 Februari 2022
                </div>
            <h2>Masukkan Berita dibawah ini ⬇</h2>
            <table >
                    <form action="prosessimpan2.php" method="POST" >
                        <tr>
                            <td>Judul    :</td>
                            <td><input type="text" name="judul" placeholder="Masukkan Judul" required>
                        </tr>

                        <tr>
                            <td>Berita   :</td>
                            <td><textarea name="berita" id="" cols="20" rows="7"> </textarea>
                        </tr>
                        <tr>
                            <td>Tanggal   :</td>
                            <td><input type="date" name="tanggal" required>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="submit" value="Send"></center>
                            </td>
                        </tr>
                    </form>
                    </table>
<?php

include "koneksi2.php";

?>
            
                
                <table width="100%" border="">
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Berita</th>
                        <th>Opsi</th>

                    </tr>
                    
                    <?php 

                    $sql = "SELECT * FROM tb_news";
                    $baca = mysqli_query ($db, $sql); //fungsi di php untuk membaca perintah bahasa sql
                    $no=1;
                    while ($data=mysqli_fetch_array($baca)) {
                        $judul = $data [1];
                        $berita = $data [2];
                        $tanggal = $data [3];
                        $id = $data [0];

                    ?>
                    <tr>
                        <td><?php echo $judul?></td>    
                        <td><?php echo $tanggal?></td>
                        <td><?php echo $berita?></td>
                        <td align="center">
                            <a href="edit_news.php?id=<?php echo $id;?>"><button>Edit</button></a>
                            <a href="delete.php?id=<?php echo $id;?>"><button>Hapus</button></a>
                        </td>
                    </tr>
            <?php
            $no++;
                    }
            ?>      
                </table>

        </div>
        <!--akhir bagian blog website-->
</body>
<footer>
    <center>
    Copyright © 2022 Amel Meiryn
    </center>
</footer>
</html>