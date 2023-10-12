<div class="card col-md-6 m-1">
  <h5 class="card-header">Enkripsi</h5>
  <div class="card-body">
  	<?php 
		include "vigenere.php";
		if (isset($_POST['proses_enkripsi'])){
			$krip=new Kripto;
			$krip->kunci=$_POST['kunci'];
			$krip->enkripsi($_POST['plaintext']);
		}
	?>
	<hr>
    <form method="POST">
	  <div class="mb-1">
	    <label for="plaintext" class="form-label">Plaintext</label>
	    <input type="text" class="form-control" id="plaintext" name="plaintext">
	    <div id="kunci" class="form-text text-danger">Masukkan data atau pesan yang mau dienkripsi.</div>
	  </div>
	  <div class="mb-1">
	    <label for="kunci" class="form-label">Kunci</label>
	    <input type="text" class="form-control" id="kunci" name="kunci">
	  </div>
	  <button type="submit" class="btn btn-primary" name="proses_enkripsi">Enkrip</button>
	  <div class="mb-1">
	    <label for="hasil_ciphertext" class="form-label">Ciphertext</label>
	    <input type="text" class="form-control" id="hasil_ciphertext" name="hasil_ciphertext" disabled="" value=" <?php echo $krip->tampil_h_enkripsi();?>">
	    <div class="form-text text-success">Lihat Hasil.</div>
	  </div>
	</form>
  </div>
</div>