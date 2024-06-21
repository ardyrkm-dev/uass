<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/logo.svg')); ?>">
    <title>Fitsolusi </title>

    <!-- Bootstrap core CSS -->
    <?php echo $__env->make('includes.landing.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('before-style'); ?>
    <?php echo $__env->make('includes.landing.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-style'); ?>
    

<!-- Custom styles for this template -->
    
  </head>
  <body class="text-center">
    <?php echo $__env->yieldContent('content'); ?>
  </body>

  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

  
  <script src="/assetsLogin/js/jquery-3.3.1.min.js"></script>
  <script src="/assetsLogin/js/popper.min.js"></script>
  <script src="/assetsLogin/js/bootstrap.min.js"></script>
  <script src="/assetsLogin/js/main.js"></script>

  
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
</html>
<?php /**PATH E:\Blender\Final\p\laravel\resources\views\layouts\auth.blade.php ENDPATH**/ ?>