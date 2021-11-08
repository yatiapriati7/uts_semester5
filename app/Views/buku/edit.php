<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
    <form action="<?= $link ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Gambar</td>
                <td> : <input type="file" name="gambar_sampul"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td> : <input type="text" name="judul" value="<?= $buku['judul']??"" ?>" required></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td> : <input type="text" name="pengarang" value="<?= $buku['pengarang']??"" ?>" required></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td> : <input type="text" name="penerbit" value="<?= $buku['penerbit']??"" ?>" required></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td> : 
                    <select name="id_kategori" id="id_kategori" required>
                        <option value="<?= $buku['id_kategori']??"" ?>"><?= $buku['kategori']??"Pilih Kategori" ?></option>
                        <?php foreach($kategori as $k):?>
                            <option value="<?= $k->id_kategori ?>"><?= $k->kategori ?></option>
                            <?php endforeach;?>
                </select>
            </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
    
</body>
</html>