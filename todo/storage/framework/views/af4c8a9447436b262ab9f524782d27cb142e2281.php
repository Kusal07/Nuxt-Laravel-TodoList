

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Home Page</h1>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>

<style>
    .page-title{
        padding-top: 15vh;
    font-size: 5rem;
    color: #1816bb;
    }
</style>
    
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todo\resources\views/pages/home/index.blade.php ENDPATH**/ ?>