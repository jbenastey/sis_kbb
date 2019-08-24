$(document).ready(function () {
	$('.tolak-action').click(function (event) {
		var id = $(this).data('isi');
		console.log(id);
		document.getElementById("id_surat").value=id;
	})
});
