@extends('layouts.app')

@section('content')


        <!-- Fitness Goal start -->
        <div class="container-fluid goal pt-5 pb-5 bg-dark">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="goal-content">
                            <h1 class="display-4 mb-4">Become Our Volunteers</h1>
                        </div>
                    </div>
                    <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="goal-item d-flex p-4 h-100">
                                    <div class="d-flex me-4">
                                        <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                            <img src="img/icon-1.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Why Become a Volunteer?</h4>
                                        <p class="text-white mb-0">                            
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Berkontribusi langsung dalam perubahan positif</p>
                                        <p class="text-white mb-0">                                                    
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Mengembangkan keterampilan baru</p>
                                        <p class="text-white mb-0">                            
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Memperluas jaringan profesional</p>
                                        <p class="text-white mb-0">
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Pengalaman berharga untuk CV</p>
                                        <p class="text-white mb-0">
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Bertemu dengan pemuda berpikiran serupa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="goal-item d-flex p-4 h-100">
                                    <div class="d-flex me-4">
                                        <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                            <img src="img/icon-6.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <h4>Volunteers Area</h4>
                                        <p class="text-white mb-0" > 
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Pendidikan & Pelatihan </p>
                                        <p class="text-white mb-0"> 
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Kampanye Sosial</p>
                                        <p class="text-white mb-0">
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Penggalangan Dana</p>
                                        <p class="text-white mb-0">
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Media & Komunikasi</p> 
                                        <p class="text-white mb-0">
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Manajemen Acara</p>
                                        <p class="text-white mb-0">
                                        <span className="text-blue-600 mr-2">✓</span>
                                        Penelitian & Dokumentasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitness Goal End -->

        <!-- Volunteer Registration Form Start -->
        <div class="container-fluid py-5" style="background: linear-gradient(rgba(255, 245, 225, 0.9), rgba(71, 98, 197, 0.9));">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="form-section bg-dark p-5 rounded shadow">
                            <h1 class="display-5 text-white mb-4 text-center">Formulir Pendaftaran Volunteer</h1>
                            <form>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-0" id="nama" placeholder="Nama Lengkap" required>
                                            <label for="nama">Nama Lengkap *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control border-0" id="email" placeholder="Email" required>
                                            <label for="email">Email *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border-0" id="telepon" placeholder="Nomor Telepon" required>
                                            <label for="telepon">Nomor Telepon *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select border-0" id="usia" required>
                                                <option value="" selected disabled>Pilih Usia</option>
                                                <option value="<18">&lt; 18</option>
                                                <option value="18-24">18-24</option>
                                                <option value="25-30">25-30</option>
                                                <option value=">30">&gt; 30</option>
                                            </select>
                                            <label for="usia">Usia *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control border-0" id="alamat" placeholder="Alamat" style="height: 80px" required></textarea>
                                            <label for="alamat">Alamat *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control border-0" id="motivasi" placeholder="Motivasi Menjadi Volunteer" style="height: 100px" required></textarea>
                                            <label for="motivasi">Motivasi Menjadi Volunteer *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="text-white mb-2">Keterampilan (pilih yang sesuai)</label>
                                        <div class="row g-2 mb-3">
                                            <div class="col-md-3 col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="komunikasi">
                                                    <label class="form-check-label text-white" for="komunikasi">Komunikasi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="desain">
                                                    <label class="form-check-label text-white" for="desain">Desain Grafis</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="penulisan">
                                                    <label class="form-check-label text-white" for="penulisan">Penulisan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="analisis">
                                                    <label class="form-check-label text-white" for="analisis">Analisis Data</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="kepemimpinan">
                                                    <label class="form-check-label text-white" for="kepemimpinan">Kepemimpinan</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fotografi">
                                                    <label class="form-check-label text-white" for="fotografi">Fotografi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="media">
                                                    <label class="form-check-label text-white" for="media">Media Sosial</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="pemrograman">
                                                    <label class="form-check-label text-white" for="pemrograman">Pemrograman</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="acara">
                                                    <label class="form-check-label text-white" for="acara">Pengelolaan Acara</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="videografi">
                                                    <label class="form-check-label text-white" for="videografi">Videografi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="pengajaran">
                                                    <label class="form-check-label text-white" for="pengajaran">Pengajaran</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fundraising">
                                                    <label class="form-check-label text-white" for="fundraising">Fundraising</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select border-0" id="ketersediaan" required>
                                                <option value="" selected disabled>-- Pilih Ketersediaan --</option>
                                                <option value="Weekday">Weekday(Monday-Friday)</option>
                                                <option value="Weekend">Weekend(Saturday-Sunday)</option>
                                                <option value="Both">Both</option>
                                                <option value="Flexible">Flexible</option>
                                            </select>
                                            <label for="ketersediaan">Ketersediaan Waktu *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-3">Kirim Pendaftaran</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer Registration Form End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial bg-dark py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 text-white">Testimonials Volunteers</h1>
                </div>
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="{{asset('img/testimonial-1.jpg ')}}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">"Menjadi volunteer di YMP membuka mata saya terhadap banyak isu sosial dan memberikan saya kesempatan untuk berkontribusi. Keterampilan yang saya dapatkan sangat berharga untuk karir saya."
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Anita Wijaya, 24</h4>
                            <p class="m-0 pb-3">Volunteer sejak 2022</p>
                            <div class="d-flex justify-content-center">
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
                            <img src="{{asset('img/testimonial-2.jpg' )}}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">"Program volunteer YMP sangat terstruktur. Saya merasakan dampak nyata dari kontribusi saya dan juga mendapatkan mentoring dari profesional yang sangat membantu."
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Budi Santoso, 22</h4>
                            <p class="m-0 pb-3">Volunteer sejak 2023</p>
                            <div class="d-flex justify-content-center">
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
                            <img src="{{asset('img/testimonial-1.jpg ')}}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">"Pengalaman yang luar biasa! Saya belajar banyak tentang manajemen acara, kampanye sosial, dan mendapatkan teman-teman baru yang memiliki visi serupa."
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Diana Putri, 20</h4>
                            <p class="m-0 pb-3">Volunteer sejak 2023</p>
                            <div class="d-flex justify-content-center">
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
        <!-- Testimonial End -->

@endsection