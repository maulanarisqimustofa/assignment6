<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h4>Hello!!!</h4>
    Welcome to my first Laravel Project, prodi kita:
    <?php if(!empty($namaprodi)):?>
    <ul>
        <?php foreach($namaprodi as $prodi):?>
        <li><?= $prodi;?></li>
        <?php endforeach; ?>
    </ul>
    <?php else:?>
        <p>Tidak Memiliki Prodi</p>
        <?php endif ?>
</body>
</html>