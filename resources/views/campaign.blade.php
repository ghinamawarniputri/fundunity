@extends('layouts.app')

@section('content')
<!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 mb-4">Our Campaigns</h1>
                    <p class="mb-0">YMP menjalankan berbagai kampanye untuk mempromosikan isu-isu penting yang mempengaruhi generasi muda. Kampanye kami bertujuan untuk meningkatkan kesadaran, mendorong partisipasi, dan menciptakan perubahan positif di masyarakat.
                    </p>
                </div>
                <div class="card shadow rounded overflow-hidden mb-5" style="max-width: 1200px; margin: auto;">
                    <div class="bg-primary text-white p-3">
                        <h5 class="mb-0">Youth for Climate Action</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">
                        Kampanye nasional untuk meningkatkan kesadaran dan aksi nyata pemuda terhadap perubahan iklim.
                        </p>
                        <div class="row text-center mb-4">
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Status:</strong><br>
                            <span class="text-success">Aktif</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Periode:</strong><br>
                            Januari - Desember 2025
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Target:</strong><br>
                            1 juta pemuda di seluruh Indonesia
                            </div>
                        </div>
                        </div>

                        <div class="mb-2"><strong>Progress:</strong></div>
                        <div class="progress mb-3" style="height: 12px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-end mb-3">
                        65%
                        </div>

                        <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-primary">Detail Kampanye</a>
                        <a href="#" class="btn btn-outline-primary">Berpartisipasi</a>
                        </div>
                    </div>
                </div>
                <div class="card shadow rounded overflow-hidden mb-5" style="max-width: 1200px; margin: auto;">
                    <div class="bg-primary text-white p-3">
                        <h5 class="mb-0">Stop Bullying Movement</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">
                        Kampanye anti-perundungan di sekolah dan media sosial untuk menciptakan lingkungan yang aman bagi semua anak dan remaja.
                        </p>
                        <div class="row text-center mb-4">
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Status:</strong><br>
                            <span>Persiapan</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Periode:</strong><br>
                            April - Oktober 2025
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Target:</strong><br>
                            2000 sekolah di 34 provinsi
                            </div>
                        </div>
                        </div>

                        <div class="mb-2"><strong>Progress:</strong></div>
                        <div class="progress mb-3" style="height: 12px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 15%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-end mb-3">
                        15%
                        </div>

                        <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-primary">Detail Kampanye</a>
                        <a href="#" class="btn btn-outline-primary">Berpartisipasi</a>
                        </div>
                    </div>
                </div>
                <div class="card shadow rounded overflow-hidden mb-5" style="max-width: 1200px; margin: auto;">
                    <div class="bg-primary text-white p-3">
                        <h5 class="mb-0">Digital Literacy for All</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">
                        Kampanye untuk memastikan semua pemuda Indonesia memiliki akses ke pendidikan digital dasar.
                        </p>
                        <div class="row text-center mb-4">
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Status:</strong><br>
                            <span class="text-success">Aktif</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Periode:</strong><br>
                            Maret 2024 - Maret 2025
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="bg-light p-2 rounded">
                            <strong>Target:</strong><br>
                            500 sekolah di daerah terpencil
                            </div>
                        </div>
                        </div>

                        <div class="mb-2"><strong>Progress:</strong></div>
                        <div class="progress mb-3" style="height: 12px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-end mb-3">
                        75%
                        </div>

                        <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-primary">Detail Kampanye</a>
                        <a href="#" class="btn btn-outline-primary">Berpartisipasi</a>
                        </div>
                    </div>
                </div>
                <div class="bg-light p-4 rounded" style="background-color: #f0f7ff !important; max-width: 1100px; margin: auto;">
    <h5 class="mb-2"><strong>Usulkan Kampanye Baru</strong></h5>
    <p class="mb-3">
        Apakah Anda memiliki ide untuk kampanye yang dapat membantu pemuda Indonesia? Kami selalu terbuka untuk ide-ide baru dan kolaborasi. Bagikan ide Anda dengan kami!
    </p>
    <a href="#" class="btn btn-primary">Ajukan Ide Kampanye</a>
</div>
            </div>
        </div>
        <!-- Blog End -->

@endsection
