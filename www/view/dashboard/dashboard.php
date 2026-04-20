<?php $row = new QueryDatabase(); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="view/dashboard/dashboard.css" rel="stylesheet">
    <title>Dashboard</title>
  </head>
  <body>
<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">Right Books</a>

  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
      </button>
    </li>
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      </button>
    </li>
  </ul>

  <div id="navbarSearch" class="navbar-search w-100 collapse">
    <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  </div>
</header>

<div class="container-fluid min-hv-100">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary" style="height: 100vh;">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li>
									<p class="mx-4 h5">
									<a href="/dashboard/users">Users</a>
									</p>
            </li>
          <hr class="my-3">
            <li>
									<p class="mx-4 h5">
									<a href="/dashboard/admins">Admins</a>
									</p>
            </li>
          <hr class="my-3">
            <li>
									<p class="mx-4 h5">
										<a href="/dashboard/books">Books</a>
									</p>
            </li>
          </ul>

          <hr class="my-3">

          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                Sign out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

					<div class="d-inline">
						<div class="row align-items-center position-absolute top-50 start-50 translate-middle">
							<div class="card bg-dark text-white pb-5 pt-5 text-center mx-3" style="width: 18rem;">
								<div class="card-body">
									<p class="card-text fs-1"><?php $row->numAdmins();?></p>
									<p class="card-title fs-4">admins</p>
								</div>
							</div>
							<div class="card bg-dark text-white pb-5 pt-5 text-center mx-3" style="width: 18rem;">
								<div class="card-body">
									<p class="card-text fs-1"><?php $row->numBooks();?></p>
									<p class="card-title fs-4">books</p>
								</div>
							</div>
							<div class="card bg-dark text-white pb-5 pt-5 text-center mx-3" style="width: 18rem;">
								<div class="card-body">
									<p class="card-text fs-1"><?php $row->numUsers();?></p>
									<p class="card-title fs-4">users</p>
								</div>
							</div>
						</div>
					</div>
    </main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
