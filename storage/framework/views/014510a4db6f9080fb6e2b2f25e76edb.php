<!-- App logo and controls -->
			<div class="navbar navbar-light bg-baru navbar-static">
				<div class="navbar-brand flex-fill wmin-0">
					<a href="/dashboard" class="d-inline-block">
						<img style="width: 45px; height: 45px;" src="<?php echo e(asset('assets/logo2.svg')); ?>" class="sidebar-resize-hide" alt="">
						<img src="images/logo.png" class="sidebar-resize-show" alt="">
					</a>
				</div>

				<ul class="navbar-nav align-self-center ml-auto sidebar-resize-hide">
					<li class="nav-item dropdown">
						<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
							<i class="icon-transmission"></i>
						</button>

						<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-mobile-main-toggle d-lg-none">
							<i class="icon-cross2"></i>
						</button>
					</li>
				</ul>
			</div>
			<!-- /app logo and controls -->


			<!-- Sidebar content -->
			<div class="sidebar-content bg-baru ">

				<!-- User menu -->
				<div class="sidebar-section sidebar-section-body bg-baru user-menu-vertical text-center">
					
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header pt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" aria-current="page" href="/dashboard">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Pengguna</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" aria-current="page" href="/dashboard">Dashboard</a></li>
								<li class="nav-item"><a class="nav-link <?php echo e(Request::is('dashboard/profile') ? 'active' : ''); ?>" href="/dashboard/profile">Profile</a></li>
								<li class="nav-item"><a class="nav-link <?php echo e(Request::is('dashboard/criteria-comparisons*') ? 'active' : ''); ?>" href="/dashboard/criteria-comparisons">Kriteria Perbandingan</a></li>
								<li class="nav-item"><a class="nav-link <?php echo e(Request::is('dashboard/final-ranking*') ? 'active' : ''); ?>" href="/dashboard/final-ranking">Final Rank</a></li>
							</ul>
						</li>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                        <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Admin</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a class="nav-link <?php echo e(Request::is('dashboard/aktifitas*') ? 'active' : ''); ?>" href="/dashboard/aktifitas">Data Aktifitas</a></li>
								<li class="nav-item"><a class="nav-link <?php echo e(Request::is('dashboard/criterias*') ? 'active' : ''); ?>" href="/dashboard/criterias">Kriteria</a></li>
								<li class="nav-item"><a class="nav-link <?php echo e(Request::is('dashboard/alternatives*') ? 'active' : ''); ?>" href="/dashboard/alternatives">Alternatif</a></li>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\User::class)): ?>
								<li class="nav-item"><a class="nav-link <?php echo e(Request::is('dashboard/users*') ? 'active' : ''); ?>" href="/dashboard/users">Pengguna</a></li>
                                <?php endif; ?>
							</ul>
						</li>
                        <?php endif; ?>
					
					

					</ul>

				</div>
				<!-- /main navigation -->
                
                    


                


			</div>
			<!-- /sidebar content -->


			<!-- Service status -->
		<div class="sidebar-section sidebar-section-body sidebar-resize-hide bg-baru">
                <div class="d-flex mb-2">
                	<form id="logout-form" action="<?php echo e(route('signout')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<button type="submit" class="btnLogout">
							logout
						</button>
						
					</form>
				</div>

			
			</div> 
			
<?php /**PATH E:\Blender\Final\p\laravel\resources\views\partials\sidebar2.blade.php ENDPATH**/ ?>