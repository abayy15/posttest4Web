<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gahwa Story Coffee: Kedai Kopi Super</title>
    <link rel="icon" href="image1.png">
    <link rel="stylesheet" href="stylesheet/style.css">
    <script src="jquery.js"></script>
    <script src="https://kit.fontawesome.com/d6e78495c8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="toggle"> <!--Untuk latar belakang-->    
            <div class="circle"></div> <!--Icon lingkaran-->    
            <div class="toggle-moon"><i class="fas fa-moon"></i></div> <!--Icon bulan-->    
            <div class="toggle-sun"><i class="fas fa-sun"></i></div> <!--Icon matahari-->
        </div>
        <a href="index.html"><img src="image.png" alt=""></a>
        <div class="header-logo"><a href="index.html">Gahwa Story Coffee</a></div>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#footer-judul">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main"> <br>
        <div class="main-masukan">
            <?php
                if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $telepon = $_POST['telepon'];
                    $jenis = $_POST['jenis'];
                    $lokasi = $_POST['lokasi'];
                    $pesan = $_POST['pesan'];

                    echo "<ul>";
                    echo "<li>Nama         : $nama</li>";
                    echo "<li>Email        : $email</li>";
                    echo "<li>Telepon      : $telepon</li>";
                    echo "<li>Jenis Kelamin: $jenis</li>";
                    echo "<li>Lokasi Gerai : $lokasi</li>";
                    echo "<li>Pesan        : $pesan</li>";
                }
            ?>
        </div>
    </div>
    <br>
    <br>
    <footer class="footer">
        <a href="index.html"><img src="image.png" alt=""></a>
        <div id="footer-judul">ABOUT US</div>
        <div class="footer-logo"><a href="index.html">Gahwa Story Coffee</a></div>
        <div class="footer-list">
            <h3 id="sosmed-footer">Temukan Kami Di</h3>
            <nav>
                <ul>
                    <li><a href="index2.html">Tentang</a></li>
                    <li><a href="contact.php">Hubungi Kami</a></li>
                </ul>
            </nav>
        </div>
        <div class="sosmed-container">
            <div class="sosmed-ig">
                <a href="https://www.instagram.com/gahwa.storycoffee/">
                    <img src="ig.png" alt="">
                </a>
            </div>
            <div class="sosmed-maps">
                <a href="https://www.google.com/maps/place/Kedai+Gahwa+Story+Coffee/@-1.3904786,116.617455,17z/data=!4m12!1m6!3m5!1s0x2df117bc26c3de59:0x47f0caa11d90495e!2sKedai+Gahwa+Story+Coffee!8m2!3d-1.3904968!4d116.6174563!3m4!1s0x2df117bc26c3de59:0x47f0caa11d90495e!8m2!3d-1.3904968!4d116.6174563">
                    <img src="maps.png" alt="">
                </a>
            </div>
        </div>
        <div class="copyright">
            ?? 2020 | 
            <a href="https://www.instagram.com/aby.krnwn/">Aby Kurniawan.</a>
            All Rights Reserved.
        </div>
    </footer>

    <script src="script.js"></script>

</body>
</html>