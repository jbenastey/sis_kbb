<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Arsip Surat Keterangan Kebenaran Nama</h4>
			<?= form_open('laporan/skkn') ?>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="exampleInputEmail1">Tanggal pertama</label>
						<input type="date" class="form-control" id="exampleInputEmail1" name="tanggal1" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Tanggal kedua</label>
						<input type="date" class="form-control" id="exampleInputEmail1" name="tanggal2" required>
					</div>
					<a href="<?=base_url()?>" class="btn btn-secondary"> Kembali</a>
					<button type="submit" class="btn btn-primary" name="lihat">Lihat Surat</button>
				</div>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>
