<?php $__env->startSection('content'); ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hasil Perbandingan</h1>
  </div>

  <div class="table-responsive col-lg-12">
    <div class="d-lg-flex justify-content-between gap-2">
      <h1 class="h3 mb-0 text-gray-800">Result of Calculated Criteria Comparisons</h1>
      <a href="/dashboard/criteria-comparisons/<?php echo e($criteria_analysis->id); ?>" class="btn btnBaru mb-3">
        <span data-feather="arrow-left"></span>
        Kembali
      </a>
    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col"></th>
          <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preventValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th scope="col" class="text-center clrT"><?php echo e($preventValue->criteria->name); ?></th>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
      </thead>
      <tbody>
        <?php ($startAt = 0); ?>
        <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preventValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php ($bgYellow = 'bg-warning text-dark'); ?>
          <tr>
            <th scope="row" class="text-center clrT"><?php echo e($preventValue->criteria->name); ?></th>
            <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preventvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($criteria_analysis->details[$startAt]->criteria_id_first === $criteria_analysis->details[$startAt]->criteria_id_second): ?>
                <?php ($bgYellow = ''); ?>
                <td class="text-center bg-danger clrT text-white">
                  <?php echo e(floatval($criteria_analysis->details[$startAt]->comparison_result)); ?>

                </td>
              <?php else: ?>
                <td class="text-center clrT <?php echo e($bgYellow); ?>">
                  <?php echo e(floatval($criteria_analysis->details[$startAt]->comparison_result)); ?>

                </td>
              <?php endif; ?>
            <?php ($startAt++); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <th class=" text-center clrT">Jumlah</th>
        <?php $__currentLoopData = $totalSums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <td class="text-center clrT bg-secondary text-white">
            <?php echo e($total['totalSum']); ?>

          </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

    
    <div class="d-sm-flex align-items-center justify-content-between align-items-center my-4">
      <h1 class="h3 mb-0 text-gray-800 clrT">Result of Calculated Preventive Values</h1>
    </div>

    <table class="table table-bordere clrTd">
      <thead>
        <tr>
          <th scope="col"></th>
          <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preventValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th scope="col" class="text-center clrT"><?php echo e($preventValue->criteria->name); ?></th>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <th scope="col" class="text-center clrT bg-secondary text-white">Preventive Value</th>
        </tr>
      </thead>
      <tbody class="clrT">
        <?php ($startAt = 0); ?>
        <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preventValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php ($bgYellow = 'bg-warning text-dark'); ?>
          <tr>
            <th scope="row" class="text-center"><?php echo e($preventValue->criteria->name); ?></th>
            <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $preventvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <td class="text-center">
                <?php (
                  $res = floatval($criteria_analysis->details[$startAt]->comparison_result) / $totalSums[$key]['totalSum']
                ); ?>
                <?php echo e(Str::substr($res, 0, 11)); ?>

              </td>
            <?php ($startAt++); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td class="text-center bg-secondary text-white">
              <?php echo e($preventValue->value); ?>

            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    

    
    <div class="d-sm-flex align-items-center justify-content-between align-items-center my-4">
      <h1 class="h3 mb-0 text-gray-800">Result of Calculated Consistency Ratio</h1>
    </div>

    <table class="table table-bordered">
      <thead class="clrT">
        <tr>
          <th scope="col"></th>
          <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preventValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th scope="col" class="text-center clrT"><?php echo e($preventValue->criteria->name); ?></th>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <th scope="col" class="text-center clrT bg-secondary text-white">Row Total</th>
        </tr>
      </thead>
      <tbody class="clrT">
        <?php ($startAt = 0); ?>
        <?php ($rowTotals = []); ?>
        <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preventValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php ($rowTotal = 0); ?>
          <tr>
            <th scope="row" class="text-center clrT"><?php echo e($preventValue->criteria->name); ?></th>
            <?php $__currentLoopData = $criteria_analysis->preventiveValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $innerPreventvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <td class="text-center clrT">
                <?php (
                  $res = floatval($criteria_analysis->details[$startAt]->comparison_result) * $innerPreventvalue->value
                ); ?>
                <?php ($rowTotal += Str::substr($res, 0, 11)); ?>

                <?php echo e(Str::substr($res, 0, 11)); ?>

              </td>
            <?php ($startAt++); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php (array_push($rowTotals, $rowTotal)); ?>
            <td class="text-center clrT bg-secondary">
              <?php echo e($rowTotal); ?>

            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

    
    <table class="table table-borderless">
      <thead style="border-bottom: 1px solid #E3E6F0;">
        <tr>
          <th scope="col"></th>
          <th scope="col" class="text-center clrT">Row Total</th>
          <th></th>
          <th scope="col" class="text-center clrT">Preventive Value</th>
          <th scope="col" class="text-center clrT">Result</th>
        </tr>
      </thead>
      <tbody>
        <?php ($lambdaMax = null); ?>
        <?php ($lambdaResult = []); ?>
        <?php $__currentLoopData = $rowTotals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row" class="text-center clrT border-end border-bottom">
            <?php echo e($criteria_analysis->preventiveValues[$key]->criteria->name); ?>

          </td>
          <td class="text-center border-bottom clrT"><?php echo e($total); ?></th>
          <td class="text-center border-bottom clrT">:</td>
          <td class="text-center border-bottom clrT"><?php echo e($criteria_analysis->preventiveValues[$key]->value); ?></td>
          <td class="text-center border-bottom clrT">
            <?php ($lambda = $total / $criteria_analysis->preventiveValues[$key]->value); ?>
            <?php ($res = substr($lambda, 0, 11)); ?>
            <?php (array_push($lambdaResult, $res)); ?>

            <?php echo e($res); ?>

          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr style="border-top: 1px solid #E3E6F0;">
          <td class="text-center clrT"></td>
          <td class="text-center clrT"></td>
          <td class="text-center fw-bold clrT">Lambda Max</td>
          <td class="text-center fw-bold clrT">
            <?php ($lambdaMax = array_sum($lambdaResult) / count($lambdaResult)); ?>

            <?php echo e($lambdaMax); ?>

          </td>
        </tr>
      </tbody>
    </table>

    
    <div class="row d-lg-flex justify-content-center">
      <div class="col-12 col-lg-6">
        <table class="table table-bordered clrT">
          <tbody>
            <tr>
              <th scope="row clrT">Number of Criteria</th>
              <td><?php echo e($criteria_analysis->preventiveValues->count()); ?></td>
            </tr>
            <tr>
              <th scope="row clrT">Average</th>
              <td><?php echo e($lambdaMax); ?></td>
            </tr>
            <tr>
              <th scope="row clrT">Consistency Index</th>
              <td>
                <?php ($CI = ($lambdaMax - $criteria_analysis->preventiveValues->count()) /  ($criteria_analysis->preventiveValues->count() - 1)); ?>

                <?php echo e($CI); ?>

              </td>
            </tr>
            <tr>
              <th scope="row clrT">Random Index</th>
              <td>
                <?php ($RI = $ruleRI[$criteria_analysis->preventiveValues->count()]); ?>

                <?php echo e($RI); ?>

              </td>
            </tr>
            <tr>
              <th scope="row clrT">Consistency Ratio</th>
              <?php ($CR = $CI / $RI); ?>
              <?php ($txtClass = 'text-danger fw-bold'); ?>
              <?php if($CR <= 0.1): ?>
                <?php ($txtClass = 'text-success clrT fw-bold'); ?>
              <?php endif; ?>
              <td class="<?php echo e($txtClass); ?>">
                <?php echo e($CR); ?>

              </td>
            </tr>
            <tr>
              <?php if($CR > 0.1): ?>
                <td class="text-center  text-danger" colspan="2">
                  The value of Consistency Ratio exceeds <b>0.1</b> <br>
                  Please input the criteria comparison values again
                  <a href="/dashboard/criteria-comparisons/<?php echo e($criteria_analysis->id); ?>" class="btn btn-danger mt-2">Reinput Comparison Values</a>
                </td>
              <?php elseif(!$isAbleToRank): ?>
              <td class="text-center text-danger" colspan="2">
                The admin has not yet to input any alternative yet <br>
                Please wait for admin to input the alternatives before viewing the rank
              </td>
              <?php else: ?>
                <th scope="row">Action</th>
                <td>
                  <a href="/dashboard/final-ranking/<?php echo e($criteria_analysis->id); ?>" class="btn btn-success">
                    See Aktifitas Ranking
                  </a>
                </td>
              <?php endif; ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\pages\dashboard\criteria-comparison\result.blade.php ENDPATH**/ ?>