


<?php $__env->startSection('title','Регистрация'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <h3 class="m-4">Вход</h3>
    <hr>
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
    <div class="col-md-10">
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>
            <div class="col-md-6">
                <input type="text" id="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                    autocomplete="email" title="Обязательно @">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
            <div class="col-md-6">
                <input type="password" id="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>"
                    autocomplete="current-password">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary " name="btnLogin">
                    Войти</button>
            </div>
        </div>
    </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/login.blade.php ENDPATH**/ ?>