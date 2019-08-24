<?php foreach ($ktps as $key => $value){ ?>
	<form action="<?php echo base_url('ktps/update/'.$value->ktps_id); ?>" method="post" style="width: 100%;margin-left: 20%;margin-right: 20%" >
		<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
				</button>
			</div>
			<?= form_open( 'ktps/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ktps_nomor ?>"
						   name="nomor_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Lengkap</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ktps_nama ?>"
						   name="nama_lengkap" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tanggal Lahir</label>
					<input type="date" class="form-control" id="exampleInputPassword1" value="<?php echo $value-> ktps_tanggal_lahir ?>"
						   name="tanggal_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tempat Lahir</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ktps_tempat_lahir ?>"
						   name="tempat_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Kewarganegaraan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ktps_wni ?>"
						   name="kewarganegaraan" required>
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
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ktps_kerja ?>"
						   name="pekerjaan" required>
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
					<input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ktps_nik ?>"
						   name="nik" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ktps_alamat ?>"
						   name="alamat" required>
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
					<form action="<?= base_url("ktps/tolak_surat")?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label for="">Keterangan</label>
								<textarea name="keterangan" class="form-control" rows="3" placeholder="isi disini ..."></textarea>

							</div>
						</div>


						<div class="modal-footer">
							<button type="submit" class="btn btn-success" name="simpan">Submit</button>
							<a href="<?= base_url('ktps') ?>"
							   class="btn btn-small btn-danger" title="Kembali"style="float: right">Back</a>
						</div>
						<?= form_close() ?>
				</div>
	</form>
<?php } ?>
