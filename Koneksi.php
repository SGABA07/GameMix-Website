<?php
// Koneksi ke database
$Koneksi = mysqli_connect("localhost", "andra", "andrabima", "komentar");

if (!$Koneksi){
    die("Error with connection with code: " . mysqli_connect_error());
}
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];

$query = "INSERT INTO komentar (nama, kelas, email, gender, alamat) VALUES ('$nama', '$kelas', '$email', '$gender', '$alamat')";

if (mysqli_query($Koneksi, $query)) {
    echo "Data berhasil ditambahkan";
}else{
    echo "Error: " . $query . "<br>" . mysqli_connect_error($Koneksi);
}
mysqli_close($Koneksi);
?>