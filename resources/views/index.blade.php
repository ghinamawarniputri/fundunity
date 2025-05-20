@extends('layouts.app')

@section('content')

        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel overflow-hidden bg-dark">
            <!-- <div class="header-carousel-item hero-section">
                <div class="hero-bg-half-1"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Wellcome to our fitness Center</h4>
                                    <h1 class="display-1 text-white mb-4">The best gym center is now in your city</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
                                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Learn More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="header-carousel-item hero-section" style="background: url('img/hero6.jpg') center center/cover no-repeat; min-height: 500px;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h1 class="display-2 text-white mb-4">Together, Creating Change with YukMariProject</h1>
                                    <p class="mb-5 fs-5">Join us in making a meaningful impact for those in need and building a better future.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn py-3 px-4 px-md-5 ms-2" href="#" style="background-color: #646cff; color: white;"><span>Lets Get Moving</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Donate Now Section Start -->
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <a href="{{ route('midtrans') }}" class="btn btn-donate-now w-100 py-3 fs-4 fw-bold text-white text-center">Donate Now</a>
                </div>
            </div>
        </div>
        <!-- Donate Now Section End -->

        <!-- Explore  Start -->
        <div class="container-fluid explore py-5 wow zoomIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row align-items-center g-5">
                    <!-- Kiri: Judul, deskripsi, tombol -->
                    <div class="col-lg-6">
                        <h1 class="display-1 text-white mb-0"> Explore Our Gallery</h1>
                        <p class="mt-3 mb-4 text-white" style="font-size:1.2rem;">Discover our inspiring moments and impactful stories</p>
                        <a class="btn btn-primary py-3 px-4 px-md-5 me-2" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <i class="fas fa-play-circle me-2"></i> <span>Watch Video</span>
                        </a>
                    </div>
                    <!-- Kanan: Impact Stories Card -->
                    <div class="col-lg-6">
                        <div class="impact-card p-4 p-md-5">
                            <h2 class="fw-bold text-white mb-4">Our Impact Stories</h2>
                            <p class="text-white mb-3" style="font-size:1.1rem;">
                                Discover a curated selection of inspiring images and videos that showcase the power of change, innovation, and community support. Each piece in this gallery tells a story of resilience, hope, and the impact of collective efforts in improving lives.
                            </p>
                            <p class="text-white mb-4" style="font-size:1.1rem;">
                                Through these visuals, we invite you to explore the transformative journeys of individuals and communities as they overcome challenges and inspire others to take action.
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-light btn-lg fw-bold px-5" style="border-radius: 2em; color: #0066cc;">View Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Explore  End -->

        <!-- Video Modal Start -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content" style="background: #f8fbff; border-radius: 20px;">
                    <div class="modal-body p-4">
                        <video id="exploreVideo" controls style="width:100%; border-radius: 12px; box-shadow: 0 2px 16px rgba(0,0,0,0.08);">
                            <source src="img/video1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="text-center mt-3">
                            <a href="#" class="text-primary" style="font-weight:500;">View more videos &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->

        <!-- Features Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 mb-4">Image Gallery</h1>
                    <p class="mb-0">Melalui program-program yang bersinergi, Yuk Mari Project berusaha untuk menciptakan Indonesia yang bebas dari kelaparan.</p>
                </div>
                <div class="feature-carousel owl-carousel">
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-img">
                            <img src="img/feature-1.jpg" class="img-fluid w-100" style="height: 250px; object-fit: cover;" alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Work Your Butt Off</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-img">
                            <img src="img/feature-2.jpg" class="img-fluid w-100" style="height: 250px; object-fit: cover;" alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Get In The groove</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-img">
                            <img src="img/feature-3.jpg" class="img-fluid w-100" style="height: 250px; object-fit: cover;" alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">It's more Than A Game</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-img">
                            <img src="img/feature-4.jpg" class="img-fluid w-100" style="height: 250px; object-fit: cover;" alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Get Fit Don't Quit</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="feature-shaps"></div>
            </div>
        </div>
        <!-- Features End -->

         <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 mb-4">Trusted Partners</h1>
                    <p class="mb-0">We collaborate with industry leaders to deliver the best solutions </p>
                </div>
                <div class="team-carousel owl-carousel">
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-img">
                            <img src="img/team-1.png" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="team-content">
                            <h4>BnC Cookies</h4>
                        </div>
                    </div>
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-img">
                            <img src="img/team-2.png" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="team-content">
                            <h4>UPI</h4>
                        </div>
                    </div>
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-img">
                            <img src="img/team-3.png" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="team-content">
                            <h4>UIN</h4>
                        </div>
                    </div>
                    <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img src="img/team-4.png" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="team-content">
                            <h4>Anugerah Cipta Arstitektur</h4>
                        </div>
                    </div>
                    <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img src="img/team-5.png" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="team-content">
                            <h4>BnC Cookies</h4>
                        </div>
                    </div>
                    <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img src="img/team-6.png" class="img-fluid w-100" alt="Image">
                        </div>
                        <div class="team-content">
                            <h4>Sinai Adventure</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
@endsection