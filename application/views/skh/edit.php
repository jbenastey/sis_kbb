<?php foreach ($skh as $key => $value){ ?>
	<form action="<?php echo base_url('skh/update/'.$value->skh_id); ?>" method="post" style="width: 100%;margin-left: 20%;margin-right: 20%" >
		<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
				</button>
			</div>
			<?= form_open( 'skh/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skh_nomor ?>"
						   name="nomor_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Lengkap</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skh_nama ?>"
						   name="nama_lengkap" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tanggal Lahir</label>
					<input type="date" class="form-control" id="exampleInputPassword1" value="<?php echo $value-> skh_tanggal_lahir ?>"
						   name="tanggal_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tempat Lahir</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skh_tempat_lahir ?>"
						   name="tempat_lahir" required>
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
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skh_kerja ?>"
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
					<input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skh_nik ?>"
						   name="nik" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Barang Hilang</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skh_baranghilang ?>"
						   name="barang_hilang" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Keterangan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skh_keterangan ?>"
						   name="keterangan" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skh_alamat ?>"
						   name="alamat" required>
				</div>

			</div>


			<div class="modal-footer">
				<button type="submit" class="btn btn-success" name="simpan">Submit</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>
						<?= form_close() ?>
				</div>
	</form>
<?php } ?>
