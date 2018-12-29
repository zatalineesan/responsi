<!DOCTYPE html>
<html>
<head>
	<title>Edit Kota</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
<?php
	include "config.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM city WHERE idcity='".$id."'";
	$sql = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($sql);
?>

	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px;margin-top: 20px;">Edit Kota</label>
			<div class="panel panel-body">
			<form method="POST" action="city-save.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"  >
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label>City Name</label>
						<input type="text" name="cityname" class="form-control input-sm" value="<?php echo $row['cityname']; ?>">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label>Country</label>
						<input type="text" name="countryname" class="form-control input-sm" value="<?php echo $row['country']; ?>">
					</div>
				</div>

				<div class="form-group row" style="margin-left: 1px;">
					<a href="city-index.php" title="kembali" class="btn btn-warning">Kembali</a>
					<input type="submit" name="submit" value="Simpan" class="btn btn-info">
				</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>