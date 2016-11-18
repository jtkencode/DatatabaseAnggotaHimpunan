		<!--Start Row -->
		<div class="row">
		<?php if (isset($success)) : ?>
			<div class="alert alert-dismissible alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong><?php echo $success; ?></strong>
			</div>
		<?php endif; ?>
			<div class="col-md-9 col-md-offset-1">
				<form class="form-horizontal" id="formRiwayatOrganisasi" method="post">
					<div class="form-group">
						<label class="col-md-3 control-label" for="inputNoHp">No. Hp</label>
						<div class="col-md-9">
							<input name="no_hp" class="form-control" id="inputNoHp" required="" type="text" placeholder="No Handphone" value="" autocomplete="off">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputEmailPolban">Email Polban</label>
						<div class="col-md-9">
							<input name="email_polban" class="form-control" id="inputEmailPolban" required="" type="text" placeholder="Alamat Email Polban" value="" autocomplete="off">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="inputEmailPribadi">Email Pribadi</label>
						<div class="col-md-9">
							<input name="email_pribadi" class="form-control" id="inputEmailPribadi" required="" type="text" placeholder="Alamat Email Pribadi" value="" autocomplete="off">
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

</body>
</html>