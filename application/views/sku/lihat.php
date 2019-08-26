<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Keterangan Usaha</h4>
			<table>
				<tr>
					<td>Nomor Surat</td>
					<td> : </td>
					<td><?=$sku['sku_nomor']?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td> : </td>
					<td><?=$sku['sku_nama']?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td> : </td>
					<td><?=$sku['sku_tanggal_lahir']?></td>
				</tr>
				<tr>
					<td>Tepat Lahir</td>
					<td> : </td>
					<td><?=$sku['sku_tempat_lahir']?></td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td> : </td>
					<td><?=$sku['sku_wni']?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td> : </td>
					<td><?=$sku['sku_jk']?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td> : </td>
					<td><?=$sku['sku_agama']?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td> : </td>
					<td><?=$sku['sku_kerja']?></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td> : </td>
					<td><?=$sku['sku_nik']?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> : </td>
					<td><?=$sku['sku_alamat']?></td>
				</tr>
				<tr>
					<td>Nama Usaha</td>
					<td> : </td>
					<td><?=$sku['sku_nama_usaha']?></td>
				</tr>
				<tr>
					<td>Nomor Register</td>
					<td> : </td>
					<td><?=$sku['sku_no_register']?></td>
				</tr>
				<tr>
					<td>Tanggal Surat</td>
					<td> : </td>
					<td><?=$sku['sku_tanggal']?></td>
				</tr>
			</table>
			<br>
			<a href="<?=base_url('sku')?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
			<?php
			if ($this->session->userdata('session_level') == 'Pegawai'):
				if ($sku['sku_disposisi'] == 'Setuju'):
					?>
					<a href="<?=base_url('sku/cetak/'.$sku['sku_id'])?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
				<?php
				endif;
			endif;
			?>
		</div>
	</div>
</div>
