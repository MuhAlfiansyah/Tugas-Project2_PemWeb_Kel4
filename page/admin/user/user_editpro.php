<div class="box-title">
    <p>User / <b>Manajemen User</b></p>
</div>
<div id="box">

<h1>User Ubah</h1>
<!-- code by galaxy developer -->
<?php

  include 'lib/koneksi.php';

  $id = $_POST['id_user'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $email = $_POST['email'];
  $alamat = addslashes($_POST['alamat']);
  $nohp = $_POST['no_hp'];
  $username = $_POST['username'];
  $pass = $_POST['password'];

// code by galaxy developer
          try {
      			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      			$pdo = $conn->prepare('UPDATE tbl_users SET
                                  nama_lengkap = :nama_lengkap,
                                  email = :email,
                                  username = :username,
                                  password = :password,
                                  alamat = :alamat,
                                  no_hp = :no_hp
                                  WHERE id_user = :id_user');

      			$updatedata = array(':nama_lengkap' => $nama_lengkap, ':email' => $email, ':username' => $username,
                                ':password' => $pass, ':alamat' => $alamat, ':no_hp' => $nohp, ':id_user' => $id);
// code by galaxy developer
      			$pdo->execute($updatedata);

						echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
      			echo "<center><b>Profil berhasil diubah</b></center>";
            echo "</br>";
						echo"<meta http-equiv='refresh' content='1;
				    url=?page=user'>";

      		} catch (PDOexception $e) {
      			print "Insert data gagal: " . $e->getMessage() . "<br/>";
      		   die();
      		}
// code by galaxy developer
 ?>
<!-- code by galaxy developer -->
</div>
