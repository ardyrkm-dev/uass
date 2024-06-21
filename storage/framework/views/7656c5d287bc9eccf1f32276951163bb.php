<?php $__env->startSection('content'); ?>
 
<div class="container cs">
  <div class="login-wrapper">
      
      <!-- Text Section -->
      <div class="login-text">
          <h1>Welcome Back!</h1>
          <p>Login dengan akun yang sudah di buat</p>
      </div>
      
      <!-- Form Section -->
      <div class="login-form">
          <h3>Login</h3>
          <form action="/login" method="POST">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                  <label for="username">User Name</label>
                  <input type="text" name="username" id="username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="off" autofocus>
                  <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="invalid-feedback"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="invalid-feedback"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-check">
                  <input type="checkbox" id="remember_me" class="form-check-input">
                  <label for="remember_me" class="form-check-label">Remember me</label>
                  <a href="<?php echo e(route('password.halaman')); ?>" class="forgot-password">Forgot your password?</a>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
              <p class="signup-link">New User? <a href="/signup">Signup</a></p>
          </form>
          <div class="divider">or login with</div>
          <div class="social-login">
              <a href="<?php echo e(route('auth.facebook')); ?>" class="social-btn facebook">Facebook</a>
              <a href="#" class="social-btn twitter">Twitter</a>
              <a href="#" class="social-btn google">Google</a>
          </div>
          <p class="footer">&copy; FitSolusi <?php echo e(now()->year); ?></p>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\auth\signin.blade.php ENDPATH**/ ?>