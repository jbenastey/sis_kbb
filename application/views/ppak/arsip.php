<div class="col-12">
	<div class="card">
		<div class="card-body">
			<button onclick="window.print()" class="btn btn-primary btn-sm d-print-none" style="float: right"><i class="fa fa-print"></i></button>

			<h4 class="card-title text-center">Arsip Surat Keterangan Permohonan Pindah Antar Kabupaten</h4>
			<h6 class="card-title text-center">Dari Tanggal <?=$tanggal1?> - <?=$tanggal2?></h6>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>Nomor Surat</th>
					<th>Nama</th>
					<th>Nomor KK</th>
					<th>Alamat Sekarang</th>
					<th>Alamat Tujuan</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$no = 1;
				foreach ($laporan as $key => $value):
				if ($value['ppak_disposisi'] == 'Setuju'):
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $value['ppak_nomor'] ?></td>
					<td><?= $value['ppak_namakepala'] ?></td>
					<td><?= $value['ppak_nokk'] ?></td>
					<td><?= $value['ppak_alamat_sekarang'] ?></td>
					<td><?= $value['ppak_alamat_tujuan'] ?></td>
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
