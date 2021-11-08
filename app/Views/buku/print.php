<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
    <table>
        <tr>
            <td>Gambar</td>
            <td> : <?= $buku['gambar_sampul'] ?></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td> : <?= $buku['judul'] ?></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td> : <?= $buku['pengarang'] ?></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td> : <?= $buku['penerbit'] ?></td>
        </tr>
    </table>
    <script>
        window.print()
    </script>
</body>
</html>