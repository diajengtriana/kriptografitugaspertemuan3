<?php
class Kripto{
var $tersedia = array('a','b','c','d','e','f','g','h','i','j',
					'k','l','m','n','o','p','q','r','s','t','u',
					'v','w','x','y','z');
var $angka_konversi_plaintext=array();
var $angka_konversi_ciphertext=array();
var $angka_konversi_kunci=array();
var $angka_hasil_enkripsi=array();
var $angka_hasil_dekripsi=array();
var $kunci;


	public function konversi_angka($karakter=''){
		for ($i=0; $i < count($this->tersedia) ; $i++) { 
			if ($karakter==$this->tersedia[$i]) {
				return $i+1;// tambah 1 supaya mulainya dari 1
			}
		}
	}


	public function enkripsi($teks){
		echo "Plaintext: $teks <br>";
		echo "Kunci: $this->kunci <br>";
		for ($i=0; $i < strlen($teks) ; $i++) { 
			$this->angka_konversi_plaintext [$i] =  $this->konversi_angka(substr($teks, $i,1));
		}
		echo "Urutan Plaintext: ";
		echo var_dump($this->angka_konversi_plaintext)."<br>";
		// angka urutan atau konversi plaintext
		for ($i=0; $i < strlen($this->kunci) ; $i++) { 
			$this->angka_konversi_kunci [$i] =  $this->konversi_angka(substr($this->kunci, $i,1));
		}
		echo "Urutan Kunci: ";
		echo var_dump($this->angka_konversi_kunci)."<br>";
		// angka urutan atau konversi kunci
		for ($i=0; $i < count($this->angka_konversi_plaintext); $i++) { 
			$this->angka_hasil_enkripsi[$i]=($this->angka_konversi_plaintext[$i] + ($this->angka_konversi_kunci[$i % strlen($this->kunci)])) % count($this->tersedia);
		}
		echo "Urutan Hasil Enkripsi: ";
		echo var_dump($this->angka_hasil_enkripsi)."<br>";

	}

	public function dekripsi($teks){
		echo "Ciphertext: $teks <br>";
		echo "Kunci: $this->kunci <br>";
		for ($i=0; $i < strlen($teks) ; $i++) { 
			$this->angka_konversi_ciphertext [$i] =  $this->konversi_angka(substr($teks, $i,1));
		}
		echo "Urutan Ciphertext: ";
		echo var_dump($this->angka_konversi_ciphertext)."<br>";
		// angka urutan atau konversi plaintext
		for ($i=0; $i < strlen($this->kunci) ; $i++) { 
			$this->angka_konversi_kunci [$i] =  $this->konversi_angka(substr($this->kunci, $i,1));
		}
		echo "Urutan Kunci: ";
		echo var_dump($this->angka_konversi_kunci)."<br>";
		// angka urutan atau konversi kunci
		for ($i=0; $i < count($this->angka_konversi_ciphertext); $i++) { 
			$negatif=($this->angka_konversi_ciphertext[$i] - ($this->angka_konversi_kunci[$i % strlen($this->kunci)]));
			if ($negatif<=0){// nol dikurang 1 negatif
				$this->angka_hasil_dekripsi[$i]=($this->angka_konversi_ciphertext[$i] - ($this->angka_konversi_kunci[$i % strlen($this->kunci)])) % count($this->tersedia)+count($this->tersedia);
			}else{
				$this->angka_hasil_dekripsi[$i]=($this->angka_konversi_ciphertext[$i] - ($this->angka_konversi_kunci[$i % strlen($this->kunci)])) % count($this->tersedia);
			}
		}
		echo "Urutan Hasil Dekripsi: ";
		echo var_dump($this->angka_hasil_dekripsi)."<br>";
	}


	

	public function tampil_h_enkripsi(){
		//echo "Karakter Hasil Enkripsi :";
		for ($i=0; $i <count($this->angka_hasil_enkripsi) ; $i++) { 
			echo $this->tersedia[$this->angka_hasil_enkripsi[$i]-1]; //kurang satu supaya hasil sesuai
		}
	}
	
	public function tampil_h_dekripsi(){
		//echo var_dump($this->hasil_dekripsi);
		//echo "Karakter Hasil Dekripsi :";
		for ($i=0; $i <count($this->angka_hasil_dekripsi) ; $i++) { 
			echo  $this->tersedia[$this->angka_hasil_dekripsi[$i]-1];
		}
	}
}