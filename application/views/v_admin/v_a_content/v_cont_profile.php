<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="m-0 text-dark"><?= $header ?></h4>
			</div>
		</div>
	</div>
</div>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="card card-dark card-outline">
					<div class="card-body box-profile">
						<div class="text-center">
							<img class="profile-user-img img-fluid img-circle" src="<?= base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User profile picture">
						</div>
						<h3 class="profile-username text-center">Arnan Abdiel Theopilus</h3>
						<p class="text-muted text-center">Software Engineer</p>
						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
								<b>Location</b> <a class="float-right">Yogyakarta</a>
							</li>
							<li class="list-group-item">
								<b>Place,Birth</b> <a class="float-right">Ngawi, 23 Juni 1999</a>
							</li>
							<li class="list-group-item">
								<b>Email</b> <a class="float-right">arnantheofilus@gmail.com</a>
							</li>
							<li class="list-group-item">
								<b>Motto</b> <a class="float-right">"Make Somethings New.."</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card card-dark">
					<div class="card-header">
						<h3 class="card-title">About Me</h3>
					</div>
					<div class="card-body">
						<p class="text-muted">
							Lorem ipsum represents a long-held tradition for designers,
							typographers and the like. Some people hate it and argue for
							its demise, but others ignore the hate as they create awesome
							tools to help create filler text for everyone from bacon lovers
							to Charlie Sheen fans.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card card-dark card-outline">
					<div class="card-header p-2">
						<ul class="nav nav-pills">
							<li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">LinkedIn</a></li>
							<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Github</a></li>
							<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Facebook</a></li>
							<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Twitter</a></li>
							<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Instagram</a></li>
							<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Google</a></li>
							<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Youtube</a></li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content">
							<div class="active tab-pane" id="settings">
								<form class="form-horizontal">
									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Account Name</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputName" placeholder="Name.." readonly>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Account Url</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputEmail" placeholder="https://" readonly>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card-footer text-right">
						<div class="row">
							<div class="col-sm-1">
								<button type="submit" class="btn btn-info">Edit</button>
							</div>
							<div class="col-sm-1">
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
