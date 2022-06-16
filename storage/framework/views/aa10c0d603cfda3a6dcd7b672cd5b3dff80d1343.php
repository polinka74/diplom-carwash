


<?php $__env->startSection('title','Прайс'); ?>
<?php $__env->startSection('content'); ?>

<div class="fact6 bg-dark p-4">
    <div class="d-flex align-items-center justify-content-center text-center">
        <div class="mx-sm-5 px-5" style="max-width: 900px;">
            <h4 class="display-6 text-white text-uppercase slideInDown">Связь с нам </h4>
        </div>
    </div>

</div>

<div class="container">
    <div class="col-12 m-4">
        <div class="row gy-4">

            <div class="col-md-3 ">
                <div class="bg-secondary d-flex flex-column justify-content-center p-4 border text-light">
                    <h5 class="text-uppercase">Часы работы</h5>
                    <p class="m-0"><i class="fa-solid fa-clock text-primary me-2"></i>24/7</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-secondary d-flex flex-column justify-content-center p-4 border text-light">
                    <h5 class="text-uppercase"> Телефон </h5>
                    <p class="m-0"><i class="fa-solid fa-phone text-primary me-2"></i> +7 902 61 555 99</p>

                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-secondary d-flex flex-column justify-content-center p-4 border text-light">
                    <h5 class="text-uppercase">Адрес само-мойки</h5>
                    <p class="m-0"><i class="fa-solid fa-location-arrow text-primary me-2"></i></i>г.Челябинск,
                        Гагарина.7</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-secondary d-flex flex-column justify-content-center p-4 border text-light">
                    <h5 class="text-uppercase">Почта</h5>
                    <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>polina-polina-1991@list.ru</p>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="container p-4">
    <div class="col-12 m-4">
        <div class="row gy-4">
            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 single-gallery">
                <img class="img-fluid" src="<?php echo e($gallery->image_1); ?>" alt="">
                <img class="img-fluid" src="<?php echo e($gallery->image_2); ?>" alt="">
                <img class="img-fluid" src="<?php echo e($gallery->image_3); ?>" alt="">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<hr>
<div class="container mt-4">
    <h1 class="mb-5 text-center mt-4">Найдите нас на карте</h1>
    <div class="col-12 m-4">
        <div class="row gy-4">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2280.3074753395126!2d61.4426103160715!3d55.142897946331324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c5f2bacbb6e3f9%3A0x43914ae030932f97!2z0YPQuy4g0JPQsNCz0LDRgNC40L3QsCwgNywg0KfQtdC70Y_QsdC40L3RgdC6LCDQp9C10LvRj9Cx0LjQvdGB0LrQsNGPINC-0LHQuy4sIDQ1NDAxMA!5e0!3m2!1sru!2sru!4v1654106119517!5m2!1sru!2sru"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-md-6">
                <div class="wow fadeInUp p-4" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h4>Если у Вас возникли вопросы по поводу нашей мойки самообслуживания, задайте их нам</h4>
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
                    <form method="post" action="/contact/check" name="form">
                        <?php echo csrf_field(); ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя"
                                        required>
                                    <label for="exampleFormControlInput1" class="form-label">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Ваше имя</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Ваш адрес электронной почты" name="email" required>
                                    <label for="exampleFormControlInput1"> 
                                        <font style="vertical-align: inherit;">Ваш адрес электронной почты</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="quest" id="quest" placeholder="Вопрос"
                                        required>
                                    <label for="exampleFormControlInput1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Вопрос</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Оставьте сообщение здесь" name="message"
                                        id="message" style="height: 100px" required></textarea>
                                    <label for="exampleFormControlInput1">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Сообщение</font>
                                        </font>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Отправить сообщение</font>
                                    </font>
                                </button>
                            </div>
                        </div>
                    </form>
                    <?php if(session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> -->
                        <h4 class="text-center"><i class="icon fa fa-check"></i><?php echo e(session('success')); ?></h4>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\domains\carwash\resources\views/contact.blade.php ENDPATH**/ ?>