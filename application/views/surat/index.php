<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Masuk</h4>
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

								<th>Nomor Agenda</th>
								<th>Dari</th>
								<th>Perihal</th>
								<th>Status</th>
								<th>Sifat</th>
								<?php
								if ($this->session->userdata('session_level') != 'Pegawai' && $this->session->userdata('session_level') != 'Penghulu'):
									?>
									<th>Catatan</th>
								<?php
								endif;
								?>
								<?php
								if ($this->session->userdata('session_level') == 'Pegawai' || $this->session->userdata('session_level') == 'Penghulu'):
									?>
									<th>Disposisi</th>
									<th>Keterangan</th>
								<?php
								endif;
								?>
								<th>Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							foreach ($surat as $key => $value):
								if ($this->session->userdata('session_level') == 'Pegawai' || $this->session->userdata('session_level') == 'Penghulu'):
									?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $value['surat_nomor'] ?></td>
										<td><?= $value['surat_nomoragenda'] ?></td>
										<td><?= $value['surat_dari'] ?></td>
										<td><?= $value['surat_perihal'] ?></td>
										<td><?= $value['surat_status'] ?></td>
										<td><?= $value['surat_sifat'] ?></td>

										<td>
											<?php
											if ($value['surat_disposisi'] == null):
												?>
												<div class="badge badge-warning">Tunggu</div>
											<?php
											elseif ($value['surat_disposisi'] == 'Tolak'):
												?>
												<div class="badge badge-danger">Ditolak</div>
											<?php
											elseif ($value['surat_disposisi'] == 'Jawab'):
												?>
												<div class="badge badge-success">Dijawab</div>
											<?php
											elseif ($value['surat_disposisi'] == 'Simpan'):
												?>
												<div class="badge badge-primary">Disimpan</div>
											<?php
											endif
											?>
										</td>
										<td><?= $value['surat_keterangan'] ?></td>
										<td>
											<a href="<?= base_url('surat/lihat/' . $value['surat_id']) ?>"
											   class="btn btn-small btn-primary" title="Lihat"><i
													class="fa fa-eye"></i></a>

											<?php
											if ($this->session->userdata('session_level') == 'Pegawai'):
												if ($value['surat_disposisi'] == null):
													?>
													<a href="<?= base_url('surat/edit/' . $value['surat_id']) ?>"
													   class="btn btn-small btn-success" title="Edit"><i
															class="fa fa-pencil"></i></a>
													<a href="<?= base_url('surat/hapus/' . $value['surat_id']) ?>"
													   class="btn btn-small btn-danger"
													   onclick="return confirm('Apakah anda yakin ingin menghapus?')"
													   title="Hapus"><i
															class="fa fa-trash-o"></i></a>
												<?php
												endif;
											elseif ($this->session->userdata('session_level') == 'Penghulu'):
												if ($value['surat_disposisi'] == null):
													?>
													<a href="<?= base_url('surat/disposisi/' . $value['surat_id']) ?>"
													   class="btn btn-small btn-success " title="Setuju"
													   onclick="return confirm('Silahkan Isi Form Disposisi')"><i
															class="fa fa-check"></i></a>
													<a href="#"
													   class="btn btn-small btn-danger tolak-action" data-isi = "<?= $value['surat_id']?>" data-toggle="modal"
													   data-target="#exampleModal1" title="Ditolak"><i
															class="fa fa-ban"></i></a>
													<a href="<?= base_url('surat/simpan_surat/' . $value['surat_id']) ?>"
													   class="btn btn-small btn-outline-primary" title="Disimpan"><i
															class="fa fa-save"></i></a>
												<?php
												endif;
											endif;
											?>
										</td>

									</tr>
									<?php
								$no++;
								else:
									if ($this->session->userdata('session_level') == $value['surat_tujuan_disposisi']):
										?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $value['surat_nomor'] ?></td>
											<td><?= $value['surat_lampiran'] ?></td>
											<td><?= $value['surat_dari'] ?></td>
											<td><?= $value['surat_perihal'] ?></td>
											<td><?= $value['surat_status'] ?></td>
											<td><?= $value['surat_sifat'] ?></td>
											<td><?= $value['surat_catatan'] ?></td>
											<td>
												<a href="<?= base_url('surat/lihat/' . $value['surat_id']) ?>"
												   class="btn btn-small btn-primary" title="Lihat"><i
														class="fa fa-eye"></i></a>

												<a href="<?= base_url('surat_keluar/create/' . $value['surat_id']) ?>"
												   class="btn btn-small btn-success" title="Balas"><i
														class="fa fa-send-o"></i></a>
												<?php
												if ($this->session->userdata('session_level') == 'Pegawai'):
													if ($value['surat_disposisi'] == null):
														?>
														<a href="<?= base_url('surat/edit/' . $value['surat_id']) ?>"
														   class="btn btn-small btn-success" title="Edit"><i
																class="fa fa-pencil"></i></a>
														<a href="<?= base_url('surat/hapus/' . $value['surat_id']) ?>"
														   class="btn btn-small btn-danger"
														   onclick="return confirm('Apakah anda yakin ingin menghapus?')"
														   title="Hapus"><i
																class="fa fa-trash-o"></i></a>
													<?php
													endif;
												elseif ($this->session->userdata('session_level') == 'Penghulu'):
													if ($value['surat_disposisi'] == null):
														?>
														<a href="<?= base_url('surat/disposisi/' . $value['surat_id']) ?>"
														   class="btn btn-small btn-success " title="Setuju"
														   onclick="return confirm('Silahkan Isi Form Disposisi')"><i
																class="fa fa-check"></i></a>
														<a href="<?= base_url('surat/tolak_surat/' . $value['surat_id']) ?>"
														   class="btn btn-small btn-danger"
														   onclick="return confirm('Apakah anda yakin menolak surat ini?')"
														   title="Ditolak"><i class="fa fa-times"></i></a>
														<a href="<?= base_url('surat/simpan_surat/' . $value['surat_id']) ?>"
														   class="btn btn-small btn-outline-primary" title="Disimpan"><i
																class="fa fa-save"></i></a>
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
			<?= form_open('surat/buat', array('enctype' => 'multipart/form-data')) ?>
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Surat</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomor Surat"
						   name="nomor_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tanggal Surat</label>
					<input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Surat"
						   name="tanggal_surat" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Lampiran</label>
					<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Lampiran"
						   name="lampiran" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Agenda</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Nomor Agenda"
						   name="nomor_agenda" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Dari</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Dari" name="dari">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Perihal</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Perihal"
						   name="perihal" required>
				</div>
				<div class="form-group">
					<label>Status</label>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="Asli"
								   checked>
							Asli
						</label>
					</div>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="status" id="optionsRadios2"
								   value="Tembusan">
							Tembusan
						</label>
					</div>
				</div>
				<div class="form-group">
					<label>Sifat</label>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="sifat" id="optionsRadios1"
								   value="Penting" checked>
							Penting
						</label>
					</div>
					<div class="form-radio">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="sifat" id="optionsRadios2"
								   value="Rahasia">
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
				<label>Upload Surat</label>
				<input type="file" class="dropify" name="upload"/>
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
			<form action="<?= base_url("surat/tolak_surat")?>" method="post">
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

