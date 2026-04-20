<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="view/login/login.css"/>
	<title>Right Bookstore</title>
</head>
<body>

	<?php require "view/parts/header-dark.php" ?>

	<div id="intro" class="bg-image shadow-2-strong">
		<div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.6);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-5 col-md-8">

						<form action="view/login/register.php" method="POST" autocomplete="off" class="bg-white  rounded-5 shadow-5-strong p-5">

							<div class="form-outline mb-4">
								<input type="username" id="usernameInput" name="username" class="form-control" />
								<label class="form-label" for="usernameInput">Username</label>
							</div>

							<div class="form-outline mb-4">
								<input type="password" id="passwordInput" name="password" class="form-control" />
								<label class="form-label" for="passwordInput">Password</label>
							</div>

								<input type="hidden" name="isAdmin" value="0">

							<div class="row mb-4">
								<button type="submit" class="btn btn-primary btn-block">Sign up</button>
							</div>

							<div class="text-center">
								<span>Already a memeber?</span>
								<a href="/login">Sign in</a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require "view/parts/footer.php" ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
