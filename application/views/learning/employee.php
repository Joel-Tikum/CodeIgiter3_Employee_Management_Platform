<div class="container-fluid">
	<!-- <?php //var_dump($employees); ?> -->
	<div class="row justify-content-center z-0 position-relative">
		<div class="col-md-11 mt-5">
			<div class="card">
				<div class="card-header">
					<H2 class="text-secondary">Current Employees
						<a href="<?= base_url('employee/add'); ?>" class="btn btn-primary btn-sm float-end">Add Employee</a>
					</H2>
				</div>
				<div class="card-body">
					<table id="DataTable" class="table table-striped cell-border hover">
						<thead>
							<tr>
								<th>SN <i class="fa fa-toggle-on"></i></th>
								<th>Name</th>
								<th>Email</th>
								<th>Contact</th>
								<th class="float-end"> </th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;
							foreach ($employees as $emps): ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $emps->fname .' '.$emps->lname; ?></td>
									<td><?= $emps->email; ?></td>
									<td><?= $emps->contact; ?></td>
									<td>
										<a class="dropdown-toggle dropdown-center float-end text-decoration-none text-bg-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu dropdown-menu-dark">
											<li><a href="<?= base_url('employee/edit/') . $emps->id; ?>" class="dropdown-item"><i class="fas fa-user-edit text-info"></i> Edit</a></li>
											<li><a type="button" href="<?= base_url('employee/payment/').$emps->id; ?>" class="dropdown-item"><i class="fas fa-dollar-sign"></i>  Payment</a></li>
											<li><button type="button" value="<?= $emps->id; ?>" class="dropdown-item delete"><i class="fas fa-trash-alt text-danger"></i> Delete</button></li>
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
		</div>
	</div>

	<!-- Alert Message -->
	<?php if ($this->session->flashdata('status')): ?>
		<?= $this->session->flashdata('status'); ?>
	<?php endif; ?>
</div>


<div class="container">
    <img src="uploads/images/<?php //$admin->photo; ?>" alt="Misk" height="100" width="100">
</div>

