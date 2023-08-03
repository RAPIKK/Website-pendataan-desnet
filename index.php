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
                <img src="data:image/png;base64,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"/>
            </div>
            <div class="kolom">
                <p class="deskripsi">Selamat Datang</p>
                <h2>Enjoy This Web!!!</h2>
                <p>Pendataan yang simpel.</p>
                <p><a href="<?php echo ('http://localhost/website-Pendataan-DESNET/admin/halaman.php')?>" class="tbl-pink">Saya ingin memasukkan data</a></p>
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
                    <h3>Contact us</h3>
                    <p>Head Office : Raffless Hill Square,Jln. Bukit Sari Raya No. 8A Semarang </p>
                    <p>Telp. +62-24 746-6-337</p>
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
