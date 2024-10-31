
<div class="container-fluid">
<!-- <?php // $this->session->password; ?> -->
	<div class="row justify-content-center">
		<div class="col-md-7 mt-5">
			<div class="card">
				<div class="card-header">
					<H2 class="text-secondary">Creating an employee...
						<a href="<?= base_url('employees'); ?>" class="btn btn-warning btn-sm float-end">Back</a>
					</H2>
				</div>
				<div class="card-body">
					<form action="<?= base_url('employee/create'); ?>" method="post">
						<div class="form-group">
							<label for="name">Name: </label>
							<input type="text" class="form-control" name="name" required>
						</div><br>
						<div class="form-group">
							<label for="name">Email: </label>
							<input type="email" class="form-control" name="email" required>
						</div><br>
						<div class="form-group">
							<label for="name">Contact: </label>
							<input type="number" class="form-control" name="contact" required>
						</div><br>
						<div class="form-group">
							<button class="btn btn-success btn-ms" type="submit">Submit</button>
							<button class="btn btn-info btn-ms" type="reset">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

