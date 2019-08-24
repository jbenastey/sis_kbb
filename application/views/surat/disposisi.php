<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Disposisi Surat</h4>
			<?= form_open('surat/disposisi/'.$id) ?>
			<div class="form-group">
				<label>Tujuan Disposisi</label>
				<select class="js-example-basic-single" style="width:100%" name="tujuan_disposisi">
					<option value="Kasubag TU">Kasubag TU</option>
					<option value="Kasi Penmad">Kasi Penmad</option>
					<option value="Kasi Bimas Islam">Kasi Bimas Islam</option>
					<option value="Kasi PD Pontren">Kasi PD Pontren</option>
					<option value="Kasi PHU">Kasi PHU</option>
					<option value="Kasi PAI">Kasi PAI</option>
					<option value="Penyelenggara Syari'ah">Penyelenggara Syari'ah</option>
					<option value="Pengawas">Pengawas</option>
					<option value="Analisis Kepegawaian">Analisis Kepegawaian</option>
					<option value="Perencana">Perencana</option>
					<option value="Bendahara">Bendahara</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleTextarea1">Catatan Kepala</label>
				<textarea class="form-control" id="exampleTextarea1" rows="2" name="catatan"></textarea>
			</div>
			<button type="submit" class="btn btn-primary" name="Kirim" style="float: right;">Kirim</button>
		<?= form_close() ?>
		</div>
	</div>
</div>
