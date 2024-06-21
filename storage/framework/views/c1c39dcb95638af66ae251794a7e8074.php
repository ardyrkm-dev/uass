<?php $__env->startSection('content'); ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit <?php echo e($alternative->name); ?>'s Values</h1>
  </div>

  <form class="col-lg-8" method="POST" action="/dashboard/alternatives/<?php echo e($alternative->id); ?>">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>

    <div class="mb-3">
      <label for="name" class="form-label">Selected Tourism Name</label>
      <input type="text" class="form-control" id="name" value="<?php echo e(old('name', $alternative->name)); ?>" readonly required>

      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback">
          <?php echo e($message); ?>

        </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <?php $__currentLoopData = $alternative->alternatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="mb-3">
        <input type="hidden" name="criteria_id[]" value="<?php echo e($value->criteria->id); ?>">
        <input type="hidden" name="alternative_id[]" value="<?php echo e($value->id); ?>">

        <label for="<?php echo e(str_replace(' ','', $value->criteria->name)); ?>" class="form-label">
          Value of <?php echo e($value->criteria->name); ?>

        </label>
        <input type="text" id="<?php echo e(str_replace(' ','', $value->criteria->name)); ?>" class="form-control <?php $__errorArgs = ['alternative_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 'is-invalid' : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alternative_value[]" placeholder="Enter the value" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57)|| event.charCode == 46)" value="<?php echo e(floatval($value->alternative_value)); ?>" maxlength="5" autocomplete="off" required>

        <?php $__errorArgs = ['alternative_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="invalid-feedback">
            <?php echo e($message); ?>

          </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($newCriterias->count()): ?>
      <input type="hidden" name="new_tourism_object_id" value="<?php echo e($alternative->id); ?>">
      <?php $__currentLoopData = $newCriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mb-3">
          <input type="hidden" name="new_criteria_id[]" value="<?php echo e($value->id); ?>">

          <label for="<?php echo e(str_replace(' ','', $value->name)); ?>" class="form-label">
            Value of <?php echo e($value->name); ?>

          </label>
          <input type="text" id="<?php echo e(str_replace(' ','', $value->name)); ?>" class="form-control <?php $__errorArgs = ['new_alternative_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 'is-invalid' : '' <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="new_alternative_value[]" placeholder="Enter the value" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57)|| event.charCode == 46)" maxlength="5" autocomplete="off" required>

          <?php $__errorArgs = ['new_alternative_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">
              <?php echo e($message); ?>

            </div>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <button type="submit" class="btn btnBaru mb-3">Simpan</button>
    <a href="/dashboard/alternatives" class="btn btn-danger mb-3">Cancel</a>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\pages\dashboard\alternative\edit.blade.php ENDPATH**/ ?>