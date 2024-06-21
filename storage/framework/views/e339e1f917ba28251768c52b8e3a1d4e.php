

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="h-auto w-auto container p-6 ">
    <div>
        <div class="aH">
            <h1>Aktifitas List</h1>
        </div>
        <div class="bagianH">
            <h1>Memberikan terbaik untuk<br> olahraga yang anda mau</h1>
        </div>
        <div class="bagianCard">
            <?php $__currentLoopData = $aktifitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cardA">
                
                <div class="imgC">
                    <img src="<?php echo e(asset('fotoAktifitas/' .$item->gambar)); ?>" alt="">
                    <a href="<?php echo e(route('detailAktifitas', $item->id)); ?>">
                    <div class="btnImg">
                       <h1>Lihat</h1>
                    </div></a>
                </div>
                <div class="textC">
                    <div class="flex justify-between">
                        <h1><?php echo e($item->name); ?></h1>
                        <div class="flex a">
                            <img style="width: 20px; height:20px; margin-right:4px;" src="<?php echo e(asset('assets/fire.png')); ?>" alt="">
                            <p><?php echo e($item->kalori); ?>Kalori</p>
                        </div>
                    </div>
                    <p class="m"><?php echo e($item->durasi); ?> Menit</p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\pages\landing\Aktifitas\aktifitas.blade.php ENDPATH**/ ?>