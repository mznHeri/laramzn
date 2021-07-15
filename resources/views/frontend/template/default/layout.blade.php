
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT Pangan Prima Indo | PPI</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset($path.'/assets/favicon.ico')}}" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="{{url('/public/adminlte/fontawesome-free/css/all.min.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset($path.'/css/aos.css')}}" rel="stylesheet" />
        <link href="{{asset($path.'/css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset($path.'/css/custom.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><img src="{{asset($path.'/assets/images/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">TENTANG KAMI</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">PRODUK & LAYANAN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">KONTAK</a></li>
                    </ul>
                    <ul class="navbar-nav d-flex">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#!"><i class="nav-icon fas fa-user-circle loginleft"></i> LOGIN</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-secondary btn-danger cl-white" href="#!">REGISTER</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5 bg-top-cst" style='background-image: url("{{asset($path.'/assets/images/banner-home.png')}}");'
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0">
            
            <div class="container px-4 px-lg-5 my-6-cst">
                <div class="text-white" data-aos="fade-right">
                    <h3 class="display-5 fw-bolder text-shadow-cst">Cara cerdas Investasi sapi <br>dengan aman dan mudah</h3>
                    <a href="#!" class="btn btn-block btn-outline-danger btn-white">DAFTAR SEKARANG</a>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-sm-12-cst" data-aos="fade-right">
                        <img style="width: 100%;" class="img-1-cst" src="{{asset($path.'/assets/images/img-1.png')}}">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-sm-12-cst" data-aos="fade-left">
                        <span class="red-cst">Tentang Kami</span>
                        <h3 class="display-5 fw-bolder">Tak kenal <br><span class="red-cst">Maka</span> tak sayang</h3>

                        <p style="line-height: 40px;">
                            PT. Pangan Prima Indo (PPI) merupakan badan usaha
berbadan hukum yang bergerak di bidang peternakan sapi,
pengadaan sapi, jasa penitipan, perawatan, dan
penggemukan sapi.
<br>
<button class="btn btn-danger martop-15-cst" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Mengenal Kami Lebih Dekat <i class="fas fa-arrow-circle-right"></i>
  </button>
</p>
<div class="collapse" id="collapseExample">
    <div class="" style="line-height: 40px;">
        PT. Pangan Prima Indo (PPI) menyediakan pengadaan sapi,
        jasa penitipan, perawatan, dan penggemukan sapi bagi
        masyarakat urban yang ingin beternak namun tidak memiliki
        lahan, keterampilan beternak, dan waktu untuk merawat
        hewan ternaknya.
        <br><br>
        Masyarakat urban dapat menjadi Mitra Usaha PPI dan
        memilih bentuk kerjasama diantaranya penitipan,
        perawatan, penggemukan dan titip jual sapi (konsinyasi).
        <br><br>
        Lokasi peternakan PT. Pangan Prima Indo (PPI) berada di
        daerah Bogor dengan luas tanah sekitar 3 hektar.
        <br><br>
        Jenis Sapi Unggulan yang diternakkan di PPI antara lain
        mulai dari Sapi Impor: Limousin, Simmental, dan Brahman.
        Sedangkan jenis sapi lokal yang diternakkan di PPI antara
        lain Sapi Bali, Madura, dan Kupang.<br><br>
    </div>
  </div>


                        
                        <strong style="line-height: 40px;">Kami merupakan solusi untuk Anda yang ingin beternak
                            namun tidak memiliki lahan, keterampilan beternak, dan
                            waktu untuk merawat hewan ternaknya.</strong>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h3 class="text-center display-5 fw-bolder" data-aos="fade-up">Pilih Kebutuhan Anda</h3>
                        <p class="text-center" data-aos="fade-up">Demi kenyamanan dan kepuasan Anda, kami siapkan produk dengan kualitas terbaik.</p>
                        <br><br><br>
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6-cst">
                                <div class="card card-cst box-rd-cst">
                                    <div class="card-body text-center">
                                        <img class="d1" src="{{asset($path.'/assets/images/dg1.png')}}">
                                        <img class="d2" src="{{asset($path.'/assets/images/dg2.png')}}">
                                        <h6 class="card-title">Investasi Sapi</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6-cst">
                                <div class="card card-cst box-rd-cst">
                                    <div class="card-body text-center">
                                        <img class="d1" src="{{asset($path.'/assets/images/dg1.png')}}">
                                        <img class="d2" src="{{asset($path.'/assets/images/dg2.png')}}">
                                        <h6 class="card-title">Investasi Sapi</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6-cst">
                                <div class="card card-cst box-rd-cst">
                                    <div class="card-body text-center">
                                        <img class="d1" src="{{asset($path.'/assets/images/dg1.png')}}">
                                        <img class="d2" src="{{asset($path.'/assets/images/dg2.png')}}">
                                        <h6 class="card-title">Investasi Sapi</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6-cst">
                                <div class="card card-cst box-rd-cst">
                                    <div class="card-body text-center">
                                        <img class="d1" src="{{asset($path.'/assets/images/dg1.png')}}">
                                        <img class="d2" src="{{asset($path.'/assets/images/dg2.png')}}">
                                        <h6 class="card-title">Investasi Sapi</h6>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5 bg-corner-cst">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h3 class="text-center display-5 fw-bolder" data-aos="fade-up">Kami tawarkan<br>investasi sapi terbaik</h3>
                        <p class="text-center" data-aos="fade-up">Dalam 6 bulan anda akan mendapatkan estimasi profit 15-25%</p>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 mt-5 bg-nt-corner-cst"><br><br><br></div>
            <div class="container px-4 px-lg-5 mt-5 postop1">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card w-bt20px">
                            <div class="card-body text-center nopad">
                                <img class="w-bt20px w-100" src="{{asset($path.'/assets/images/sapi-simmental.jpg')}}">
                            </div>
                            <div class="card-footer text-center nopad tdet">
                                <span class="title-sapi">Sapi Simental</span>
                                <span class="span-5star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="tharga">Harga bibit sapi</span>
                                <span class="tharga2">Rp. 21.000.000/ekor</span>
                                <span class="tbob">Bobot awal sapi: 300 Kg</span>
                                <span class="tbob">Target bobot sapi: 500kg</span>
                                <span class="tbob last ">Estimasi profit 15-25%</span>
                                <a href="#" class="btn btn-danger mtb-30">Pelajari selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card w-bt20px">
                            <div class="card-body text-center nopad">
                                <img class="w-bt20px w-100" src="{{asset($path.'/assets/images/sapi-simmental.jpg')}}">
                            </div>
                            <div class="card-footer text-center nopad tdet">
                                <span class="title-sapi">Sapi Simental</span>
                                <span class="span-5star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="tharga">Harga bibit sapi</span>
                                <span class="tharga2">Rp. 21.000.000/ekor</span>
                                <span class="tbob">Bobot awal sapi: 300 Kg</span>
                                <span class="tbob">Target bobot sapi: 500kg</span>
                                <span class="tbob last ">Estimasi profit 15-25%</span>
                                <a href="#" class="btn btn-danger mtb-30">Pelajari selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card w-bt20px">
                            <div class="card-body text-center nopad">
                                <img class="w-bt20px w-100" src="{{asset($path.'/assets/images/sapi-simmental.jpg')}}">
                            </div>
                            <div class="card-footer text-center nopad tdet">
                                <span class="title-sapi">Sapi Simental</span>
                                <span class="span-5star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="tharga">Harga bibit sapi</span>
                                <span class="tharga2">Rp. 21.000.000/ekor</span>
                                <span class="tbob">Bobot awal sapi: 300 Kg</span>
                                <span class="tbob">Target bobot sapi: 500kg</span>
                                <span class="tbob last ">Estimasi profit 15-25%</span>
                                <a href="#" class="btn btn-danger mtb-30">Pelajari selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>


        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset($path.'/js/scripts.js')}}"></script>
        <script src="{{asset($path.'/js/aos.js')}}"></script>
        
        <script>
            AOS.init({
              easing: 'ease-in-out-sine'
            });
          </script>
    </body>
</html>
