
<div class="container-sm">
	<div class="row m-5">

		<nav class="navbar navbar-expand-lg bg-primary rounded fixed-top m-3 w-100">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">More</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Contact Us
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Email</a></li>
								<li><a class="dropdown-item" href="#">WhatsApp</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('iqmasta/loginform')?>" class="nav-link" aria-disabled="true">Apply Now</a>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success text-white" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>

	</div>
</div>

<div class="jumbotron d-flex flex-column align-items-center">
  <h1 class="display-4">Welcome IQ Masta Academy!</h1>
  <p class="lead">Here, we look into some petinent aspects of technologies</p>
</div>

<div class="container my-5">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
			<button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Machine Learning</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Artificial Intelligence</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Robotics</button>
		</li>
	</ul>

	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo suscipit officia dolor quaerat mollitia expedita labore cupiditate inventore necessitatibus. Illum omnis aliquid odio officiis quod enim? Quae quisquam sit eveniet?</p>
		</div>
		<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo suscipit officia dolor quaerat mollitia expedita labore cupiditate inventore necessitatibus. Illum omnis aliquid odio officiis quod enim? Quae quisquam sit eveniet?</p>
		</div>
		<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo suscipit officia dolor quaerat mollitia expedita labore cupiditate inventore necessitatibus. Illum omnis aliquid odio officiis quod enim? Quae quisquam sit eveniet?</p>
		</div>
	</div>
</div>

    
<div class="container-sm my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	 <div class="container-sm ">
			<div class="row justify-content-center align-items-center my-1" style="height: 150px;">
				<div class="col-6">
				<p class="text-lg text-emphasis" style="text-align: center;">Have been wishing to join us? <br>
						We are currently open for new members, so hurry and apply now !.</p>
				</div>
			</div>
			<div class="row justify-content-center align-items-center my-1" style="height: 150px;">
				<div class="col-2">
				<a href="<?= base_url('iqmasta/loginform')?>" class="btn btn-primary btn-lg">Apply Now</a>
				</div>
				<hr>
			</div>
	 </div>
