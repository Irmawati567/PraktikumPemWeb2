<?php
//tangkep data input
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$tugas = $_POST["tugas"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];

//tampilin hasil data 
echo "Nama Lengkap:" . $nama;
echo "<br>";
echo "Mata Kuliah:" . $matkul;
echo "<br>";
echo "Nilai Tugas:" . $tugas;
echo "<br>";
echo "Nilai UTS:" . $uts;
echo "<br>";
echo "Nilai UAS:" . $uas;
echo "<br>";
?>

<?php
// tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// array harga produk

$harga = [
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin Cuci' => 3000000
];

// hitung total harga (jumlah * harga produk)
$total = $jumlah * $harga[$produk];

// format rupiah
$total = number_format($total);

echo "Nama Customer": . $customer;
echo "<br>";
echo "Produk": . $produk;
echo "<br>";
echo "Jumlah Beli": . $jumlah;
echo "<br>";
echo "Total Belanja": . $total;

?>