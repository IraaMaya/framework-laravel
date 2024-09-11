<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilan Route Post</title>
</head>
<body>
    <h1>Pendataan Siswi</h1>
    <form action="form/hasil" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        Nama:
        <input type="text" name="nama"> <br>
        <br>
        Kelas:
        <input type="text" name="kelas"> <br>
        <br>
        Jurusan:
        <input type="text" name="jurusan"> <br>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>