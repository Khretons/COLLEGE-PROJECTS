<!DOCTYPE html>
<html>
<head>
<title>Pet Training</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
</script>

<style type="text/css">
body {
  background-image:url(Image/wallp1.png);
   color:#FFFFFF;
  }
#container1{
  font-family:Lucida Bright;
  color:#FFFFFF;
  
  }
#container2{
  background-color:#FFFF33;
  font-family:Lucida Bright;
  font-size:30px;
  color:#FF3300;
  text-align:center;
  
  }
  #container3{
  background-color:#FFFFFF;
  font-family:Lucida Bright;
  font-size:20px;
  color:#33CCFF;
  text-align:center;
  
  }
#container4{
  background-color:#FF9933;
  font-family:Lucida Bright;
  color:#000000;
  text-align:center;
  
  }

.footer{
                font-family: Arial;
                padding:70px 20px;
                text-align: left;
                background: #FCD02C;
            }
            .container{
                max-width:1500px;
                margin:auto;
            }
            .container1{
                max-width:1500px;
                margin:auto;
                display:flex;
                justify-content:center;
            }
            .baris{
                display:flex;
                flex-wrap: wrap;
            }
            .column{
                width: 30%;
                padding: 0 15px;
            }
            .column h4{
                font-size:18px;
                color:#000000;
            }

            .column p2{
                font-size:16px;
            }

            .map-responsive{
                overflow:hidden;
                padding-bottom:56.25%;
                position:relative;
                height:0;
            }

        .dropdown:hover .dropdown-menu{
            display:block;
        }

</style>

</head>

<body>

<header>

        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl navbar-light bg-light">
                <a href="#" class="navbar-brand mb-0 h1">
                    <img class="d-inline-block align-top" src="img/logo.png" width="300">
                </a>
        
                <button type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav"
                class="navbar-toggler"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="index.php" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="aboutus.php" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                                <li>
                                    <a href="PetGrooming.php" class="dropdown-item">Grooming</a>
                                </li>
                                <li>
                                    <a href="PetHotel.php" class="dropdown-item">Hotel</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">Training</a>
                                </li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a href="Products.php" class="nav-link">
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Contact Us Petshop.php" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
        
                </div>
            </nav>
        </div>
    </header>


<div class="container-sm" id="container1">
<marquee>
<b>Petshop Indonesia</b>
" - DOG TRAINING SERVICES - Melayani Jasa Pelatihan Anjing Profesional - Dengan membentuk karakter dan memaksimalkan potensi anjing kesayangan anda"
</marquee>
<center><img src="Image/anabul6.png" width="625px" class="img-fluid"></center>
<h2><b>Apakah Anjing Kesayangan Kamu...</h2><ul>
<h4><li>Sering Di Luar Kendali ?</li>
<li>Merasa Cemas Dengan Sekitar Mereka ?</li>
<li>Sulit Mendengar Perintah atau Menenangkan Diri ?</li></ul>
<h2><b>dan Kamu...</h2><ul>
<li>Ingin Melatih Anjing Kesayangan Kamu?</li>
<li>Tidak Punya Waktu Untuk Melatih Mereka?</li>
<li>Sedang Mencari DOG TRAINER Yang Professional?</li><h4></b>
</ul>
</div>

<div class="container-fluid" id="container2">
KAMI DAPAT MEMBANTU !!
</div>

<br>
<center><img src="Image/anabul7.jpg" width="300px" class="img-fluid"></center>
<br>

<div class="container-sm" id="container3">

<center><img src="Image/logo1.png" width="475px" class="img-fluid"></center>
<p class="h3"><u><b>DOG TRAINING</b>SERVICES</u></p>
Melakukan Pelatihan Anjing Dengan Metode NO FORCE (Tanpa Paksaan).
<br>
Dengan Cara Membentuk Karakter Anjing Dan Memaksimalkan Potensi Dari Anjing Itu Sendiri).
<p class="text-danger h3"><br><b>Train Your Lovely Dog!</p></b>
<br>
Anjing Kesayangan Kamu Akan Mendapatkan Training / Pelatihan Yang Disesuaikan, Antara Lain:

<div class="row">

<div class="col-sm-4">
<br>
<h4>BASIC OBEDIENCE</h4></center>
<p>Pelatihan Kepatuhan Dasar Dan Mental Agar Anjing Kesayangan Bisa Mengikuti Perintahmu, Dan Melihatmu Sebagai Pemimpin</p>
</div>

<div class="col-sm-4">
<br>
<h4>PROBLEM CORRECTING</h4></center>
<p>Melatih Anjing Kesayangan Kamu Dengan Pelatihan Dan Penanganan Custom / Sesuai Masalah Dan Keluhan Masing-Masing</p></div>

