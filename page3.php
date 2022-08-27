<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All About Kpop | Opini Fangirl</title>
    <link rel="stylesheet" type="text/css" href="page3.css">
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
                <li class="active">
                    <a href="page3.php">Message</a>
                    
                </li>
                <li >
                    <a href="page4.php">News</a>
                    
                </li>
                <li >
                    <a href="index.php">Login</a>
                    
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
            <div class="theboyz">
                <div>
                    <img src="https://pbs.twimg.com/media/FCjajr7UUAIr-PH?format=jpg&name=large" alt="pict" width="150" height="90">
                </div>
                    <h2>The Boyz</h2>
                    <p>The Boyz (더보이즈) adalah grup vokal pria Korea Selatan yang dibentuk oleh Cre.ker (Creative Kernel) Entertainment yang saat ini namanya menjadi IST Entertainment. Grup ini terdiri dari 11 anggota: Sangyeon, Jacob, Younghoo Hyunjae, Juyeon, Kevin, New, Q, Ju Haknyeon, Sunwoo, dan Eric|The Boyz debut pada 6 Desember 2017.</p>
            </div>

            <div class="nct">
                <div>
                    <img src="https://editorial.femaledaily.com/wp-content/uploads/2021/10/NCT2020.png" alt="pict" width="150" height="90">
                    <h2>NCT</h2>
                    <p>NCT (엔시티) Neo Culture Technology adalah sebuah boy group asal Korea Selatan yang dibentuk oleh SM Entertainment.[3] Grup boyband ini terbagi menjadi beberapa sub-unit yaitu, NCT U, NCT 127, NCT Dream, dan WayV. Sejak diumumkan pembentukannya pada tahun 2016, grup ini telah berkembang hingga mencapai total 23 anggota yang tergabung dalam empat sub-unit berbeda. </p>
                </div>
            </div>
        </aside>
        <!---akhir dari sidebar-->
                
        <!--bagian konten blog-->
        <div class="blog">
            <div class="updated">
                    Updated, 10 Februari 2022
                </div>
            <h2>Your Opinion About Kpop or Fangirls ⬇</h2>
            <table>
                    <form action="prosessimpan.php" method="POST" >
                        <tr>
                            <td>Username    :</td>
                            <td><input type="text" name="uname" placeholder="Username" required>
                        </tr>

                        <tr>
                            <td>Message   :</td>
                            <td><input type="text" name="massage" placeholder="Drop Your Opinion here" required>
                        </tr>
                        <tr>
                               
                            <td colspan="2"><center><input type="submit" value="Send"></center>
                            </td>
                        
                        </tr>
                    </form>
                    </table>
<?php

include "koneksi.php";

?>
            
                
                <table >
                    
                    <?php 

                    $sql = "SELECT * FROM tb_komen";
                    $baca = mysqli_query ($db, $sql); //fungsi di php untuk membaca perintah bahasa sql
                    $no=1;
                    while ($data=mysqli_fetch_array($baca)) {
                        $username = $data [1];
                        $massage = $data [2];
                        $id = $data [0];

                    ?>
                    <tr>
                        <td><?php echo $username?>  : <?php echo $massage?></td>
                    
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