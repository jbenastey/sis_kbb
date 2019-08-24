<?php foreach ($skb as $key => $value){ ?>
	<form action="<?php echo base_url('skb/update/'.$value->skb_id); ?>" method="post" style="width: 100%;margin-left: 20%;margin-right: 20%" >
		<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
				</button>
			</div>
			<?= form_open( 'skb/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skb_nomor ?>"
						   name="nomor_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Lengkap</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skb_nama ?>"
						   name="nama_lengkap" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tanggal Lahir</label>
					<input type="date" class="form-control" id="exampleInputPassword1" value="<?php echo $value-> skb_tanggal_lahir ?>"
						   name="tanggal_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tempat Lahir</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skb_tempat_lahir ?>"
						   name="tempat_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Kewarganegaraan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skb_wni ?>"
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
						<option value="Islam" <?php if ($value->skb_agama == 'Islam') echo 'selected'?>>Islam</option>
						<option value="Kristen" <?php if ($value->skb_agama == 'Kristen') echo 'selected'?>>Kristen</option>
						<option value="Katolik" <?php if ($value->skb_agama == 'Katolik') echo 'selected'?>>Katolik</option>
						<option value="Hindu" <?php if ($value->skb_agama == 'Hindu') echo 'selected'?>>Hindu</option>
						<option value="Budha" <?php if ($value->skb_agama == 'Budha') echo 'selected'?>>Budha</option>
						<option value="Konghuchu" <?php if ($value->skb_agama == 'Konghuchu') echo 'selected'?>>Konghuchu</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Pekerjaan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skb_kerja ?>"
						   name="pekerjaan" required>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Alamat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $value-> skb_alamat ?>"
						   name="alamat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Jumlah Keluarga</label>
					<input type="text" readonly value="<?=$value->skb_jumlahkeluarga?>"  name="jumlah_keluarga" class="form-control"><br>
<!--					<label for="">Tambah anggota keluarga ?</label>-->
<!--					<div class="row">-->
<!--						<div class="col-10">-->
<!--							<select id="jumlahKeluarga" required class="form-control">-->
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
<!--							<button type="button" id="add" class="btn btn-primary"><i class="fa fa-user-plus"></i></button>-->
<!--						</div>-->
<!--					</div>-->
				</div>
				<div id="skb-dinamis">
					<?php
					foreach ($skb_detail as $key=>$value):
					?>
						<hr>
						<input type="hidden" value="<?=$value['detail_id']?>" name="detail_id">
						<div id="row<?=$key?>">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" placeholder="Nama" value="<?=$value['detail_nama']?>" name="detail_nama[]" required>
								</div>
							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" class="form-control" placeholder="Tempat lahir" value="<?=$value['detail_tempat']?>" name="detail_tempat[]" required>
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
					<form action="<?= base_url("skb/tolak_surat")?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label for="">Keterangan</label>
								<textarea name="keterangan" class="form-control" rows="3" placeholder="isi disini ..."></textarea>

							</div>
						</div>


						<div class="modal-footer">
							<button type="submit" class="btn btn-success" name="simpan">Submit</button>
							<a href="<?= base_url('skb') ?>"
							   class="btn btn-small btn-danger" title="Kembali"style="float: right">Back</a>
						</div>
						<?= form_close() ?>
				</div>
	</form>
<?php } ?>
