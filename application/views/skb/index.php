<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Keterangan Berdomisili</h4>
			<div class="row">
				<?php
				if ($this->session->flashdata('alert') == 'gagal_upload_foto'):
					?>
					<div class="alert alert-danger animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Isi Data Dengan Lengkap
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_buat_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Dibuat
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_menghapus_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Dihapus
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_edit_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Dibuat
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_disposisi_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Didisposisi
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_menolak_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Ditolak
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'berhasil_simpan_surat'):
					?>
					<div class="alert alert-success animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Surat Berhasil Disimpan
					</div>
				<?php
				elseif ($this->session->flashdata('alert') == 'gagal_upload_dokumen'):
					?>
					<div class="alert alert-danger animated fadeInDown" id="feedback" role="alert" style="width: 100%;">
						<button type="button" class="close" data-dismiss="alert">x</button>
						Dokumen Gagal Upload
					</div>
				<?php
				endif;
				?>
				<div class="col-12">
					<div class="table-responsive">
						<table id="order-listing" class="table">
							<?php
							if ($this->session->userdata('session_level') == 'Pegawai'):
								?>
								<button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
										data-target="#exampleModal" style="float: right" name="tambah_surat">Tambah Surat
								</button>
							<?php
							endif;
							?>
							<thead>
							<tr>
								<th>No</th>
								<th>Nomor Surat</th>
								<th>Nama Surat</th>
								<th>Tanggal Lahir</th>
								<th>Tempat Lahir</th>
								<th>Kewarganegaraan</th>
								<th>Jenis Kelamin</th>
								<th>Status Surat</th>
								<th>Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							foreach ($skb as $key => $value):
								if ($this->session->userdata('session_level') == 'Pegawai'):
									?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $value['skb_nomor'] ?></td>
										<td><?= $value['skb_nama'] ?></td>
										<td><?= $value['skb_tanggal_lahir'] ?></td>
										<td><?= $value['skb_tempat_lahir'] ?></td>
										<td><?= $value['skb_wni'] ?></td>
										<td><?= $value['skb_jk'] ?></td>
										<td>
											<?php
											if ($value['skb_disposisi'] == null):
												?>
												<div class="badge badge-warning">Tunggu</div>
											<?php
											elseif ($value['skb_disposisi'] == 'Setuju'):
												?>
												<div class="badge badge-success">Setuju</div>
											<?php
											endif
											?>
										</td>
										<td><a href="<?=base_url('skb/lihat/'.$value['skb_id'])?>"
											   class="btn btn-small btn-primary"
											   title="Lihat"><i
													class="fa fa-eye"></i>Lihat</a>
											<?php
											if ($value['skb_disposisi'] == null):
											?>
											<a href="<?= base_url('skb/edit/' . $value['skb_id']) ?>"
											   class="btn btn-small btn-success" title="Edit"><i
													class="fa fa-pencil"></i>Edit</a>
											<a href="<?= base_url('skb/hapus/'.$value['skb_id']) ?>"
											   class="btn btn-small btn-danger"
											   onclick="return confirm('Apakah anda yakin ingin menghapus?')"
											   title="Hapus"><i
													class="fa fa-trash-o"></i>Delete</a></tr>
											<?php
											endif
									?>
									<?php
									$no++;
								else:
									if ($this->session->userdata('session_level') == 'Penghulu'):
										?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $value['skb_nomor'] ?></td>
											<td><?= $value['skb_nama'] ?></td>
											<td><?= $value['skb_tanggal_lahir'] ?></td>
											<td><?= $value['skb_tempat_lahir'] ?></td>
											<td><?= $value['skb_wni'] ?></td>
											<td><?= $value['skb_jk'] ?></td>
											<td>
												<?php
												if ($value['skb_disposisi'] == null):
													?>
													<div class="badge badge-warning">Tunggu</div>
												<?php
												elseif ($value['skb_disposisi'] == 'Setuju'):
													?>
													<div class="badge badge-success">Setuju</div>
												<?php
												endif
												?>
											</td>
											<td><a href="<?=base_url('skb/lihat/'.$value['skb_id'])?>"
												   class="btn btn-small btn-primary"
												   title="Lihat"><i
														class="fa fa-eye"></i>Lihat</a>

												<?php
												if ($this->session->userdata('session_level') == 'Penghulu'):
													if ($value['skb_disposisi'] == null):
														?>
														<a href="<?= base_url('skb/setuju/' . $value['skb_id']) ?>"
														   class="btn btn-small btn-success " title="Setuju">
															<i class="fa fa-check"></i>Setuju</a>
													<?php
													endif;
												endif;
												?>

											</td>
										</tr>
										<?php

										$no++;
									endif;
								endif;

							endforeach;
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Surat</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('skb/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor Surat"
						   name="nomor_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Lengkap</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap"
						   name="nama_lengkap" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tanggal Lahir</label>
					<input type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir"
						   name="tanggal_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tempat Lahir</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir"
						   name="tempat_lahir" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Kewarganegaraan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kewarganegaraan"
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
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan"
						   name="pekerjaan" required>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Alamat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat"
						   name="alamat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Jumlah Keluarga</label>
					<div class="row">
						<div class="col-10">
							<select name="jumlah_keluarga" id="jumlahKeluarga" required class="form-control">
								<option selected disabled></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
						</div>
						<div class="col-2">
							<button type="button" id="add" class="btn btn-primary"><i class="fa fa-user-plus"></i></button>
						</div>
					</div>
				</div>
				<div id="skb-dinamis">

				</div>

			</div>


			<div class="modal-footer">
				<button type="submit" class="btn btn-success" name="simpan">Submit</button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
			</div>
			<?= form_close() ?>
		</div>
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
					<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
				</div>
				<input type="text" id="id_surat" name="id" required readonly style="background: transparent;width: 1px;height: 1px">
			</form>
		</div>
	</div>
</div>

