<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    <div class="container-fluid">
        <div class="row mt-5">
        </div>
    </div>
    <form method="POST" action="tugas2.php">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="Dasar-Dasar Pemograman">DDP</option>
            <option value="Pemograman Web">PemWeb</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="uts" name="uts" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="uas" name="uas" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
        <input id="tugas" name="tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</body>
</html>