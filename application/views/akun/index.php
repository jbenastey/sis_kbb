<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Kelola Akun</h4>
			<div class="row">
				<div class="col-12">
					<div class="table-responsive">
						<table id="order-listing" class="table">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama Akun</th>
								<th>Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no =1;
							foreach ($akun as $key => $value):
								?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $value['user_name'] ?></td>
									<td><a href="<?= base_url('akun/edit/'.$value['user_id'])?>"class="btn social-btn btn-success" title="Edit"><i class="fa fa-pencil"></i></a>
										<a href="<?= base_url('akun/hapus/'.$value['user_id'])?>"class="btn social-btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')" title="Hapus"><i class="fa fa-trash-o"></i></td>

								</tr>
								<?php
								$no++;
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
