<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Card Genator</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="assets/js/bootstrap.bundle.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container ">
        <form action="gencard1.php" method="post">
            <div class="mb-3 mt-4"><input type="text" name="nama" placeholder="nama" class="form-control"></div>
            <div class="mb-3"><input type="text" name="jabatan" placeholder="jabatan" class="form-control"></div>
            <div class="mb-3"><input type="text" name="email" placeholder="email" class="form-control"></div>
            <div class="mb-3"><input type="text" name="alamat" placeholder="alamat" class="form-control"></div>
            <div class="mb-3"><input type="text" name="no_tlp" placeholder="no_tlp" class="form-control"></div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>