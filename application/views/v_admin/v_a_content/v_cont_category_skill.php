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
					<button type="button" data-toggle="modal" data-target="#modal-lg" class="btn btn-info">Add Category Skill</button>
				</div>
			</div>
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Name Category Skill</th>
							<th>Deskripsi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($data as $d) {
						?>
							<tr id="<?= $d->id_category_Skill_project ?>">
								<td><?= $no++ ?></td>
								<td><?= $d->nama_category_Skill_project ?></td>
								<td><?= $d->desk_category_Skill_project ?></td>
								<td style="text-align:center">
									<button class="btn btn-sm btn-info tombolEdit" data-id="<?= $d->id_category_Skill_project ?>" data-nama="<?= $d->nama_category_Skill_project ?>" data-desk="<?= $d->desk_category_Skill_project ?>" data-title="Edit"><i class="fas fa-pencil-alt"></i></button>
									<a href="#" data-id="<?= $d->id_category_Skill_project ?>" id="delete_id" class="btn btn-sm btn-danger tombolHapus">
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
				<h4 class="modal-title">Add Category Skill</h4>
			</div>
			<div class="modal-body">
				<form id="addCateSkill" method="post" action="<?= site_url('Admin/CategorySkill/proses_simpan') ?>" class="form-horizontal">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Category Skill</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama_category_Skill_project" id="inputName" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="3" name="desk_category_Skill_project" placeholder="Enter ..."></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="add-category-skill" type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Edit -->
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Category Skill</h4>
			</div>
			<div class="modal-body">
				<form id="editCateSkill" method="post" action="<?= site_url('Admin/CategorySkill/proses_edit') ?>" class="form-horizontal">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Category Skill</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama_category_Skill_project" id="nama_category_Skill_project" placeholder="Name..">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="3" name="desk_category_Skill_project" id="desk_category_Skill_project" placeholder="Enter ..."></textarea>
						</div>
					</div>
					<input type="hidden" name="id_category_Skill_project" class="pelanggan_id_delete" id="id_category_Skill_project">
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="edit-category-skill" type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		$(".hidden").hide();
		// Add Category Project
		$("#add-category-skill").on("click", function() {
			let validate = $("#addCateSkill").valid();
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
				$("#addCateSkill").submit();
			}
		});

		// Modal Edit
		$(".tombolEdit").click(function() {
			$("#id_category_Skill_project").val($(this).data('id'));
			$("#nama_category_Skill_project").val($(this).data('nama'));
			$("#desk_category_Skill_project").val($(this).data('desk'));
			$("#modal-edit").modal('show');
		});

		// Edit Category Project
		$("#edit-category-skill").on("click", function() {
			let validate = $("#editCateSkill").valid();
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
				$("#editCateSkill").submit();
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
							var url = "Admin/CategorySkill/proses_hapus/"
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
													window.location.replace("<?= site_url("Admin/CategorySkill") ?>");
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
		$("#addCateSkill").validate({
			rules: {
				nama_category_Skill_project: {
					required: true
				},
				desk_category_Skill_project: {
					required: true
				}
			},
			messages: {
				nama_category_Skill_project: {
					required: "Belum diisi"
				},
				desk_category_Skill_project: {
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

		// Validate Edit
		$("#editCateSkill").validate({
			rules: {
				nama_category_Skill_project: {
					required: true
				},
				desk_category_Skill_project: {
					required: true
				}
			},
			messages: {
				nama_category_Skill_project: {
					required: "Belum diisi"
				},
				desk_category_Skill_project: {
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
