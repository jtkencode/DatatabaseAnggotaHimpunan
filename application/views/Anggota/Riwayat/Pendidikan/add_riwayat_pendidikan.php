		<!--Start Row -->
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				<form class="form-horizontal" id="formRiwayatPendidikan" method="post">
					<div class="form-group">
						<label class="col-md-3 control-label" for="inputJenjangPendidikan">Jenjang Pendidikan</label>
						<div class="col-md-9">
							<div class="radio">
								<label>
									<input id="radioJenjangPendidikanD" name="jenjang_pendidikan" required="" type="radio" value="D">
									SD
								</label>
							</div>
							
							<div class="radio">
								<label>
									<input id="radioJenjangPendidikanP" name="jenjang_pendidikan" required="" type="radio" value="P">
									SMP
								</label>
							</div>

							<div class="radio">
								<label>
									<input id="radioJenjangPendidikanA" name="jenjang_pendidikan" required="" type="radio" value="A">
									SMA / SMK
								</label>
							</div>

							<div class="radio">
								<label>
									<input id="radioJenjangPendidikanT" name="jenjang_pendidikan" required="" type="radio" value="T">
									Perguruan Tinggi
								</label>
							</div>
							<br>
						</div>
					</div>

					<input name="no_urut_pendidikan" class="form-control" id="inputNoUrutPendidikan" required="" type="hidden" value="" autocomplete="off">
		

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputNamaInstitusi">Nama Institusi</label>
						<div class="col-md-9">
							<input name="nama_institusi" class="form-control" id="inputNamaInstitusi" required="" type="text" placeholder="Nama Institusi" value="" autocomplete="off">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputTahunMasuk">Tahun Masuk</label>
						<div class="col-md-9">
							<input name="tahun_masuk" class="form-control" id="inputTahunMasuk" required="" type="year" placeholder="Tahun masuk" value="" autocomplete="off" pattern="[0-9]{4,4}" title="Format Tahun : YYYY, contoh : 2016">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputTahunLulus">Tahun Lulus</label>
						<div class="col-md-9">
							<input name="tahun_lulus" class="form-control" id="inputTahunLulus" required="" type="year" placeholder="Tahun lulus" value="" autocomplete="off" pattern="[0-9]{4,4}" title="Format Tahun : YYYY, contoh : 2016">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputBidang">Bidang</label>
						<div class="col-md-9">
							<input name="bidang" class="form-control" id="inputBidang" type="text" placeholder="Bidang" value="" autocomplete="off" disabled="true">
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
		
		<!-- Disable Input Bidang if jenjang SD and SMP -->
		<script type="text/javascript">
			$('#radioJenjangPendidikanD').click(function(){
				$('#inputBidang').prop( "disabled", true );
				$('#inputBidang').val('');
			});
			$('#radioJenjangPendidikanP').click(function(){
				$('#inputBidang').prop( "disabled", true );
				$('#inputBidang').val('');
			});
			$('#radioJenjangPendidikanA').click(function(){
				$('#inputBidang').prop( "disabled", false );
			});
			$('#radioJenjangPendidikanT').click(function(){
				$('#inputBidang').prop( "disabled", false );
			});
		</script>

		
	</div>

</body>
</html>