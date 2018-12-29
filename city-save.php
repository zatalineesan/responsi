<?php
include "config.php";
	$cityname = $_POST['cityname'];
	$countryname = $_POST['countryname'];

if (isset($_POST['submit'])) {
     	$query = "INSERT INTO city (cityname,country) VALUES ('".$cityname."','".$countryname."')";
     	$sql = mysqli_query($conn,$query);

     	if ($sql) {
     		?>
              <script>
                alert('Data berhasil disimpan');
                window.open('city-index.php','_SELF');
              </script>
            <?php
          }else{
            ?>
              <script>
                alert('Data Gagal disimpan');
                window.open('city-add.php','_SELF');
              </script>
            <?php
          }
   
     }

