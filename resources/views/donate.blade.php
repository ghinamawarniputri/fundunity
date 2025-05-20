@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" style="background: linear-gradient(rgba(255, 245, 225, 0.9), rgba(71, 98, 197, 0.9));">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.2s">
                <div class="form-section bg-dark p-5 rounded shadow">
                    <h1 class="display-5 text-white mb-2 text-center">Donasi dalam Bentuk Alam</h1>
                    <p class="text-white text-center mb-4">Bantu kami menjaga lingkungan dengan mendonasikan barang-barang alami atau sumber daya yang dapat membantu komunitas.</p>
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
                                    <select class="form-select border-0" id="jenis_donasi" required>
                                        <option value="" selected disabled>-- Pilih Jenis Donasi --</option>
                                        <option value="Pangan">Pangan</option>
                                        <option value="Pakaian">Pakaian</option>
                                        <option value="Buku">Buku</option>
                                        <option value="Alat Tulis">Alat Tulis</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <label for="jenis_donasi">Jenis Donasi *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control border-0" id="jumlah" placeholder="Jumlah / Spesifikasi" required>
                                    <label for="jumlah">Jumlah / Spesifikasi *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control border-0" id="pesan" placeholder="Pesan Tambahan" style="height: 100px"></textarea>
                                    <label for="pesan">Pesan Tambahan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">Kirim Donasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection