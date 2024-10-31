<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-6">
			<div class="card">
				<div class="card-header d-flex justify-content-center">
					<h4 class="text-secondary">Payment Portal</h4>
				</div>
				<div class="card-body">
					
					<form action="">
						<div class="row justify-content-between">
							<div class="col-6">
								<div class="d-flex justify-content-center"><h5>Sender</h5></div>
								<div class="mb-3">
									<label for="sender_name" class="form-label">Name:</label>
									<input type="text" class="form-control" name="sender_name" value="<?= $this->session->userdata('name'); ?>">
								</div>
								<div class="mb-3">
									<label for="sender_email" class="form-label">Email:</label>
									<input type="email" class="form-control" name="sender_email" value="<?= $this->session->userdata('email'); ?>">
								</div>
								<div class="mb-3">
									<label for="sender_number" class="form-label">Transaction Number:</label>
									<input type="number" class="form-control" name="sender_number">
								</div>
							</div>

							<div class="col-6">
							<div class="d-flex justify-content-center"><h5>Receiver</h5></div>
							<div class="mb-3">
									<label for="receiver_name" class="form-label">Name:</label>
									<input type="text" class="form-control" name="receiver_name" value="<?= $employee[0]->name; ?>">
								</div>
								<div class="mb-3">
									<label for="receiver_email" class="form-label">Email:</label>
									<input type="email" class="form-control" name="receiver_email" value="<?= $employee[0]->email; ?>">
								</div>
								<div class="mb-3">
									<label for="receiver_number" class="form-label">Transaction Number:</label>
									<input type="number" class="form-control" name="receiver_number" value="<?= $employee[0]->contact; ?>">
								</div>
							</div>
						</div><hr>
						<div class="form-group">
							<button class="btn btn-success btn-sm payment" type="submit">Make Payment</button>
							<a class="btn btn-danger btn-sm payment" href="<?= base_url('employees'); ?>">Quit Operation</a>
						</div>
						<div class="card-footer">
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
