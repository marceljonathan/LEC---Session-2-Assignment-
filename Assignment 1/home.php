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

    <div style="margin-right: 25%; margin-left: 25%" class="mt-2">
        <div class="text-left" style="padding-top: .5rem; padding-bottom: .5rem; font-size: 20px; font-weight: bold; text-align: center;">Form Penambahan Mata Kuliah</div>

        <form class="mt-1" action="Request/create.php" method="POST">
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control" id="kode" name="kode" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mata Kuliah</label>
                <input type=text"" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Jam Mata Kuliah</label>
                <select class="form-select" aria-label="Default select example" id="jam" name="jam" required>
                    <option selected>Select</option>
                    <option value="07:20 - 08:50">07:20 - 08:50</option>
                    <option value="09:20 - 10:50">09:20 - 10:50</option>
                    <option value="11:20 - 12:50">11:20 - 12:50</option>
                    <option value="13:20 - 14:50">13:20 - 14:50</option>
                    <option value="15:20 - 16:50">15:20 - 16:50</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ruang" class="form-label">Ruang Kelas</label>
                <input type="integer" class="form-control" id="ruang" name="ruang" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="Request/view.php" class="btn btn-secondary">View Data</a>
        </form>

    </div>
</body>

</html>