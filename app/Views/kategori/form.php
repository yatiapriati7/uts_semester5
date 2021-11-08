<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
    <form action="<?= $link ?>" method="post">
        <table>
            <tr>
                <td>Kategori</td>
                <td> : <input type="text" name="kategori" value="<?= $kategori['kategori']??"" ?>" required></td>
            </tr>
            <tr>
                <td>Diskripsi</td>
                <td> : <input type="text" name="diskripsi" value="<?= $kategori['kategori']??"" ?>" required></td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
    
</body>
</html>