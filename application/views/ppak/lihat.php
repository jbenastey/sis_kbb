<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Permhonan Pindah Antar Kabupaten</h4>
			<table>
				<tr>
					<td>Nomor Surat</td>
					<td> : </td>
					<td><?=$ppak['ppak_nomor']?></td>
				</tr>
				<tr>
					<td>Nomor KK</td>
					<td> : </td>
					<td><?=$ppak['ppak_nokk']?></td>
				</tr>
				<tr>
					<td>Nama Kepala Keluarga</td>
					<td> : </td>
					<td><?=$ppak['ppak_namakepala']?></td>
				</tr>
				<tr>
					<td>Alamat sekarang</td>
					<td> : </td>
					<td><?=$ppak['ppak_alamat_sekarang']?></td>
				</tr>
				<tr>
					<td>Alamat tujuan</td>
					<td> : </td>
					<td><?=$ppak['ppak_alamat_tujuan']?></td>
				</tr>
				<tr>
					<td>Alasan Pindah</td>
					<td> : </td>
					<td><?=$ppak['ppak_alasanpindah']?></td>
				</tr>
				<tr>
					<td>Jenis Pindah</td>
					<td> : </td>
					<td><?=$ppak['ppak_jenispindah']?></td>
				</tr>
				<tr>
					<td>Status KK pindah</td>
					<td> : </td>
					<td><?=$ppak['ppak_statuskkpindah']?></td>
				</tr>
				<tr>
					<td>Status KK tidak pindah</td>
					<td> : </td>
					<td><?=$ppak['ppak_statuskktidakpindah']?></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td> : </td>
					<td><?=$ppak['ppak_tanggal']?></td>
				</tr>
				<tr>
					<td>Jumlah Anggota Keluarga</td>
					<td> : </td>
					<td><?=$ppak['ppak_jumlah_pindah']?></td>
				</tr>
			</table>
			<table class="table table-bordered">
				<tr>
					<th>Nama</th>
					<th>NIK</th>
					<th>Tempat Tanggal Lahir</th>
					<th>SHDK</th>
				</tr>
				<?php foreach ($ppak_detail as $key=>$value):?>
					<tr>
						<td><?=$value['detail_nama']?></td>
						<td><?=$value['detail_nik']?></td>
						<td><?=$value['detail_tempat_lahir']?> , <?=$value['detail_tanggal_lahir']?></td>
						<td><?=$value['detail_shdk']?></td>
					</tr>
				<?php endforeach; ?>
			</table>

			<br>
			<a href="<?=base_url('ppak')?>" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
			<?php
			if ($this->session->userdata('session_level') == 'Pegawai'):
				if ($ppak['ppak_disposisi'] == 'Setuju'):
					?>
					<a href="<?=base_url('ppak/cetak/'.$ppak['ppak_id'])?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
				<?php
				endif;
			endif;
			?>
		</div>
	</div>
</div>
