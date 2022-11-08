
	<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3>Arsip Surat</h3>
 			</div>
 		</div>
 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
 						<a href="index.php?page=tambah_surat_masuk" class="btn btn-primary btn-sm"></i>Arsipkan Surat</a>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<table id="surat_masuk" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 13px;">
 									<th width="1" style="vertical-align: middle;">Nomor</th>
 									<th><center>No. Surat</center></th>
 									<th><center>Kategori</center></th>
 									<th><center>Judul,<br> File</center></th>
 									<th width="3"><center>Waktu Pengarsipan</center></th>
 									<th style="vertical-align: middle;"><center>Aksi</center></th>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no=1;
 										$query	= "SELECT * FROM surat_masuk";
 										$sql	= mysqli_query($connect, $query);
 									    while ($data= mysqli_fetch_array($sql)){
 									?>
 									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
 									<td style="vertical-align: middle;"><?php echo $data['no_surat'] ?></td>
 									<td style="vertical-align: middle;"><?php echo $data['jenis_surat']; ?></td>
 									<td style="vertical-align: middle;"><?php echo $data['isi_ringkas'] ?><br> <b>FILE :</b>
 										<a href="upload/surat_masuk/<?php echo $data['file']?>" class="btn btn-default btn-xs fa fa-download">&nbsp;<?php echo $data['file'];?></a></td>
 									<td style="vertical-align: middle;"><?php echo IndonesiaTgl($data['tanggal_surat']) ?></td>
 									<td>
 										<center>
 											<a href="index.php?page=hapus_surat_masuk&id=<?php echo $data['id'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
 											<?php  if($_SESSION['level']== 'admin') {?>
 											<a href="cetak_disposisi.php?id=<?php echo $data['id']; ?>" class="btn btn-warning" title="Unduh" type="submit" target="_blank" name="cetak"><i class="fa fa-download"></i></a>
 											<a href="index.php?page=disposisi&id=<?php echo $data['id'] ?>" class="btn btn-success" title="Lihat"><i class="fa fa-file-text-o"></i></a>
 											<?php } ?>
 										</center>
 									</td>
 								</tr>
 								<?php } ?>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>