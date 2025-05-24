@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Dashboard</h2>
    <button class="btn btn-primary">📄 Generate Report</button>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body card-summary">
                <div>
                    <h6 class="text-primary">TOTAL DONASI (BULANAN)</h6>
                    <h4>Rp. {{ number_format($monthlyEarnings, 0, ',', '.') }}</h4>
                </div>
                <div class="summary-icon">📅</div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body card-summary">
                <div>
                    <h6 class="text-success">TOTAL DONASI (TAHUNAN)</h6>
                    <h4>Rp. {{ number_format($annualEarnings, 0, ',', '.') }}</h4>
                </div>
                <div class="summary-icon">💰</div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body card-summary">
                <div>
                    <h6 class="text-info">TASKS</h6>
                    <h4>{{ $tasksProgress }}%</h4>
                    <div class="progress mt-1" style="height: 6px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $tasksProgress }}%"></div>
                    </div>
                </div>
                <div class="summary-icon">📋</div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body card-summary">
                <div>
                    <h6 class="text-warning">PENDING REQUESTS</h6>
                    <h4>{{ $pendingRequests }}</h4>
                </div>
                <div class="summary-icon">💬</div>
            </div>
        </div>
    </div> --}}
</div>

{{-- Grafik --}}
<div class="row mt-4 g-4">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Donasi FundUnity CMS</h5>
                <canvas id="earningsChart" height="100"></canvas>
            </div>
        </div>
    </div>
</div>

{{-- Tabel Transaksi Terbaru --}}
{{-- <div class="row mt-4 g-4">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Transaksi Terbaru</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-3">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nominal</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($dataTransaksi as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->nama }}</td>
                                    <td>{{ $transaksi->email }}</td>
                                    <td>Rp. {{ number_format($transaksi->nominal, 0, ',', '.') }}</td>
                                    <td>{{ $transaksi->keterangan }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Belum ada transaksi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- Chart Script --}}
<script>
    const earningsCtx = document.getElementById('earningsChart').getContext('2d');
    new Chart(earningsCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Donasi',
                data: @json($earnings),
                borderColor: 'rgba(54, 99, 255, 1)',
                backgroundColor: 'rgba(54, 99, 255, 0.1)',
                tension: 0.3,
                fill: true,
                pointRadius: 4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection
