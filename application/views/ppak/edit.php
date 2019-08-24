<?php foreach ($ppak as $key => $value){ ?>
	<form action="<?php echo base_url('ppak/update/'.$value->ppak_id); ?>" method="post" style="width: 100%;margin-left: 20%;margin-right: 20%" >
		<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
				</button>
			</div>
			<?= form_open( 'ppak/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ppak_nomor ?>"
						   name="nomor_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor KK</label>
					<input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ppak_nokk ?>"
						   name="nomor_kk" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Kepala Keluarga</label>
					<input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $value-> ppak_namakepala ?>"
						   name="kepala_keluarga" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat Sekarang</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ppak_alamat_sekarang ?>"
						   name="alamat_sekarang" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat Tujuan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ppak_alamat_tujuan ?>"
						   name="alamat_tujuan" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alasan Pindah</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ppak_alasanpindah ?>"
						   name="alasan_pindah" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Jenis Pindah</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ppak_jenispindah ?>"
						   name="jenis_pindah" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Status KK Pindah</label>
					<input type="text" class="form-control" id="exampleInputEmail1"value=" <?php echo $value-> ppak_statuskkpindah ?>"
						   name="status_kkpindah" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Status KK Tidak Pindah</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> ppak_statuskktidakpindah ?>"
						   name="status_kktidakpindah" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Jumlah Pindah</label>
					<input type="text" readonly value="<?=$value->ppak_jumlah_pindah?>"  name="jumlah_pindah" class="form-control"><br>
<!--					<div class="row">-->
<!--						<div class="col-10">-->
<!--							<select name="jumlah_pindah" id="jumlahPindah" required class="form-control">-->
<!--								<option selected disabled></option>-->
<!--								<option value="1">1</option>-->
<!--								<option value="2">2</option>-->
<!--								<option value="3">3</option>-->
<!--								<option value="4">4</option>-->
<!--								<option value="5">5</option>-->
<!--								<option value="6">6</option>-->
<!--								<option value="7">7</option>-->
<!--							</select>-->
<!--						</div>-->
<!--						<div class="col-2">-->
<!--							<button type="button" id="addPindah" class="btn btn-primary"><i class="fa fa-user-plus"></i></button>-->
<!--						</div>-->
<!--					</div>-->
				</div>
				<div id="ppak-dinamis">
					<?php
					foreach ($ppak_detail as $key=>$value):
						?>
						<hr>
						<input type="hidden" value="<?=$value['detail_id']?>" name="detail_id">
						<div id="row<?=$key?>">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" placeholder="Nama" value="<?=$value['detail_nama']?>" name="detail_nama[]" required>
							</div>
							<div class="form-group">
								<label>NIK</label>
								<input type="text" class="form-control" placeholder="NIK" value="<?=$value['detail_nik']?>" name="detail_nik[]" required>
							</div>
							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" class="form-control" placeholder="Tempat lahir" value="<?=$value['detail_tempat_lahir']?>" name="detail_tempat[]" required>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" class="form-control" placeholder="Tanggal Lahir" value="<?=$value['detail_tanggal_lahir']?>" name="detail_tanggal_lahir[]" required>
							</div>
							<div class="form-group">
								<label>SHDK</label>
								<input type="text" class="form-control" placeholder="SHDK" value="<?=$value['detail_shdk']?>" name="detail_shdk[]" required>
							</div>
						</div>
					<?php
					endforeach;
					?>
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
