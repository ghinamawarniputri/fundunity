@extends('layouts.admin') {{-- Asumsi Anda memiliki layout admin --}}

@section('content')
<div class="container">
    <h2 class="mt-4">Transaksi</h2>

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
                                        <a href="{{ route('admin.konten.edit', $konten->id) }}" class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.konten.hapus', $konten->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus konten ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center text-muted">Tidak ada data konten.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
