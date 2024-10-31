
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-7 mt-5">
			<div class="card">
				<div class="card-header">
					<H2 class="text-secondary">Editing an employee...
						<a href="<?= base_url('employees'); ?>" class="btn btn-warning btn-sm float-end">Back</a>
					</H2>
				</div>
				<div class="card-body">
					<?php foreach($employee as $emp): ?>
					<form action="<?= base_url('employee/update/').$emp->id; ?>" method="post">
						<div class="form-group">
							<label for="name" class="label-control">Name: </label>
							<input type="text" class="form-control" name="name" value="<?= $emp->name; ?>" required>
						</div><br>
						<div class="form-group">
							<label for="name" class="label-control">Email: </label>
							<input type="email" class="form-control" name="email" value="<?= $emp->email; ?>" required>
						</div><br>
						<div class="form-group">
							<label for="name">Contact: </label>
							<input type="number" class="form-control" name="contact" value="<?= $emp->contact; ?>" required>
						</div><br>
						<div class="form-group">
							<button class="btn btn-success btn-sm" type="submit">Update</button>
							<a href="<?= base_url('employees'); ?>" class="btn btn-danger btn-sm">Cancel</a>
						</div>
					</form>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

