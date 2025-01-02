<?php

include("koneksi.php");



if(isset($_POST['Kirim'])){

$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Telepon = $_POST['Telepon'];
$Pesan = $_POST['Pesan'];


$sql = "INSERT INTO arta (Nama, Email, Telepon, Pesan) VALUE ('$Nama', '$Email', '$Telepon', '$Pesan')";
$query = mysqli_query($db, $sql);


if( $query ) {
    
    header('Location: Contact.html?status=sukses');
} else {
    
    header('Location: Contact.html?status=gagal');
}


} else {
die("Akses dilarang...");
}

?>
