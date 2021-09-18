<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Educenter</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/themify-icons/themify-icons.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{ asset('/themes/educenter/plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('/themes/educenter/css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('/themes/educenter/images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{ asset('/themes/educenter/images/favicon.png')}}" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  {{-- <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div> --}}
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="index.html"><img src="https://upload.wikimedia.org/wikipedia/commons/1/1e/RPC-JP_Logo.png" style="width: 100px; height:80px;" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@home">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="courses.html">COURSES</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="events.html">EVENTS</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="/blog">BLOG</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teacher.html">Teacher</a>
                <a class="dropdown-item" href="teacher-single.html">Teacher Single</a>
                <a class="dropdown-item" href="notice.html">Notice</a>
                <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                <a class="dropdown-item" href="research.html">Research</a>
                <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                <a class="dropdown-item" href="course-single.html">Course Details</a>
                <a class="dropdown-item" href="event-single.html">Event Details</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="blog.html">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Blog Details</li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blog details -->
<section class="section-sm bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <img src="https://covesia.com/wp-content/uploads/VAKSIN-NUSANTARA-ILS.jpg" alt="blog-thumb" class="img-fluid w-100">
      </div>
      <div class="col-12">
        <ul class="list-inline">
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span class="font-weight-bold mr-2">Post:</span>Somrat</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">August 28, 2017</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-book mr-2"></i>Read 289</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-share mr-2"></i>289</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><a class="text-light" href="#"><i class="ti-comments mr-2"></i>265</a></li>
        </ul>
      </div>
      <!-- border -->
      <div class="col-12 mt-4">
        <div class="border-bottom border-primary"></div>
      </div>
      <!-- blog contect -->
      <div class="col-12 mb-5">
        <h2>Salah,Vaksin nusantara mampu hancurkan semua jenis virus Corona dengan Efikasi 100% </h2>
        <p>Tangkapan layar pesan berantai di aplikasi WhatsApp berisi klaim bahwa vaksin Nusantara ampuh 100 persen hancurkan semua jenis virus Corona, beredar di Facebook, pada 6 September 2021. 

            Dalam tangkapan layar itu, pesan yang tertulis, memuat informasi yang diklaim berasal dari mantan Menkes Siti Fadilah Supari dengan isi: “Vaksin Nusantara dengan teknologi dendritik diklaim ampuh 100 persen hancurkan semua jenis virus Corona (alpha, beta, delta, delta plus, lambda & jenis virus lainnya).
            
            Isi pesan berikutnya memuat klaim bahwa tingkat efikasi dan efektivitas sebesar 100 persen, serta diklaim aman bagi yang memiliki penyakit penyerta (komorbid), anak dan ibu hamil. 
            </p>
        <h3>Pemeriksaan Fakta</h3>
        <p>Hasil verifikasi Tempo kepada sejumlah ahli, menunjukkan, bahwa klaim tersebut tidak memiliki basis ilmiah sesuai prosedur pembuatan vaksin. 

            Menurut ahli Biologi Molekuler Ahmad Utomo, vaksin Nusantara belum melakukan uji klinis tahap 3. Sehingga klaim bahwa vaksin Nusantara dapat ampuh hancurkan semua jenis virus Corona dengan efikasi dan efektivitas 100 persen tidak memiliki rujukan data ilmiah. 
            
            “Itu omong kosong karena sama sekali tidak ada bukti uji klinis tahap 3,” kata dia kepada Tempo, Senin 13 September 2021.
            Ketua Komisi Nasional Kejadian Ikutan Pasca Imunisasi (Komnas KIPI) Prof Hindra Irawan Satari, juga menjelaskan bahwa uji klinis vaksin Nusantara hanya pada tahap 1 yang hanya menjangkau puluhan orang. Vaksin tersebut belum sampai pada uji klinis fase 2 yang melibatkan seratus orang dan fase 3 terhadap ribuan orang.
            </p>
        <p>“Jadi terlalu dini klaim tersebut,” kata dia.
            Hindra juga mengingatkan, hasil uji klinis setiap fase harus dipublikasikan di jurnal terpandang. Hingga saat ini dia belum mengetahui publikasi atas klaim bahwa vaksin Nusantara ampun 100 persen melawan semua virus Corona, dan aman bagi mereka yang memiliki komorbid, anak dan ibu hamil.
             </p>

             <h3>Tahap Pembuatan Vaksin</h3>
             <p>
                Pengembangan vaksin baru membutuhkan sejumlah tahapan kesepakatan internasional. Dikutip dari Pusat Pencegahan dan Penanganan Penyakit Amerika Serikat, CDC, tahapan pengembangan vaksin baru adalah tahap eksplorasi, tahap pra-klinis, perkembangan klinis, peninjauan dan persetujuan peraturan, manufaktur dan kontrol kualitas.

                Dalam tahapan klinis atau uji coba pada manusia memuat sejumlah fase. Selama Fase I, sekelompok kecil orang menerima vaksin percobaan. Pada Fase II, studi klinis diperluas dan vaksin diberikan kepada orang-orang yang memiliki karakteristik (seperti usia dan kesehatan fisik) yang serupa dengan mereka yang menjadi sasaran vaksin baru tersebut. 
                
                Pada Fase III, vaksin diberikan kepada ribuan orang dan diuji kemanjuran dan keamanannya. Banyak vaksin menjalani studi formal Fase IV yang sedang berlangsung setelah vaksin disetujui dan dilisensikan.
                
             </p>
             <h4>Kesimpulan</h4>
             <p>
                Dari pemeriksaan fakta di atas, klaim bahwa vaksin Nusantara ampuh hancurkan semua jenis virus Corona dengan efektivitas dan efikasi 100 persen adalah keliru. Vaksin Nusantara belum menjalani uji klinis tahap 3 yang dilakukan terhadap ribuan orang untuk mengetahui tingkat keamanan dan efikasi.
                Sel dendritik yang menjadi basis vaksin Nusantara bersifat autologus artinya dari materi yang digunakan dari diri kita sendiri dan untuk diri kita sendiri, sehingga tidak bisa digunakan untuk orang lain.
                
             </p>
      </div>
      <!-- comment box -->
      <div class="col-12">
        <form action="#" class="row">
          <div class="col-sm-6">
            <input type="text" class="form-control mb-4" id="name" name="name" placeholder="Full Name">
          </div>
          <div class="col-sm-6">
            <input type="email" class="form-control mb-4" id="mail" name="mail" placeholder="Email Address">
          </div>
          <div class="col-12">
            <textarea name="comment" id="comment" class="form-control mb-4" placeholder="Comment Here..."></textarea>
          </div>
          <div class="col-12">
            <button type="submit" value="send" class="btn btn-primary">post comment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- /blog details -->

<!-- recommended post -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">ALL Comment</h2>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- blog post -->
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <div class="card-body">
        <!-- post meta -->
        <div class="list-inline mb-3">
          <!-- author -->
          <h4 class="list-inline-item mr-3 ml-0">Rusman Jainudi</h4>
      </div>
        <p class="card-text">Terimakasih sudah membuatkan berita</p>
        <p>By rusman@gmail.com</p>
      </div>
    </div>
  </article>
</div>
  </div>
</section>
<!-- /recommended post -->

<!-- footer -->
<footer>
  <!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
            <li class="mb-2">+1 (2) 345 6789</li>
            <li class="mb-2">+1 (2) 345 6789</li>
            <li class="mb-2">contact@yourdomain.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="about.html">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="teacher.html">Our Teacher</a></li>
            <li class="mb-3"><a class="text-color" href="contact.html">Contact</a></li>
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="courses.html">Courses</a></li>
            <li class="mb-3"><a class="text-color" href="event.html">Events</a></li>
            <li class="mb-3"><a class="text-color" href="gallary.html">Gallary</a></li>
            <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">SUPPORT</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Forums</a></li>
            <li class="mb-3"><a class="text-color" href="#">Documentation</a></li>
            <li class="mb-3"><a class="text-color" href="#">Language</a></li>
            <li class="mb-3"><a class="text-color" href="#">Release Status</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color" href="#">bbPress</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © themefisher</p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{ asset('/themes/educenter/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/themes/educenter/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{ asset('/themes/educenter/plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{ asset('/themes/educenter/plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{ asset('/themes/educenter/plugins/venobox/venobox.min.js')}}"></script>
<!-- filter -->
<script src="{{ asset('/themes/educenter/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{ asset('/themes/educenter/plugins/google-map/gmap.js')}}"></script>

<!-- Main Script -->
<script src="{{ asset('/themes/educenter/js/script.js')}}"></script>

</body>
</html>