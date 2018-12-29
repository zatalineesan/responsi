<?php
	include "config.php";
	$id = $_GET['id'];
	$query = "DELETE FROM city WHERE idcity = '".$id."' ";
	$sql = mysqli_query($conn,$query);
	if ($sql) {
		?>
				<script>
					alert('Data Berhasil dihapus');
					window.open('city-index.php','_SELF');
				</script>
			<?php
	}else{
		?>
				<script>
					alert('data gagal dihapus');
					window.open('city-index.php','_SELF');
				</script>
			<?php
	}
?>