<div class="col-sm-4">
<br>
<h4>DOG WALKING</h4></center>
<p>Membantu Anda Yang Tidak Mempunyai Waktu / Sibuk, Agar Anjing Anda Tetap Happy Dan Tetap Bisa Mengeluarkan Energinya</p></div>
</div>
</div>

<h3 class="container-sm">PAKET TRAINING</h3>
<p class="container-sm">Kamu Bisa Memilih Jenis Pelatihan / Training Anjing Kesayanganmu Dengan 3 Pilihan, Yaitu :</p>
<p class="container-sm">1. Boarding School
<br>
Sistem Pelatihan ini, anjing kesayangan Kamu akan dititipkan di tempat pelatihan Petshop Indonesia selama 2 minggu dengan jadwal latihan setiap pagi dan sore hari, untuk hasil lebih efektif & maksimal.
</p>
<p class="container-sm">2. Home Schooling :
<br>
Pelatihan ini dilakukan di rumah Kamu masing-masing. Kamu cukup menyesuaikan jadwal dengan Trainer dari Petshop Indonesia yang akan melatih ke rumahmu.
</p>
<p class="container-sm">3. Regular Training :
<br>
Training / Pelatihan ini dilakukan di tempat yang sudah Petshop Indonesia sediakan, yaitu di Petshop Indonesia 7
</p>

<div class="container-fluid" id="container4">
<b>Segera Daftarkan Anabul Kamu Di</b>
<center><img src="Image/logo1.png" width="475px" class="img-fluid"></center>
<center><img src="Image/anabul8.jpg" width="200px" class="img-fluid"></center>
Tunggu Apa Lagi ?
<br>
Hubungi Kami Segera Melalui Contact US!</b>
</div>

<div class="footer">	 
            <div class="container-fluid mt-3" style="margin-top:auto">
          <div class="baris">
            <div class="col-sm-4 ">		
            <img text-align="top" src="image/petshopid-utk-Plang-biru.png" width="238" height="70" alt="logo">
            <p style="color:#000000"><strong>Pusat Kebutuhan Hewan Peliharaan Terlengkap, Terbesar, & Terpercaya No. 1 di Indonesia</strong></p>
                        <p></p>
                        <p style="color:#000000"><strong>PETSHOP INDONESIA 1 (Main Store)</strong></p>
                        <p2>Jl. Bungur Raya No.31-32, Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat 16421</p2>
                        
                        <hr style="color:#ffffff; width:70%; text-align:left">
              <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('InstagramF','','IMAGES/instagram_1.png',1)"><img src="image/instagram.png" alt="Instagram" name="InstagramF" width="30" height="30" ></a>	
              <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('FacebookF','','IMAGES/facebook_1.png',1)"><img src="image/facebook.png" alt="Facebook" name="FacebookF" width="30" height="30"></a>
              <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('TwitterF','','IMAGES/twitter_1.png',1)"><img src="image/twitter.png" alt="Twitter" name="TwitterF" width="30" height="30"></a>
            <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('YoutubeF','','IMAGES/youtube_1.png',1)"><img src="image/youtube.png" alt="Youtube" name="YoutubeF" width="30" height="30"></a>
                <hr style="color:#ffffff; width:70%; text-align:left">
            </div>
            <div class="col-sm-4">
            <h4 class="text-center">BRANCH STORES</h4> 
                        <div id="map-responsive"><iframe class=" well-sm col-xs-12 mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126932.99808131505!2d106.74175977519744!3d-6.176758840896218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1e076112ebad%3A0xacd0a7987f401f11!2sUniversitas%20Bunda%20Mulia!5e0!3m2!1sen!2sid!4v1648460098783!5m2!1sen!2sid" width="210" height="210"></iframe></div>
                        <hr style="color:#ffffff; width:100%; text-align:left">
              </div>
            <div class="col-sm-4" style="margin-top:auto">
                        <h4 class="text-center">OUR SERVICES</h4>
                        <ul style="list-style-type:none" class="text-center">
                        <li><a href="#">PET GROOMING</a></li>
                        <li><a href="#">PET HOTEL</a></li>
                        <li><a href="#">PET TRAINING</a></li>
                        </ul>
                        
                        <hr style="color:#ffffff; width:100%; text-align:left">
                        
                        <h4 class="text-center" >ONLINE STORES</h4>
                        <ul style="list-style-type:none" class="text-center">
                        <li><a href="https://www.tokopedia.com/petshopid">TOKOPEDIA</a></li>
                        <li><a href="https://shp.ee/rjn889j">SHOPEE</a></li>
                        <li><a href="https://www.bukalapak.com/u/petshopid">BUKALAPAK</a></li>
                        <li><a href="https://www.lazada.co.id/shop/petshop-indonesia/">LAZADA</a></li>
                        <li><a href="https://www.blibli.com/merchant/petshop-indonesia/PEI-26141">BLIBLI</a></li>
                        </ul>
              </div>
              </div>
          </div>
        </div>


</body>
</html>
