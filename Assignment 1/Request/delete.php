<?php

require('connect.php');

$kode = $_GET['kode_matkul'];
$sql = "DELETE FROM mata_kuliah WHERE kode_matkul='$kode'";
if (mysqli_query($link, $sql)) {
    echo "<h3>Deleted Data Successfully! </h3>";

    header('Location: view.php');
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($link);
}
// }


// Close connection
mysqli_close($link);
