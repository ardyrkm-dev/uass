<?php $__env->startSection('content'); ?>
 
<div class="container cs">
  <div class="login-wrapper">
      
      <!-- Text Section -->
      <div class="login-text">
          <h1>Lupa Password</h1>
          <p>Masukan Email dahulu untuk dapat konfirmasi reset Password</p>
      </div>
      
      <!-- Form Section -->
      <div class="login-form">
        <h1 class="text-2xl font-bold mb-4 text-center">Forgot Password</h1>
<?php if(session('status')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>
<form action="<?php echo e(route('password.email')); ?>" method="POST" class="space-y-4">
    <?php echo csrf_field(); ?>
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
    </div>
    <div>
        <button type="submit" class="w-100 mt-2 btn btn-lg bgbtnN">
            Send Password Reset Link
        </button>
    </div>
</form>
          
         
         
          <p class="footer">&copy; FitSolusi <?php echo e(now()->year); ?></p>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\auth\passwords\email.blade.php ENDPATH**/ ?>