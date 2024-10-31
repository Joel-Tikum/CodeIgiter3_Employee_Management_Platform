
<div class="container-fluid">
	<div class="row">
		<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
			<div class="container my-2 text-center">
				<img src="/uploads/images/cupcake.jpeg" alt="Profile" height="80" width="80" style="border-radius: 50px;">
				<h5><?= $this->session->userdata('fname') .' '. $this->session->userdata('lname'); ?></h5>
				<hr>
			</div>
			<div class="row">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="button-search">
					<button class="btn btn-outline-primary" type="button" id="button-search">Search</button>
				</div>
			</div>
			<div class="position-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link active text-white" href="<?= base_url('iqmasta/admin/dashboard') ?>">
							Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('iqmasta/admin/workers') ?>">
							Workers
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('iqmasta/admin/tasks') ?>">
							Tasks
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h2">Beta Manager</h1>
				<div class="row d-flex justify-content-end align-items-center w-50">
					<div class="col-8 d-flex justify-content-end align-items-center" style="margin-right: 20px;"><?= $date; ?><i class="fa-solid fa-bell" style="margin-right: 15px; margin-left:15px"></i><i class="fa-solid fa-message"></i></div>
					<img class="col-4" src="/application/assets/IQ_Masta_logo.jpg" alt="Logo" style="height:60px; width:70px; border-radius:20px">
				</div>
			</div>

			<div class="container border border-secondary">
				<p class="h3 text-secondary">Dashboard</p>
			</div>

			<!-- Main content area -->
			<div class="container">
				<p class="text-danger">Welcome to the admin dashboard! This page is still under development</p>
			</div>
		</main>
	</div>
</div>
