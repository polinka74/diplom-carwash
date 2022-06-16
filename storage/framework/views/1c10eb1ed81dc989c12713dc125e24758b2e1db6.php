


<?php $__env->startSection('title','Регистрация'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Регистрация</h1>
    <hr>

    <div class="row justify-content-center">
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
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>

                
                <!-- Имя -->
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">Имя</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus pattern="^[А-Яа-яЁё\s\-]+$" title="Разрешенные символы: кириллица, пробел и тире">
                    </div>
                </div>
                
                <!-- Логин -->
               <!--  <div class="row mb-3">
                   <label for="login" class="col-md-4 col-form-label text-md-end">Логин</label>
                   <div class="col-md-6">
                       <input id="login" type="text" class="form-control" name="login" value="<?php echo e(old('login')); ?>" required autocomplete="login" autofocus pattern="^[A-Za-z0-9\-]+" title="Разрешенные символы: латиница и тире">
                   </div>
               </div> -->
                <!-- Почта -->
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">Почта</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                    </div>
                </div>
                <!-- Пароль -->
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" minlength="6" required autocomplete="new-password">
                    </div>
                </div>

                <!-- Повтор пароля -->
                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Повторите пароль</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password-confirm" required autocomplete="new-password">
                    </div>
                </div>

                <!-- Согласие -->
                <div class="row mb-3">
                    <label for="rules" class="col-md-4 col-form-label text-md-end">Я согласен с правилами регистрации</label>
                    <div class="col-md-6">
                        <input id="rules" type="checkbox" name="rules"  autocomplete="rules">
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <b>Зарегистрироваться</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/p/polinawz/polinawz.beget.tech/public_html/resources/views/register.blade.php ENDPATH**/ ?>