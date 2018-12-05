<html>
<title>Aplikasi CRUD Sederhana</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>

<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p>
				<center>
					<h2>Aplikasi Crud Sederhana</h2>
					Oleh : <a href="#" target="_blank">Mr. Yul Hendra</a>
				</center>
			</p>
			<br>
			<p>
				<a class="btn btn-success" href="tambah.php">Tambah</a>
			</p>
			<table class="table table-bordered">
				<tr>
					<th>
						Kode Barang
					</th>
					<th>
						jnsbrg Barang
					</th>
					<th>
						Tanggal
					</th>
					<th>
						Pengirim
					</th>
					<th>
						pengirim
					</th>
					<th>
						Alamat
					</th>
					<th>
						No Hp
					</th>
					<th>
						Opsi
					</th>
				</tr>
					<?php
						include"koneksi.php";

						$data = mysqli_query ($koneksi, " SELECT
																kode,
																jnsbrg,
																tgl,
																pengirim,
																penerima,
																alamat,
																nohp
														  from
														  pengiriman
														  order by kode ASC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $row['kode']; ?>
					</td>
					<td>
						<?php echo $row['jnsbrg']; ?>
					</td>
					<td>
						<?php echo $row['tgl']; ?>
					</td>
					<td>
						<?php echo $row['pengirim']; ?>
					</td>
					<td>
						<?php echo $row['penerima']; ?>
					</td>
					<td>
						<?php echo $row['alamat']; ?>
					</td>
					<td>
						<?php echo $row['nohp']; ?>
					</td>
					<td>
						<a href="detail.php?id=<?php echo $row['kode']; ?>">Detail</a> |
						<a href="edit.php?id=<?php echo $row['kode']; ?>">Edit</a> |
						<a href="hapus.php?id=<?php echo $row['kode']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
	<p>
	<center>Copyright @ 2018 by : <a href="https://www.facebook.com.pendeta.mokong" target="_blank">Mr. Yul Hendra</a> All rights reserved.</center>
	</p>
</div>
</body>
</html>
