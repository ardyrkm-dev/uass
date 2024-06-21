

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="h-full w-full p-6">
    <!-- Header-->
    <div class="m-auto text-center">
        <h1 class="text-xl font-semibold txt-sekunder"><?php echo e($aktifitas->name); ?></h1>
        <div class="rounded-xl img-detail  overflow-hidden">
            <img src="<?php echo e(asset('fotoAktifitas/' .$aktifitas->gambar)); ?>" class="w-full h-full object-cover" alt="">
        </div>
    </div>

    <!--Deskripsi--> 
    <div class="m-auto flex items-center deskripsi">
        <div class="flex-1 mr-4">
            <div class="rounded-xl mr-4 img-des overflow-hidden">
                <img src="<?php echo e(asset('fotoAktifitas/' .$aktifitas->gambar)); ?>" class="w-full h-full object-cover" alt="">
            </div>
        </div>
        <div class="flex-1">
            <h1 class="text-xl font-semibold txt-sekunder">Deskripsi</h1>
            <div class="il-span"></div>
            <p class="text-l text-justify font-light ">
                <?php echo e($aktifitas->deskripsi); ?>

            </p>
        </div>
    </div>
</div>





<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
            const dropdownHeaders = document.querySelectorAll('.dropdown-header');
            dropdownHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    const content = header.nextElementSibling;
                    content.classList.toggle('hidden');
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Blender\Final\p\laravel\resources\views\pages\landing\Aktifitas\detailAktifitas.blade.php ENDPATH**/ ?>