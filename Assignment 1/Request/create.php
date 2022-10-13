<?php

require('connect.php');

$kode = $_REQUEST['kode'];
$nama = $_REQUEST['nama'];
$jam = $_REQUEST['jam'];
$ruang = $_REQUEST['ruang'];
$sql = "INSERT INTO mata_kuliah VALUES ('$kode',
            '$nama','$jam','$ruang')";
if (mysqli_query($link, $sql)) {
    echo "<h3>Data Added Successfully! </h3>";

    header('Location: view.php');
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($link);
}
// }


// Close connection
mysqli_close($link);
