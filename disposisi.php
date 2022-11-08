<?php
	if ($_SESSION['level']== 'user') {
		echo '<script> 
				window.alert("Anda tidak memiliki hak akses ke halaman ini.");
				window.location.href="./logout.php";
			  </script>';
	}

	$id_surat = $_REQUEST['id'];
	$query	= "SELECT * FROM surat_masuk WHERE id='$id_surat'";
	$sql	= mysqli_query($connect, $query);
	$data	= mysqli_fetch_array($sql);
					
?>

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Arsip Surat >> Lihat</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Arsip Surat</h2>&nbsp; &nbsp;
						<a href="index.php?page=surat_masuk" class="btn btn-default btn-sm"></i>Kembali</a>
						<a href="cetak_disposisi.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm" type="submit" target="_blank" name="cetak">Unduh</a>
						<a href="index.php?page=edit_disposisi&id=<?php echo $id_surat ?>&id_disp=<?php echo $row['id_disp'] ?>" class="btn btn-primary btn-sm">Edit / Ganti File</a>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
						<div class="bs-example-popovers">
							<div class="alert alert-success alert-dismissible fade-in" role="alert">
								<h2><strong>Perihal Surat :</strong></h2>								
								<p><?php echo $data['isi_ringkas']; ?></p>
								<h2><strong>No. Surat :</strong></h2>								
								<p><?php echo $data['no_surat']; ?></p>
								<h2><strong>Kategori :</strong></h2>								
								<p><?php echo $data['jenis_surat']; ?></p>
								<h2><strong>Waktu Unggah :</strong></h2>								
								<p><?php echo $data['tanggal_surat']; ?></p>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>