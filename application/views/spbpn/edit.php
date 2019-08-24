<?php foreach ($spbpn as $key => $value){ ?>
	<form action="<?php echo base_url('spbpn/update/'.$value->spbpn_id); ?>" method="post" style="width: 100%;margin-left: 20%;margin-right: 20%" >
		<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
				</button>
			</div>
			<?= form_open( 'spbpn/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputPassword1">Nama Lengkap</label>
					<input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $value-> spbpn_nama ?>"
						   name="nama_lengkap" required>
				<div class="form-group">
					<label for="exampleInputPassword1">Tanggal Lahir</label>
					<input type="date" class="form-control" id="exampleInputPassword1" value="<?php echo $value-> spbpn_tanggal_lahir ?>"
						   name="tanggal_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tempat Lahir</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> spbpn_tempat_lahir ?>"
						   name="tempat_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Kewarganegaraan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> spbpn_wni ?>"
						   name="kewarganegaraan" required>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Pekerjaan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> spbpn_kerja ?>"
						   name="pekerjaan" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor KK</label>
					<input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> spbpn_nokk ?>"
						   name="nokk" required>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">NIK</label>
					<input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> spbpn_nik ?>"
						   name="nik" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> spbpn_alamat ?>"
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
