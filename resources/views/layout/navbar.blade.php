    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Trillium Office & Residence, Kec. Genteng, Surabaya</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(031) 5475678</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>radnetjunior@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/radnext.id" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/company/pt-rdi/" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"       href="https://www.instagram.com/radnetdigital" target="_blank">
                        <i class="fab fa-instagram fw-normal"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class=""></i>
                <img src="{{ asset( 'assets/icons/the-x.ico') }}" height="55" width="55" alt="">
                Radnet Junior</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#beranda" class="nav-item nav-link active">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#blog" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk & Layanan</a>
                        <div class="dropdown-menu m-0">
                            <a href="#beranda" class="dropdown-item" >Radnet Junior</a>
                            <a href="https://radnet-digital.id/private-peering/" class="dropdown-item" target="_blank">Private Peering</a>
                            <a href="https://radnet-digital.id/internet-security/" class="dropdown-item" target="_blank">Internet Security</a>
                            <a href="https://radnet-digital.id/radnext-internet/" class="dropdown-item" target="_blank">Radnet Registar</a>
                            <a href="https://indocenter.co.id/" class="dropdown-item" target="_blank">Indocenter</a>
                            <a href="https://radnet-digital.id/ezyhome/" class="dropdown-item" target="_blank">EzyHome</a>
                            <a href="https://radnet-digital.id/siadi/" class="dropdown-item" target="_blank">Sistem Informasi Akademik</a>
                            <a href="https://radnet-digital.id/akademi-digital-indonesia/" class="dropdown-item" target="_blank">Akademi Digital Indonesia</a>
                            <a href="https://radnet-digital.id/zona-konten/" class="dropdown-item" target="_blank">Zona Konten</a>
                            <a href="https://radnet-digital.id/huris/" class="dropdown-item" target="_blank">Huris</a>
                            <a href="https://radnet-digital.id/excel2neofeeder/" class="dropdown-item" target="_blank">Excel 2 Neo Feeder</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dukungan</a>
                        <div class="dropdown-menu m-0">
                            <a href="https://radnet-digital.id/faq/" class="dropdown-item" target="_blank">FAQ</a>
                            <a href="https://radnet-digital.id/cara-pembayaran/" class="dropdown-item" target="_blank">Cara Pembayaran</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="https://radnet-digital.id/blog-radnet-digital-indonesia/" class="dropdown-item" target="_blank">Artikel</a>
                            <a href="https://radnet-digital.id/radnext-video/" class="dropdown-item" target="_blank">Radnet Video</a>
                        </div>
                    </div>
                    <a href="https://webmail.radnet.id/" class="nav-item nav-link" target="_blank">Portal Webmail</a>
                    <a href="#contact" class="nav-item nav-link">Tentang Kami</a>
                </div>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/magang.jpeg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">PT RADNET DIGITAL INDONESIA</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Your Digital
                                Solution Provider</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/magang1.jpeg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">PT RADNET DIGITAL INDONESIA</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Jumlah Tim</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">10</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Produk</h5>
                            <h1 class="mb-0" data-toggle="counter-up">10</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Pelanggan</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">100</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->