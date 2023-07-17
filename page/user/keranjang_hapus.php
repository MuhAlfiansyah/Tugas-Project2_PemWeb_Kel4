<?php
include('lib/koneksi.php');

		$id = $_GET['id'];
// code by galaxy developer
		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_keranjang WHERE id = :id");
			$deletedata = array(':id' => $id);
			$pdo->execute($deletedata);
// code by galaxy developer
      echo "<script>alert('Barang dalam keranjang berhasil dihapus');window.location='?page=beranda'</script>";
// code by galaxy developer
		} catch (PDOexception $e) {
			print "hapus berita gagal: " . $e->getMessage() . "<br/>";
		   die();
		}
?>
