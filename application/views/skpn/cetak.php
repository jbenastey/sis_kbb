<?php
$bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

?>

<style type="text/css">
	p {
		margin-bottom: 1.5px;
		font-size: 12pt;
		font-family: 'Times New Rowman';
	}

	@page {
		size: A4;
		margin: 0;
	}

	.logo {
		width: 100px;
		height: 120px;
	}

	@media print {
		.page {
			margin: 0;
			padding: 0.3cm;
			border: initial;
			border-radius: initial;
			width: initial;
			min-height: initial;
			box-shadow: initial;
			background: initial;
		}

		h4 {
			font-size: 13pt;
			font-family: 'Times New Rowman';
		}

		.logo {
			width: 100px;
			height: 120px;
		}

		.card {

		}

		td {
			font-size: 12pt;
		}

</style>
<div class="col-12">
	<div class="card">
		<div class="card-header  d-print-none">

			<div class="col-12">
				<a class="btn btn-secondary btn-sm" href="<?=base_url('skpn/lihat/'.$skpn['skpn_id'])?>"><i class="fa fa-arrow-left"></i></a>
				<button onclick="window.print()" class="btn btn-primary btn-sm" style="float: right"><i class="fa fa-print"></i></button>
			</div>


		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-2 ml-8 mt-2 text-right"><img src="<?php echo base_url() ?>assets/images/auth/logo.png"
															 class="logo"></div>
				<div class="col-8 text-center mt-6">
					<h3>PEMERINTAH KABUPATEN ROKAN HILIR</h3>
					<h3>KECAMATAN BANGKO PUSAKO</h3>
					<h2>KEPENGHULUAN BANGKO BAKTI</h2>
					<p style="margin-top: -10px;font-size: 12pt;">Alamat: Jl. Lintas Riau - Sumut Km.13 Bangko Bakti KP: 28992 HP. 0813 7100 9117</p>
				</div>
				<hr style="z-index: 999; margin-top: 0;width: 100%;border:2px solid black;background-color: black; ">
			</div>
			<div class="row" style="margin-top:-10px;margin-left: 20px;">
				<div class="col-6 ml-9">
					<table>
						<tr>
							<td><p>Nomor</p></td>
							<td style="padding-left:2em"><p>:</p></td>
							<td><p><?=$skpn['skpn_nomor']?></p></td>
						</tr>
						<tr>
							<td><p>Lamp</p></td>
							<td style="padding-left:2em"><p>:</p></td>
							<td><p>-</p></td>
						</tr>
						<tr>
							<td><p>Hal</p></td>
							<td style="padding-left:2em"><p>:</p></td>
							<td><p><b>Pengantar Pindah Nikah</b></p></td>
						</tr>
					</table>
				</div>
				<div class="col-6 float-right text-right" style="padding-right: 140px;">
					<p>Bangko Bakti, <?php echo date("d") ?> <?php echo $bulan[date("n")] ?> <?php echo date("Y") ?></p>

				</div>
			</div>

			<div class="row mt-2" style="margin-left: 10%;">
				<div class="col-6 ml-9">
					<p>Kepada: </p>
					<p>Yth. Bapak KUA Bangko Pusako</p>
					<p>di.</p>
					<p><span class="ml-5"></span><b><u>Bangko Kanan</u></b></p>
				</div>
			</div>

			<div class="row mt-2" style="margin-left: 10%;">
				<div class="col-9 ml-9">
					<p><b>Dengan Hormat</b></p>
					<p><span class="ml-5"></span>Penghulu Bangko Sakti, Kecamatan Bangko Pusako, Kabupaten Rokan Hilir, Provinsi Riau.</p>
					<p>Dengan ini menyatakan bahwa :</p>
				</div>
			</div>
			<div class="row mt-2" style="margin-left: 20%">
				<table>
					<tr>
						<td><p>Nama Lengkap</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_nama']?></p></td>
					</tr>
					<tr>
						<td><p>Tempat/Tgl lahir</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_tempat_lahir']?>, <?=$skpn['skpn_tanggal_lahir']?></p></td>
					</tr>
					<tr>
						<td><p>Warganegara</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_wni']?></p></td>
					</tr>
					<tr>
						<td><p>Agama</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_agama']?></p></td>
					</tr>
					<tr>
						<td><p>Jenis Kelamin</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_jk']?></p></td>
					</tr>
					<tr>
						<td><p>Status Perkawinan</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_status']?></p></td>
					</tr>
					<tr>
						<td><p>Pekerjaan</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_kerja']?></p></td>
					</tr>
					<tr>
						<td><p>No. NIK KTP</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_nik']?></p></td>
					</tr>
					<tr>
						<td><p>Alamat</p></td>
						<td><p>:</p></td>
						<td><p><?=$skpn['skpn_alamat']?></p></td>
					</tr>
				</table>
			</div>

			<div class="row mt-3" style="margin-left: 10%;">
				<div class="col-10 ml-10">
					<p class="text-justify"><span class="ml-5"></span>Nama tersebut diatas adalah benar penduduk kami yang tinggal di <?=$skpn['skpn_alamat']?>. Dan menurut sepengetahuan kami selama nama tersebut berdomisili di Kepenghuluan Bangko Bakti .</u></b>Dan benar menurut sepengetahuan kami akan melaksanakan <b><u>Pindah Nikah (Ijab Kabul)</u></b>di Desa Buatan II, Kec. Koto Gasib, Kab. Siak</p>
				</div>
			</div>
			<div class="row" style="margin-left: 10%;">
				<div class="col-10 ml-10">
					<p class="text-justify"><span class="ml-5">Demikian surat keterangan ini kami berikan kepada yang bersangkutan untuk dapat digunakan sebagaimana perlu.</span></p>
				</div>
			</div>
			<br>

			<div class="row mt-4" style="width: 70%; margin: 0 auto;font-size: 18px;">
				<div class="col-4 text-left">

				</div>

				<div class="col-4 float-right" style="margin-left: 80%;">
					<div style="margin-left: 20px;">
						<p style="margin-left: -100px;margin-bottom:-6px;" class="text-center"><b>PENGHULU BANGKO BAKTI</b></p>
						<p style="margin-left: -100px;margin-bottom:-6px;" class="text-center"><b>KECAMATAN BANGKO PUSAKO</b></p>
						<br><br>
						<p style="margin-left: -100px;" class="text-center"><b>HUSNI TAMRIN, S.Ap</b></p>
						<p style="margin-left: -100px;" class="text-center"><b>NIP.19740923 200906 1 002</b></p>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
