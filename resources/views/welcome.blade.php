@extends('layout.layout')

@section('content')

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="beranda"data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Creative & Innovative Digital Solution</h1>
                    </div>
                    <p class="mb-4">Radnet Digital Indonesia adalah perusahaan yang bergerak pada bidang layanan solusi digital. Memberikan solusi digital untuk pengembangan bisnis atau kebutuhan pribadi anda. Mulai dari layanan koneksi Internet, layanan Cloud atau Bare Metal Server, Domain Name System (DNS), sampai dengan layanan keamanan digital produk yang Anda miliki.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class=""></i></h5>
                            <h5 class="mb-3"><i class=""></i></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class=""></i></h5>
                            <h5 class="mb-3"><i class=""></i></h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="" style="width: 60px; height: 60px;">
                            <i class=""></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"></h5>
                            <h4 class=""></h4>
                        </div>
                    </div>
                    <a href="quote.html" class="" data-wow-delay="0.9s"></a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/magang.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

     <!-- Blog Start -->
     <div class="container-fluid py-5 wow fadeInUp" id="blog" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Produk dan Layanan</h5>
                <h1 class="mb-0">Solusi Layanan Digital Anda</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/1.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://radnet-digital.id/private-peering/" target="_blank">View</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Private Peering</h4>
                            <p>Kami siap memberikan layanan koneksi dengan IP Transit atau multihoming bagi pemilik IP portable. Dengan koneksi IP multihoming</p>
                            <a class="text-uppercase" href="https://radnet-digital.id/private-peering/" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/2.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://radnet-digital.id/internet-security/" target="_blank">View</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Internet Security</h4>
                            <p>Keamanan jaringan menjadi perhatian khusus agar pelanggan menjadi semakin nyaman menggunakan layanan kami</p>
                            <a class="text-uppercase" href="https://radnet-digital.id/internet-security/" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/3.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://radnet-digital.id/radnext-internet/" target="_blank">View</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Radnext Internet</h4>
                            <p>Bisnis awal radneXt adalah penyedia layanan koneksi internet. Dengan didukung ahli yang berpengalaman lebih dari 20 tahun.</p>
                            <a class="text-uppercase" href="https://radnet-digital.id/radnext-internet/" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/4.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://registrar.radnet-digital.id/?_gl=1*627vnl*_ga*NTk0NjkzMzc2LjE3MDg2MTExNzk.*_ga_J8F34VXE6J*MTcxNjcyMTg2OC4xMC4xLjE3MTY3MjIzODQuMC4wLjA." target="_blank">View</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Radnext Registar</h4>
                            <p>Radnext merupakan register terakreditasi oleh PANDI untuk penyediaan nama domain di bawah ccTLD-ID, sehingga situs anda lebih terpercaya</p>
                            <a class="text-uppercase" href="https://registrar.radnet-digital.id/?_gl=1*627vnl*_ga*NTk0NjkzMzc2LjE3MDg2MTExNzk.*_ga_J8F34VXE6J*MTcxNjcyMTg2OC4xMC4xLjE3MTY3MjIzODQuMC4wLjA." target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/5.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://indocenter.co.id/" target="_blank">View</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Indocenter</h4>
                            <p>Membantu anda mulai dari mendapatkan nama domain yang diinginkan, hosting situs web, hosting alamat email, hingga SSL.</p>
                            <a class="text-uppercase" href="https://indocenter.co.id/" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/6.png') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="https://radnet-digital.id/ezyhome/" target="_blank">View</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">EzyHome Internet</h4>
                            <p>Layanan koneksi internet broaband terjangkau yang dapat dinikmati setiap kalangan tanpa adanya batasan pemakaian.</p>
                            <a class="text-uppercase" href="https://radnet-digital.id/ezyhome/" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->

     <!-- Service Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Layanan Lainnya Dari Kami</h1>
                <h5 class="fw-bold text-primary text-uppercase"></h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div>
                            <img src="{{ asset('assets/img/siadi.png') }}" alt="">
                        </div>
                        <p class="m-0">Merupakan salah satu layanan sistem informasi akademik yang menggunakan teknologi SaaS yang diperuntukan untuk instansi pendidikan. </p>
                        <a class="btn btn-lg btn-primary rounded" href="https://radnet-digital.id/siadi/" target="_blank">
                            <i class="bi bi-arrow-right" ></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="">
                            <img src="{{ asset('assets/img/adi.png') }}" alt="">
                        </div>
                        <p class="m-0">Merupakan  platform pengembangan ilmu pengetahuan TIK melalui pelatihan, magang, pembuatan konten dan  jurnal ilmiah.</p>
                        <a class="btn btn-lg btn-primary rounded" href="https://radnet-digital.id/akademi-digital-indonesia/" target="_blank">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div>
                            <img src="{{ asset('assets/img/zk.png') }}" alt="">
                        </div>
                        <h4 class="mb-3">Zona Konten</h4>
                        <p class="m-0">Layanan jasa pengelolaan konten media sosial atau bisa disebut social media management untuk kebutuhan digital Anda.</p>
                        <a class="btn btn-lg btn-primary rounded" href="https://radnet-digital.id/zona-konten/" target="_blank">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div>
                            <img src="{{ asset('assets/img/huris.png') }}" height="50" width="250" alt="">
                        </div>
                        
                        <p class="m-0">Layanan ini berfokus pada manajemen sumber daya manusia yang diperuntukkan untuk lembaga industi ataupun instansi terkait.</p>
                        <a class="btn btn-lg btn-primary rounded" href="https://radnet-digital.id/huris/" target="_blank">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div>
                            <img src="{{ asset('assets/img/excel.jpg') }}" height="50" width="250" alt="">
                        </div>
                        <h4 class="mb-3">SEO Optimization</h4>
                        <p class="m-0">Merupakan aplikasi pelaporan akademik universitas yang otomatis tersinkronisasi dengan aplikasi neo feeder PDDIKTI.</p>
                        <a class="btn btn-lg btn-primary rounded" href="https://radnet-digital.id/excel2neofeeder/" target="_blank">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Hubungi Kami Untuk Penawaran</h3>
                        <p class="text-white mb-3">Dapatkan Penawaran
                            Menarik Sekarang Juga! Untuk informasi lebih lanjut ataupun konsultasi terkait kebutuhan yang diinginkan, silahkan menghubungi kami melalui email sales@radnet-digital.id atau melalui WhatsApp</p>
                        <h2 class="text-white mb-0">08155044434</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Instagram Reels Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Instagram Reels</h5>
                <h1 class="mb-0">Radnet Video</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="reel-item bg-light rounded overflow-hidden">
                        <div class="reel-video position-relative overflow-hidden">
                            <!-- Embed Instagram Reel -->
                            <iframe src="https://www.instagram.com/reel/C7Dh1zdNR_A/embed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width: 100%; height: 400px;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="reel-item bg-light rounded overflow-hidden">
                        <div class="reel-video position-relative overflow-hidden">
                            <!-- Embed Instagram Reel -->
                            <iframe src="https://www.instagram.com/reel/C6dEpPoM8k7/embed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width: 100%; height: 400px;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="reel-item bg-light rounded overflow-hidden">
                        <div class="reel-video position-relative overflow-hidden">
                            <!-- Embed Instagram Reel -->
                            <iframe src="https://www.instagram.com/reel/C6N4qjTIRDl/embed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width: 100%; height: 400px;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="https://radnet-digital.id/radnext-video/" target="_blank" class="btn btn-primary fw-bold">Video Lainnya</a>
            </div>
        </div>
    </div>
    <!-- Instagram Reels End -->

    <!-- Features Start 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Best In Industry</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('assets/img/feature.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features Start --> 


    <!-- Quote Start 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Quote End -->


    <!-- Testimonial Start 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-1.jpg') }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-2.jpg') }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-3.jpg') }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/testimonial-4.jpg') }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100 team-img" src="{{ asset('assets/img/nt2.jpeg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Filusive Nathan Fernanda</h4>
                            <p class="text-uppercase m-0">Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100 team-img" src="{{ asset('assets/img/adit.jpeg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Aditya Putra Pratama</h4>
                            <p class="text-uppercase m-0">Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100 team-img" src="{{ asset('assets/img/nt2.jpeg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Filusive Nathan Fernanda</h4>
                            <p class="text-uppercase m-0">Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                    <div class="position-relative pb-3 mb-3">
                        <h1 class="mb-3">Beberapa mitra kami diantaranya adalah :</h1>
                        <h5 class="fw-bold text-primary text-uppercase">Perusahaan Swasta</h5>
                    </div>
                <div class="owl-carousel vendor-carousel mb-5">
                    <img src="{{ asset('assets/img/Kedawung.png') }}" alt="">
                    <img src="{{ asset('assets/img/bumisurabaya.png') }}" alt="">
                    <img src="{{ asset('assets/img/mamesa.png') }}" alt="">
                    <img src="{{ asset('assets/img/jatayu.png') }}" alt="">
                </div>
                    
                    <div class="position-relative pb-3 mb-3">
                        <h5 class="fw-bold text-primary text-uppercase">Instansi Pendidikan</h5>
                    </div>

                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('assets/img/unnar2.png') }}" alt="">
                    <img src="{{ asset('assets/img/unesa.png') }}" alt="">
                    <img src="{{ asset('assets/img/smkn1sby.png') }}" alt="">
                    <img src="{{ asset('assets/img/smkn6.png') }}" alt="">
                    <img src="{{ asset('assets/img/smekdel.png') }}" alt="">
                    <img src="{{ asset('assets/img/smawuayaputra.png') }}" alt="">
                    <img src="{{ asset('assets/img/mujahidin.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection