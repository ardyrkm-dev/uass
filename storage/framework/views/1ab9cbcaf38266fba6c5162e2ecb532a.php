<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/logo.svg')); ?>">
    <title><?php echo e($title); ?> | FitSolusi</title>

 
    <?php echo $__env->make('partials.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </head>
  <body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg">

			<?php echo $__env->make('partials.sidebar2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		<!-- /main sidebar -->

		<!-- Main content -->
		<div class="content-wrapper bgC  scrol">

		    
			
            <?php echo $__env->yieldContent('content'); ?>

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


        <!-- Script -->
    <?php echo $__env->yieldPushContent('prepend-script'); ?>
    <?php echo $__env->make('partials.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('addon-script'); ?>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/dashboard.js"></script>



    
    <?php if(session()->has('success')): ?>
      <script>
        Swal.fire({
          icon: 'success',
          title: 'Success',
          text: "<?php echo e(session('success')); ?>",
        });
      </script>
    <?php endif; ?>
    <?php if(session()->has('failed')): ?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Failed',
          text: "<?php echo e(session('failed')); ?>",
        });
      </script>
    <?php endif; ?>
    <?php if(isset($errors) && $errors->has('oldPassword') || $errors->has('password')): ?>
      <script>
        const myModal = document.getElementById('modalUbahPassword');
        const modal = bootstrap.Modal.getOrCreateInstance(myModal);
        modal.show();
      </script>
    <?php endif; ?>
  </body>
</html>
<?php /**PATH E:\Blender\Final\p\laravel\resources\views\layouts\main2.blade.php ENDPATH**/ ?>