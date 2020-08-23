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
		<div class="card card-dark card-outline">
			<div class="card-header">
				<div class="col-sm-5">
					<button type="button" data-toggle="modal" data-target="#modal-lg" class="btn btn-info">Add Resume</button>
				</div>
			</div>
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Name Resume</th>
							<th>Place</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Deskripsi</th>
							<th>Image</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<!-- Add -->
<div class="modal fade" id="modal-lg">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Resume</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Name Resume</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="nama_project" id="inputName" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Place</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="client_project" id="inputEmail" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Start Date</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="deadline_project" id="inputEmail">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">End Date</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="deadline_project" id="inputEmail">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Image</label>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Edit -->
<div class="modal fade" id="modal-lg">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Resume</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Name Resume</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="nama_project" id="inputName" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Place</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="client_project" id="inputEmail" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Start Date</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="deadline_project" id="inputEmail">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">End Date</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="deadline_project" id="inputEmail">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Image</label>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		$("#kategories").select2({
			theme: 'bootstrap4'
		})
		$("#skill").select2({
			theme: 'bootstrap4'
		})
	});
</script>
