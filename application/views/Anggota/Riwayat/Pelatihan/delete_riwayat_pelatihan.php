		<!--Start Row -->
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title text-center"><strong>Apakah anda yakin akan menghapus data berikut ?</strong></h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<th>Nama Pelatihan</th>
								<th>Nama Penyelenggara</th>
								<th>Tahun Pelatihan</th>
								<th>Pelatihan Kemahasiswaan</th>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $riwayat_pelatihan->NAMA_PELATIHAN; ?></td>
									<td><?php echo $riwayat_pelatihan->NAMA_PENYELENGGARA_PELATIHAN; ?></td>
									<td><?php echo $riwayat_pelatihan->TAHUN_PELATIHAN; ?></td>
									<td><?php echo $riwayat_pelatihan->PELATIHAN_KEMAHASISWAAN; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				
					<div class="panel-footer text-right">
						<form method="post">
							<a href="<?php echo site_url('anggota');?>" class="btn btn-success">Batal</a>
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</div>
			</div>
		</div> <!-- End Row -->
		
	</div>

</body>
</html>