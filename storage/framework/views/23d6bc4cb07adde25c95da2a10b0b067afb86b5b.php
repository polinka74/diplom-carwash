


<?php $__env->startSection('title'); ?>
Как мыть?
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="fact3 bg-dark p-4">
    <div class="d-flex align-items-center justify-content-center text-center">
        <div class="mx-sm-5 px-5" style="max-width: 900px;">
            <h4 class="display-6 text-white text-uppercase slideInDown">Ознакомьтесь с программами
                мойки</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="text-uppercase p-4 text-dark text-center"></h3>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="intsruction">
                    <div class="step step-2">
                        <div class="row">

                            <?php $__currentLoopData = $stageDataAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="step__stage step__stage_1">

                                <div class="step__stage-head bg-secondary">
                                    <?php echo e($stage->stage); ?>

                                </div>

                                <div class="row step__stage-items">
                                    <?php $__currentLoopData = $washDataAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($wash->stage_id == $stage->id): ?>
                                    <div class="col-lg-6">
                                        <div class="step__stage-item stage-item">
                                            <div class="stage-item__icons ">
                                                <div class="stage-item__icons-item">
                                                    <img src="<?php echo e($wash->image); ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="stage-item__title "><?php echo e($wash->title); ?></div>
                                            <div class="stage-item__text"><?php echo e($wash->text); ?></div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>

                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class=" fact4 bg-dark p-4">
    <div class=" d-flex align-items-center justify-content-center text-center">
        <div class="mx-sm-5 px-5" style="max-width: 900px;">
            <h1 class="display-5 text-white text-uppercase mb-4  slideInDown">Сушите машину микрофиброй!</h1>
            <p class="text-white text-uppercase mb-4  slideInDown text-center">«Чтобы сохранить работоспособность
                микрофибры,
                необходимо стирать ее с жидким шампунем при температуре 30–40 градусов. Нельзя сушить ее на солнце или
                батарее.
                В таком случае микрофибра станет жесткой и будет хуже впитывать».</p>

        </div>
    </div>

</div>

<div class="container">
    <div class="row mb-4 mt-4 ">
        <h2 class="step__title text-center">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase p-4 text-dark text-center">Как помыть автомобиль на мойке-самообслуживания
                    </h3>

                </div>
                <iframe width="560" height="700" src="https://www.youtube.com/embed/nOi6B1mgpvo"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServer\domains\carwash\resources\views/wash.blade.php ENDPATH**/ ?>