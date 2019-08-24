$(document).ready(function () {
	$('#add').click(function () {
		var jumlahKeluarga = $('#jumlahKeluarga').val();
		for (var i = 0; i< jumlahKeluarga;i++){
			$('#skb-dinamis').append(
				'<hr>' +
				'<div id="row'+i+'">' +
				'<div class="form-group">' +
				'<label>Nama</label>' +
				'<input type="text" class="form-control" placeholder="Nama" name="detail_nama[]" required>' +
				'</div>' +
				'<div class="form-group">' +
				'<label>Tempat Lahir</label>' +
				'<input type="text" class="form-control" placeholder="Tempat lahir" name="detail_tempat[]" required>' +
				'</div>' +
				'<div class="form-group">' +
				'<label>Tanggal Lahir</label>' +
				'<input type="date" class="form-control" placeholder="Tanggal Lahir" name="detail_tanggal_lahir[]" required>' +
				'</div>' +
				'<div class="form-group">' +
				'<label>SHDK</label>' +
				'<input type="text" class="form-control" placeholder="SHDK" name="detail_shdk[]" required>' +
				'</div>' +
				'</div>'
			);
		}
	});
	$('#addPindah').click(function () {
		var jumlahPindah = $('#jumlahPindah').val();
		for (var i = 0; i< jumlahPindah;i++){
			$('#ppak-dinamis').append(
				'<hr>' +
				'<div id="row'+i+'">' +
				'<div class="form-group">' +
				'<label>Nama</label>' +
				'<input type="text" class="form-control" placeholder="Nama" name="detail_nama[]" required>' +
				'</div>' +
				'<div class="form-group">' +
				'<label>NIK</label>' +
				'<input type="text" class="form-control" placeholder="NIK" name="detail_nik[]" required>' +
				'</div>' +
				'<div class="form-group">' +
				'<label>Tempat Lahir</label>' +
				'<input type="text" class="form-control" placeholder="Tempat lahir" name="detail_tempat[]" required>' +
				'</div>' +
				'<div class="form-group">' +
				'<label>Tanggal Lahir</label>' +
				'<input type="date" class="form-control" placeholder="Tanggal Lahir" name="detail_tanggal_lahir[]" required>' +
				'</div>' +
				'<div class="form-group">' +
				'<label>SHDK</label>' +
				'<input type="text" class="form-control" placeholder="SHDK" name="detail_shdk[]" required>' +
				'</div>' +
				'</div>'
			);
		}
	});
});
