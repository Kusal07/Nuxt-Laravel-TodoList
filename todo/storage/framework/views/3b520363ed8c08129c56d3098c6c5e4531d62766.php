

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">My Todo List</h1>
        </div>

        <div class="col-lg-12 mt-5">
            <form action="<?php echo e(route('todo.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" name="title" type="text" placeholder="Enter Task" required>
                        </div>
                    </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 mt-5">
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title </th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$key); ?></th>
                            <td><?php echo e($task->title); ?></td>
                            <td>
                                <?php if($task->done == 0): ?>
                                    <span class="badge bg-warning">Not Completed</span>
                                    
                                <?php else: ?>
                                    <span class="badge bg-success">Completed</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('todo.delete', $task->id)); ?>" class="btn btn-danger">Delete</a>
                                <a href="<?php echo e(route('todo.done', $task->id)); ?>" class="btn btn-success">Complete</a>
                                <a href="<?php echo e(route('todo.undone', $task->id)); ?>" class="btn btn-warning">Not Complete</a>
                                <a href="<?php echo e(route('todo.edit' )); ?>" class="btn btn-info">Edit</a>
                                
                            </td>
                          </tr> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>

<style>
    .page-title{
        padding-top: 5vh;
        font-size: 5rem;
        color: #037c44;
    }
</style>
    
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todo\resources\views/pages/todo/index.blade.php ENDPATH**/ ?>