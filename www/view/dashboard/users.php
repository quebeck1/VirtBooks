<!DOCTYPE html>
<html>
<head>
    <title>Users Panel</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>List of users</h1>
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
								$queryDB->getUsers();
								?>
            </tbody>
        </table>
    </div>
			<div class="position-absolute top-50 start-50 translate-middle w-25">
				<button type="button" class="btn btn-success w-25 mx-3 mb-5">Add</button>
				<button type="button" class="btn btn-danger w-25 mx-3 mb-5">Remove</button>
			</div>
</body>
</html>
