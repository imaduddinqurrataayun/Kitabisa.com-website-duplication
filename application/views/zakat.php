<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/zakatstyle.css">

    <title>Zakat KitaBisa</title>
  </head>
  <body>
    <header class="head-section">
      <div class='head-logo'>
        <a href="<?php echo site_url().'/Main/index';?>">
          <img src="<?php echo base_url(); ?>img/logokitabisa.svg" alt='Kitabisa Header Logo'>
        </a>
      </div>
    </header>
    <div class="body-background">
      <div class="body-section">
        <div class="container">
          <div class="text-content">
            <span class="text-white">
            <h2 class="text-48 text-semibold hero-title no-mg-bottom">Siap Bayar Zakat</h2>
            <h2 class="text-48 text-semibold hero-title no-mg-top">Sekarang ?</h2>
            <h2 class="text-24 text-slim hero-title">Bersihkan harta dengan zakat yang mudah dan cepat, kapan saja ke lembaga dan program zakat terpercaya via Kitabisa.</h2>
            <br>
            <button class="btn hero__green btn--green btn--shadow">
              <span class="btn__text text-bold"> ZAKAT SEKARANG</span>
            </button>
          </span>
        </div>
        <div class="calculator-content flex-center">
          <div class="cal-content" id="cal">
              <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#profesi">
                    <i class="far fa-calendar-alt"></i>
                    <span class="tab-item-name">Profesi</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#maal">
                    <i class="fas fa-store"></i>
                    <span class="tab-item-name">Maal</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#fitrah">
                    <i class="far fa-star"></i>
                    <span class="tab-item-name">Fitrah</span>
                  </a>
                </li>
              </ul>
                  <!-- Tab panes -->
                <div class="tab-content pt-4">
                  <div id="profesi" class="container tab-pane active">
                      <h5 class="mb-5">Ayo hitung zakat profesi anda!</h5>
                      <p>
                        <div class="input-group-prepend mb-4">
                          <span class="input-group-text">Rp</span>
                          <input type="text" class="form-control" placeholder="Pendapatan Per bulan (wajib diisi)">
                        </div>
                      </p>
                      <p>
                        <div class="input-group-prepend mb-4">
                          <span class="input-group-text">Rp</span>
                          <input type="text" class="form-control" placeholder="Pendapatan Lain (jika ada)">
                        </div>
                      </p>
                      <p>
                        <div class="input-group-prepend mb-4">
                          <span class="input-group-text">Rp</span>
                          <input type="text" class="form-control" placeholder="Hutang/cicilan (jika ada)">
                        </div>
                      </p>
                      <fieldset class="align-center mb-4">
                        <button class="btn btn-outline-success" style="width: 100%">
                          <span class="fas fa-calculator"></span>
                          <span class="btn__text text-bold mb-5"> HITUNG ZAKAT ANDA </span>
                        </button>
                        
                      </fieldset>
                  </div>
                  <div id="maal" class="container tab-pane fade">
                      <p>
                        <img class="img-green" src="<?php echo base_url(); ?>img/treasure-green.svg" alt='Kitabisa treasure green'>
                      </p>
                      <h5 class="mb-3">Salurkan zakat maal Anda!</h5>
                      <p>
                        Zakat Maal khusus untuk harta yang telah tersimpan selama lebih dari 1 tahun (haul) dan mencapai batas tertentu (nisab)
                      </p>
                      <button  class="btn btn-outline-success" style="width: 100%">
                          <span class="fas fa-calculator"></span>
                          <span class="btn__text text-bold mb-5"> KALKULATOR ZAKAT MAAL </span>
                      </button>
                  </div>
                  <div id="fitrah" class="container tab-pane fade">
                      <p>
                        <img class="img-green" src="<?php echo base_url(); ?>img/rice-green.svg" alt='Kitabisa treasure green'>
                      </p>
                      <h5 class="mb-3">Salurkan Zakat Fitrah ke lingkungan atau orang terdekat Anda!</h5>
                      <p>
                        Zakat Fitrah besarannya adalah 3,5 liter atau setara 2,5 kilogram makanan pokok yang biasa dikonsumsi.
                      </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <section class="bg-white">
          <div class= "container-section align-center">
            <h3 class="text-24 text-semibold mb-3">Zakat ke Lembaga Amil Resmi</h3>
            <h3 class="text-16 text-normal mb-3">Lembaga Amil Resmi adalah lembaga zakat yang memiliki SK Kementerian Agama</h3>
            <ul class="list-lembaga">
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/baznas.png" alt="Badan Amil Zakat Nasional">
              </li>
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/rumahytm.png" alt="Rumah Yatim">
              </li>
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/dompetdhuafa.png" alt="Dompet Dhuafa">
              </li>
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/rumahzakat.png" alt="Rumah Zakat">
              </li>
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/globalzakat.png" alt="Global Zakat">
              </li>
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/lazisnu.png" alt="NU CARE-LAZISNU">
              </li>
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/gyd.png" alt="GYD">
              </li>
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/lazismu.png" alt="LAZIS MUHAMMADIYAH">
              </li>
              <li>
                <img class="img" src="<?php echo base_url(); ?>img/bmh.png" alt="Yayasan Baitul Maal Hidayatullah">
              </li>
            </ul>
          </div>
        </section>
        <section class="pt-0 pb-2">
          <div class="container-section align-center mt-lg-5">
            <h3 class="text-24 text-semibold mt-0 mb-3">ZakatHub by BAZNAS</h3>
            <p class="text-16">
              Anda juga bisa berzakat ke program dari lembaga/komunitas yang
              <span class="show">bernaung di bawah BAZNAS.</span>
            </p>
            <div class="campaign-container">
              <div class="flex-con col-4">
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="<?php echo base_url(); ?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url(); ?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
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
                  <img class="card-img-top" src="<?php echo base_url(); ?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url(); ?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
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
                  <img class="card-img-top" src="<?php echo base_url(); ?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url(); ?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
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
                  <img class="card-img-top" src="<?php echo base_url(); ?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url(); ?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
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
                  <img class="card-img-top" src="<?php echo base_url(); ?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url(); ?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
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
                  <img class="card-img-top" src="<?php echo base_url(); ?>img/card1.png" alt="Card image">
                  <div class="card-body">
                    <h3 class="card-title text-16 text-left">Zakat Untuk Penyandang Tuna Daksa</h3>
                    <div class="card-text text-left">
                      <div class="card-text-style">
                        <span class="text-14"> Yayasan Visi Maha Karya </span>
                        <img src="<?php echo base_url(); ?>img/icon-verified-org.svg" class="card-imgs" alt="cek">
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
              <button  class="btn btn-outline-success mt-3 mb-5" style="width:30.333%">
                <span class="btn__text text-bold mb-5">Lihat Lainnya</span>
              </button>      
          </div>    
        </section>
        <div class="zakat-bg">
          <section style="background: rgba(0, 0, 0, 0.2); height:400px">
            <div class="container-section pt-3 pb-3">
              <div style="width:381px;">
                <h1 class="text-24 text-semibold hero-title pt-5 text-light">Ingin Lembaga/Komunitas Anda Menerima Zakat?</h1>
                <p class="text-18 text-light">Isi form berikut untuk daftar kemitraan ZakatHub by BAZNAS.</p>
                <button class="btn hero__green btn--green btn--shadow">
                <span class="btn__text text-bold"> DAFTAR SEKARANG</span>
                </button>
              </div>
            </div>
          </section>
          <section class="bd-none">
            <div class="container">
              <div class="row">
                <div class="col-6">
                  <div class="zakat-video">
                    <img src="<?php echo base_url(); ?>img/zakat-video.png" alt="zakat-video">
                  </div>
                </div>
                <div class="col-6">
                  <h2 class="text-semibold text-24 mt-5 mb-1">Hukum Zakat Online</h2>  
                  <p class="text-18 mt-4">"Online itu hanya transportasi kilat (cara bayar yang lebih cepat) dari muzakki kepada mustahik atau melalui amil. Selama tidak lupa mengucapkan niat zakat dalam hati, maka zakat itu dianggap sah"</p>
                  <p class="text-14">— Ust. Zul Ashfi, S.S.I, LC (Dompet Dhuafa)</p>
                </div>
              </div>              
            </div>
          </section>
          <footer style="border-top: 2px solid rgb(231, 233, 235);">
            <div class="bg-white">
              <div class="container row p-3">
                  <div class="col-6">
                    <img src="<?php echo base_url(); ?>img/logo_ktbs_biru.png" style="max-width: 160px;">
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <ul class="p-0 m-0 list-unstyled" style="line-height: 50px;">                       
                        <span class="float-left mr-2">Temukan kami di: </span>
                        <li class="float-left mr-2"><img src="<?php echo base_url(); ?>img/logo__fb-circle.png" class="sosialmedia"></li> 
                        <li class="float-left mr-2"><img src="<?php echo base_url(); ?>img/logo__ig-circle.png" class="sosialmedia"></li>
                        <li class="float-left mr-2"><img src="<?php echo base_url(); ?>img/logo__twitter-circle.png" class="sosialmedia"></li>
                        <li class="float-left mr-2"><img src="<?php echo base_url(); ?>img/logo__yt-circle.png" class="sosialmedia"></li>
                        <li class="float-left mr-2"><img src="<?php echo base_url(); ?>img/logo_playstore.png" style="width: 100px; height: 50px;"></li>
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
        </div>
      </div>
  </body>
</html>

