<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Donasi</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <style>
        body { background: #f4f8fb; }
        .card { border-radius: 18px; }
        .btn-primary { background: #646cff; border: none; }
        .btn-primary:hover { background: #3b47b7; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0"><i class="fas fa-hand-holding-heart me-2"></i>Form Donasi</h3>
                </div>
                <div class="card-body p-4">

                    <form id="donation-form">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="nominal" class="form-label">Nominal Donasi (Rp)</label>
                            <input type="number" class="form-control" id="nominal" name="amount" min="1000" step="1000" required>
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg mb-2">
                                <i class="fas fa-donate me-2"></i>Donasi Sekarang
                            </button>
                            <a href="/" class="btn btn-outline-secondary btn-lg">
                                <i class="fas fa-arrow-left me-2"></i>Kembali ke Beranda
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#donation-form').submit(function(e) {
        e.preventDefault();
        let form = $(this);

        // Simpan data input form agar bisa dikirim ulang setelah transaksi berhasil
        let nama = form.find('input[name="name"]').val();
        let email = form.find('input[name="email"]').val();
        let nominal = form.find('input[name="amount"]').val();
        let keterangan = form.find('[name="keterangan"]').val();

        $.ajax({
            url: '/midtrans/token',
            method: 'POST',
            data: form.serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                snap.pay(data.token, {
                    onSuccess: function(result) {
                        alert('Pembayaran berhasil!');
                        
                        // Kirim data donasi ke database
                        $.ajax({
                        url: '/transaksimasuk',
                        method: 'POST',
                        data: {
                            nama: nama,
                            email: email,
                            nominal: nominal,
                            keterangan: keterangan
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res) {
                            console.log('Transaksi berhasil disimpan:', res);
                            window.location.href = '/'; // Redirect ke index
                        },
                        error: function(xhr) {
                        console.error('Gagal simpan ke database:', xhr.responseText);
                        alert('Pembayaran berhasil tapi gagal menyimpan data.\n' + xhr.responseText);
                        }
                    });
                },
                    onPending: function(result) {
                        alert('Menunggu pembayaran.');
                        console.log(result);
                    },
                    onError: function(result) {
                        alert('Terjadi kesalahan.');
                        console.log(result);
                    },
                    onClose: function() {
                        alert('Kamu belum menyelesaikan pembayaran.');
                    }
                });
            },
            error: function (xhr) {
                alert('Terjadi kesalahan validasi atau server.');
                console.log(xhr.responseText);
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>