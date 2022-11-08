	<?php
		if (isset($_REQUEST['submit'])) {
			$no_surat		= $_POST['no_surat'];
			$jenis_surat 	= $_POST['jenis_surat'];
			$tanggal_surat	= InggrisTgl($_POST['tanggal_surat']);
			$isi_ringkas	= $_POST['isi_ringkas'];
			$user   		= $_SESSION['fullname'];
			$file     		= $_FILES['file']['name'];
			$tmp 			= $_FILES['file']['tmp_name'];

			$path			= "upload/surat_masuk/".$file;
			if (move_uploaded_file($tmp, $path)) {
				$query 		= "INSERT INTO surat_masuk VALUES('', '$no_surat', '$jenis_surat', '$tanggal_surat',NOW(), '$asal_surat', '$isi_ringkas', '$file', '$user')";
				$sql		= mysqli_query($connect, $query);
			if($sql){
			    echo  '<script language="javascript">
               		  	window.location.href="./index.php?page=surat_masuk";
              		  </script>';  
			}else{
				echo  '<script>
						window.alert("Data gagal disimpan.");
					  </script>';
			}
			}		
		}
	?>	

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Arsip Surat >> Unggah</h3>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<p>Unggah surat yang telah terbit pada form ini untuk diarsipkan. <br>Catatan: <br>* Gunakan file berformat PDF</p>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!--Form tambah surat masuk -->
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">No. Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="no_surat" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>	
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select class="form-control col-md-7 col-xs-12" name="jenis_surat" required="required">
										<option><?php echo $data['jenis_surat'] ?></option>
								        <option>Undangan</option>
								        <option>Pengumuman</option>
								        <option>Nota Dinas</option>
								        <option>Pemberitahuan</option>
							        </select>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Judul<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<textarea name="isi_ringkas" class="form-control col-md-7 col-xs-12" required="required"></textarea>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Surat<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text"  name="tanggal_surat" class="form-control has-feedback-left" id="tanggal">
                               		<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>	
								</div>
							</div>														
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">File Surat (PDF)<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" name="file" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<a href="index.php?page=surat_masuk" class="btn btn-default"></i>Kembali</a>
  									<input type="submit" class="btn btn-success" value="Simpan" name="submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>