<?php
	include "config.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$city = $_POST['city'];

	$namafile = $_FILES['foto']['name'];
	$size = $_FILES['foto']['size'];
	$type = $_FILES['foto']['type'];
	$tmp = $_FILES['foto']['tmp_name'];

	$path = "foto/".$namafile;

     if (isset($_POST['submit'])) {
     	
     	$query = "INSERT INTO members (fullname,email,address,foto,idcompany,idcity) VALUES ('".$nama."','".$email."','".$address."','".$namafile."','".$company."','".$city."')";
     	$sql = mysqli_query($conn,$query);

     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil disimpan');
                window.open('index.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal disimpan');
                window.open('add.php','_SELF');
              </script>
            <?php
          }
   
     }


?>