@extends('layouts.app')

@section('content')

<!-- Blog Start -->
<div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 mb-4">Our Programs</h1>
                    <p class="mb-0">YMP menawarkan berbagai program yang dirancang untuk mengembangkan potensi pemuda Indonesia. Program-program kami berfokus pada pengembangan kepemimpinan, keterampilan digital, kesadaran lingkungan, dan persiapan karir.
                    </p>
                </div>
                <div class="blog-carousel owl-carousel">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> 30/batch</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> Maret - Mei</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Leadership Academy</a>
                            <p class="mb-3">Program pelatihan kepemimpinan intensif selama 3 bulan untuk pemuda usia 18-25 tahun.</p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-dark btn-sm py-1 px-2 ms-2" style="font-size: 0.85rem;">
                                    <span class="me-2">Detail Program</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="#" class="btn btn-dark btn-sm py-1 px-2 ms-2" style="font-size: 0.85rem;">
                                    <span class="me-2">Daftar Sekarang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Tak Terbatas</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> Februari, Juni, Oktober</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Environmental Awareness</a>
                            <p class="mb-3">Aksi nyata untuk penyelamatan lingkungan, termasuk penanaman pohon dan pembersihan pantai.</p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-dark btn-sm py-1 px-2 ms-2" style="font-size: 0.85rem;">
                                    <span class="me-2">Detail Program</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="#" class="btn btn-dark btn-sm py-1 px-2 ms-2" style="font-size: 0.85rem;">
                                    <span class="me-2">Daftar Sekarang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> 20/kelas</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> Setiap bulan</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Digital Literacy</a>
                            <p class="mb-3">Pelatihan keterampilan digital dasar hingga lanjutan untuk pemuda dari daerah terpencil.</p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-dark btn-sm py-1 px-2 ms-2" style="font-size: 0.85rem;">
                                    <span class="me-2">Detail Program</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="#" class="btn btn-dark btn-sm py-1 px-2 ms-2" style="font-size: 0.85rem;">
                                    <span class="me-2">Daftar Sekarang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span>50/workshop</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> April & September</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Career Preparation</a>
                            <p class="mb-3">Workshop persiapan karir termasuk pembuatan CV, teknik wawancara, dan pengembangan soft skills.</p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-dark btn-sm py-1 px-2 ms-2" style="font-size: 0.85rem;">
                                    <span class="me-2">Detail Program</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="#" class="btn btn-dark btn-sm py-1 px-2 ms-2" style="font-size: 0.85rem;">
                                    <span class="me-2">Daftar Sekarang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Blog End -->


@endsection