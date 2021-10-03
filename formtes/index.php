<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wdth=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <h1 class="container">FORMULIR</h1>
    <form method="POST" action="tampil.php" class="container">
        <label>Nama: </label><br>
        <input type="text" name="nama"><br>
        <label>Alamat: </label><br>
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        <input type="submit" value="Submit"><br>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>