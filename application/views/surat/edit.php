<?php foreach ($surat as $key => $value){ ?>
<form action="<?php echo base_url('surat/update/'.$value->surat_id); ?>" method="post" style="width: 100%;margin-left: 20%;margin-right: 20%" >
		<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
				</button>
			</div>
			<?= form_open( 'surat/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="nomor_surat" value="<?php echo $value-> surat_nomor ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tanggal Surat</label>
					<input type="date" class="form-control" id="exampleInputEmail1" name="tanggal_surat" value="<?php echo $value-> surat_tanggal ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Lampiran</label>
					<input type="number" class="form-control" id="exampleInputPassword1" name="lampiran"value="<?php echo $value-> surat_lampiran?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Agenda</label>
					<input type="number" class="form-control" id="exampleInputEmail1" name="nomor_agenda"value="<?php echo $value-> surat_nomoragenda?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Dari</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="dari" value="<?php echo $value-> surat_dari?>" >
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Perihal</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="perihal" value="<?php echo $value-> surat_perihal?>" >
				</div>
				<div class="form-group">
					<label>Status</label>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="Asli" checked>
							Asli
						</label>
					</div>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="status" id="optionsRadios2" value="Tembusan">
							Tembusan
						</label>
					</div>
				</div>
				<div class="form-group">
					<label>Sifat</label>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="sifat" id="optionsRadios1" value="Penting" checked>
							Penting
						</label>
					</div>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="sifat" id="optionsRadios2" value="Rahasia">
							Rahasia
						</label>
					</div>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="sifat" id="optionsRadios2" value="Biasa">
							Biasa
						</label>
					</div>
				</div>
			</div>


			<div class="modal-footer">
				<button type="submit" class="btn btn-success" name="simpan">Submit</button>
				<a href="<?= base_url('surat') ?>"
				   class="btn btn-small btn-danger" title="Kembali"style="float: right">Back</a>
			</div>
			<?= form_close() ?>
</div
</form>
<?php } ?>
