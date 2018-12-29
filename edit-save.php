<?php
	include "config.php";

  $id = $_POST['id'];
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

     	
     	$query = "UPDATE members SET fullname = '".$nama."', email = '".$email."', idcompany = '".$company."', address = '".$address."', idcity = '".$city."', foto = '".$namafile."' WHERE id ='".$id."'";

     	$sql = mysqli_query($conn,$query);
      
     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil diedit');
                window.open('index.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal diedit');
                window.open('index.php','_SELF');
              </script>
            <?php
          }
   
     }


?>