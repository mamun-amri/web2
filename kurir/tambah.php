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
					Oleh : <a href="#" target="_blank">Mr.Yul Hendra</a>
				</center>
			</p>
			<br>

                                    <form role="form" method="post" action="input.php">
                                        <div class="form-group">
                                            <label>kode</label>
																						<select class="form-control" name="kode">
																							<option>D</option>
																							<option>M</option>
																							<option>P</option>
																						</select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Barang</label>
																						<select class="form-control" name="jnsbrg">
																							<option>Dokument</option>
																							<option>Makanan</option>
																							<option>Pakaian</option>
																						</select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tgl">
                                        </div>
                                        <div class="form-group">
                                            <label>pengirim</label>
                                            <input class="form-control" name="pengirim">
                                        </div>
                                        <div class="form-group">
                                            <label>penerima</label>
                                            <input class="form-control" name="penerima">
                                        </div>
																				<div class="form-group">
                                            <label>No Hp</label>
                                            <input class="form-control" name="nohp">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                        <a href="index.php" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
                                    </form>
		</div>
	</div>
	<p>
	<center>Copyright @ 2018 by : <a href="#" target="_blank">Mr.Yul Hendra</a> All rights reserved.</center>
	</p>
</div>
</body>
</html>
