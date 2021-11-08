<html>
<head>
	<title><?=$title?></title>
</head>
<body>
	<h1>DATA BUKU</h1>
	<hr>
	<a href="<?= site_url('buku/tambah')?>">tambah</a>
	<a href="<?= site_url('buku/cetak')?>">cetak</a>

	<table border="1" width="100%">
		<tr>
			<th>No</th>
			<th>gambar_sampul</th>
			<th>judul</th>
            <th>pengarang</th>
            <th>penerbit</th>
			<th>aksi</th>
		</tr>
		<?php foreach ($buku as $row) :?>
					<tr>
						<td><?= $row['id_kategori'] ?></td>				
						<td><img src="<?= base_url() ?>/public/uploads/<?=$row['gambar_sampul']?>" alt="gambar hilang" width="100px"></td>
                        <td><?= $row['judul'] ?></td>
                        <td><?= $row['pengarang'] ?></td>
                        <td><?= $row['penerbit'] ?></td>
						<td>
						<a href="<?=site_url('buku/cetak/'.$row['id_buku'])?>">Cetak</a>
						<a href="<?=site_url('buku/edit/'.$row['id_buku'])?>">Edit</a>
							<a href="<?=site_url('buku/hapus/'.$row['id_buku'])?>">Hapus</a>	</td>					
					</tr>
				<?php endforeach; ?>
	</table>
</body>
</html>