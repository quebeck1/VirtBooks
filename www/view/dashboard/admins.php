<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>List of admins</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
										<th>Name</th>
                </tr>
            </thead>
            <tbody class="border">
										<?php
										$queryDB = new QueryDatabase;
										$queryDB->getAdmins();
										?>
            </tbody>
        </table>
			<div>
				<form action="send_admin.php" method="POST">
					<div class="form-group">
						<label>Title: <input type="text" required class="form-control"></label>
						<label>Author: <input type="text" required class="form-control"></label>
						<label>Category: <input type="text" required class="form-control"></label>
					</div>
					<div>
						<button type="submit" class="btn btn-secondary mt-3">Update</button>
					</div>
				</form>
			</div>

			<div>
				<form action="send_admin.php" method="POST">
					<div class="form-group">
						<label>ID: <input type="text" required class="form-control"></label>
					</div>
					<div>
						<button type="submit" class="btn btn-secondary mt-3">Update</button>
					</div>
				</form>
			</div>

    </div>
</body>
</html>
