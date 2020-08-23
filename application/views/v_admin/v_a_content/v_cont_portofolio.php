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
					<button type="button" data-toggle="modal" data-target="#modal-lg" class="btn btn-info">Add Portofolio</button>
				</div>
			</div>
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Name Project</th>
							<th>Client</th>
							<th>Deadline</th>
							<th>Kategori</th>
							<th>Image</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($data as $d) {
						?>
							<tr id="<?= $d->id_portofolio ?>">
								<td><?= $d->nama_project ?></td>
								<td><?= $d->client_project ?></td>
								<td><?= $d->deadline_project ?></td>
								<td><?= $d->category_project_id ?></td>
								<td><?= $d->gambar_project ?></td>
								<td style="text-align:center">
									<button class="btn btn-sm btn-info tombolEdit" data-id="<?= $d->id_skill_project ?>" data-nama="<?= $d->nama_skill_project ?>" data-desk="<?= $d->deskripsi_skill_project ?>" data-pres="<?= $d->presentase_skill_project ?>" data-idkat="<?= $d->category_Skill_project_id ?>" data-title="Edit"><i class="fas fa-pencil-alt"></i></button>
									<a href="#" data-id="<?= $d->id_skill_project ?>" id="delete_id" class="btn btn-sm btn-danger tombolHapus">
										<i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php
						}
						?>
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
				<h4 class="modal-title">Add Portofolio</h4>
			</div>
			<div class="modal-body">
				<form id="addPortofolio" method="post" action="<?= site_url('Admin/Portofolio/proses_simpan') ?>" class="form-horizontal">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Project Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama_project" id="inputName" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Client</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="client_project" id="inputEmail" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Date</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="deadline_project" id="inputEmail">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Kategori</label>
						<div class="col-sm-9">
							<select id="category_project_id" name="category_project_id" class="form-control select2" style="width: 100%;">
								<option value="" selected disabled>Pilih Kategori</option>
								<?php
								foreach ($dataKategori as $dk) { ?>
									<option value="<?= $dk->id_categori_project ?>"><?= $dk->nama_category_project ?></option>
								<?php }
								?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Skill</label>
						<div class="col-sm-9">
							<select id="skill_project_id" name="skill_project_id" class="form-control" style="width: 100%;">
								<option value="" selected disabled>Pilih Skill</option>
								<?php
								foreach ($dataskill as $ds) { ?>
									<option value="<?= $ds->id_skill_project ?>"><?= $ds->nama_skill_project ?></option>
								<?php }
								?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Demo</label>
						<div class="col-sm-9">
							<input type="text" name="demo_project" class="form-control" id="inputEmail" placeholder="uRL..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Sub Desk</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="sub_desk_project" rows="1" placeholder="Enter ..."></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="deskripsi_project" rows="3" placeholder="Enter ..."></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Image</label>
						<div class="col-sm-9">
							<div class="custom-file">
								<input type="file" name="gambar_project" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="add-portofolio" type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Edit -->
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Portofolio</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Project Name</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="nama_project" id="inputName" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Client</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="client_project" id="inputEmail" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Project End</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="deadline_project" id="inputEmail">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Kategori</label>
						<div class="col-sm-9">
							<select id="kategories" class="form-control" style="width: 100%;">
								<option selected="selected">Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Skill</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="inputEmail" placeholder="Pilih Skill">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Url Demo</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="inputEmail" placeholder="uRL..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Sub Deskripsi</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="inputEmail" placeholder="Sub Deskripsi..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="inputEmail" placeholder="Deskripsi..">
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
		$("#category_project_id").select2({
			theme: 'bootstrap4'
		})
		$("#skill_project_id").select2({
			theme: 'bootstrap4'
		})

		// Add Portofolio
		$("#add-portofolio").on("click", function() {
			let validate = $("#addPortofolio").valid();
			if (validate) {
				Swal.fire({
					timerProgressBar: true,
					title: "Memproses Data..",
					text: "On Proccess!",
					showConfirmButton: false,
					allowOutsideClick: false,
					timer: 2000,
					delay: 2000
				});
				$("#addPortofolio").submit();
			}
		});

		// Validate Add
		$("#addPortofolio").validate({
			rules: {
				nama_project: {
					required: true
				},
				client_project: {
					required: true
				},
				deadline_project: {
					required: true
				},
				category_project_id: {
					required: true
				},
				skill_project_id: {
					required: true
				},
				demo_project: {
					required: true
				},
				sub_desk_project: {
					required: true
				},
				deskripsi_project: {
					required: true
				},
				gambar_project: {
					required: true
				}
			},
			messages: {
				nama_project: {
					required: "Belum Diisi"
				},
				client_project: {
					required: "Belum Diisi"
				},
				deadline_project: {
					required: "Belum Diisi"
				},
				category_project_id: {
					required: "Belum Diisi"
				},
				skill_project_id: {
					required: "Belum Diisi"
				},
				demo_project: {
					required: "Belum Diisi"
				},
				sub_desk_project: {
					required: "Belum Diisi"
				},
				deskripsi_project: {
					required: "Belum Diisi"
				},
				gambar_project: {
					required: "Belum diinput"
				}
			},
			errorElement: 'span',
			errorPlacement: function(error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
	});
</script>
