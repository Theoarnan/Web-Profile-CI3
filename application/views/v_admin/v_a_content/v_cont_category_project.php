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
					<button type="button" data-toggle="modal" data-target="#modal-lg" class="btn btn-info">Add Category Project</button>
				</div>
			</div>
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Name Category</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($data as $d) {
						?>
							<tr id="<?= $d->id_categori_project ?>">
								<td><?= $no++ ?></td>
								<td><?= $d->nama_category_project ?></td>
								<td style="text-align:center">
									<button class="btn btn-sm btn-info tombolEdit" data-id="<?= $d->id_categori_project ?>" data-nama="<?= $d->nama_category_project ?>" data-title="Edit"><i class="fas fa-pencil-alt"></i></button>
									<a href="#" data-id="<?= $d->id_categori_project ?>" id="delete_id" class="btn btn-sm btn-danger tombolHapus">
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
				<h4 class="modal-title">Add Category Project</h4>
			</div>
			<div class="modal-body">
				<form id="addCateProject" method="post" action="<?= site_url('Admin/CategoryProject/proses_simpan') ?>" class="form-horizontal" role="form">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Name Category</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama_category_project" id="inputName" placeholder="Name..">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="add-category-project" type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Edit -->
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Category Project</h4>
			</div>
			<div class="modal-body">
				<form id="editCateProject" method="post" action="<?= site_url('Admin/CategoryProject/proses_edit') ?>" class="form-horizontal" role="form">
					<div class="form-group row">
						<label for="inputName" class="col-sm-3 col-form-label">Name Category</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nama_category_project" name="nama_category_project" id="inputName" placeholder="Name..">
							<input type="hidden" name="id_categori_project" class="pelanggan_id_delete" id="id_categori_project">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="edit-category-project" type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<script>
	$(function() {
		$(".hidden").hide();
		// Add Category Project
		$("#add-category-project").on("click", function() {
			let validate = $("#addCateProject").valid();
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
				$("#addCateProject").submit();
			}
		});

		// Modal Edit
		$(".tombolEdit").click(function() {
			$("#id_categori_project").val($(this).data('id'));
			$("#nama_category_project").val($(this).data('nama'));
			$("#modal-edit").modal('show');
		});

		// Edit Category Project
		$("#edit-category-project").on("click", function() {
			let validate = $("#editCateProject").valid();
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
				$("#editCateProject").submit();
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
                            var url = "Admin/CategoryProject/proses_hapus/"
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
                                                    window.location.replace("<?= site_url("Admin/CategoryProject") ?>");
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
		$("#addCateProject").validate({
			rules: {
				nama_category_project: {
					required: true
				}
			},
			messages: {
				nama_category_project: {
					required: ""
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
		$("#editCateProject").validate({
			rules: {
				nama_category_project: {
					required: true
				}
			},
			messages: {
				nama_category_project: {
					required: ""
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


		$("#kategories").select2({
			theme: 'bootstrap4'
		})
		$("#skill").select2({
			theme: 'bootstrap4'
		})
	});
</script>
