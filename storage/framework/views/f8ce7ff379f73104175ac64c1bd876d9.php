<?php $__env->startSection('content'); ?>
<div class="container cs">
    <div class="login-wrapper">
        
        <!-- Text Section -->

        <div class="login-text">
            <h1>Verifikasi</h1>
            <p>Verifikasi Dahulu ya</p>
        </div>
        <div class="login-form">
            <div class="card-header"><?php echo e(__('Verify Your Email Address')); ?></div>
            <div class="card-body">
                <?php if(session('resent')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

                    </div>
                <?php endif; ?>

                <?php echo e(__('Before proceeding, please check your email for a verification link.')); ?>

                <?php echo e(__('If you did not receive the email')); ?>,
                <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><?php echo e(__('click here to request another')); ?></button>.
                </form>
            </div>
            <p class="footer">&copy; FitSolusi <?php echo e(now()->year); ?></p>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>



              
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\auth\verify.blade.php ENDPATH**/ ?>