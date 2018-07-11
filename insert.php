<?php include "partials/header.php" ?>
<?php include "partials/navbar.php" ?>

	<div class="conatiner">
		<div class="col-md-8 col-md-offset-2">
			<form action="action/insert.php" method="POST">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="address" class="form-control" name="address">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="phone" class="form-control" name="phone">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary btn-block" value="Insert">
			</div>
		</form>
		</div>
			

	</div>
<?php include "partials/footer.php" ?>