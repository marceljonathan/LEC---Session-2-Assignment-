<?php
require('connect.php');
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
    <div style="margin-left: 25%; padding-right:25%;" class="mt-3">

        <table class="table caption-top" style="text-align: center;">
            <caption>List Data Mata Kuliah</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Matkul</th>
                    <th scope="col">Nama Matkul</th>
                    <th scope="col">Jam Matkul</th>
                    <th scope="col">Ruang Matkul</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM mata_kuliah";
                $result = mysqli_query($link, $sql);
                $a = 1;
                // var_dump(mysqli_num_rows($result));
                if (mysqli_num_rows($result) > 0) {
                    // var_dump(mysqli_num_rows($result) > 0);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<th scope='col'>{$a}</th>";
                        echo "<th scope='col'>{$row['kode_matkul']}</th>";
                        echo "<th scope='col'>{$row['nama_matkul']}</th>";
                        echo "<th scope='col'>{$row['jam_matkul']}</th>";
                        echo "<th scope='col'>{$row['ruang_matkul']}</th>";
                        echo "<td scope='col'><a class=\"btn btn-primary\" href='update.php?kode_matkul=$row[kode_matkul]'>Update</a> | <a class=\"btn btn-danger\" href='delete.php?kode_matkul=$row[kode_matkul]'>Delete</a></th>";
                        echo "</tr>";
                        $a++;
                    }
                }
                ?>
            </tbody>
        </table>

        <a href="../home.php" class="btn btn-secondary">Return</a>
    </div>
</body>

</html>