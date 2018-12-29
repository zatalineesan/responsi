<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
	<div class="container">
		<div class="panel panel-default" style="margin-top: 100px">
				<label style="font-size: 28px;margin-left: 15px; margin-top:20px;">Data Member</label>
			<div class="panel panel-body">

				<div class="button-btn-btn">
					<a href="city-index.php">
					<button type="button" class="btn btn-info">City</button>
					</a>

					<a href="comp-index.php">
					<button type="button" class="btn btn-info">Company</button>
					</a>

					<a href="add.php">
					<button type="button" class="btn btn-success">Add Data</button>
					</a><br></br>

					<form enctype='multipart/form-data' action='' method='post'>
	                	<strong>File CSV</strong>
	                    <input type='file' name='filename' class="form-control" required="" style="margin-bottom: 10px; margin-top:5px; "></input>
	                    <input type='submit' name='submit' value='Import CSV' class="btn btn-primary btn-sm" style="text-align: right;"></input>
	                </form>
	            </div>

				<div class="table table-responsive" style="margin-top: 20px;">
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Fullname</th>
							<th>E-mail</th>
							<th>Company</th>
							<th>City</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>

						<?php
							include "config.php";
							$query = "SELECT co.idcompany, co.name as companyName, m.id as idMember, m.idcompany, m.idcity, m.fullname as fullname, m.email as email, ci.idcity, ci.cityname, ci.country as cityName FROM company co JOIN members m ON co.idcompany=m.idcompany JOIN city ci ON m.idcity=ci.idcity";
							$sql = mysqli_query($conn,$query);
							$no=0;
							while ($row = mysqli_fetch_array($sql)) {
								$no++;
						?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row["fullname"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["companyName"]; ?></td>
								<td><?php echo $row["cityName"]; ?></td>
								<td>
									 <a href="edit.php?id=<?php echo $row['idMember'] ?>" title="Edit" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<a href="detail.php?id=<?php echo $row['idMember'] ?>" title="Detail" class="btn btn-info">Detail</a>
								</td>
								<td>
									<a href="delete.php?id=<?php echo $row['idMember'] ?>" title="Delete" class="btn btn-danger">Delete</a>
								</td>
							</tr>
								<?php
							}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>