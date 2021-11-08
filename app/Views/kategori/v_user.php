<html>
<head>
	<title><?=$title?></title>
</head>
<body>
	<h1>DAFTAR KATEGORI</h1>
	<hr>
	<a href="<?= site_url('kategori/tambah')?>">tambah</a>
	<table border="1" width="100%">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Diskripsi</th>
			<th>Aksi</th>
		</tr>
		<?php $i=1; foreach ($kategori as $row) :?>
					<tr>
						<td><?= $i++ ?></td>			
                        <td><?= $row['kategori'] ?></td>
                        <td><?= $row['diskripsi']?></td>
						<td>
							<a href="<?=site_url('kategori/edit/'.$row['id_kategori'])?>">Edit</a>
							<a href="<?=site_url('kategori/hapus/'.$row['id_kategori'])?>">Hapus</a>	
						</td>					
					</tr>
				<?php endforeach; ?>
	</table>
</body>
</html>