@extends('layouts.admin')

@section('title', 'Admin Dashboard') {{-- Judul halaman --}}

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
                        <h6 class="text-primary">EARNINGS (MONTHLY)</h6>
                        <h4>Rp. 40,000</h4>
                    </div>
                    <div class="summary-icon">📅</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body card-summary">
                    <div>
                        <h6 class="text-success">EARNINGS (ANNUAL)</h6>
                        <h4>Rp. 215,000</h4>
                    </div>
                    <div class="summary-icon">💰</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body card-summary">
                    <div>
                        <h6 class="text-info">TASKS</h6>
                        <h4>50%</h4>
                        <div class="progress mt-1" style="height: 6px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"></div>
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
                        <h4>18</h4>
                    </div>
                    <div class="summary-icon">💬</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 g-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Earnings Overview</h5>
                    <canvas id="earningsChart" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Revenue Sources</h5>
                    <canvas id="revenueChart" height="200"></canvas>
                    <div class="mt-3 text-center">
                        <span class="me-3"><span class="badge bg-primary">⬤</span> Direct</span>
                        <span class="me-3"><span class="badge bg-success">⬤</span> Social</span>
                        <span><span class="badge bg-info">⬤</span> Referral</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const earningsCtx = document.getElementById('earningsChart').getContext('2d');
        new Chart(earningsCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Mar', 'May', 'Jul', 'Sep', 'Nov'],
                datasets: [{
                    label: 'Earnings',
                    data: [0, 12000, 18000, 15000, 25000, 40000],
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

        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'doughnut',
            data: {
                labels: ['Direct', 'Social', 'Referral'],
                datasets: [{
                    data: [55, 30, 15],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                cutout: '70%'
            }
        });
    </script>
@endsection