<?php
//menambah data jenis obat
if (isset($_POST['addjenisobat'])) {
	$namaobat = $_POST['namaobat'];
	$tgl_entri = date('Y-m-d H-i-s');

	$data = array(
		"nm_jenis_obat" => $_POST['namaobat'],
		"tgl_entri" => $_POST['tgl_entri']
	);

	//cek data
	$sql = select("r_jenis_obat where nm_jenis_obat='$namaobat'");
	$jumlah = mysqli_num_rows($sql);
	if ($jumlah == 0) {
		$addtotable = create("r_jenis_obat", $data);
		if ($addtotable) {
?>
			<div class="alert alert-success alert-dismissible" role="alert">
				Entri Data sukses di kirim!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

		<?php
			header('location:index.php?page=jenis_obat');
		} else {
		?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				Proses Entri Data gagal!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php
			header('location:index.php?page=jenis_obat');
		}
	}
}

//update data jenis obat
if (isset($_POST['editjenisobat'])) {
	$idj = $_POST['idj'];
	$jenisobat = $_POST['jenisobat'];
	$data = array(
		"id_jenis_obat" => $_POST['idj'],
		"nm_jenis_obat" => $_POST['jenisobat']
	);

	$query = update("r_jenis_obat", $data, array("id_jenis_obat" => $idj));
	if ($query) {
		?>
		<div class="alert alert-success alert-dismissible" role="alert">
			Update Data sukses!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

	<?php
		header('location:index.php?page=jenis_obat');
	} else {
	?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			Proses Update Data gagal!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php
		header('location:index.php?page=jenis_obat');
	}
}

//menghapus data jenis obat
if (isset($_POST['hapusjenisobat'])) {
	$idj = $_POST['idj'];

	$hapus = delete("r_jenis_obat", "id_jenis_obat", $idj);
	if ($hapus) {
	?>
		<div class="alert alert-success alert-dismissible" role="alert">
			Proses Delete Data sukses di kirim!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

	<?php
		header('location:index.php?page=jenis_obat');
	} else {
	?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			Proses Delete Data gagal!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php
		header('location:index.php?page=jenis_obat');
	}
}


//menambah data satuan obat
if (isset($_POST['addsatuan'])) {
	$satuan = $_POST['satuan'];
	$tgl_entri = date('Y-m-d');

	$data = array(
		"nm_satuan_obat" => $_POST['satuan'],
		"tgl_entri" => $_POST['tgl_entri']
	);

	//cek data
	$sql = select("r_satuan_obat where nm_satuan_obat='$satuan'");
	$jumlah = mysqli_num_rows($sql);
	if ($jumlah == 0) {
		$addtotable = create("r_satuan_obat", $data);
		if ($addtotable) {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				Entri Data sukses di kirim!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

		<?php
			header('location:index.php?page=satuan');
		} else {
		?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				Proses Entri Data gagal!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php
			header('location:index.php?page=satuan');
		}
	}
}

//update data satuan obat
if (isset($_POST['editsatuan'])) {
	$ids = $_POST['ids'];
	$satuanobat = $_POST['satuanobat'];
	$data = array(
		"id_satuan_obat" => $_POST['ids'],
		"nm_satuan_obat" => $_POST['satuanobat']
	);

	$query = update("r_satuan_obat", $data, array("id_satuan_obat" => $ids));
	if ($query) {
		?>
		<div class="alert alert-success alert-dismissible" role="alert">
			Update Data sukses!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

	<?php
		header('location:index.php?page=satuan');
	} else {
	?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			Proses Update Data gagal!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php
		header('location:index.php?page=satuan');
	}
}

//menghapus data satuan obat
if (isset($_POST['hapussatuan'])) {
	$ids = $_POST['ids'];

	$hapus = delete("r_satuan_obat", "id_satuan_obat", $ids);
	if ($hapus) {
	?>
		<div class="alert alert-success alert-dismissible" role="alert">
			Proses Delete Data sukses di kirim!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

	<?php
		header('location:index.php?page=satuan');
	} else {
	?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			Proses Delete Data gagal!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
<?php
		header('location:index.php?page=satuan');
	}
}

?>