<div class="box-title">
    <p>Barang / <b>Manajemen Barang Jualan</b></p>
</div>
<div id="box">
<h1>Barang Jualan Hapus</h1>

<!-- code by galaxy developer -->
<?php
include('lib/koneksi.php');

		$id = $_GET['id'];
// code by galaxy developer
    $query = $conn->prepare("SELECT * FROM tbl_barang WHERE id_barang =:id");
    $query->bindparam(':id', $id);
    $query->execute();
    $row=$query->fetch(PDO::FETCH_OBJ);

      unlink("img/jersey/$row->nama_image");
// code by galaxy developer
		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_barang WHERE id_barang = :id");
			$deletedata = array(':id' => $id);

			$pdo->execute($deletedata);
// code by galaxy developer
      echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
			echo "<center><b>data barang berhasil dihapus</b></center>";
      echo "</br>";
      echo"<meta http-equiv='refresh' content='1;
      url=?page=barang'>";
// code by galaxy developer
		} catch (PDOexception $e) {
			print "hapus berita gagal: " . $e->getMessage() . "<br/>";
		   die();
		}
?>
<!-- code by galaxy developer -->
</div>
