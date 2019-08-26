<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Keterangan Tanda Kependudukan</h4>
			<table>
				<tr>
					<td>Nomor Surat</td>
					<td> : </td>
					<td><?=$sktk['sktk_nomor']?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td> : </td>
					<td><?=$sktk['sktk_nama']?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td> : </td>
					<td><?=$sktk['sktk_tanggal_lahir']?></td>
				</tr>
				<tr>
					<td>Tepat Lahir</td>
					<td> : </td>
					<td><?=$sktk['sktk_tempat_lahir']?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td> : </td>
					<td><?=$sktk['sktk_jk']?></td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td> : </td>
					<td><?=$sktk['sktk_wni']?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td> : </td>
					<td><?=$sktk['sktk_agama']?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td> : </td>
					<td><?=$sktk['sktk_kerja']?></td>
				</tr>
				<tr>
					<td>Status</td>
					<td> : </td>
					<td><?=$sktk['sktk_status']?></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td> : </td>
					<td><?=$sktk['sktk_nik']?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> : </td>
					<td><?=$sktk['sktk_alamat']?></td>
				</tr>
				<tr>
					<td>Nama Bapak</td>
					<td> : </td>
					<td><?=$sktk['sktk_namabapak']?></td>
				</tr>
				<tr>
					<td>Nama Ibu</td>
					<td> : </td>
					<td><?=$sktk['sktk_namaibu']?></td>
				</tr>
				<tr>
					<td>Tanggal Surat</td>
					<td> : </td>
					<td><?=$sktk['sktk_tanggal']?></td>
				</tr>
			</table>
			<br>
			<a href="<?=base_url('sktk')?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
			<?php
			if ($this->session->userdata('session_level') == 'Pegawai'):
				if ($sktk['sktk_disposisi'] == 'Setuju'):
					?>
					<a href="<?=base_url('sktk/cetak/'.$sktk['sktk_id'])?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
				<?php
				endif;
			endif;
			?>
		</div>
	</div>
</div>
