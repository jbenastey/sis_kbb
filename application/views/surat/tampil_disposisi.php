<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Disposisi Surat</h4>
			<div class="row">
				<div class="col-12">
					<div class="table-responsive">
						<table id="order-listing" class="table">
							<?php
							?>
							<thead>
							<tr>
								<th>No</th>
								<th>Nomor Surat</th>
								<th>Lampiran</th>
								<th>Nomor Agenda</th>
								<th>Dari</th>
								<th>Perihal</th>
								<th>Status</th>
								<th>Sifat</th>
								<th>Tujuan Disposisi</th>
								<th>Catatan Disposisi</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no = 1;
							foreach ($surat as $key => $value):
								if ($value['surat_disposisi'] == 'Jawab'):
								?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $value['surat_nomor'] ?></td>
									<td><?= $value['surat_lampiran'] ?></td>
									<td><?= $value['surat_nomoragenda'] ?></td>
									<td><?= $value['surat_dari'] ?></td>
									<td><?= $value['surat_perihal'] ?></td>
									<td><?= $value['surat_status'] ?></td>
									<td><?= $value['surat_sifat'] ?></td>
									<td><?= $value['surat_tujuan_disposisi'] ?></td>
									<td><?= $value['surat_catatan'] ?></td>

								</tr>
								<?php
								$no++;
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
