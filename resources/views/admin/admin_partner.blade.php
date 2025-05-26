@extends('layouts.admin') {{-- Asumsi Anda memiliki layout admin --}}

@section('content')
<div class="container">
    <h2 class="mt-4">Manajemen Partner</h2>

    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Logo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($partners) && count($partners) > 0)
                            @foreach($partners as $partner)
                                <tr>
                                    <td>{{ $partner->nama }}</td>
                                    <td>
                                        @if($partner->logo)
                                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->nama }}" height="50">
                                        @else
                                            <span class="text-muted">Tidak ada logo</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.partner.edit', $partner->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('admin.partner.hapus', $partner->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus partner ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada data partner.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <div class="mt-3">
        <a href="{{ route('admin.partner.tambah') }}" class="btn btn-success">Tambah Partner Baru</a>
    </div> --}}
</div>
@endsection
