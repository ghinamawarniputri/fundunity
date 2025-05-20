@extends('layouts.app')

@section('content')


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="mb-4">
                            <h4 class="text-primary">Contact Us</h4>
                            <h1 class="display-4 mb-4">Contact With Our Team</h1>
                            <p class="mb-4">Kami senang mendengar dari Anda! Apakah Anda memiliki pertanyaan tentang program kami, ingin menjadi volunteer, atau membutuhkan informasi lebih lanjut? Jangan ragu untuk menghubungi kami.
                            </p>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="bg-white d-flex">
                                        <i class="fas fa-map-marker-alt fa-2x text-primary me-2"></i>
                                        <div>
                                            <h4>Address</h4>
                                            <p class="mb-0">{{ config('app.address') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bg-white d-flex">
                                        <i class="fas fa-envelope fa-2x text-primary me-2"></i>
                                        <div>
                                            <h4>Mail Us</h4>
                                            <p class="mb-0">{{ config('app.email') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bg-white d-flex">
                                        <i class="fa fa-phone-alt fa-2x text-primary me-2"></i>
                                        <div>
                                            <h4>Telephone</h4>
                                            <p class="mb-0">{{ config('app.phone') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bg-white d-flex">
                                        <i class="fab fa-firefox-browser fa-2x text-primary me-2"></i>
                                        <div>
                                            <h4>Business Hours</h4>
                                            <p class="mb-0">{{config('app.business_hours')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex ms-2 mb-5">
                            <a class="btn btn-dark py-2 px-3 px-sm-4 me-2" href="SOCIAL_FACEBOOK"> <span>facebook</span> <i class="fas fa-chevron-circle-right"></i></a>
                            <a class="btn btn-dark py-2 px-3 px-sm-4 mx-2" href="SOCIAL_TWITTER"> <span>twitter</span> <i class="fas fa-chevron-circle-right"></i></a>
                            <a class="btn btn-dark py-2 px-3 px-sm-4 ms-2" href="SOCIAL_INSTAGRAM"> <span>instagram</span> <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                        <div class="contact-banner">
                            <div class="row g-0">
                                <div class="col-9">
                                    <div class="p-4 pe-0">
                                        <h4 class="display-5 mb-0">We Wait For You To Join Our Team </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="form-section bg-dark p-5 h-100">
                            <h1 class="display-4 text-white mb-4">Get In touch</h1>
                            <form>
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating form-section-col">
                                            <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating form-section-col">
                                            <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating form-section-col">
                                            <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating form-section-col">
                                            <input type="text" class="form-control border-0" id="project" placeholder="Project">
                                            <label for="project">Your Project</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating form-section-col">
                                            <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px;"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="#" id="flexCheck">
                                            <label class="form-check-label" for="flexCheck">I agree with the site privacy policy</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-section-col">
                                            <button class="btn-primary w-100 py-3 px-5">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="h-100 overflow-hidden">
                            <iframe class="w-100" style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.410509536533!2d107.67248267410723!3d-6.96080606815035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c300070c60c1%3A0xddd74453cb6ef1a!2sPT.%20YUKMARI%20PROJECT%20INDONESIA!5e0!3m2!1sen!2sid!4v1747716955872!5m2!1sen!2sid" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Back to Top -->
        <div class="back-to-top">
            <a href="#" class="btn"><i class="fa fa-arrow-up"></i></a>  
        </div> 

@endsection