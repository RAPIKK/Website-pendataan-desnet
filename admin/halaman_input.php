<?php include("inc_header.php") ?>
<?php
$barang            = "";
$tanggal_masuk     = "";
$tanggal_keluar    = "";
$nama_penerima     = "";
$note              = "";
$error             = "";
$sukses            = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from halaman where id = '$id'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $barang  = $r1['barang'];
    $tanggal_masuk      = $r1['tanggal_masuk'];
    $tanggal_keluar     = $r1['tanggal_keluar'];
    $nama_penerima      = $r1['nama_penerima'];
    $note               = $r1['note'];

    if($barang == ''){
        $error  = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $barang             = $_POST['barang'];
    $tanggal_keluar     = $_POST['tanggal_keluar'];
    $tanggal_masuk      = $_POST['tanggal_masuk'];
    $nama_penerima      = $_POST['nama_penerima'];
    $note               = $_POST['note'];

    if ($barang == '' or $tanggal_masuk == '') {
        $error     = "Silakan masukkan semua data.";
    }

    if (empty($error)) {
        if($id != ""){
            $sql1   = "UPDATE halaman set barang = '$barang',tanggal_masuk='$tanggal_masuk',tanggal_keluar='$tanggal_keluar',nama_penerima='$nama_penerima',note='$note' WHERE id = '$id'";
        }else{
            $sql1       = "INSERT INTO halaman(barang,tanggal_masuk,tanggal_keluar,nama_penerima,note) values ('$barang','$tanggal_masuk','$tanggal_keluar','$nama_penerima','$note')";
        }

        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Sukses memasukkan data";
        } else {
            $error      = "Gagal memasukkan data: " . mysqli_error($koneksi);
        }
    }
}


?>
<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="halaman.php">
        << Kembali ke halaman admin</a>
</div>
<?php
if ($error) {
?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php
}
?>
<?php
if ($sukses) {
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="barang" value="<?php echo $barang ?>" name="barang">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tanggal_masuk" value="<?php echo $tanggal_masuk ?>" name="tanggal_masuk">
        </div>
        <label for="tanggal_keluar" class="col-sm-2 col-form-label">Tanggal Keluar</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tanggal_keluar" value="<?php echo $tanggal_keluar ?>" name="tanggal_keluar">
        </div>
    </div>
        <label for="nama_penerima" class="col-sm-2 col-form-label">Nama Penerima</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_penerima" value="<?php echo $nama_penerima ?>" name="nama_penerima">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="note" class="col-sm-2 col-form-label">Note</label>
        <div class="col-sm-10">
            <textarea name="note" class="form-control" id="summernote"><?php echo $note ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
        </div>
    </div>
</form>
<?php include("inc_footer.php") ?>
