@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-4 mb-3">
        <h2><i class="bi bi-wallet2 me-2"></i>Transaksi Masuk</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nominal</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($dataKonten) && count($dataKonten) > 0)
                            @foreach($dataKonten as $konten)
                                <tr>
                                    <td>{{ $konten->nama }}</td>
                                    <td>{{ $konten->email }}</td>
                                    <td>Rp {{ number_format($konten->nominal, 0, ',', '.') }}</td>
                                    <td>{{ $konten->keterangan }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-{{ $konten->status == 'Selesai' ? 'success' : 'warning' }}">
                                            {{ $konten->status }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center text-muted">Tidak ada data transaksi.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection