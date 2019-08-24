<?php foreach ($skck as $key => $value){ ?>
	<form action="<?php echo base_url('skck/update/'.$value->skck_id); ?>" method="post" style="width: 100%;margin-left: 20%;margin-right: 20%" >
		<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
				</button>
			</div>
			<?= form_open( 'skck/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<div class="form-group">
						<label for="exampleInputEmail1">Nomor Surat</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="nomor_surat" value="<?php echo $value-> skck_nomor ?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Lengkap</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap" value="<?php echo $value-> skck_nama ?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Tanggal Lahir</label>
						<input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_lahir" value="<?php echo $value-> skck_tanggal_lahir ?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Tempat Lahir</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="tempat_lahir" value="<?php echo $value-> skck_tempat_lahir ?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Kewarganegaraan</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="kewarganegaraan" value="<?php echo $value-> skck_wni ?>" required>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<div class="form-radio">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="jenis_kelamin" id="optionsRadios1" value="L"
									   checked>
								Laki-laki
							</label>
						</div>
						<div class="form-radio">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="jenis_kelamin" id="optionsRadios2"
									   value="P">
								Perempuan
							</label>
						</div>
					</div>

					<div class="form-group">
						<label>Agama</label>
						<select class="js-example-basic-single" style="width:100%" name="agama">
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Konghuchu">Konghuchu</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Pekerjaan</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="pekerjaan" value="<?php echo $value-> skck_kerja ?>" required>
					</div>

					<div class="form-group">
						<label>Status</label>
						<div class="form-radio">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="status" id="optionsRadios1"
									   value="Nikah"
									   checked>
								Nikah
							</label>
						</div>
						<div class="form-radio">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="status" id="optionsRadios2"
									   value="Belum Menikah">
								Belum Menikah
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">NIK</label>
						<input type="number" class="form-control" id="exampleInputEmail1" name="nik" value="<?php echo $value-> skck_nik ?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Keperluan</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="keperluan" value="<?php echo $value-> skck_keperluan ?>" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Alamat</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="alamat" value="<?php echo $value-> skck_alamat ?>" required>
					</div>

				</div>


				<div class="modal-footer">
					<button type="submit" class="btn btn-success" name="simpan">Submit</button>
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
				</div>
				<?= form_close() ?>
			</div>
		</div>
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			 aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Masukkan Keterangan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url("skck/tolak_surat")?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label for="">Keterangan</label>
								<textarea name="keterangan" class="form-control" rows="3" placeholder="isi disini ..."></textarea>

							</div>
						</div>


			<div class="modal-footer">
				<button type="submit" class="btn btn-success" name="simpan">Submit</button>
				<a href="<?= base_url('skck') ?>"
				   class="btn btn-small btn-danger" title="Kembali"style="float: right">Back</a>
			</div>
			<?= form_close() ?>
		</div>
	</form>
<?php } ?>
