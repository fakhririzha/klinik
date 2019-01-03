</br></br>
<div class="row">
	<div class="col s2">
	</div>
	<div class="col s4">
		<br><br><br>
		<h5>No. antri terakhir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h5>
		<br><br><br><br><br><br>
		<h5>Ambil nomor antri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h5>
		<br><br><br><br><br><br>
		<h5>Terakhir dipanggil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h5>
	</div>
	<div class="col s2">
		<div class="card-panel white">
			<h1>&nbsp;<?= $latest_antrian ?>
			</h1>
		</div>
		<div class="card-panel white">
			<h1>&nbsp;<?= $latest_antrian + 1 ?>
			</h1>
		</div>
		<div class="card-panel white">
			<h1>&nbsp;<?= $latest_dipanggil ?>
			</h1>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="col s3">
		<form action="<?= base_url('resepsionis/ambil_no_antri_proses') ?>"
		 method="post">
			<input type="hidden" name="antrian_selanjutnya" value="<?= $latest_antrian + 1 ?>">
			<button class="btn waves-effect blue" type="submit" name="ambil" value="ambil">Ambil
				<i class="material-icons right">send</i></button>
		</form>
	</div>
	<div class="col s1">
	</div>
