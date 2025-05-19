@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mt-4">Transaksi Masuk</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nominal</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($dataKonten) && count($dataKonten) > 0)
                            @foreach($dataKonten as $konten)
                                <tr>
                                    <td>{{ $konten->nama }}</td>
                                    <td>{{ $konten->email }}</td>
                                    <td>{{ $konten->nominal }}</td>
                                    <td>{{ $konten->keterangan }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $konten->id }}">
                                            Edit
                                        </button>

                                        <form action="{{ route('admin.transaksi.destroy', $konten->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center text-muted">Tidak ada data transaksi.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modals --}}
    @foreach($dataKonten as $konten)
        <div class="modal fade" id="editModal{{ $konten->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $konten->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('admin.transaksi.update', $konten->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $konten->id }}">Edit Transaksi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama{{ $konten->id }}" class="form-label">Nama</label>
                                <input id="nama{{ $konten->id }}" type="text" name="nama" class="form-control" value="{{ $konten->nama }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email{{ $konten->id }}" class="form-label">Email</label>
                                <input id="email{{ $konten->id }}" type="email" name="email" class="form-control" value="{{ $konten->email }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nominal{{ $konten->id }}" class="form-label">Nominal</label>
                                <input id="nominal{{ $konten->id }}" type="number" name="nominal" class="form-control" value="{{ $konten->nominal }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan{{ $konten->id }}" class="form-label">Keterangan</label>
                                <textarea id="keterangan{{ $konten->id }}" name="keterangan" class="form-control" required>{{ $konten->keterangan }}</textarea>
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
