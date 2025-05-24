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
                            <th width="140">Aksi</th>
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
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $konten->id }}">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </button>

                                        <form action="{{ route('admin.transaksi.destroy', $konten->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
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

    {{-- Modal Edit --}}
    @foreach($dataKonten as $konten)
        <div class="modal fade" id="editModal{{ $konten->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $konten->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('admin.transaksi.update', $konten->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="editModalLabel{{ $konten->id }}">Edit Transaksi</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $konten->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $konten->email }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nominal</label>
                                <input type="number" name="nominal" class="form-control" value="{{ $konten->nominal }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control" rows="2" required>{{ $konten->keterangan }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select" required>
                                    <option value="Selesai" {{ $konten->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                    <option value="Pending" {{ $konten->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Dibatalkan" {{ $konten->status == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
