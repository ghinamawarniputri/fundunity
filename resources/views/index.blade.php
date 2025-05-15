@extends('layouts.app')

@section('content')

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


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
                    <a href="#" class="btn btn-donate-now w-100 py-3 fs-4 fw-bold text-white text-center">Donate Now</a>
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

        <!-- About Start -->
        <div class="container-fluid about pt-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-content h-100">
                            <h4 class="text-primary">About Fitness Center</h4>
                            <h1 class="display-4 text-white mb-4">We are the best at fulfilling your potential and achieving your goals.</h1>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In impedit accusantium autem quaerat natus nesciunt veritatis fugiat dolor eaque fuga.</p>
                            <div class="tab-class pb-4">
                                <ul class="nav d-flex mb-2">
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 active" data-bs-toggle="pill" href="#tab-1">
                                            <span style="width: 150px;">Our Mission</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 mx-3" data-bs-toggle="pill" href="#tab-2">
                                            <span style="width: 150px;">Our Vision</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2" data-bs-toggle="pill" href="#tab-3">
                                            <span style="width: 150px;">Our Goal</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 align-items-center">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary py-3 px-5"> <span>Make Appointment</span></a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex flex-shrink-0 ps-4">
                                        <a href="#" class="btn btn-light btn-lg-square position-relative wow tada" data-wow-delay=".9s">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                            <div class="position-absolute" style="top: 5px; right: 5px;">
                                                <span><i class="fa fa-comment-dots text-dark"></i></span>
                                            </div>
                                        </a>
                                        <div class="d-flex flex-column ms-3">
                                            <span>Call to Our Experts</span>
                                            <a href="tel:+ 0123 456 7890"><span class="text-white">Free: + 0123 456 7890</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-img h-100">
                            <div class="about-img-inner d-flex h-100">
                                <img src="img/about-2.png" class="img-fluid w-100" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Fitness Goal start -->
        <div class="container-fluid goal pt-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="goal-content">
                            <h4 class="text-primary">Fitness Goal</h4>
                            <h1 class="display-4 mb-4">Complete your possibilities, Achieve Your Fitness Goals.</h1>
                            <div class="goal-item d-flex p-4">
                                <div class="d-flex me-4">
                                    <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                        <img src="img/icon-1.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h4>Free Fitness Training</h4>
                                    <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum</p>
                                </div>
                            </div>
                            <div class="goal-item d-flex p-4 mb-4">
                                <div class="d-flex me-4">
                                    <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                        <img src="img/icon-6.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h4>Cardio and Strength</h4>
                                    <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum</p>
                                </div>
                            </div>
                            <div class="ms-1">
                                <a href="#" class="btn btn-primary py-3 px-5 ms-2"> <span>Read Details</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="h-100">
                            <img src="img/fitness-goal-banner.png" class="img-fluid h-100" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitness Goal End -->

        <!-- Features Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"> Why choose us?</h4>
                    <h1 class="display-4 mb-4">Out Our Highlights Below</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="feature-carousel owl-carousel">
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-img">
                            <img src="img/feature-1.jpg" class="img-fluid w-100"  alt="">
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
                            <img src="img/feature-2.jpg" class="img-fluid w-100"  alt="">
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
                            <img src="img/feature-3.jpg" class="img-fluid w-100"  alt="">
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
                            <img src="img/feature-4.jpg" class="img-fluid w-100"  alt="">
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


        <!-- Courses Start -->
        <div class="container-fluid courses overflow-hidden py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"> Our Courses</h4>
                    <h1 class="display-4 text-white mb-4">Out Our Highlights Below</h1>
                    <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row gy-4 gx-0 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-1.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Gym Fitness Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-2.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Power Lifting Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-3.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Body Building Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-4.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Aerobics & Skipping Class</a>
                                
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-5.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Boxing Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="img/icon-6.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Cardio Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn btn-primary py-3 px-5"> <span>More Courses</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">  Our Blogs</h4>
                    <h1 class="display-4 mb-4">Check out our latest stories</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="blog-carousel owl-carousel">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="img/feature-4.jpg" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Full Body Home Workout</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="img/feature-3.jpg" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">31-Day Fitness Calendar</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="img/feature-2.jpg" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">At Home Ab Workout</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="img/feature-1.jpg" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Full Body Home Workout</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Trainer</h4>
                    <h1 class="display-4 mb-4">Meet Our Amazing Team</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row gy-5 gy-lg-4 gx-4">
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Trainer Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Trainer Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Trainer Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Trainer Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial bg-dark py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 text-white">What Our Customers Are Saying</h1>
                </div>
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection