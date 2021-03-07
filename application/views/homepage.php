<!DOCTYPE html>
<html>
<head>
  <title>Kitabisa.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/mainstyle.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
</head>
<body id="site-body">
  <header id="sitenav" class="site-header">
    <div class='container row'>
      <div class='site-logo col-2'>
        <a href='<?php echo site_url().'/Main/index';?>'>
          <img id="logoku" src="<?php echo base_url();?>img/logo__ktbs.svg" alt='Kitabisa Header Logo'>
        </a>
      </div>
      <div class='head-items col-9'>
        <div class='head-search'>
          <form action="/" method="POST">
            <input class="head-search-input" type="text" placeholder="Cari judul, nama, atau isi campaign" name="search">
            <span class="fa fa-search"></span>                       
                    </form>
        </div>
        <div class='head-btn'>
          <div class="header-action">
            <div class="header-action-item">
              <a id="btnx" href='<?php echo site_url().'/Main/donasi';?>' class='btn btn-header btnx' onclick="#">Donasi</a>
            </div>
            <div class="header-action-item">
              <a id="btnz" href='<?php echo site_url().'/Main/zakat';?>' class='btn btn-header btnx' onclick="#">Zakat</a>
            </div>            
          </div>          
        </div>
      </div>
      <div class="dropdown col-1">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
          <i id="btnd" class="fas fa-bars fa-2x"></i>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href='<?php echo site_url().'/Cregister/index';?>'>Daftar</a>
          <a class="dropdown-item" href='<?php echo site_url().'/Clogin/index';?>'>Masuk</a>
        </div>
      </div>
    </div>
  </header>
  <script type="text/javascript">
     var  sitenav = document.getElementById('sitenav');
     var btnheader = document.getElementById("btnx");
     var btnheader1 = document.getElementById("btnz");
          
      window.onscroll = function(){
        if (window.pageYOffset >100) {
          sitenav.style.background = "#fff";
          document.getElementById('logoku').src = "img/logoktbsblue.svg";
          document.getElementById('btnd').style.color = "black";
          btnheader.style.color = "black";
          btnheader.style.border = "none";
          btnheader1.style.color = "black";
          btnheader1.style.border = "none";
        }
        else{
          sitenav.style.background = "transparent";
          sitenav.style.boxShadow = "none";
          document.getElementById('logoku').src = "img/logo__ktbs.svg";
          document.getElementById('btnd').style.color = "white";
          btnheader.style.color = "white";
          btnheader.style.border = "1px solid #fff";
          btnheader1.style.color = "white";
          btnheader1.style.border = "1px solid #fff";
        }
      }
    </script>
  <div class="homepage">
    <div class="homepage-item">
      <div class="slide-text">
        <div class="container">
          <div class="slide-text-content text-center">
            <div class="text-30">
              Galang Dana untuk Hal yang 
              <br>
               Anda Perjuangkan
            </div>
            <div class="slide-text-button text-16 d-flex pt-lg-5">
              <a class="btn btn-pink btn-large mr-3" href="#">Galang Dana Sekarang</a>
              <a class="btn btn-green btn-large" href="#">
                <i class="fab fa-whatsapp"></i>
                <span class="ml-1">Konsultasi Galang Dana Medis</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <section>
        <ul class="list-content text-left list-unstyled">
          <div class="container">
            <li class="mr-xl-5">
              <div class="d-ib">
                <span class="number text-semibold">22.156</span>
                <br>
                <span class="text-16">Campaign Terdanai</span>
              </div>
            </li>
            <li class="ml-xl-5 mr-xl-5">
              <div class="d-ib">
                <span class="number text-semibold">Rp 635.176.307.849 </span>
                <br>
                <span class="text-16">Donasi dan Zakat Tersalurkan</span>
              </div>
            </li>
            <li class="ml-xl-5">
              <div class="d-ib">
                <span class="number text-semibold">1.824.050 </span>
                <br>
                <span class="text-16">#OrangBaik Tergabung</span>
              </div>
            </li>
          </div>
        </ul>
      </section>  
    </div>
  </div>
  <section>
    <div class="banner-slide">
      <div class="container">
        <div class="banner-slide-text pt-2">
          <h2 class="text-semibold text-32 mt-0">Website
          <br>
           Galang Dana #1 di Indonesia
          </h2>
          <p class="text-18">Cerita mereka yang sukses
          <br>
           menggalang dana
          </p>
          <a class="btn btn-blue text-16 mt-lg-5" href="#">Mulai Galang Dana</a>
        </div>
        <div class="banner-slide-carousel">
          <div class="owl-carousel">
            <?php foreach ($data as $d ) {?>
            <div class="mr-3 pr-3"><img src="<?php echo base_url();?><?php echo $d->img;?>"> <br> <?php echo $d->judul;?>  <br> <?php echo $d->subjudul;?> </div>
            <?php } ?>
          </div>
          <script>
            $(document).ready(function(){
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                  loop:true,
                  items:2,
              });
            });
          </script>
        </div>
      </div>      
    </div>
  </section>
  <section class="public-campaign">
    <div class="container-section text-center mt-lg-5">
            <h2 class="text-32 text-semibold mt-0 mb-3">Siap memberi bantuan?</h2>
            <p class="text-20 text-center mb-4">
              Halo #OrangBaik, pilih campaign yang ingin Anda bantu
            </p>
            <div class="campaign-container">
              <div class="flex-con col-4">
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="<?php echo base_url();?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url();?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" style="background-color: white">
                    <div class="card-bar"></div>
                    <div class="card-count row">
                      <div class="count-item col-6">
                        <div class="count-stat text-left">
                          <span>Terkumpul</span>
                          73.417.903
                        </div>
                      </div>
                      <div class="count-item col-6">
                        <div class="count-stat text-right">
                          <span>Sisa Hari</span><br/>
                          254
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-con col-4">
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="<?php echo base_url();?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url();?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" style="background-color: white">
                    <div class="card-bar"></div>
                    <div class="card-count row">
                      <div class="count-item col-6">
                        <div class="count-stat text-left">
                          <span>Terkumpul</span>
                          73.417.903
                        </div>
                      </div>
                      <div class="count-item col-6">
                        <div class="count-stat text-right">
                          <span>Sisa Hari</span><br/>
                          254
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-con col-4">
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="<?php echo base_url();?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url();?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" style="background-color: white">
                    <div class="card-bar"></div>
                    <div class="card-count row">
                      <div class="count-item col-6">
                        <div class="count-stat text-left">
                          <span>Terkumpul</span>
                          73.417.903
                        </div>
                      </div>
                      <div class="count-item col-6">
                        <div class="count-stat text-right">
                          <span>Sisa Hari</span><br/>
                          254
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-con col-4">
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="<?php echo base_url();?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url();?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" style="background-color: white">
                    <div class="card-bar"></div>
                    <div class="card-count row">
                      <div class="count-item col-6">
                        <div class="count-stat text-left">
                          <span>Terkumpul</span>
                          73.417.903
                        </div>
                      </div>
                      <div class="count-item col-6">
                        <div class="count-stat text-right">
                          <span>Sisa Hari</span><br/>
                          254
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-con col-4">
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="<?php echo base_url();?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url();?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" style="background-color: white">
                    <div class="card-bar"></div>
                    <div class="card-count row">
                      <div class="count-item col-6">
                        <div class="count-stat text-left">
                          <span>Terkumpul</span>
                          73.417.903
                        </div>
                      </div>
                      <div class="count-item col-6">
                        <div class="count-stat text-right">
                          <span>Sisa Hari</span><br/>
                          254
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-con col-4">
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="<?php echo base_url();?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url();?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" style="background-color: white">
                    <div class="card-bar"></div>
                    <div class="card-count row">
                      <div class="count-item col-6">
                        <div class="count-stat text-left">
                          <span>Terkumpul</span>
                          73.417.903
                        </div>
                      </div>
                      <div class="count-item col-6">
                        <div class="count-stat text-right">
                          <span>Sisa Hari</span><br/>
                          254
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                <a class="btn btn-blue text-16 mt-lg-5" href="#">Lihat Semua</a>
            </div>   
        </div>  
  </section>
  <section class="zone-blue">
    <div class="container-section">
      <div class="text-center text-zone-blue">
        <div class="text-30 text-semibold">Galang Dana di Kitabisa</div>
        <div class="text-18">
          <p class="text-center">
            <span>
              Dari menolong anggota keluarga, hingga membangun jembatan di
              <br>
              desa, ribuan orang telah menggunakan Kitabisa untuk galang dana
            </span>
          </p>
        </div>
        <div class="slide-text-button text-16 d-flex pt-3">
          <a class="btn btn-pink btn-large mr-3" href="#">Galang Dana Sekarang</a>
          <a class="btn btn-green btn-large" href="#">
            <i class="fab fa-whatsapp"></i>
            <span class="ml-1">Konsultasi Galang Dana Medis</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <footer style="border-top: 2px solid rgb(231, 233, 235);">
           <div class="bg-white">
              <div class="container row p-3">
                  <div class="col-6">
                    <img class="mt-2" src="<?php echo base_url();?>img/logo_ktbs_biru.png" style="max-width: 160px;">
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <ul class="p-0 m-0 list-unstyled" style="line-height: 50px;">                       
                        <span class="float-left mr-2">Temukan kami di: </span>
                        <li class="float-left mr-2"><img src="<?php echo base_url();?>img/logo__fb-circle.png" class="sosialmedia"></li> 
                        <li class="float-left mr-2"><img src="<?php echo base_url();?>img/logo__ig-circle.png" class="sosialmedia"></li>
                        <li class="float-left mr-2"><img src="<?php echo base_url();?>img/logo__twitter-circle.png" class="sosialmedia"></li>
                        <li class="float-left mr-2"><img src="<?php echo base_url();?>img/logo__yt-circle.png" class="sosialmedia"></li>
                        <li class="float-left mr-2"><img src="<?php echo base_url();?>img/logo_playstore.png" style="width: 100px; height: 50px;"></li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>
            </section>
            <section id="bottom-footer">
              <div class="container">
                <div class="row">
                  <div class="col-4 p-0 pl-4">
                    <div>
                      <span style="color: deepskyblue;">Kitabisa.com</span> adalah website untuk menggalang dana dan berdonasi secara online dan transparan. 
                    </div><br>
                    <div>
                      <span style="color: deepskyblue;">Jl. Ciputat Raya no. 27D</span>
                      <div>Pondok Pinang, Jakarta Selatan</div>
                    </div>
                  </div>
                  <div class="col-3 p-0 pl-4">
                    <h3 class="footer-list-title">Take Action</h3>
                    <ul class="footer-list">
                      <li>Galang Dana</li>
                      <li>Donasi</li>
                      <li>Qurban</li>
                      <li>Zakat</li>
                      <li>Birthday</li>
                      <li>Untuk CSR</li>
                      <li>Untuk NGO</li>
                    </ul>
                  </div>
                  <div class="col-3 p-0 pl-4">
                    <h3 class="footer-list-title">Learn More</h3>
                    <ul class="footer-list">
                      <li>Apa itu Kitabisa?</li>
                      <li>Fitur dan Harga</li>
                      <li>Help Center</li>
                      <li>Syarat dan Ketentuan</li>
                      <li>Kebijakan Privasi</li>
                    </ul>
                  </div>
                  <div class="col-2 p-0 pl-4">
                    <h3 class="footer-list-title">Connect</h3>
                    <ul class="footer-list">
                      <li>Our Team</li>
                      <li>Karir</li>
                      <li>Blog</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </footer>
</body>
</html>
