<?php $__env->startSection('content'); ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Final Rank</h1>
  </div>

  <div class="table-responsive col-lg-12">
    <div class="d-lg-flex justify-content-between gap-2">
      <h1 class="h3 mb-0 text-gray-800">Normalisasi Table</h1>
      <a href="/dashboard/final-ranking" class="btn btn-secondary mb-3">
        <span data-feather="arrow-left"></span>
        Kembali
      </a>
    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col" class="text-center clrT">Divider</th>
          <?php $__currentLoopData = $dividers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th scope="col" class="text-center clrT"><?php echo e($divider['divider_value']); ?></th>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($alternatives)): ?>
          <?php $__currentLoopData = $alternatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternative): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="text-center clrT">
                <?php echo e($alternative['aktifitas_name']); ?>

              </td>
              <?php $__currentLoopData = $alternative['results']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td class="text-center clrT">
                  <?php echo e($result); ?>

                </td>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </tbody>
    </table>

    <div class="d-sm-flex align-items-center justify-content-between align-items-center my-4">
      <h1 class="h3 mb-0 text-gray-800">Aktifitas Rank</h1>
    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col" class="text-center ctrlT">Alternative</th>
          <th scope="col" class="text-center clrT">Rank Result</th>
          <th scope="col" class="text-center clrT">Rank</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $ranks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="text-center clrT">
              <?php echo e($rank['aktifitas_name']); ?>

            </td>
            <td class="text-center clrT">
              <?php echo e($rank['rank_result']); ?>

            </td>
            <td class="text-center fw-bold clrT">
              <?php echo e($loop->iteration); ?>

            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\pages\dashboard\final-rank\rank.blade.php ENDPATH**/ ?>