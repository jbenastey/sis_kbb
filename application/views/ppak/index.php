<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Permhonan Pindah Antar Kabupaten</h4>
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
								<th>Nomor KK</th>
								<th>Nomor Kepala Keluarga</th>
								<th>Alamat Sekarang</th>
								<th>Alamat Tujuan</th>
								<th>Alasan Pindah</th>
								<th>Status Surat</th>
								<th>Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							foreach ($ppak as $key => $value):
								if ($this->session->userdata('session_level') == 'Pegawai') :
									?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $value['ppak_nomor'] ?></td>
										<td><?= $value['ppak_nokk'] ?></td>
										<td><?= $value['ppak_namakepala'] ?></td>
										<td><?= $value['ppak_alamat_sekarang'] ?></td>
										<td><?= $value['ppak_alamat_tujuan'] ?></td>
										<td><?= $value['ppak_alasanpindah'] ?></td>
										<td>
											<?php
											if ($value['ppak_disposisi'] == null):
												?>
												<div class="badge badge-warning">Tunggu</div>
											<?php
											elseif ($value['ppak_disposisi'] == 'Setuju'):
												?>
												<div class="badge badge-success">Setuju</div>
											<?php
											endif
											?>
										</td>
										<td><a href="<?=base_url('ppak/lihat/'.$value['ppak_id'])?>"
											   class="btn btn-small btn-primary"
											   title="Lihat"><i
													class="fa fa-eye"></i></a>
											<?php
											if ($value['ppak_disposisi'] == null):
											?>
											<a href="<?= base_url('ppak/edit/'.$value['ppak_id']) ?>"
											   class="btn btn-small btn-success" title="Edit"><i
													class="fa fa-pencil"></i></a>
											<a href="<?= base_url('ppak/hapus/'.$value['ppak_id']) ?>"
											   class="btn btn-small btn-danger"
											   onclick="return confirm('Apakah anda yakin ingin menghapus?')"
											   title="Hapus"><i
													class="fa fa-trash-o"></i></a></tr>
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
											<td><?= $value['ppak_nomor'] ?></td>
											<td><?= $value['ppak_nokk'] ?></td>
											<td><?= $value['ppak_namakepala'] ?></td>
											<td><?= $value['ppak_alamat_sekarang'] ?></td>
											<td><?= $value['ppak_alamat_tujuan'] ?></td>
											<td><?= $value['ppak_alasanpindah'] ?></td>
											<td>
												<?php
												if ($value['ppak_disposisi'] == null):
													?>
													<div class="badge badge-warning">Tunggu</div>
												<?php
												elseif ($value['ppak_disposisi'] == 'Setuju'):
													?>
													<div class="badge badge-success">Setuju</div>
												<?php
												endif
												?>
											</td>
											<td><a href="<?=base_url('ppak/lihat/'.$value['ppak_id'])?>"
												   class="btn btn-small btn-primary"
												   title="Lihat"><i
														class="fa fa-eye"></i></a>

												<?php
												if ($this->session->userdata('session_level') == 'Penghulu'):
												if ($value['ppak_disposisi'] == null):
												?>
												<a href="<?= base_url('ppak/setuju/' . $value['ppak_id']) ?>"
												   class="btn btn-small btn-success " title="Setuju">
													<i class="fa fa-check"></i></a>
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
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Surat</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('ppak/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor Surat"
						   name="nomor_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor KK</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Nomor KK"
						   name="nomor_kk" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Kepala Keluarga</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kepala Keluarga"
						   name="kepala_keluarga" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat Sekarang</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Sekarang"
						   name="alamat_sekarang" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat Tujuan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Tujuan"
						   name="alamat_tujuan" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alasan Pindah</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alasan Pindah"
						   name="alasan_pindah" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Jenis Pindah</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jenis Pindah"
						   name="jenis_pindah" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Status KK Pindah</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Status KK Pindah"
						   name="status_kkpindah" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Status KK Tidak Pindah</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Status KK Tidak Pindah"
						   name="status_kktidakpindah" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Jumlah Pindah</label>
					<div class="row">
						<div class="col-10">
							<select name="jumlah_pindah" id="jumlahPindah" required class="form-control">
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
							<button type="button" id="addPindah" class="btn btn-primary"><i class="fa fa-user-plus"></i></button>
						</div>
					</div>
				</div>
				<div id="ppak-dinamis">

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
			<form action="<?= base_url("ppak/tolak_surat")?>" method="post">
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

