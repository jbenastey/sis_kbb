<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Surat Keterangan Berdomisili</h4>
			<table>
				<tr>
					<td>Nomor Surat</td>
					<td> : </td>
					<td><?=$skb['skb_nomor']?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td> : </td>
					<td><?=$skb['skb_nama']?></td>
				</tr>
				<tr>
					<td>Tempat Tanggal Lahir</td>
					<td> : </td>
					<td><?=$skb['skb_tempat_lahir']?>, <?=$skb['skb_tanggal_lahir']?></td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td> : </td>
					<td><?=$skb['skb_wni']?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td> : </td>
					<td><?=$skb['skb_agama']?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td> : </td>
					<td><?=$skb['skb_jk']?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td> : </td>
					<td><?=$skb['skb_kerja']?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td> : </td>
					<td><?=$skb['skb_alamat']?></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td> : </td>
					<td><?=$skb['skb_nomor']?></td>
				</tr>
				<tr>
					<td>Jumlah Anggota Keluarga</td>
					<td> : </td>
					<td><?=$skb['skb_jumlahkeluarga']?></td>
				</tr>
			</table>
			<table class="table table-bordered">
				<tr>
					<th>Nama</th>
					<th>Tempat Tanggal Lahir</th>
					<th>SHDK</th>
				</tr>
				<?php foreach ($skb_detail as $key=>$value):?>
				<tr>
					<td><?=$value['detail_nama']?></td>
					<td><?=$value['detail_tempat']?> , <?=$value['detail_tanggal_lahir']?></td>
					<td><?=$value['detail_shdk']?></td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
