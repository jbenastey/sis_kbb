<?php foreach ($akun as $key => $value){ ?>
	<form action="<?php echo base_url('akun/update/'.$value->user_id); ?>" method="post" style="width: 100%;margin-left: 20%;margin-right: 20%" >
		<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
				</button>
			</div>
			<?= form_open( 'surat/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama akun</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="user_name" value="<?php echo $value-> user_name ?>">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Password</label>
					<input type="password" class="form-control" id="exampleInputEmail1" name="user_password" value="">
				</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-success" name="simpan">Submit</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>
			<?= form_close() ?>
		</div
	</form>
<?php } ?>
