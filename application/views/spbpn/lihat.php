<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Keterangan Pernyataan Belum Pernah Menikah</h4>
			<table>
				<tr>
					<td>Tanggal Lahir</td>
					<td> : </td>
					<td><?=$spbpn['spbpn_tanggal_lahir']?></td>
				</tr>
				<tr>
					<td>Tepat Lahir</td>
					<td> : </td>
					<td><?=$spbpn['spbpn_tempat_lahir']?></td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td> : </td>
					<td><?=$spbpn['spbpn_wni']?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td> : </td>
					<td><?=$spbpn['spbpn_kerja']?></td>
				</tr>
				<tr>
					<td>Nomor KK</td>
					<td> : </td>
					<td><?=$spbpn['spbpn_nokk']?></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td> : </td>
					<td><?=$spbpn['spbpn_nik']?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> : </td>
					<td><?=$spbpn['spbpn_alamat']?></td>
				</tr>
				<tr>
					<td>Tanggal Surat</td>
					<td> : </td>
					<td><?=$spbpn['spbpn_tanggal']?></td>
				</tr>
			</table>
			<br><a href="<?=base_url('spbpn')?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
			<?php
			if ($this->session->userdata('session_level') == 'Pegawai'):
				if ($spbpn['spbpn_disposisi'] == 'Setuju'):
					?>
					<a href="<?=base_url('spbpn/cetak/'.$spbpn['spbpn_id'])?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
				<?php
				endif;
			endif;
			?>
		</div>
	</div>
</div>
