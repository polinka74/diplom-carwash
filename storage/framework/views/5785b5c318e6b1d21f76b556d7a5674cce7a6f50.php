


<?php $__env->startSection('title','Отзывы'); ?>
<?php $__env->startSection('content'); ?>
<div class="container p-4 p-md-5 mb-4">
    <h3 class="moikam-4" >Отзывы</h3>
<hr>
    <div class="row justify-content-center align-items-center">
    <?php if($errors->any()): ?>
    <div class="row justify-content-center">
        <div class="col-md-8 alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
        <form method="POST" action="/reviews" class="form">
            <?php echo csrf_field(); ?>
            <div class="form-group row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Введите имя</label>
                <div class="col-md-6">
                    <input type="text" name="name" placeholder="Введите Ваше имя" id="name" class="form-control">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="message" class="col-md-4 col-form-label text-md-end">Введите сообщение</label>
                <div class="col-md-6">
                <input type="text" name="message" placeholder="Введите Ваше сообщение" id="message"
                    class="form-control form2">
                    </div>
            </div>
            <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
            

        </form>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\domains\carwash\resources\views/reviews.blade.php ENDPATH**/ ?>