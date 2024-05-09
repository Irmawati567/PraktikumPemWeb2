<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <h2>Belanja Online</h2>
    <hr>
    <div class="row mx-5">
        <div class="col-12 col-md-8">
            <form method="POST" action="belanja_online.php">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="customer" name="customer" placeholder="Masukan nama anda" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="kirim" type="kirim" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-4">
            <ul class="list-group">
                <li class="list-group-item active">Daftar Harga</li>
                <li class="list-group-item">TV: 4.200.000</li>
                <li class="list-group-item">Kulkas: 3.100.000</li>
                <li class="list-group-item">Mesin Cuci: 3.800.000</li>
                <li class="list-group-item active">Harga dapat berubah setiap saat</li> 
            </ul>
        </div>
    </div>
</body>

</html>

<?php
    if(isset($_POST['customer']) && isset($_POST['produk']) && isset($_POST['jumlah'])) {
        $harga = 0;
        $produk = strtolower($_POST['produk']); // Mengubah input produk menjadi huruf kecil
        $jumlah = (int)$_POST['jumlah'];
        
        // Tentukan harga berdasarkan pilih produk
        switch($produk) {
            case 'tv':
                $harga = 4200000;
                break;
            case 'kulkas':
                $harga = 3100000;
                break;
            case 'mesin cuci':
                $harga = 3800000;
                break;
            default:
                $harga = 0;
        }
        
        $total = $harga * $jumlah;
        echo '<div class="container">';
        echo '<p>Customer: ' . $_POST['customer'] . '</p>';
        echo '<p>Produk Pilihan: ' . ucfirst($produk) . '</p>'; 
        echo '<p>Jumlah Beli: ' . $jumlah . '</p>';
        echo '<p>Total Belanja: Rp ' . number_format($total, 0, ',', '.') . '</p>';
        echo '</div>';
    }
?>
