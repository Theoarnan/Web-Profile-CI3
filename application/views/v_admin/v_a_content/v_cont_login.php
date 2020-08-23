<div class="login-box">
	<div class="login-logo">
		<a href="<?= base_url(); ?>assets/index2.html"><b>PROFILE</b>APPS</a>
	</div>
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to start your session</p>
			<?php $this->view('message') ?>
			<form action="<?= site_url('Admin/Login/proses_login') ?>" method="post" id="form-login">
				<div class="input-group mb-3">
					<input type="text" name="username" class="form-control" placeholder="Email or Username">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append reveal">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<button type="submit" name="login" id="btn-login" class="btn btn-info btn-block">LOGIN</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
    $(function() {
        // $(".reveal").on('click', function() {
        //     console.log($(this).children("i"));
        //     $(this).find("i").toggleClass("fas fa-unlock-alt fas fa-eye");
        //     var $pwd = $(this).siblings("input");
        //     if ($pwd.attr('type') === 'password') {
        //         $pwd.attr('type', 'text');
        //     } else {
        //         $pwd.attr('type', 'password');
        //     }
        // });
        $("#btn-login").on("click", function() {
            let validate = $("#form-login").valid();
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
                $("#form-login").submit();
            }
        });
        $("#form-login").validate({
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 10,
                }
            },
            messages: {
                username: {
                    required: "Anda belum memasukan username",
                },
                password: {
                    required: "Anda belum memasukkan password",
                    minlength: "Password kurang dari 6",
                    maxlength: "Password kurang dari 10"
                },
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
