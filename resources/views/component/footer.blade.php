<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5 mb-5 align-items-center">
            <div class="col-lg-7">
                <div class="position-relative d-flex" style="transform: skew(18deg);">
                    <input class="form-control border-0 w-100 py-3 pe-5" type="text" placeholder="Email address to Subscribe">
                    <button type="button" class="btn-primary py-2 px-4 ms-3"> <span>Subscribe</span></button>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                    <a class="btn btn-primary btn-md-square me-3" href="{{ config('app.social_media.facebook') }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-md-square me-3" href="{{ config('app.social_media.twitter') }}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-md-square me-3" href="{{ config('app.social_media.instagram') }}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-primary btn-md-square me-0" href="{{ config('app.social_media.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4"> About Us</h4>
                    <p class="mb-0">FundUnity CMS is dedicated to helping individuals and organizations come together to fund and support important causes.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="{{ route('home') }}"> Who Are We</a>
                    <a href="{{ route('about') }}"> What We Do</a>
                    <a href="{{ route('courses') }}"> Moving Together</a>
                    <a href="{{ route('features') }}"> Donate Now</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4"> Contact Info</h4>
                    <div class="row g-2">
                        <div class="col-12">
                            <div class="d-flex">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <div>
                                    <h5 class="text-white mb-2">Address</h5>
                                    <p class="mb-0">{{ config('app.address') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <div>
                                    <h5 class="text-white mb-2">Mail Us</h5>
                                    <p class="mb-0">{{ config('app.email') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <div>
                                    <h5 class="text-white mb-2">Telephone</h5>
                                    <p class="mb-0">{{ config('app.phone') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Recent Work</h4>
                    <div class="row g-2">
                        @for ($i = 1; $i <= 12; $i++)
                            <div class="col-3">
                                <div class="footer-item-img">
                                    <a href="#"><img src="{{ asset('img/work-' . $i . '.jpg') }}" class="img-fluid" alt="Recent Work {{ $i }}"></a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Footer End -->

