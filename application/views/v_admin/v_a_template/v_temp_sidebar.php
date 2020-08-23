<!-- Brand Logo -->
<a href="#" class="brand-link">
	<img src="<?= base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	<span class="brand-text font-weight-light">PROFILEAPPS</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
	<!-- Sidebar user panel (optional) -->
	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
			<img src="<?= base_url(); ?>assets/	dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
		</div>
		<div class="info">
			<a href="#" class="d-block">Alexander Pierce</a>
		</div>
	</div>

	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item has-treeview menu-open">
				<a href="<?= site_url("Admin/Dashboard") ?>" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>
						Dashboard
					</p>
				</a>
			</li>
			<li class="nav-header">MASTER TEMPLATE</li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-ellipsis-h"></i>
					<p>
						Config Web
					</p>
				</a>
			</li>
			<li class="nav-header">MASTER DATA</li>
			<li class="nav-item">
				<a href="pages/widgets.html" class="nav-link">
					<i class="nav-icon fas fa-th"></i>
					<p>
						Admin Master
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= site_url("Admin/CategoryProject") ?>" class="nav-link">
							<i class="nav-icon fas fa-project-diagram"></i>
							<p>Kategori Project</p>
						</a>
					</li>
				</ul>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= site_url("Admin/CategorySkill") ?>" class="nav-link">
							<i class="nav-icon fas fa-tasks"></i>
							<p>Kategori Skill</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview">
				<a href="<?= site_url('Admin/Profile') ?>" class="nav-link">
					<i class="nav-icon fas fa-user-tie"></i>
					<p>
						Profile
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview">
				<a href="<?= site_url("Admin/Portofolio") ?>" class="nav-link">
					<i class="nav-icon fas fa-save"></i>
					<p>
						Portofolio
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview">
				<a href="<?= site_url("Admin/Skill") ?>" class="nav-link">
					<i class="nav-icon fas fa-laptop-code"></i>
					<p>
						Skill
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview">
				<a href="<?= site_url("Admin/Resume") ?>" class="nav-link">
					<i class="nav-icon fas fa-paste"></i>
					<p>
						Resume
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview">
				<a href="<?= site_url("Admin/Services") ?>" class="nav-link">
					<i class="nav-icon fas fa-chalkboard-teacher"></i>
					<p>
						Services
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview">
				<a href="<?= site_url("Admin/Testimonial") ?>" class="nav-link">
					<i class="nav-icon fas fa-comment-dots"></i>
					<p>
						Testimonial
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview">
				<a href="<?= site_url("Admin/ContactMessage") ?>" class="nav-link">
					<i class="nav-icon fas fa-id-card-alt"></i>
					<p>
						Contact Message
					</p>
				</a>
			</li>
			<li class="nav-item has-treeview">
				<a href="<?= site_url("Admin/Users") ?>" class="nav-link">
					<i class="nav-icon fas fa-users"></i>
					<p>
						Users
					</p>
				</a>
			</li>
			<li class="nav-header">SETTING</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="nav-icon fab fa-audible"></i>
					<p>
						Log Activity
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= site_url("Admin/SettingAkun") ?>" class="nav-link">
					<i class="nav-icon fas fa-user-cog"></i>
					<p>
						Config Akun
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= site_url("Admin/SettingDashboard") ?>" class="nav-link">
					<i class="nav-icon fas fa-cogs"></i>
					<p>
						Config Dashboard
					</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= site_url("Admin/Login/proses_logout") ?>" class="nav-link">
					<i class="nav-icon fas fa-power-off"></i>
					<p>
						Logout
					</p>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
