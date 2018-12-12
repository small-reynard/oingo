<?php
session_start();
if(!isset($_SESSION['userid']))
{
	echo"<script type='text/javascript'>;location='login.html';</script>";
}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>Oingo | Homepage</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style>
			.col-center-block {
				float: none;
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
			
			.jumbotron {
				background-image: url("img/primary-search-bg.jpg");
				background-size: cover;
			}
		</style>
	</head>

	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

			<a class="navbar-brand" href="index.html">OINGO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">OINGO<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Friends
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="friends.php">Friends List</a>
							<a class="dropdown-item" href="requestsent.php">Request Sent</a>
							<a class="dropdown-item" href="requestreceved.php">Request Received</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="filter.php">Filter</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="test.php">Test</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="setting.php">Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Sign Out</a>
					</li>
				</ul>
			</div>

		</nav>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<span class="text-light"><h1 class="display-4">OINGO</h1></span>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-md-3 col-12">
					<div class="container">
						<div class="card border-dark">
							<div class="card-body">
								<h5 class="card-title">Username</h5>
								<p class="card-text">Gender</p>
								<p class="card-text">Birthdate</p>
								<p class="card-text">Region</p>
								<p class="card-text">State</p>
							</div>
						</div>
					</div>
					<!--Sidebar content-->
				</div>
				<div class="col-sm-6 col-md-9 col-12">
					<div class="container">
						<div class="card mb-3 border-primary">
							<div class="card-header">
								New Note
							</div>
							<div class="card-body">
								<form name="note" action="" method="post">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">Text</span>
										</div>
										<textarea class="form-control" aria-label="With textarea" id="notetext"></textarea>
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon">Tags (use space seperate)</span>
										</div>
										<input type="text" class="form-control" id="tags" aria-describedby="basic-addon3">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<label class="input-group-text" for="restrict">Who can see this note</label>
										</div>
										<select class="custom-select" id="restrict">
											<option selected value="all">Everyone</option>
											<option value="friends">Only Friends</option>
											<option value="self">Only Myself</option>
										</select>
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<label class="input-group-text" for="radius">Viewable Radius</label>
										</div>
										<select class="custom-select" id="radius">
											<option selected value="100">100</option>
											<option value="500">500</option>
											<option value="800">800</option>
											<option value="1000">1000</option>
										</select>
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<label class="input-group-text" for="ifcomment">If allow comment�/label>
										</div>
										<select class="custom-select" id="ifcomment">
											<option selected value="1">Allowed</option>
											<option value="0">Not Allow</option>
										</select>
									</div>
									<button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Post</button>
								</form>
							</div>
						</div>
						<div class="card mb-3 border-primary">
							<div class="card-header">
								Username
							</div>
							<div class="card-body">
								<h6 class="card-subtitle mb-2 text-muted">Placename + Location</h6>
								<p class="card-text text-primary">notetext</p>
								<a href="#" class="card-link">#tag1</a>
								<a href="#" class="card-link">#tag2</a>

							</div>
							<div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<form name="comment" action="" method="post">
											<div class="row">
												<div class="col-10">
													<input type="text" name="state" class="form-control" placeholder="Input Comment">
												</div>
												<div class="col-2">
													<button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Comment</button>
												</div>
											</div>
										</form>
									</li>
									<li class="list-group-item">Username: + Comment</li>
									<li class="list-group-item">Username: + Comment</li>
									<li class="list-group-item">Username: + Comment</li>
									<li class="list-group-item">Username: + Comment</li>
								</ul>
							</div>
						</div>
						<div class="card mb-3 border-primary">
							<div class="card-header">
								Username
							</div>
							<div class="card-body">

								<h6 class="card-subtitle mb-2 text-muted">Placename + Location</h6>
								<p class="card-text text-primary">notetext</p>
								<a href="#" class="card-link">#tag1</a>
								<a href="#" class="card-link">#tag2</a>
							</div>
						</div>
						<div class="card mb-3 border-primary">
							<div class="card-header">
								Username
							</div>
							<div class="card-body">

								<h6 class="card-subtitle mb-2 text-muted">Placename + Location</h6>
								<p class="card-text text-primary">notetext</p>
								<a href="#" class="card-link">#tag1</a>
								<a href="#" class="card-link">#tag2</a>
							</div>
						</div>
						<div class="card mb-3 border-primary">
							<div class="card-header">
								Username
							</div>
							<div class="card-body">

								<h6 class="card-subtitle mb-2 text-muted">Placename + Location</h6>
								<p class="card-text text-primary">notetext</p>
								<a href="#" class="card-link">#tag1</a>
								<a href="#" class="card-link">#tag2</a>
							</div>
						</div>
						<div class="card mb-3 border-primary">
							<div class="card-header">
								Username
							</div>
							<div class="card-body">

								<h6 class="card-subtitle mb-2 text-muted">Placename + Location</h6>
								<p class="card-text">notetext</p>
								<a href="#" class="card-link">#tag1</a>
								<a href="#" class="card-link">#tag2</a>
							</div>
						</div>
						<div class="card mb-3 border-primary">
							<div class="card-header">
								Username
							</div>
							<div class="card-body text-primary">
								<h6 class="card-subtitle mb-2 text-muted">Placename + Location</h6>
								<p class="card-text">notetext</p>
								<a href="#" class="card-link">#tag1</a>
								<a href="#" class="card-link">#tag2</a>
							</div>
						</div>
						<div class="card mb-3 border-primary">
							<div class="card-header">
								Username
							</div>
							<div class="card-body text-primary">

								<h6 class="card-subtitle mb-2 text-muted">Placename + Location</h6>
								<p class="card-text">notetext</p>
								<a href="#" class="card-link">#tag1</a>
								<a href="#" class="card-link">#tag2</a>
							</div>
						</div>
					</div>
					<!--Body content-->
				</div>

			</div>
		</div>
		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>