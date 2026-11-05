<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Laba & Rugi | MalasNgoding</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 15px;
        }
    </style>
</head> 
<body> 

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="text-center mb-4">
                    <h1 class="fw-bold text-primary">MalasNgoding.com</h1> 
                    <p class="text-muted">Aplikasi Perhitungan Laba & Rugi Sederhana</p> 
                </div>

                <div class="card shadow-sm p-4 mb-4 bg-white">
                    <form method="post" action=""> 
                        <div class="mb-3">
                            <label for="harga" class="form-label fw-semibold">Harga Jual (Rp)</label>
                            <input type="number" class="form-control form-control-lg" id="harga" name="harga" placeholder="Masukkan harga jual..." required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="modal" class="form-label fw-semibold">Modal (Rp)</label>
                            <input type="number" class="form-control form-control-lg" id="modal" name="modal" placeholder="Masukkan modal awal..." required>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" name="hitung" class="btn btn-primary btn-lg">Hitung Sekarang</button>
                        </div>
                    </form> 
                </div>

                <?php 
                if (isset($_POST['hitung'])) {
                    $harga = $_POST['harga']; 
                    $modal = $_POST['modal']; 
                      
                    if ($harga > $modal) { 
                        $laba = $harga - $modal; 
                        echo '<div class="alert alert-success border-0 shadow-sm text-center py-3" role="alert">';
                        echo '  <h5 class="alert-heading fw-bold">🎉 ANDA MENDAPAT LABA!</h5>';
                        echo '  <p class="mb-0 fs-5">Sebesar: <strong>Rp ' . number_format($laba, 0, ',', '.') . '</strong></p>';
                        echo '</div>';
                    } elseif ($modal > $harga) { 
                        $rugi = $modal - $harga; 
                        echo '<div class="alert alert-danger border-0 shadow-sm text-center py-3" role="alert">';
                        echo '  <h5 class="alert-heading fw-bold">⚠️ ANDA MENDAPAT RUGI!</h5>';
                        echo '  <p class="mb-0 fs-5">Sebesar: <strong>Rp ' . number_format($rugi, 0, ',', '.') . '</strong></p>';
                        echo '</div>';
                    } else { 
                        echo '<div class="alert alert-warning border-0 shadow-sm text-center py-3" role="alert">';
                        echo '  <h5 class="alert-heading fw-bold">⚖️ IMPAS / BEP</h5>';
                        echo '  <p class="mb-0 fs-5">Tidak laba dan tidak rugi.</p>';
                        echo '</div>';
                    } 
                }
                ?> 

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>