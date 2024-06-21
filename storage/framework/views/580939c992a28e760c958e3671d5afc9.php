<?php $__env->startSection('content'); ?>
  <div class="h-auto p-6">
    <h1 class="txtDash">Dashboard</h1>
    <div class="bagianPropil">
      <div class="imgPropil">
        <img src="<?php echo e(asset('assets/il2.jpg')); ?>" style="object-fit: cover;width:100%; height:100%;" alt="">
      </div>
      <div class="bagianIdentitasP">
        <h1><?php echo e(Auth::user()->name); ?></h1>
        <h1><?php echo e(Auth::user()->email); ?></h1>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\pages\dashboard\index.blade.php ENDPATH**/ ?>