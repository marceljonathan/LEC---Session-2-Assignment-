<?php
// Display selected user data based on id
// Getting id from url

include ('connect.php');

$kode_matkul = $_GET['kode_matkul'];

// Fetech user data based on id
$result = mysqli_query($link, "SELECT * FROM mata_kuliah WHERE kode_matkul='$kode_matkul'");

while ($row = mysqli_fetch_array($result)) {
    $nama_matkul = $row['nama_matkul'];
    $kode_matkul = $row['kode_matkul'];
    $jam_matkul = $row['jam_matkul'];
    $ruang_matkul = $row['ruang_matkul'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Assignment 1</title>
</head>

<body>
    <h1 class="text-center mt-3">Form Perubahan Mata Kuliah</h1>

    <div style="margin-right: 25%; margin-left: 25%">
        <form class="mt-3" method="POST" action="">
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control" required name="kode_matkul" disabled value=<?php echo $kode_matkul; ?>>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mata Kuliah</label>
                <input type=text"" class="form-control" name="nama_matkul" required value="<?php echo $nama_matkul; ?>">
            </div>
            <div class="mb-3">
                <label for="jam_matkul" class="form-label">Jam Mata Kuliah</label>
                <select class="form-select" name="jam_matkul" required>
                    <option value=<?php echo $jam_matkul ?>><?php echo $jam_matkul; ?></option>
                    <?php 
                        if ($jam_matkul !== "07:20 - 08:50") {
                            echo "<option value=\"07:20 - 08:50\">07:20 - 08:50</option>";
                        }  
                        
                        if ($jam_matkul !== "09:20 - 10:50") {
                            echo "<option value=\"09:20 - 10:50\">09:20 - 10:50</option>";
                        } 
                        
                        if ($jam_matkul != "11:20 - 12:50") {
                            echo "<option value=\"11:20 - 12:50\">11:20 - 12:50</option>";
                        } 
                        
                        if ($jam_matkul != "13:20 - 14:50") {
                            echo "<option value=\"13:20 - 14:50\">13:20 - 14:50</option>";
                        } 
                        
                        if ($jam_matkul != "15:20 - 16:50") {
                            echo "<option value=\"15:20 - 16:50\">15:20 - 16:50</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="ruang" class="form-label">Ruang Kelas</label>
                <input type="integer" class="form-control" name="ruang_matkul" required value=<?php echo $ruang_matkul; ?>>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="view.php" class="btn btn-secondary">Return</a>
        </form>

    </div>
</body>

</html>

<?php

include ('connect.php');

if (isset($_POST['update'])) {
    $kode_matkul =  $_REQUEST['kode_matkul'];
    $nama_matkul = $_REQUEST['nama_matkul'];
    $jam_matkul =  $_REQUEST['jam_matkul'];
    $ruang_matkul = $_REQUEST['ruang_matkul'];
    
    // update user data
    $result = mysqli_query($link, "UPDATE mata_kuliah SET nama_matkul='$nama_matkul',jam_matkul='$jam_matkul',ruang_matkul='$ruang_matkul' WHERE kode_matkul='$kode_matkul'");

    // Redirect to homepage to display updated user in list
    header("Location: view.php");
}

?>