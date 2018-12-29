<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px;padding-top: 10px;">Add Data</label>
			<div class="panel panel-body">
			<form method="POST" action="add-save.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<label>Name</label>
						<input type="text" name="nama" class="form-control input-sm">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">
						<label>Email</label>
						<input type="text" name="email" class="form-control input-sm">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12"> 
						<label>Company</label>
						<select name="company" class="form-control input-sm" >
						<?php
							include "config.php";
							$queryCo = "SELECT * FROM company";
							$sqlCo = mysqli_query($conn,$queryCo);

							while ($rowCo = mysqli_fetch_array($sqlCo)) {
								?>
									<option value="<?php echo $rowCo["idcompany"]; ?>"><?php echo $rowCo["name"]; ?></option>
								<?php
							}
						?>
				 		</select>
					 </div>
				 </div>

				 <div class="form-group row">
					<div class="col-lg-12">
						<label>Address</label>
						<input type="text" name="address" class="form-control input-sm">
					</div>
				</div>

				 <div class="form-group row">
					<div class="col-lg-12"> 
						<label>City</label>
						<select name="city" class="form-control input-sm" >
						<?php
							include "config.php";
							$queryCi = "SELECT * FROM city";
							$sqlCi = mysqli_query($conn,$queryCi);

							while ($rowCi = mysqli_fetch_array($sqlCi)) {
								?>
									<option value="<?php echo $rowCi["idcity"]; ?>"><?php echo $rowCi["cityname"]; ?></option>
								<?php
							}
						?>
				 		</select>
					 </div>
				 </div>

				 <div class="form-group row">
					<div class="col-lg-12">
						<label>Foto</label>
						<input type="file" name="foto" class="form-control input-sm">
					</div>
				</div>

				<div class="form-group row" style="margin-left: 1px";>
					<a href="index.php" title="kembali" class="btn btn-warning">Kembali</a>
					
					<input type="submit" name="submit" value="Simpan" class="btn btn-info">
					
					
				</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>