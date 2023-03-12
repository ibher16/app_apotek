<?php
@session_start();
date_default_timezone_set("Asia/Jakarta");
set_time_limit(0);

//login
function namalogin($id){
include 'models/konek.php';
$querys = "SELECT nama FROM t_user where id_user = '$id'";
$result = $db_li->query($querys);
       $row = $result->fetch_assoc();
    return $row['nama'];
}
function idusertouser($id){
    include 'models/konek.php';
    $querys = "SELECT user FROM tb_admin where id = '$id'";
    $result = $db_li->query($querys);
           $row = $result->fetch_assoc();
        return $row['user'];
}
function usertonama($id){
    include 'models/konek.php';
    $querys = "SELECT nama FROM t_user where user_name = '$id'";
    $result = $db_li->query($querys);
           $row = $result->fetch_assoc();
        return $row['nama'];
}


function statuslog($kode){
    if($kode==1){
        echo "Sukses";
    }else{
        echo "Gagal";
    }
}

function statusthn($kode){
    if($kode==1){
        echo "Aktif";
    }else{
        echo "Non Aktif";
    }
}

function statuslogin($kode){
    if($kode==1){
        echo "Fordev";
    }elseif($kode==2){
        echo "Andev";
    }else{
        echo "Administrator";
    }
}

function jk($kode){
    if($kode==1){
        echo "Laki-laki";
    }else{
        echo "Perempuan";
    }
}

function statususer($kode){
    if($kode==1){
        echo "Fordev";
    }elseif($kode==2){
        echo "Andev";
    }else{
        echo "Administrator";
    }
}


function waktu($kode){
    if($kode==1){
        echo "2W";
    }elseif($kode==2){
        echo "1M";
    }elseif($kode==3){
        echo "2M";
    }elseif($kode==4){
        echo "3M";
    }elseif($kode==5){
        echo "6M";
    }
}

function statuskaryawan($kode){
    if($kode==1){
        echo "Kepala Sub Lokasi";
    }else{
        echo "Pegawai Biasa";
    }
}

function usertolevel($id){
    include 'models/konek.php';
    $querys = "SELECT level FROM t_user where id_user ='$id'";
    $result = $db_li->query($querys);
           $row = $result->fetch_assoc();
        return $row['level'];
}

function plasma($id){
    include 'models/konek.php';
    $querys = "SELECT nm_plasma FROM t_plasma where id_plasma ='$id'";
    $result = $db_li->query($querys);
           $row = $result->fetch_assoc();
        return $row['nm_plasma'];
}

function karyawan($id){
    include 'models/konek.php';
    $querys = "SELECT nama FROM t_karyawan where id_karyawan ='$id'";
    $result = $db_li->query($querys);
           $row = $result->fetch_assoc();
        return $row['nama'];
}

function lokasi($id){
    include 'models/konek.php';
    $querys = "SELECT nm_lokasi FROM r_lokasi where id_lokasi ='$id'";
    $result = $db_li->query($querys);
           $row = $result->fetch_assoc();
        return $row['nm_lokasi'];
}

function jumlahpaket($id){
    include 'models/konek.php';
    $querys = "SELECT gram FROM r_jenis_paket where id_jenis_paket ='$id'";
    $result = $db_li->query($querys);
           $row = $result->fetch_assoc();
        return $row['gram'];
}

function formatTanggal($date){
    // pisahkan tanda - dan jadikan array
    $pecah = explode('-', $date);
    return $pecah[2].'-'.$pecah[1].'-'.$pecah[0];
  }

//fungsi create
function create($table, $data) {
    include('models/konek.php');
    foreach ($data as $field => $value) {
        $values[] = "'" . addslashes($data[$field]) . "'";
        $fields[] = "`" . $field . "`";
		$binparam .= 's';
    }
    $value_list = join(",", $values);
    $field_list = join(",", $fields);
    $query = "INSERT INTO " . $table . " (" . $field_list . ") VALUES (" . $value_list . ")";
    /*$stmt = $db_li->prepare($query);
	$stmt->bind_param($binparam, $value_list);
	$hasil = $stmt->execute();*/
	$hasil = $db_li->query($query);
    return $hasil;
}



//fungsi edit
function update($table, $data, $where) {
    include('models/konek.php');
    foreach ($where as $f_where => $v_where) {
        $vws[] = "`" . $f_where . "` = '" . addslashes($where[$f_where]) . "'";
    }
    foreach ($data as $field => $value) {
        $dt[] = "`" . $field . "` = '" . addslashes($data[$field]) . "' ";
    }
    $data_list = join(",", $dt);
    $where_list = join(" AND ", $vws);
    $query = "UPDATE $table SET $data_list WHERE $where_list ";
    $hasil = $db_li->query($query);
    return $hasil;
}

//fungsi delete
function delete($namaTable,$kolomID,$id){
    include('models/konek.php');
	$sql = "DELETE from $namaTable WHERE $kolomID = '$id'";
	$result = mysqli_query($db_li,$sql);
	return $result;
}

function select($namaTable){
    include('models/konek.php');		
	$q = "SELECT * FROM {$namaTable} ";
	$result = mysqli_query($db_li,$q);
	

	return $result;
}

function selectwhere($namaTable,$kolom,$id){
    include('models/konek.php');		
	$q = "SELECT * FROM {$namaTable} where $kolom='$id'";
	$result = mysqli_query($db_li,$q);
	

	return $result;
}

function selecfilter($namaTable,$filter){
    include('models/konek.php');		
	$q = "SELECT * FROM {$namaTable} where {$filter}";
	$result = mysqli_query($db_li,$q);
	return $result;
}

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}



?>