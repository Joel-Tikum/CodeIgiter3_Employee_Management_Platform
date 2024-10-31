<div class="container-fluid" style="background-color: #0b2981; height:100vh; padding-top:1px;">
	<div class="container container-md my-3">
		<div class="row justify-content-center">
			<div class="col-6">
				<div class="card max-w-md" style="box-shadow: 3px 3px 5px 7px lightgreen;">

					<div class="card-header">
						<h2 class="card-title text-center mb-3" id="form-title">Login To IQ Masta</h2>
					</div>

					<div class="card-body">
						<form id="login-form" method="post" action="<?= base_url('iqmasta/login'); ?>">
							<div class="mb-3">
								<label for="email" class="form-label">Email address</label>
								<input type="email" name="email" class="form-control" id="login-email" aria-describedby="emailHelp" required>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" name="password" class="form-control" id="login-password" required>
							</div>
							<div class="mb-4 d-flex align-items-center">
							<i class="fa-solid fa-hand-point-right"></i>
								<div class="form-check form-check-inline ms-3">
									<input class="form-check-input" type="radio" name="position" id="inlineRadio1" value="manager">
									<label class="form-check-label" for="inlineRadio1">I am a manager</label>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-sm">Login</button>
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
							<div class="text-center mt-3">
								<a href="#" id="join-now" class="btn btn-warning btn-sm">I don't have an Account</a>
							</div>
						</form>

						<form id="signup-form" class="d-none" action="<?= base_url('iqmasta/signup'); ?>" method="post" enctype="multipart/form-data">

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

							<div class="mb-2">
								<label for="email" class="form-label">Email address</label>
								<input type="email" name="email" class="form-control" id="signup-email" aria-describedby="emailHelp" required>
							</div>
							<div class="row mb-2">
								<div class="col-5">
									<label for="password" class="form-label">Password</label>
									<input type="password" name="password" class="form-control" id="signup-password" required>
								</div>
								<div class="col-5" style="margin-left: 80px;">
									<label for="cpassword" class="form-label">Confirm Password</label>
									<input type="password" name="cpassword" class="form-control" id="signup-cpassword" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="contact" class="form-label">Phone Number</label>
								<input type="number" name="contact" class="form-control" id="signup-contact" required>
							</div>
							<div class="mb-2 d-flex">
								<p>Gender</p>
								<div class="form-check form-check-inline ms-3">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
									<label class="form-check-label" for="inlineRadio1">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
									<label class="form-check-label" for="inlineRadio2">Female</label>
								</div>
							</div>
							<div class="mb-4">
								<label for="photo" class="form-label">Add Photo</label>
								<input class="form-control" type="file" id="photo" name="photo" accept="image/*" required>
							</div>
							<div class="justify-content-center w-100">
								<button type="submit" class="btn btn-primary btn-sm">Sign Up</button>
								<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
							</div>
							<div class="text-center mt-3">
								<a href="#" id="back-to-login" class="btn btn-info btn-sm">I have an Account</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<script>
	const loginForm = document.getElementById('login-form');
	const signupForm = document.getElementById('signup-form');
	const formTitle = document.getElementById('form-title');
	const joinNowLink = document.getElementById('join-now');
	const backToLoginLink = document.getElementById('back-to-login');

	joinNowLink.addEventListener('click', () => {
		loginForm.classList.add('d-none');
		signupForm.classList.remove('d-none');
		formTitle.textContent = 'Create account now !!';
	});

	backToLoginLink.addEventListener('click', () => {
		signupForm.classList.add('d-none');
		loginForm.classList.remove('d-none');
		formTitle.textContent = 'Login';
	});
</script>
</div>
