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
					<button type="button" data-toggle="modal" data-target="#modal-lg" class="btn btn-info">Add Skill</button>
				</div>
			</div>
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Skill</th>
							<th>Presentase</th>
							<th>Kategori</th>
							<th>Deskripsi</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($data as $d) {
						?>
							<tr id="<?= $d->id_skill_project ?>">
								<td><?= $d->nama_skill_project ?></td>
								<td><?= $d->presentase_skill_project ?></td>
								<td><?= $d->category_Skill_project_id ?></td>
								<td><?= $d->deskripsi_skill_project ?></td>
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
				<h4 class="modal-title">Add Skill</h4>
			</div>
			<div class="modal-body">
				<form id="addSkill" method="post" action="<?= site_url('Admin/Skill/proses_simpan') ?>" class="form-horizontal">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Skill</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama_skill_project" id="inputName" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Presentase</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="presentase_skill_project" id="inputEmail" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Kategori</label>
						<div class="col-sm-9">
							<select id="category_Skill_project_id" name="category_Skill_project_id" class="form-control select2" style="width: 100%;">
								<option value="" selected disabled>Pilih Kategori</option>
								<?php
								foreach ($datakategori as $d) { ?>
									<option value="<?= $d->id_category_Skill_project ?>"><?= $d->nama_category_Skill_project ?></option>
								<?php }
								?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="deskripsi_skill_project" rows="3" placeholder="Enter ..."></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="add-skill" type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Edit -->
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Project</h4>
			</div>
			<div class="modal-body">
				<form id="editSkill" method="post" action="<?= site_url('Admin/Skill/proses_edit') ?>" class="form-horizontal">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Skill</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama_skill_project" id="inputName" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Presentase</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="presentase_skill_project" id="inputEmail" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Kategori</label>
						<div class="col-sm-9">
							<select id="category_Skill_project_id" name="category_Skill_project_id" class="form-control select2" style="width: 100%;">
								<option value="" selected disabled>Pilih Kategori</option>
								<?php
								foreach ($datakategori as $ds) { ?>
									<option value="<?= $ds->id_category_Skill_project ?>" <?= $this != null  ? "selected" : null ?>><?= $ds->nama_category_Skill_project ?></option>
								<?php }
								?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="deskripsi_skill_project" rows="3" placeholder="Enter ..."></textarea>
						</div>
					</div>
					<input type="hidden" name="id_skill_project" class="pelanggan_id_delete" id="id_category_Skill_project">
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="edit-skill" type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		$(".hidden").hide();
		$("#category_Skill_project_id").select2({
			theme: 'bootstrap4'
		})

		// Add Skill
		$("#add-skill").on("click", function() {
			let validate = $("#addSkill").valid();
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
				$("#addSkill").submit();
			}
		});

		// Modal Edit
		$(".tombolEdit").click(function() {
			$("#id_skill_project").val($(this).data('id'));
			$("#nama_skill_project").val($(this).data('nama'));
			$("#presentase_skill_project").val($(this).data('pres'));
			$("#deskripsi_skill_project").val($(this).data('desk'));
			$("#category_Skill_project_id").val($(this).data('idkat'));
			$("#modal-edit").modal('show');
		});

		// Edit Skill
		$("#edit-skill").on("click", function() {
			let validate = $("#editSkill").valid();
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
				$("#editSkill").submit();
			}
		});

		// Hapus
		let idUser = 0;
		$(".tombolHapus").on("click", function() {
			var id = $(this).data('id');
			SwalDelete(id);
			// e.preventDefault();
		});

		function SwalDelete(id) {
			$.confirm({
				theme: 'modern',
				icon: 'fa fa-warning',
				title: 'Hapus Data!',
				content: 'Apakah anda yakin hapus data ini ? <br>',
				// closeIcon: true,
				boxWidth: '500px',
				useBootstrap: false,
				closeIconClass: 'fa fa-close',
				type: 'red',
				typeAnimated: true,
				buttons: {
					tryAgain: {
						text: 'HAPUS',
						btnClass: 'btn-red',
						action: function() {
							var url = "Admin/Skill/proses_hapus/"
							$.ajax({
									url: '<?= base_url() ?>' + url + id,
									type: "POST",
								})
								.done(function(id) {
									$.confirm({
										theme: 'modern',
										icon: 'fa fa-success',
										title: 'Data Terhapus!',
										content: false,
										closeIcon: true,
										boxWidth: '500px',
										useBootstrap: false,
										type: 'blue',
										typeAnimated: true,
										buttons: {
											tryAgain: {
												text: 'OKE',
												btnClass: 'btn-blue',
												action: function() {
													window.location.replace("<?= site_url("Admin/Skill") ?>");
												}
											},
										}
									});
								})
								.fail(function() {
									$.alert({
										theme: 'modern',
										icon: 'fa fa-danger',
										title: 'Data Tidak bisa dihapus!',
										content: 'Data tersebut telah berelasi dengan tabel lain',
										closeIcon: true,
										boxWidth: '500px',
										useBootstrap: false,
										type: 'red',
										typeAnimated: true,
										buttons: {
											tryAgain: {
												text: 'OKE',
												btnClass: 'btn-blue',
												action: function() {}
											},
										}
									})
								});
						}
					},
					close: function() {}
				}
			});
		}

		// Validate Add
		$("#addSkill").validate({
			rules: {
				nama_skill_project: {
					required: true
				},
				presentase_skill_project: {
					required: true
				},
				category_Skill_project_id: {
					required: true
				},
				deskripsi_skill_project: {
					required: true
				}
			},
			messages: {
				nama_skill_project: {
					required: "Belum diisi"
				},
				presentase_skill_project: {
					required: "Belum diisi"
				},
				category_Skill_project_id: {
					required: "Pilih Salah satu"
				},
				deskripsi_skill_project: {
					required: "Belum diisi"
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

		$("#editSkill").validate({
			rules: {
				nama_skill_project: {
					required: true
				},
				presentase_skill_project: {
					required: true
				},
				category_Skill_project_id: {
					required: true
				},
				deskripsi_skill_project: {
					required: true
				}
			},
			messages: {
				nama_skill_project: {
					required: "Belum diisi"
				},
				presentase_skill_project: {
					required: "Belum diisi"
				},
				category_Skill_project_id: {
					required: "Pilih Salah satu"
				},
				deskripsi_skill_project: {
					required: "Belum diisi"
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
