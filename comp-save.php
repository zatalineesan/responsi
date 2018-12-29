<?php
include "config.php";
	$companyname = $_POST['companyname'];


if (isset($_POST['submit'])) {
     	$query = "INSERT INTO company (name) VALUES ('".$companyname."')";
     	$sql = mysqli_query($conn,$query);

     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil disimpan');
                window.open('comp-index.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal disimpan');
                window.open('comp-add.php','_SELF');
              </script>
            <?php
          }
   
     }

