<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Keterangan Pindah Nikah</h4>
			<table>
				<tr>
					<td>Nomor Surat</td>
					<td> : </td>
					<td><?=$skpn['skpn_nomor']?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td> : </td>
					<td><?=$skpn['skpn_nama']?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td> : </td>
					<td><?=$skpn['skpn_tanggal_lahir']?></td>
				</tr>
				<tr>
					<td>Tepat Lahir</td>
					<td> : </td>
					<td><?=$skpn['skpn_tempat_lahir']?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td> : </td>
					<td><?=$skpn['skpn_jk']?></td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td> : </td>
					<td><?=$skpn['skpn_wni']?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td> : </td>
					<td><?=$skpn['skpn_agama']?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td> : </td>
					<td><?=$skpn['skpn_kerja']?></td>
				</tr>
				<tr>
					<td>Status</td>
					<td> : </td>
					<td><?=$skpn['skpn_status']?></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td> : </td>
					<td><?=$skpn['skpn_nik']?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> : </td>
					<td><?=$skpn['skpn_alamat']?></td>
				</tr>
				<tr>
					<td>Tanggal Surat</td>
					<td> : </td>
					<td><?=$skpn['skpn_tanggal']?></td>
				</tr>
			</table>
			<br>
			<a href="<?=base_url('skpn')?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
			<?php
			if ($this->session->userdata('session_level') == 'Pegawai'):
				if ($skpn['skpn_disposisi'] == 'Setuju'):
					?>
					<a href="<?=base_url('skpn/cetak/'.$skpn['skpn_id'])?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
				<?php
				endif;
			endif;
			?>
		</div>
	</div>
</div>
