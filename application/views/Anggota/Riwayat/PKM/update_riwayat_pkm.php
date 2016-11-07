		<!--Start Row -->
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				<form class="form-horizontal" id="formRiwayatPKM" method="post">
					<div class="form-group">
						<label class="col-md-3 control-label" for="inputNamaPKM">Nama PKM</label>
						<div class="col-md-9">
							<input name="nama_pkm" class="form-control" id="inputNamaPKM" required="" type="text" placeholder="Nama PKM" value="<?php echo $riwayat_pkm->NAMA_PKM; ?>" autocomplete="off">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputNamaPenyelenggara">Nama Penyelenggara</label>
						<div class="col-md-9">
							<input name="nama_penyelenggara_pkm" class="form-control" id="inputNamaPeyelenggara" required="" type="text" placeholder="Nama Penyelenggara" value="<?php echo $riwayat_pkm->NAMA_PENYELENGGARA_PKM; ?>" autocomplete="off">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputTahunPKM">Tahun PKM</label>
						<div class="col-md-9">
							<input name="tahun_pkm" class="form-control" id="inputPKM" required="" type="text" placeholder="Tahun PKM" value="<?php echo $riwayat_pkm->TAHUN_PKM; ?>" autocomplete="off">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inpuPKMKemahasiswaan">PKM Kemahasiswaan</label>
						<div class="col-md-9">
							<div class="radio">
								<label>
									<input id="radioPKMKemahasiswaan1" name="pkm_kemahasiswaan" required="" type="radio" value=1>
									Ya
								</label>
							</div>
							
							<div class="radio">
								<label>
									<input id="radioPKMKemahasiswaan0" name="pkm_kemahasiswaan" required="" type="radio" value=0>
									Tidak
								</label>
							</div>
							<br>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<?php echo form_submit('', 'Submit', array('class' => 'btn btn-primary')); ?>
						</div>
					</div>

				</form>
			</div>
		</div> <!-- End Row -->
		
	</div>


	<script>
		var idRadio = "radioPKMKemahasiswaan" + "<?php echo $riwayat_pkm->PKM_KEMAHASISWAAN; ?>";
		$("#" + idRadio).prop("checked", true);
	</script>


</body>
</html>