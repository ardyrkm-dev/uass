<?php $__env->startSection('content'); ?>
  <style>
    .badge:hover {
      color: #fff !important;
      text-decoration: none;
    }

    .bg-success:hover {
      background: #2f9164 !important;
    }

    .bg-danger:hover {
      background: #e84a59 !important;
    }
  </style>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Final Rank</h1>
  </div>

  <div class="table-responsive col-lg-10">

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="text-center clrT">No</th>
          <th scope="col" class="text-center clrT">Created By</th>
          <th scope="col" class="text-center clrT">Created At</th>
          <th scope="col" class="text-center clrT">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if($criteria_analyses->count()): ?>
          <?php $__currentLoopData = $criteria_analyses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analysis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="text-center clrT"><?php echo e($loop->iteration); ?></td>
              <td class="text-center clrT"><?php echo e($analysis->user->name); ?></td>
              <td class="text-center clrT"><?php echo e($analysis->created_at->toFormattedDateString()); ?></td>
              <?php if($isAbleToRank): ?>
                <td class="text-center clrT">
                  <a href="/dashboard/final-ranking/<?php echo e($analysis->id); ?>" class="badge bg-success text-decoration-none">
                   Lihat Rank
                  </a>
                </td>
              <?php else: ?>
                <td class="text-center">
                  <span role="button" class="badge bg-danger text-decoration-none">
                    Tungg 
                  </span>
                </td>
              <?php endif; ?>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="text-danger text-center p-4">
              <h4>Tidak ada data perbandingan</h4>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\pages\dashboard\final-rank\index.blade.php ENDPATH**/ ?>