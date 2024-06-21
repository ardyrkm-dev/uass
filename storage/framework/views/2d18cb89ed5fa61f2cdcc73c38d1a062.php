<?php $__env->startSection('content'); ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kriteria</h1>
  </div>

  <div class="table-responsive col-lg-10">
    <a href="/dashboard/criterias/create" class="btn btnBaru mb-3">
    
      Buat
    </a>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="text-center clrT">No</th>
          <th scope="col" class="text-center clrT">Name</th>
          <th scope="col" class="text-center clrT">Attribute</th>
          <th scope="col" class="text-center clrT">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if($criterias->count()): ?>
          <?php $__currentLoopData = $criterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              
              <td class="text-center clrT"><?php echo e($loop->iteration); ?></td>
              <td class="text-center clrT"><?php echo e($criteria->name); ?></td>
              <td class="text-center clrT"><?php echo e(Str::ucfirst(Str::lower($criteria->attribute))); ?></td>
              <td class="text-center clrT">
                <a href="/dashboard/criterias/<?php echo e($criteria->id); ?>/edit" class="text-decoration-none text-success">
                  <span data-feather="edit"></span>
                </a>
                <form action="/dashboard/criterias/<?php echo e($criteria->id); ?>" method="POST" class="d-inline">
                  <?php echo method_field('delete'); ?>
                  <?php echo csrf_field(); ?>

                  <span role="button" class="text-decoration-none text-danger btnDelete" data-object="criteria">
                    <span data-feather="x-circle"></span>
                  </span>
                </form>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="text-danger text-center p-4">
              <h4>Tidak ada kriteria yang tersedia</h4>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\pages\dashboard\criteria\index.blade.php ENDPATH**/ ?>