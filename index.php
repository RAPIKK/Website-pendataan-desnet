<?php 
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan DESNET.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Data Barang dan Surat</a></div>
            <div class="menu">
                <ul>
                    <li><a href=>Home</a></li>
                    <li><a href=>Contact</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
   
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="logo">
                <img src="<?php echo ambil_gambar('22')?>"/>
            </div>
            <div class="kolom">
                <p class="deskripsi">Selamat Datang</p>
                <h2>Enjoy This Web!!!</h2>
                <p>Pendataan yang simpel.</p>
                <p><a href="<?php echo ('https:localhost/website-Pendataan-DESNET/admin/halaman.php')?>" class="tbl-pink">Saya ingin memasukkan data</a></p>
            </div>
        </section>
    
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>DESNET</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, culpa!</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, culpa!</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl. Karang Rejo III No.6B, Banyumanik, Kec. Banyumanik, Kota Semarang, Jawa Tengah</p>
                    <p>Kode Pos: 50264</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>Official Website: </b>Desnet.id</p>
                    <p><b>Buy domain: </b>Desnet.com</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>DESNET</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>