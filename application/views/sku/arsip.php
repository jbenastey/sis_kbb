<div class="col-12">
	<div class="card">
		<div class="card-body">
			<button onclick="window.print()" class="btn btn-primary btn-sm d-print-none" style="float: right"><i class="fa fa-print"></i></button>

			<h4 class="card-title text-center">Arsip Surat Keterangan Usaha</h4>
			<h6 class="card-title text-center">Dari Tanggal <?=$tanggal1?> - <?=$tanggal2?></h6>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>No</th>
					<th>Nomor Surat</th>
					<th>Nama Surat</th>
					<th>Tanggal Lahir</th>
					<th>Tempat Lahir</th>
					<th>Kewarganegaraan</th>
					<th>Jenis Kelamin</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$no = 1;
				foreach ($laporan as $key => $value):
				if ($value['sku_disposisi'] == 'Setuju'):
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $value['sku_nomor'] ?></td>
					<td><?= $value['sku_nama'] ?></td>
					<td><?= $value['sku_tanggal_lahir'] ?></td>
					<td><?= $value['sku_tempat_lahir'] ?></td>
					<td><?= $value['sku_wni'] ?></td>
					<td><?= $value['sku_jk'] ?></td>
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
