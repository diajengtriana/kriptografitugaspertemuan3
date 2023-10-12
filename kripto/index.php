<!DOCTYPE html>
<html>
<head>
	<title>Kriptografi Metode Vigenere Cipher</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 bg-dark" style="min-height: 700px">
				<div class="text-light">
					~Kriptografi~
				</div>
				<div class="d-flex justify-content-center mt-2">
					<h5 class="text-light">
						<a href="?halaman=enkripsi">Enkripsi</a>
					</h5>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12 bg-secondary">
						<div class="text-light m-1 text-center">
							<h5>Kriptografi Metode Vigenere Cipher</h5>
						</div>
					</div>
				</div>
				<?php
					if (isset($_GET['halaman'])) {
						if ($_GET['halaman']=='enkripsi') {
							include("enkripsi.php");
						}elseif ($_GET['halaman']=='dekripsi') {
							include("dekripsi.php");
						}elseif ($_GET['halaman']=='home') {

							echo "<br>Algoritma vigenere cipher adalah algoritma klasik yang merupakan pengembangan dari metode Caesar Cipher. Proses Enkripsi dilakukan dengan cara menggeser atau menambahkan plaintext sebanyak kunci ke-i. Sedangkan dekripsi adalah proses menggeser ciphertext ke arah berlawanan atau mengurangkan ciphertext sebanyak kunci ke-i. <a href='https://belajarwebmedan.com/2021/10/04/kriptografi-vigenere-cipher/'>Selengkapnya...</a>";
						}
					}else{
						echo "<br>Algoritma vigenere cipher adalah algoritma klasik yang merupakan pengembangan dari metode Caesar Cipher. Proses Enkripsi dilakukan dengan cara menggeser atau menambahkan plaintext sebanyak kunci ke-i. Sedangkan dekripsi adalah proses menggeser ciphertext ke arah berlawanan atau mengurangkan ciphertext sebanyak kunci ke-i. <a href='https://belajarwebmedan.com/2021/10/04/kriptografi-vigenere-cipher/'>Selengkapnya...</a>";
					}
				?>
				<!--div class="container-fluid h-100">
				    <div class="row align-items-center h-100">
				        <div class="col-6 mx-auto">
				            <div class="jumbotron">
				                <img src="https://belajarwebmedan.com/wp-content/uploads/2021/09/keamanan_post.png">
				            </div>
				        </div>
				    </div>
				</div-->
				

			</div>
		</div>
		<div class="col-md-12">
			<center>&copy; 2021 BWM</center>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>