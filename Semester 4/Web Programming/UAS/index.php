<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home - Petshop Indonesia</title>

    <style type="text/css">
        .dropdown:hover .dropdown-menu{
            display:block;
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
			
    </style>

  </head>
  <body>
    <header>

        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
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
                            <a href="#" class="nav-link">
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
                                    <a href="PetTraining.php" class="dropdown-item">Training</a>
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

    <main>
        <style>
            .carousel {
                margin-bottom:3rem;
            }
            .carousel-item {
                height : 32rem;
                background : #777;
                color : #d40881;
                position: relative ;
            }
            
            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                height: 100px;
                width: 100px;
                outline: black;
                background-size: 100%, 100%;
                background-image: none;
            }

            .carousel-control-next-icon:after
            {
                content: '>';
                font-size: 55px;
                color: red;
            }

            .carousel-control-prev-icon:after {
                content: '<';
                font-size: 55px;
                color: red;
            }
            
        </style>
    
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url(./img/banner-1.png);">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color:black;">Penuhi Kebutuhan Hewan Peliharaan Anda</h1>
                        <p style="color:#d40881">Di Pusat Kebutuhan Hewan Peliharaan Terbesar, Terlengkap, dan Terpercaya No.1 di Indonesia</p>
                        <a href="Products.php" class="btn btn-lg btn-primary" style="background-color:#d40881">Pelajari Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image:url(./img/banner-2.png);">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color:black;">PROMO</h1>
                        <p style="color:#d40881">Belanja Minimal Rp100.000 dapat gratis ongkir ke seluruh Indonesia</p>
                        <a href="Products.php" class="btn btn-lg btn-primary" style="background-color:#d40881">Pelajari Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev" style="color: black !important;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <style>
            .marketing{
                border-top:1px solid black;
                margin-top:25px;
                margin-bottom:25px;
                border-bottom:1px solid black;
            }

            .row{
                margin-top:45px;
                margin-bottom:45px;
            }

            a{
                color:rgb(0, 150, 200);
                text-decoration: none;
            }

            a:hover{
                color:rgb(0, 150, 200);
            }
        </style>

        <div class="container marketing" id="marketing">
            <h1 style="text-align:center; margin-top:45px; color:rgb(0, 150, 200);">SERVICES</h1>
            <div class="row">
                <div class="col" style="text-align: center;">
                    <a href="Products.php"><img src="img/shop.png" width="140" style="margin-bottom:15px;"></a>
                    <h1><a href="Products.php">One Stop<br>PET SHOP</a></h1>
                </div>
                <div class="col" style="text-align: center;">
                    <a href="PetGrooming.php"><img src="img/grooming.png" width="140" style="margin-bottom:15px;"></a>
                    <h1><a href="PetGrooming.php">Pet<br>GROOMING</a></h1>
                </div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center;">
                    <a href="PetTraining.php"><img src="img/training.png" width="140" style="margin-bottom:15px;"></a>
                    <h1><a href="PetTraining.php">Pet<br>TRAINING</a></h1>
                </div>
                <div class="col" style="text-align: center;">
                    <a href="PetHotel.php"><img src="img/hotel.png" width="140" style="margin-bottom:15px;"></a>
                    <h1><a href="PetHotel.php">Pet<br>HOTEL</a></h1>
                </div>
            </div>
        </div>

        <style>
            .embed-responsive{
                background-color: rgb(0, 150, 200);
            }
        </style>

        <div class="embed-responsive" style="text-align:center">
            <h1 style="color:white"><br>Check out this promotion video!!</h1>
            <video width="1200" height="700" controls>
                <source src="VIDEO/index.mp4" type="video/mp4">
              </video>
        </div> 
        
    </main>
   
  <br>
   
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

    

    

    

   
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://codegena.com/assets/js/youtube-embed.js"></script>
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
    </body>
</html>