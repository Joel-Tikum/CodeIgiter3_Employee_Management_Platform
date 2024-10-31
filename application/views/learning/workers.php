<div class="container-fluid">
	<div class="row">
		<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
			<div class="container my-2 text-center">
				<img src="/uploads/images/cupcake.jpeg" alt="Profile" height="80" width="80" style="border-radius: 50px;">
				<h5>Username</h5>
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
						<a class="nav-link" href="<?= base_url('iqmasta/admin/dashboard') ?>">
							Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active text-white" href="<?= base_url('iqmasta/admin/workers') ?>">
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
				<p class="h3 text-secondary">Workers</p>
			</div>

			<!-- Main content area -->
			<div class="container my-4">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active fw-bold" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">All Workers</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link fw-bold" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Fulltime Workers</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link fw-bold" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Parttime Workers</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link fw-bold" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">Create Worker</button>
					</li>
				</ul>

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
						<div class="card-body">
							<table id="w-DataTable-1" class="table table-striped cell-border hover">
								<thead>
									<tr>
										<th>SN <i class="fa fa-toggle-on"></i></th>
										<th>Name</th>
										<th>Email</th>
										<th>Contact</th>
										<th>Gender</th>
										<th class="float-end"> </th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($workers as $worker): ?>
										<tr>
											<td><?= $i; ?></td>
											<td><?= $worker->fname . ' ' . $worker->lname; ?></td>
											<td><?= $worker->email; ?></td>
											<td><?= $worker->contact; ?></td>
											<td><?= $worker->gender; ?></td>
											<td>
												<a class="dropdown-toggle dropdown-center float-end text-decoration-none text-bg-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
													Actions
												</a>
												<ul class="dropdown-menu dropdown-menu-dark">
													<li><a href="<?= base_url('employee/edit/') . $worker->id; ?>" class="dropdown-item"><i class="fas fa-user-edit text-info"></i> Edit</a></li>
													<li><a type="button" href="<?= base_url('employee/payment/') . $worker->id; ?>" class="dropdown-item"><i class="fas fa-dollar-sign"></i> Payment</a></li>
													<li><button type="button" value="<?= $worker->id; ?>" class="dropdown-item delete"><i class="fas fa-trash-alt text-danger"></i> Delete</button></li>
												</ul>
											</td>
										</tr>
									<?php $i++;
									endforeach; ?>
								</tbody>
								<tfoot>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
						<div class="card-body">
							<table id="w-DataTable-2" class="table table-striped cell-border hover">
								<thead>
									<tr>
										<th>SN <i class="fa fa-toggle-on"></i></th>
										<th>Name</th>
										<th>Email</th>
										<th>Contact</th>
										<th>Gender</th>
										<th class="float-end"> </th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($workers as $worker):
										if ($worker->worker_type === 'Fulltime'): ?>
											<tr>
												<td><?= $i; ?></td>
												<td><?= $worker->fname . ' ' . $worker->lname; ?></td>
												<td><?= $worker->email; ?></td>
												<td><?= $worker->contact; ?></td>
												<td><?= $worker->gender; ?></td>
												<td>
													<a class="dropdown-toggle dropdown-center float-end text-decoration-none text-bg-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
														Actions
													</a>
													<ul class="dropdown-menu dropdown-menu-dark">
														<li><a href="<?= base_url('employee/edit/') . $worker->id; ?>" class="dropdown-item"><i class="fas fa-user-edit text-info"></i> Edit</a></li>
														<li><a type="button" href="<?= base_url('employee/payment/') . $worker->id; ?>" class="dropdown-item"><i class="fas fa-dollar-sign"></i> Payment</a></li>
														<li><button type="button" value="<?= $worker->id; ?>" class="dropdown-item delete"><i class="fas fa-trash-alt text-danger"></i> Delete</button></li>
													</ul>
												</td>
											</tr>
									<?php $i++;
										endif;
									endforeach; ?>
								</tbody>
								<tfoot>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
						<div class="card-body">
							<table id="w-DataTable-3" class="table table-striped cell-border hover">
								<thead>
									<tr>
										<th>SN <i class="fa fa-toggle-on"></i></th>
										<th>Name</th>
										<th>Email</th>
										<th>Contact</th>
										<th>Gender</th>
										<th class="float-end"> </th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($workers as $worker):
										if ($worker->worker_type === 'Parttime'): ?>
											<tr>
												<td><?= $i; ?></td>
												<td><?= $worker->fname . ' ' . $worker->lname; ?></td>
												<td><?= $worker->email; ?></td>
												<td><?= $worker->contact; ?></td>
												<td><?= $worker->gender; ?></td>
												<td>
													<a class="dropdown-toggle dropdown-center float-end text-decoration-none text-bg-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
														Actions
													</a>
													<ul class="dropdown-menu dropdown-menu-dark">
														<li><a href="<?= base_url('employee/edit/') . $worker->id; ?>" class="dropdown-item"><i class="fas fa-user-edit text-info"></i> Edit</a></li>
														<li><a type="button" href="<?= base_url('employee/payment/') . $worker->id; ?>" class="dropdown-item"><i class="fas fa-dollar-sign"></i> Payment</a></li>
														<li><button type="button" value="<?= $worker->id; ?>" class="dropdown-item delete"><i class="fas fa-trash-alt text-danger"></i> Delete</button></li>
													</ul>
												</td>
											</tr>
									<?php $i++;
										endif;
									endforeach; ?>
								</tbody>
								<tfoot>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
						<div class="container border border-secondary rounded mt-3 p-2">
							<form id="signup-form" class="d-n" action="<?= base_url('iqmasta/admin/workers/create'); ?>" method="post" enctype="multipart/form-data">

								<div class="row mb-2">
									<div class="col-5">
										<label for="fname" class="form-label">First Name</label>
										<input type="text" name="fname" class="form-control" id="signup-fname" required>
									</div>
									<div class="col-5" style="margin-left: 80px;">
										<label for="lname" class="form-label">Last Name</label>
										<input type="text" name="lname" class="form-control" id="signup-lname" required>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-5">
										<label for="email" class="form-label">Email address</label>
										<input type="email" name="email" class="form-control" id="signup-email" aria-describedby="emailHelp" required>
									</div>
									<div class="col-5" style="margin-left: 80px;">
										<label for="password" class="form-label">Password</label>
										<input type="password" name="password" class="form-control" id="signup-password" required>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-5">
										<label for="contact" class="form-label">Phone Number</label>
										<input type="number" name="contact" class="form-control" id="signup-contact" required>
									</div>
									<div class="col-5" style="margin-left: 80px;">
										<label for="worker_type" class="form-label">Worker Type</label>
										<select class="form-select" name="worker_type" id="worker_type">
											<option value="Fulltime">Fulltime Worker</option>
											<option value="Parttime">Parttime Worker</option>
										</select>
									</div>
								</div>

								<div class="mb-2 d-flex">
									<p>Gender</p>
									<div class="form-check form-check-inline ms-3">
										<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
										<label class="form-check-label" for="inlineRadio1">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
										<label class="form-check-label" for="inlineRadio2">Female</label>
									</div>
								</div>
								<div class="mb-4">
									<label for="photo" class="form-label">Add Photo</label>
									<input class="form-control" type="file" id="photo" name="photo" accept="image/*" required>
								</div>
								<div class="d-flex justify-content-end w-100 py-3">
									<button type="submit" class="btn btn-primary btn-sm" style="margin-right: 10px;">Sign Up</button>
									<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>

