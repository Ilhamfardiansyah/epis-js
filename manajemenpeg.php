<?php 
		if (empty($datpil)) {
			echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'><h2>--Data tidak ditemukan--</h2></td></tr>";
	





		} else {

$mode		= $this->uri->segment(3);





if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";

	
$nopassring = $datpil->nopassring;

$depan = $datpil->depan_pic;
$kanan = $datpil->kanan_pic;
$kiri = $datpil->kiri_pic;
$sidik = $datpil->sidik_pic;


$nama = $datpil->nama;
$Pangkat = $datpil->Pangkat;
$jabatan = $datpil->jabatan;
$kesatuan = $datpil->kesatuan;
$Tandajasa = $datpil->Tandajasa;
$tgl = $datpil->tgl;
$suku = $datpil->suku;
$agama = $datpil->agama;
$tinggi = $datpil->tinggi;
$warnakulit = $datpil->warnakulit;
$mata = $datpil->mata;
$rambut = $datpil->rambut;
$goldarah = $datpil->goldarah;
$alamatsekarang = $datpil->alamatsekarang;
$ayahalamat = $datpil->ayahalamat;
$ibualamat = $datpil->ibualamat;
$istrialamat = $datpil->istrialamat;
$tempatnikah = $datpil->tempatnikah;
$namaanak = $datpil->namaanak;
$ortuistrialamat = $datpil->ortuistrialamat;
$Jenis = $datpil->Jenis;
$Lembaga = $datpil->Lembaga;
$sikap = $datpil->sikap;
$lengkah = $datpil->lengkah;
$kepala = $datpil->kepala;
$rambut1 = $datpil->rambut1;
$kening = $datpil->kening;
$dahi = $datpil->dahi;
$hidung = $datpil->hidung;
$bibir = $datpil->bibir;
$telinga = $datpil->telinga;
$pom = $datpil->pom;
$id_peg = $datpil->id_peg;


?>



<div class="navbar navbar-inverse">
	<div class="container" style="z-index: 0">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Manage ANGGOTA</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->
	<table class="table-form" width="150%">

	<tr><td width="100%" align="center"><h2>MENU BIODATA</h2></td><td><b>
</table>
	<form action="<?=base_URL()?>admin/manage_peg/" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="idp" value="">
	
	<div class="row-fluid well" style="overflow: hidden">
	
	<div class="col-lg-6">
		<table width="100%" class="table-form">
		<tr><td>FOTO 
		</td>
			
			<td>
			<img src="<?php echo base_url(); ?>upload/kanan/<?php echo $kanan; ?>" 
			class="form-control" style="display: inline; float: left; margin-right: 50px; width: 250px; height: 200px"> 
			<input type="file" name="foto_kanan" class="form-control" multiple="" style="width: 250px"></td>
			
			
		
		<td>
			<img src="<?php echo base_url(); ?>upload/depan/<?php echo $depan; ?>" 
			class="form-control" style="display: inline; float: center; margin-right: 100px; width: 250px; height: 200px">
			<input type="file" name="foto_depan" class="form-control" style="width: 250px">

			</td>
<td>
			<img src="<?php echo base_url(); ?>upload/kiri/<?php echo $kiri; ?>" 
			class="form-control" style="display: inline; float: right; margin-right: 50px; width: 250px; height: 200px">
			<input type="file" name="foto_kiri" class="form-control" style="width: 250px">
			</td>

			
		

		</tr>




		<tr><td>NO PASSRING</td><td><input type="text" class="form-control"name="PASSRING" disabled="disabled" style="width:350px"required value="<?php echo $nopassring; ?>"></td></tr>

		<tr><td>Nama Lengkap</td><td><input type="text" class="form-control"name="nama" style="width:300px"required value="<?php echo $nama; ?>"></td><td align="center" valign="middle">Mata</td><td><input type="text"class="form-control"name="mata"style="width:300px"required  value="<?php echo $mata; ?>"></td> </tr>

		<tr><td>Pangkat/NRP</td><td><input type="text"class="form-control"name="Pangkat"style="width:300px"required  value="<?php echo $Pangkat ?>" ></td> <td align="center" valign="middle">Rambut</td><td><input type="text"class="form-control"name="rambut"style="width:300px"required  value="<?php echo $rambut; ?>"></td></tr>

		<tr><td>Jabatan</td><td><input type="text"class="form-control"name="Jabatan"style="width:300px"required  value="<?php echo $jabatan; ?>"></td> <td align="center" valign="middle">Gol. Darah</td><td><input type="text"class="form-control"name="goldarah"style="width:300px"required  value="<?php echo $goldarah; ?>"></td></tr>

		<tr><td>Kesatuan</td><td><input type="text"class="form-control"name="kesatuan"style="width:300px"required  value="<?php echo $kesatuan; ?>"></td> <td align="center" valign="middle">Alamat Sekarang</td><td><input type="text"class="form-control"name="alamatsekarang"style="width:300px"required  value="<?php echo $alamatsekarang; ?>"></td></tr>

		<tr><td>Tanda Jasa</td><td><input type="text"class="form-control"name="Tandajasa"style="width:300px"required  value="<?php echo $Tandajasa; ?>"></td> <td align="center" valign="middle">Nama Ayah/ Alamat</td><td><input type="text"class="form-control"name="ayahalamat"style="width:300px"required  value="<?php echo $ayahalamat; ?>"></td></tr>

		<tr><td>Tempat Tgl / Umur</td><td><input type="text"class="form-control"name="tgl"style="width:300px"required  value="<?php echo $tgl; ?>"></td> <td align="center" valign="middle">Nama Ibu/ Alamat</td><td><input type="text"class="form-control"name="ibualamat"style="width:300px"required  value="<?php echo $ibualamat; ?>"></td></tr>

		<tr><td>Suku/Bangsa</td><td><input type="text"class="form-control"name="suku"style="width:300px"required  value="<?php echo $suku; ?>"></td> <td align="center" valign="middle">Nama Istri/Suami / Alamat</td><td><input type="text"class="form-control"name="istrialamat"style="width:300px"required  value="<?php echo $istrialamat; ?>"></td></tr>

		<tr><td>Agama</td><td><input type="text"class="form-control"name="agama"style="width:300px"required  value="<?php echo $agama; ?>"></td> <td align="center" valign="middle">Tempat/No Akte Nikah</td><td><input type="text"class="form-control"name="tempatnikah"style="width:300px"required  value="<?php echo $tempatnikah; ?>"></td></tr>

		<tr><td>Tinggi/Berat</td><td><input type="text"class="form-control"name="tinggi"style="width:300px"required  value="<?php echo $tinggi; ?>"></td> <td align="center" valign="middle">Nama Anak Kandung</td><td><input type="text"class="form-control"name="namaanak"style="width:300px"required  value="<?php echo $namaanak; ?>"></td></tr>

		<tr><td>Warna Kulit</td><td><input type="text"class="form-control"name="warnakulit"style="width:300px"required  value="<?php echo $warnakulit; ?>"></td> <td align="center" valign="middle">Nama Orang Tuan Istri/Suami / Alamat</td><td><input type="text"class="form-control"name="ortuistrialamat"style="width:300px"required  value="<?php echo $ortuistrialamat; ?>"></td></tr>


	<tr><td width="20%">Jenis Kelamin</td><td><b>
			<select name="Jenis" class="form-control" style="width: 300px" required  value="<?php echo $Jenis; ?>"></option>
			<?php
		$l_sifat	= array('Laki-laki','Perempuan');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>					
		
			</b></td></tr>

<table class="table-form" width="500%">

	<tr><td width="50%"></td><td width="60%"></td><td width="50%" align="center"><B><h2>SIYALEMEN</h2></B><td><td></td></tr>
	<tr></tr>
</table>






<table class="table-form" width="100%">
		<tr><td width="20%">Lembaga (adegan)</td><td><b>
			<select name="Lembaga" id="Lembaga" class="form-control" style="width: 300px" required value="<?php echo $Lembaga; ?>">/option>
			<?php
				$l_sifat	= array('1.Kuat','2.Tegak','3.Lampai','4.Lemah');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td><td width="20%">Sikap</td><td><b>
			<select name="Sikap" id="Sikap" class="form-control" style="width: 300px" required  value="<?php echo $Sikap; ?>"></option>
			<?php
				$l_sifat	= array('1.Tegak','2.Gagah','3.Bungkok','4.Kepal Tunduk Kaku');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td></tr>
				
			
				<tr><td width="20%">Langkah</td><td><b>
			<select name="langkah" id="langkah" class="form-control" style="width: 300px" requiredvalue="<?php echo $Langkah; ?>"> </option>
			<?php
				$l_sifat	= array('1.lenting','2.tenang','3.Langkah Panjang','4.Langkah Pendek');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td> <td width="20%">Bangun Kepala</td><td><b>
			<select name="BangunKepala" id="BangunKepala" class="form-control" style="width: 300px" required value="<?php echo $BangunKepala; ?>">> - Bangun Kepala - </option>
			<?php
				$l_sifat	= array('1.Sebagai Pangkal','2.Belah Ketupat','3.Bulat','4.Jorong','5.Lonjong','6.Panjang');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td></tr>
	
	

			<tr><td width="20%">Rambut</td><td><b>
			<select name="Rambut" id="Rambut" class="form-control" style="width: 300px" required value="<?php echo $rambut1; ?>"></option>
			<?php
				$l_sifat	= array('1.Lebat/Jarang','2.Berombak/Kejur','3.Kejur/Keriting','4.Tegak');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td><td width="20%">Kening</td><td><b>
			<select name="Kening" id="Kening" class="form-control" style="width: 300px" required value="<?php echo $Kening; ?>"></option>
			<?php
				$l_sifat	= array('1.Rata','2.Miring','3.KeAtas/KeBawah','4.Bertemu sateu dengan yang lain');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td></tr>


		

			<tr><td width="20%">Dahi</td><td><b>
			<select name="Dahi" id="Dahi" class="form-control" style="width: 300px" required value="<?php echo $Dahi; ?>"> </option>
			<?php
				$l_sifat	= array('1.Loncos Ke Belakang/Lurus Kebawah','2.Cenderung ke belakang','3.Melengkung Keras','4.Tinggi/Rendah lebar ciut');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td> <td width="20%">Hidung</td><td><b>
			<select name="Hidung" id="Hidung" class="form-control" style="width: 300px" required value="<?php echo $hidung; ?>"> </option>
			<?php
				$l_sifat	= array('1.Pangkalnya Rata/Masuk kedalam','2.Batangnya : Membentuk kedalam/keluar lurus, alasnya menuju ke atas');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td>  </tr>

		

			

			<tr><td width="20%">Telinga</td><td><b>
			<select name="Telinga" id="Telinga" class="form-control" style="width: 300px" required value="<?php echo $telinga; ?>"> </option>
			<?php
				$l_sifat	= array('1.Bulat bujur tiga penjuru dari belakang','2.Berlengket dengan kepala dengan kepala bagian atas mengenai kepala belakang','3.Bentuk cuping berupa baja persegi/melengkukng/bergonta-ganti rata/tebal/benar');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td> <td width="20%">Bibir</td><td><b>
			<select name="Bibir" id="Bibir" class="form-control" style="width: 300px" required value="<?php echo $Bibir; ?>"> </option>
			<?php
				$l_sifat	= array('1.Tebal','2.Tipis','3.Sumbing');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td></tr>

			<tr><td width="20%">Urusan Polisi Militer</td><td><b>
			<select name="urusan" id="urusan" class="form-control" style="width: 400px" required value="<?php echo $urusan; ?>"> </option>
			<?php
				$l_sifat	= array('1.Pernah','2.Tidak Pernah');
				
				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}				
				}			
			?>			
			</select>
			</b></td></tr>
			<tr><td>SIDIK
		</td>
			<td>
			<img src="<?php echo base_url(); ?>upload/sidik/<?php echo $sidik; ?>" 
			class="form-control" style="display: inline; float: left; margin-right: 100px; width: 500px; height: 400px">
			<input type="file" name="foto_sidik" class="form-control" style="width: 250px">
			</td>
			

		</tr>
			
			


</table>





		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary">Simpan</button>
		
		</td></tr>
		</table>
	</div>
	
	
	
	</div>
	
	</form>




<<?php 

} else {
	$act		= "act_add";
	

}

}
?>